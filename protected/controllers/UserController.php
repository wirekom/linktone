<?php

class UserController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';
    public $defaultAction = 'profile';
    public $loginUrl = 'user/login';
    public $logoutUrl = 'user/logout';
    private $_model;

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'WAuth - login, logout, captcha, registration, activation, recovery',
        );
    }

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
// captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionProfile() {
        $this->render('profile', array(
            'model' => $this->loadUser(),
        ));
    }
    
    public function actionTestemail() {
        if(User::sendMail("indra@wirekom.co.id", "You registered from " . Yii::app()->name, "Please activate you account go to bla bla bla" ))
        echo "sukses";
        else var_dump(User::sendMail("indra@wirekom.co.id", "You registered from " . Yii::app()->name, "Please activate you account go to bla bla bla" ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionRegistration() {
        if (Yii::app()->user->id)
            $this->redirect(array('/user/profile'));

        $model = new UserRegistrationForm;
        if (isset($_POST['UserRegistrationForm'])) {
            $model->attributes = $_POST['UserRegistrationForm'];
            $model->activkey = sha1(microtime() . $model->password);
            $model->role_id = Yii::app()->params['general-user-role'];
            if ($model->save()) {
                $activation_url = $this->createAbsoluteUrl('/user/activation', array("activkey" => $model->activkey, "email" => $model->email));
                User::sendMail($model->email, "You registered from " . Yii::app()->name, "Please activate you account go to " . $activation_url);
                Yii::app()->user->setFlash('registration', "Thank you for your registration. Please check your email.");
                $this->refresh();
            }
        }

        $this->render('registration', array(
            'model' => $model,
        ));
    }

    public function actionActivation($activkey, $email) {
        if (Yii::app()->user->id)
            $this->redirect(array('/user/profile'));

        if ($email && $activkey) {
            $find = User::model()->findByAttributes(array('email' => $email));
            if (isset($find) && $find->status == User::STATUS_ACTIVE) {
                $this->render('/user/activation', array('content' => "You account is active."));
            } elseif (isset($find->activkey) && ($find->activkey == $activkey)) {
                $find->activkey = sha1(microtime());
                $find->status = User::STATUS_ACTIVE;
                $find->save(FALSE);
                $this->render('/user/activation', array('content' => "You account is activated."));
            } else {
                $this->render('/user/activation', array('content' => "Incorrect activation URL."));
            }
        } else {
            $this->render('/user/activation', array('content' => "Incorrect activation URL."));
        }
    }

    public function actionEdit() {
        if (!Yii::app()->user->id)
            $this->redirect(array($this->loginUrl));

        $model = UserProfileForm::model()->findByPk(Yii::app()->user->id);
        if (isset($_POST['User'])) {
            $model->attributes = $_POST['User'];
            if ($model->save()) {
                Yii::app()->user->setFlash('profileMessage', "Changes is saved.");
                $this->redirect(array('/user/profile'));
            }
        }

        $this->render('edit', array(
            'model' => $model,
        ));
    }

    /**
     * Change password
     */
    public function actionChangePassword() {
        if (Yii::app()->user->id) {
            $model = new UserChangePassword('changepassword');
            if (isset($_POST['UserChangePassword'])) {
                $model->attributes = $_POST['UserChangePassword'];
                if ($model->validate()) {
                    $new_password = User::model()->findbyPk(Yii::app()->user->id);
                    $new_password->password = $model->password;
                    $new_password->save(FALSE);
                    Yii::app()->user->setFlash('profileMessage', "New password is saved.");
                    $this->redirect(array("profile"));
                }
            }
            $this->render('changepassword', array('model' => $model));
        } else
            $this->redirect(Yii::app()->createUrl($this->loginUrl));
    }

    public function actionRecovery($activkey = NULL, $email = NULL) {
        if (Yii::app()->user->id)
            $this->redirect(array('/user/profile'));

        if ($activkey !== NULL && $email !== NULL) {
            $form2 = new UserChangePassword;
            $find = User::model()->findByAttributes(array('email' => $email));
            if (isset($find) && $find->activkey == $activkey) {
                if (isset($_POST['UserChangePassword'])) {
                    $form2->attributes = $_POST['UserChangePassword'];
                    if ($form2->validate()) {
                        $find->password = $form2->password;
                        $find->activkey = sha1(microtime() . $form2->password);
                        if ($find->status == User::STATUS_NOACTIVE) {
                            $find->status = User::STATUS_ACTIVE;
                        }
                        $find->save(FALSE);
                        Yii::app()->user->setFlash('recoveryMessage', "New password is saved.");
                        $this->redirect(array('/user/recovery'));
                    }
                }
                $this->render('changepasswordrecovery', array('model' => $form2));
            } else {
                Yii::app()->user->setFlash('recoveryMessage', "Incorrect recovery link.");
                $this->redirect(array('/user/recovery'));
            }
        } else {
            $form = new UserRecoveryForm;
            if (isset($_POST['UserRecoveryForm'])) {
                $form->attributes = $_POST['UserRecoveryForm'];
                if ($form->validate()) {
                    $user = User::model()->findbyPk($form->user_id);
                    $activation_url = $this->createAbsoluteUrl('/user/recovery', array("activkey" => $user->activkey, "email" => $user->email));

                    $subject = "You have requested the password recovery site " . Yii::app()->name;
                    $message = "You have requested the password recovery site " . Yii::app()->name . ". To receive a new password, go to ." . $activation_url;

                    User::sendMail($user->email, $subject, $message);

                    Yii::app()->user->setFlash('recoveryMessage', "Please check your email. An instructions was sent to your email address.");
                    $this->refresh();
                }
            }
            $this->render('recovery', array('form' => $form));
        }
    }

    /**
     * Performs the AJAX validation.
     * @param User $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'user-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $this->layout = '//layouts/singleform';

        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the primary key value. Defaults to null, meaning using the 'id' GET variable
     */
    public function loadUser() {
        if ($this->_model === null) {
            if (Yii::app()->user->id)
                $this->_model = User::model()->findByPk(Yii::app()->user->id);
            if ($this->_model === null)
                $this->redirect(Yii::app()->createUrl($this->loginUrl));
        }
        return $this->_model;
    }

}

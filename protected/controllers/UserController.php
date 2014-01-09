<?php

class UserController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';
    private $_model;

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'WAuth',
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

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionRegistration() {
        if (Yii::app()->user->id)
            $this->redirect(array('/user/profile'));

        $model = new RegistrationForm;
        if (isset($_POST['UserRegistrationForm'])) {
            $model->attributes = $_POST['UserRegistrationForm'];
            $model->activkey = sha1(microtime() . $model->password);
            $model->role_id = NULL;
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
//        if (!Yii::app()->user->id)
//            $this->redirect(array('/site/login'));

        $model = UserProfileForm::model()->findByPk(Yii::app()->user->id);
        if (isset($_POST['UserProfileForm'])) {
            $model->attributes = $_POST['UserProfileForm'];
            
//            print_r($model->attributes);
            if ($model->validate()) {
                $model->save();
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
            $this->redirect(Yii::app()->createUrl('site/login'));
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
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        if (Yii::app()->request->isPostRequest) {
            // we only allow deletion via POST request
            $this->loadModel($id)->delete();

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax'])) {
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
            }
        } else {
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
        }
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('User');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new User('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['User'])) {
            $model->attributes = $_GET['User'];
        }

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return User the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = User::model()->findByPk($id);
        if ($model === null) {
            throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $model;
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
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the primary key value. Defaults to null, meaning using the 'id' GET variable
     */
    public function loadUser() {
        if ($this->_model === null) {
            if (Yii::app()->user->id)
                $this->_model = User::model()->findByPk(Yii::app()->user->id);
            if ($this->_model === null)
                $this->redirect(Yii::app()->createUrl('site/login'));
        }
        return $this->_model;
    }

}

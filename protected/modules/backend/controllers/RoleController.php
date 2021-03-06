<?php

class RoleController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '/layouts/column2';
    public $defaultAction = 'admin';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'WAuth',
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Role;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Role'])) {
            $model->attributes = $_POST['Role'];
            $model->operations = $_POST['Role']['operations'];
            if ($model->save()) {
                $valid = TRUE;
                if (is_array($model->operations)) {
                    foreach ($model->operations as $val) {
                        $roleAccess = new RoleAccess;
                        $roleAccess->role_id = $model->id;
                        $roleAccess->operation_id = $val;
                        $valid = $roleAccess->save() && $valid;
                    }
                }   
                if ($valid)
                    $this->redirect(array('view', 'id' => $model->id));
            }
        }


        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);
        $model->operations = $model->operationsValue;
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Role'])) {
            $model->attributes = $_POST['Role'];
            $model->operations = $_POST['Role']['operations'];
            if ($model->save()) {
                RoleAccess::model()->deleteAll(array(
                    'condition' => 'role_id=:role_id',
                    'params' => array(':role_id' => $model->id),
                ));

                $valid = TRUE;
                if (is_array($model->operations)) {
                    foreach ($model->operations as $val) {
                        $roleAccess = new RoleAccess;
                        $roleAccess->role_id = $model->id;
                        $roleAccess->operation_id = $val;
                        $valid = $roleAccess->save() && $valid;
                    }
                }
                if ($valid)
                    $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
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

    public function actionAjaxRevoke($id) {
        if (Yii::app()->request->isPostRequest) {
            // we only allow deletion via POST request
            $user = User::model()->findByPk($id);
            if ($user === null)
                throw new CHttpException(404, 'The requested page does not exist.');
            $role_id = $user->role_id;
            $user->role_id = NULL;
            $user->save(FALSE);
            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax'])) {
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('view', 'id' => $role_id));
            }
        } else {
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
        }
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Role');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Role('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Role'])) {
            $model->attributes = $_GET['Role'];
        }

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Role the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Role::model()->findByPk($id);
        if ($model === null) {
            throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Role $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'role-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionAssign($id) {
        $model = $this->loadModel($id);
        $dataProvider = new CActiveDataProvider('User', array(
            'criteria' => array(
                'condition' => 'role_id IS NULL',
        )));

        $this->render('assign', array(
            'dataProvider' => $dataProvider,
            'model' => $model,
        ));
    }

    public function actionAjaxAssign($role_id, $user_id) {
        if (Yii::app()->request->isPostRequest) {
            // we only allow deletion via POST request
            $user = User::model()->findByPk($user_id);
            if ($user === null)
                throw new CHttpException(404, 'The requested page does not exist.');
            $user->role_id = $role_id;
            $user->save(FALSE);
            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax'])) {
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('view', 'id' => $role_id));
            }
        } else {
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
        }
//        echo $role_id . ' ' . $user_id;
    }

}

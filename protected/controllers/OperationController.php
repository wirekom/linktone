<?php

class OperationController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';
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
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Operation;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Operation'])) {
            $model->attributes = $_POST['Operation'];
            if ($model->save()) {
                $this->redirect(array('admin'));
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

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Operation'])) {
            $model->attributes = $_POST['Operation'];
            if ($model->save()) {
                $this->redirect(array('admin'));
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

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Operation('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Operation'])) {
            $model->attributes = $_GET['Operation'];
        }

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Operation the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Operation::model()->findByPk($id);
        if ($model === null) {
            throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Operation $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'operation-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionGenerate() {
        $data = Yii::app()->metadata->getAll();
        echo '<pre>';
        foreach ($data['controllers'] as $controller)
            foreach ($controller['actions'] as $action) {
                $operation = new Operation;
                $operation->name = $controller['name'] . '.' . $action;
                $status = FALSE;
                if (!Operation::model()->exists('name = :name', array(":name" => $operation->name)))
                    $status = $operation->save(FALSE);
                echo 'Generated ' . $controller['name'] . '.' . $action . ($status ? ' Success' : ' Failed') . PHP_EOL;
            }


        echo '==========' . PHP_EOL;
        foreach ($data['modules'] as $modul)
            foreach ($modul['controllers'] as $controller)
                foreach ($controller['actions'] as $action) {
                    $operation = new Operation;
                    $operation->name = $controller['name'] . '.' . $action;
                    $status = FALSE;
                    if (!Operation::model()->exists('name = :name', array(":name" => $operation->name)))
                        $status = $operation->save(FALSE);
                    echo 'Generated ' . $modul['name'] . '.' . $controller['name'] . '.' . $action . ($status ? ' Success' : ' Failed') . PHP_EOL;
                }

        echo '</pre>';
    }

}

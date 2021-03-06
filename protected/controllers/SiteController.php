<?php

class SiteController extends Controller {

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
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }
    
 	public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'error', 'login', 'logout'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('home', 'product', 'detail'),
                'users' => array('@'),
            ), 
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }
    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
       if(Yii::app()->user->isGuest){
			$this->layout = '//layouts/home';
       		$this->render('watch');
       }else{
       		$this->redirect(array('home'));
       }
        

    }

	public function actionHome() {
         $products = Products::model()->findAllByAttributes(array('parent_id' => NULL));

        $this->render('index', array(
            'products' => $products
        ));
    }

    public function actionProduct($id) {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        
    	$products = Products::model()->findByPk($id);
    	$allItems = Products::model()->findAllByAttributes(array('parent_id'=>$id),array(
    		'order' => 'id DESC'
    	));
        $this->render('products',array(
        	'products'=>$products,
        	'items'=>$allItems
        ));
    }
	
    public function actionDetail($id = 0) {

        // renders the view file 'protected/views/site/detail.php'
        // using the default layout 'protected/views/layouts/main.php'
        
    	if ($id != 0){
    		$products = Products::model()->findByPk($id);
    	}else{
    		$products= NULL;
    	}
        $this->render('detail',array(
        	'products'=>$products,
        ));
    }
	

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
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
         $this->layout = '//layouts/singleform';
        $this->render('login', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

}

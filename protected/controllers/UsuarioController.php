<?php

class UsuarioController extends Controller
{
	/**
	* @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	* using two-column layout. See 'protected/views/layouts/column2.php'.
	*/
	public $layout='//layouts/column2';
	public $defaultAction='index';
	/**
	* @return array action filters
	*/
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	* Specifies the access control rules.
	* This method is used by the 'accessControl' filter.
	* @return array access control rules
	*/
	public function accessRules()
	{
		return array(
			array('allow',
				'actions'=>array('login'),
				'users'=>array('*')
			),
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','error'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('logout','changePassword'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','deleted','crear','create','update'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else{
				$this->layout='column1';
				$this->render('error', $error);
			}
		}
	}

	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->layout="loginLayout";
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	/**
	* Displays a particular model.
	* @param integer $id the ID of the model to be displayed
	*/
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	* Creates a new model.
	* If creation is successful, the browser will be redirected to the 'view' page.
	*/
	public function actionCreate()
	{
		$model=new Usuario('Create');
		$per=Persona::model()->findAll("NOT EXISTS(SELECT * FROM USUARIO WHERE t.PER_CORREL=USUARIO.PER_CORREL)");
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(isset($_POST['Usuario']))
		{
			$model->attributes=$_POST['Usuario'];
			$model->USU_PASSWORD=md5($model->USU_PASSWORD);
			$model->password=md5($model->password);
			if($model->save())
				$this->redirect(array('view','id'=>$model->PER_CORREL));
		}
		$model->USU_PASSWORD='';
		$model->password='';
		$this->render('create',array(
		'model'=>$model,
		'per'=>$per
		));
	}

	public function actionCrear($id)
	{
		$model=new Usuario('Create');
		$model->PER_CORREL=$id;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(isset($_POST['Usuario']))
		{
			$model->attributes=$_POST['Usuario'];
			$model->USU_PASSWORD=md5($model->USU_PASSWORD);
			$model->password=md5($model->password);
			if($model->save())
				$this->redirect(array('/persona/admin'));
		}
		$model->USU_PASSWORD='';
		$model->password='';
		$this->render('crear',array(
		'model'=>$model,
		));
	}
	/**
	* Updates a particular model.
	* If update is successful, the browser will be redirected to the 'view' page.
	* @param integer $id the ID of the model to be updated
	*/
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$model->scenario="update";
		$per=Persona::model()->findByPk($id);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Usuario']))
		{
			$model->attributes=$_POST['Usuario'];
			if($model->USU_PASSWORD==""){
				$model->USU_PASSWORD=$this->loadModel($id)->USU_PASSWORD;
				$model->password=" ";
			}
			else{
				$model->USU_PASSWORD=md5($model->USU_PASSWORD);
			}
			if($model->save())
				$this->redirect(array('view','id'=>$model->PER_CORREL));
		}
		$model->USU_PASSWORD="";
		$this->render('update',array(
			'model'=>$model,
			'per'=>$per
		));
	}

	public function actionChangepassword()
	{
		$model=Usuario::model()->findByPk(Yii::app()->user->correl);
		$model->scenario='Create';
		if(isset($_POST['Usuario']))
		{
			$model->attributes=$_POST['Usuario'];
			if($model->USU_PASSWORD==""){
				$model->USU_PASSWORD=$this->loadModel(Yii::app()->user->correl)->USU_PASSWORD;
			}
			else{
				$model->USU_PASSWORD=md5($model->USU_PASSWORD);
				$model->password=md5($model->password);
			}
			if($model->save())
				$this->redirect(array("/"));
		}
		$model->USU_PASSWORD="";
		$model->password="";
		$this->render('changePassword',array(
			'model'=>$model,
		));

	}
	public function actionDeleted($id)
	{
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('/persona/admin/'));
	}

	/**
	* Lists all models.
	*/
	public function actionIndex()
	{
		$this->redirect(array('/persona/admin/'));
	}

	/**
	* Manages all models.
	*/
	public function actionAdmin()
	{
		$model=Usuario::model()->findAll();
		if(isset($_GET['Usuario']))
			$model->attributes=$_GET['Usuario'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	* Returns the data model based on the primary key given in the GET variable.
	* If the data model is not found, an HTTP exception will be raised.
	* @param integer $id the ID of the model to be loaded
	* @return Usuario the loaded model
	* @throws CHttpException
	*/
	public function loadModel($id)
	{
		$model=Usuario::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	* Performs the AJAX validation.
	* @param Usuario $model the model to be validated
	*/
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='usuario-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
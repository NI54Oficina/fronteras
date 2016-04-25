<?php

class UserController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/admin';

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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin','delete'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
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
		if(!Yii::app()->user->checkAccess('createUser')){
			$this->layout="admin";
			$this->render("//site/error",array('error'=>"No tiene permisos para acceder a la siguiente sección.","code"=>"","message"=>"No tiene permisos para acceder a la siguiente sección.",));
			exit();
		}
		$model=new User;
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$auth=Yii::app()->authManager;
			$model->attributes=$_POST['User'];
			$model->password= CPasswordHelper::hashPassword($model->password);
			if($model->save()){
				if(isset($_POST["roles"])){
					$operations= explode(";;;",$_POST["roles"]);
					foreach($operations as $op){
						$auth->assign($op, $model->id);
					}
				}
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('create',array(
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
		if(!Yii::app()->user->checkAccess('updateUser')){
			$this->layout="admin";
			$this->render("//site/error",array('error'=>"No tiene permisos para acceder a la siguiente sección.","code"=>"","message"=>"No tiene permisos para acceder a la siguiente sección.",));
			exit();
		}
		$model=$this->loadModel($id);
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$auth=Yii::app()->authManager;
			$oldModel=$this->loadModel($id);
			$model->attributes=$_POST['User'];
			if($model->password=""){
				$model->password=$oldModel->password;
			}else{
				$model->password= CPasswordHelper::hashPassword($model->password);
			}
			if($model->save()){
				if(isset($_POST["roles"])){
					$operations= explode(";;;",$_POST["roles"]);
					foreach($operations as $op){
						$auth->assign($op, $model->id);
					}
				}
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		if(!Yii::app()->user->checkAccess('createUser')){
			$this->layout="admin";
			$this->render("//site/error",array('error'=>"No tiene permisos para acceder a la siguiente sección.","code"=>"","message"=>"No tiene permisos para acceder a la siguiente sección.",));
			exit();
		}
		$dataProvider=new CActiveDataProvider('User');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		if(!Yii::app()->user->checkAccess('createUser')){
			$this->layout="admin";
			$this->render("//site/error",array('error'=>"No tiene permisos para acceder a la siguiente sección.","code"=>"","message"=>"No tiene permisos para acceder a la siguiente sección.",));
			exit();
		}
		$model=new User('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['User']))
			$model->attributes=$_GET['User'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return User the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=User::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param User $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
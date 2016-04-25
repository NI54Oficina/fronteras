<?php

class PaisController extends Controller
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
				'actions'=>array('index','view',"traduccion"),
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
	public function actionView()
	{
		
		if(isset($_GET["pais"])){
			$id= Pais::model()->find('url="'.$_GET['pais'].'"')->id;
			
		}else{
			$id=$_GET['id'];
		}
		
		
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
		if(!Yii::app()->user->checkAccess('adminAccess')){
			$this->layout="admin";
			$this->render("//site/error",array('error'=>"No tiene permisos para acceder a la siguiente sección.","code"=>"","message"=>"No tiene permisos para acceder a la siguiente sección.",));
			exit();
		}
		$model=new Pais;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pais']))
		{
			$model->attributes=$_POST['Pais'];
			$auxLink=$model->nombre;
			$auxLink = str_replace(' ', '-', $auxLink); // Replaces all spaces with hyphens.
			$auxLink = preg_replace('/[^A-Za-z0-9\-]/', '', $auxLink); // Removes special chars.
			$auxLink = preg_replace('/-+/', '-', $auxLink);
			$model->url= $auxLink;
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
		if(!Yii::app()->user->checkAccess('adminAccess')){
			$this->layout="admin";
			$this->render("//site/error",array('error'=>"No tiene permisos para acceder a la siguiente sección.","code"=>"","message"=>"No tiene permisos para acceder a la siguiente sección.",));
			exit();
		}
		$model=$this->loadModel($id);
		$auxImagen= $model->icon;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pais']))
		{
			$model->attributes=$_POST['Pais'];
			$auxLink=$model->nombre;
			$auxLink = str_replace(' ', '-', $auxLink); // Replaces all spaces with hyphens.
			$auxLink = preg_replace('/[^A-Za-z0-9\-]/', '', $auxLink); // Removes special chars.
			$auxLink = preg_replace('/-+/', '-', $auxLink);
			$model->url= $auxLink;
			$icono= $model->icon;
			if(!$icono||$icono==null||$icon<=0){
				$model->icon= $auxImagen;
			}
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
		if(!Yii::app()->user->checkAccess('adminAccess')){
			$this->layout="admin";
			$this->render("//site/error",array('error'=>"No tiene permisos para acceder a la siguiente sección.","code"=>"","message"=>"No tiene permisos para acceder a la siguiente sección.",));
			exit();
		}
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
		if(!Yii::app()->user->checkAccess('adminAccess')){
			$this->layout="admin";
			$this->render("//site/error",array('error'=>"No tiene permisos para acceder a la siguiente sección.","code"=>"","message"=>"No tiene permisos para acceder a la siguiente sección.",));
			exit();
		}
		$dataProvider=new CActiveDataProvider('Pais');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	public function actionTraduccion($id,$lng){
		
		
		//echo Pais::model()->findByPk($id)->nombre;;
		//echo "<br>";
		//echo $lang[$lng];
		Yii::app()->session['lng'] = $lng;
		Yii::app()->session['pais'] = $id;
		Yii::app()->session['short'] = Pais::model()->findByPk($id)->short;
		
		if(isset($_SESSION["redirectURL"])){
			header("Location: http://".$_SERVER['SERVER_NAME']."/".$_SESSION["webRoot"].$_SESSION["redirectURL"]);
			$_SESSION["redirectURL"]=null;
			exit();
		}else{
			if (strpos($_SERVER['HTTP_REFERER'], '/paises') !== false) {
				header("Location: http://".$_SERVER['SERVER_NAME']."/".$_SESSION["webRoot"]);
			}else{
				$urlToGo="Location: ".$_SERVER['HTTP_REFERER'];
				$paises=Pais::model()->findAll();
				foreach($paises as $pais){
					$urlToGo= str_replace("/".$pais->short."/","/lng/",$urlToGo);
				}
				$urlToGo= str_replace("/lng/","/".Yii::app()->session['short']."/",$urlToGo);
				//echo $urlToGo;
				header($urlToGo);
			}
			die();
		}
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		if(!Yii::app()->user->checkAccess('adminAccess')){
			$this->layout="admin";
			$this->render("//site/error",array('error'=>"No tiene permisos para acceder a la siguiente sección.","code"=>"","message"=>"No tiene permisos para acceder a la siguiente sección.",));
			exit();
		}
		$model = Pais::model()->findAll();
		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Pais the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Pais::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Pais $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pais-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

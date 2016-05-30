<?php

class UserRoleController extends Controller
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
			'postOnly + deleteOperations', // we only allow deletion via POST request
			'postOnly + deletePermission', // we only allow deletion via POST request
			
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
				'actions'=>array('create','update',"operations","admin","delete","adminOperations","adminPermission","permission","deleteOperations","deletePermission"),
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
	
	public function actionOperations(){
		
			$auth=Yii::app()->authManager;
			if(isset($_POST["Operation"])){
				if(!$auth->getAuthItem($_POST["Operation"]['name'])){
					$auth->createOperation($_POST["Operation"]['name'],"desc");
				}
			}
			
			$model=$auth->operations;
			
			$this->render('operations',array(
				'model'=>$model,
			));
	}
	
	public function actionPermission(){
		
			$auth=Yii::app()->authManager;
			if(isset($_POST["Permission"])){
				$permission= new Permission();
				$permission->operation= $_POST["Permission"]["operation"];
				$permission->url= $_POST["Permission"]["url"];
				$permission->save();
			}
			
			$model=$auth->operations;
			
			$this->render('permission',array(
				'model'=>$model,
			));
	}
	
	public function actionAdminPermission(){
		
		$this->layout="admin";
		$posts = Permission::model()->findAll();
		$this->render('adminPermission',array(
			'model'=>$posts,
		));
	}
	
	public function actionAdminOperations(){
		
		$this->layout="admin";
		$posts = UserRole::model()->findAll();
		$this->render('adminOperations',array(
			'model'=>$posts,
		));
	}

	public function actionDeleteOperations($name){
		
		Yii::app()->authManager->removeAuthItem($name);
		
		
		
	}
	
	public function actionDeletePermission($id){
		
		Permission::model()->findByPk($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		
		
	}

	
	public function actionCreate()
	{
		
		//if(Yii::app()->user->checkAccess('createUser')){
			$model=new UserRole;
			$error="";
			// Uncomment the following line if AJAX validation is needed
			// $this->performAjaxValidation($model);	
			
			if(isset($_POST['UserRole']))
			{
				$auth=Yii::app()->authManager;
				$model->attributes=$_POST['UserRole'];
				if(!$auth->getAuthItem($model->nombre)){
					if($model->save()){
						
						$role=$auth->createRole($model->nombre);
						if(isset($_POST["operations"])){
							$operations= explode(";;;",$_POST["operations"]);
							foreach($operations as $op){
								$role->addChild($op);
							}
						}
						$this->redirect(array('view','id'=>$model->id));
					}
				
				}else{
					$error= "Ya existe un rol con ese nombre";
				}
				
			}

			$this->render('create',array(
				'model'=>$model,"error"=>$error,
			));
		//}
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		
		$model=$this->loadModel($id);
		$error="";
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);	
		
		if(isset($_POST['UserRole']))
		{
			$auth=Yii::app()->authManager;
			$model->attributes=$_POST['UserRole'];
			if(true){
				if($model->save()){
					
					$role=$auth->getAuthItem($model->nombre);
					//echo $auth->getItemChildren("poyoyo");
					foreach($auth->getItemChildren($role->name) as $child){
						
						$auth->removeItemChild($role->name,$child->name);
						
					}
					//$auth->clearAuthAssignments($role);
					if(isset($_POST["operations"])){
						$operations= explode(";;;",$_POST["operations"]);
						foreach($operations as $op){
							if($op!=""){
							$role->addChild($op);
							}
						}
					}
					$this->redirect(array('view','id'=>$model->id));
				}
			
			}else{
				$error= "Ya existe un rol con ese nombre";
			}
			
		}

		$this->render('create',array(
			'model'=>$model,"error"=>$error,
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
		
		$dataProvider=new CActiveDataProvider('UserRole');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$this->layout="admin";
		$posts = UserRole::model()->findAll();
		$this->render('admin',array(
			'model'=>$posts,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return UserRole the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=UserRole::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param UserRole $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-role-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	protected function beforeAction($event)
    {
        $conf = new PermissionChecker;
        $conf->PermissionCheck();
        return true;
    }
	
}

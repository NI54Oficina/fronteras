<?php

class ProductoController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
			'postOnly + upload', // we only allow deletion via POST request
			'postOnly + checkVersion', // we only allow deletion via POST request
			'postOnly + downloadProduct', // we only allow deletion via POST request
			'postOnly + downloadContent', // we only allow deletion via POST request
			'postOnly + getImage', // we only allow deletion via POST request
			'postOnly + sendProducto', // we only allow deletion via POST request
			'postOnly + getTraduction', // we only allow deletion via POST request
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
				'actions'=>array('index','view','upload',"checkVersion","downloadProduct","downloadContent","getImage","sendProducto","getTraduction","producto"),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update',"createCode","updateCode",'admin','delete',"adminPais","adminCode"),
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
		
		if(isset($_GET["producto"])){
			$id= Producto::model()->find('link="'.$_GET['producto'].'"')->id;
			
		}else{
			$id=$_GET['id'];
		}
		
	
		if(!Yii::app()->user->checkAccess('adminAccess')){
			
			$this->layout="producto";
			$this->render('ver',array(
				'model'=>$this->loadModel($id),
			));
		}else{
			$this->layout="adminProductos";
			$this->render('view',array(
				'model'=>$this->loadModel($id),
			));
		}
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		if(!Yii::app()->user->checkAccess('createProducto')){
			$this->layout="adminProductos";
			$this->render("//site/error",array('error'=>"No tiene permisos para acceder a la siguiente sección.","code"=>"","message"=>"No tiene permisos para acceder a la siguiente sección.",));
			exit();
		}
		$this->layout="create";
		$model=new Producto;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
	
		if(isset($_POST['Producto']))
		{
			$model->attributes=$_POST['Producto'];
			date_default_timezone_set("America/Argentina/Buenos_Aires");
			$d=strtotime("now");
			$model->fecha=date("Y-m-d H:i:sa", $d);
			if($model->save()){
				
				if($_POST['Producto']['imagen']&&$_POST['Producto']['imagen']!=-1&&$_POST['Producto']['imagen']!="-1"){
					$imagen= Imagen::model()->findByPk($_POST['Producto']['imagen']);
					$imagen->producto_id= $model->id;
					$imagen->save();
				}
				$partes= explode(";",$_POST['Producto']["partes"]);
				$partes_contenido= explode(";;;;",$_POST['Producto']["partes_contenido"]);
				for($i = 0; $i < count($partes); ++$i) {
					$contenido= new ProductoContenido;
					$contenido->producto_id= $model->id;
					$contenido->parte=$partes[$i];
					$contenido->text=$partes_contenido[$i];
					$contenido->save();
				}
				
				if(!$_POST["Producto"]["link"]){
					$auxLink=$model->nombre;
					$auxLink = str_replace(' ', '-', $auxLink); // Replaces all spaces with hyphens.
					$auxLink = preg_replace('/[^A-Za-z0-9\-]/', '', $auxLink); // Removes special chars.
					$auxLink = preg_replace('/-+/', '-', $auxLink);
					$model->link= $auxLink;
					$model->save();
				}
				
				$tags= $_POST['Producto']['tags'];
				$model->setTags($tags)->save();
				$model->addTags(Seccion::model()->findByPk($model->seccion)->nombre);
				$model->save();
				$paises= explode(",",$_POST['Producto']["pais"]);
				for($i = 0; $i < count($paises); ++$i) {
					$model->addTags(Pais::model()->findByPk($paises[$i])->nombre);
				}
				$model->save();
				$model->fullTags= implode(",", $model->getTags());
				$model->save();
				
				
				
				$idModel= $model->id;
				
				$contenidos= ProductoContenido::model()->findAll(array("condition"=>"producto_id = $idModel","order"=>"id"));

				foreach($contenidos as $contenido){
					$model->addTags(ProductoPartes::model()->findByPk($contenido->parte)->nombre);
					$model->save();
				}
				
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
	
	public function actionCreateCode()
	{
		if(!Yii::app()->user->checkAccess('adminAccess')){
			$this->layout="adminProductos";
			$this->render("//site/error",array('error'=>"No tiene permisos para acceder a la siguiente sección.","code"=>"","message"=>"No tiene permisos para acceder a la siguiente sección.",));
			exit();
		}
		$this->layout="create";
		$model=new Producto;
	
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
	
		if(isset($_POST['Producto']))
		{
			$model->attributes=$_POST['Producto'];
			date_default_timezone_set("America/Argentina/Buenos_Aires");
			$d=strtotime("now");
			$model->fecha=date("Y-m-d H:i:sa", $d);
			if($model->save()){
				
				if(isset($_POST['Producto']['imagen'])&&$_POST['Producto']['imagen']!="-1"){
				$imagen= Imagen::model()->findByPk($_POST['Producto']['imagen']);
				$imagen->producto_id= $model->id;
				$imagen->save();
				}
				$partes= explode(";",$_POST['Producto']["partes"]);
				$partes_contenido= explode(";;;;",$_POST['Producto']["partes_contenido"]);
				for($i = 0; $i < count($partes); ++$i) {
					$contenido= new ProductoContenido;
					$contenido->producto_id= $model->id;
					$contenido->parte=$partes[$i];
					$contenido->text=$partes_contenido[$i];
					$contenido->save();
				}
				
				if(isset($_POST['Producto']['tags'])){
					$tags= $_POST['Producto']['tags'];
					$model->setTags($tags)->save();
				}
				$model->codeContent=1;
				$model->addTags(Seccion::model()->findByPk($model->seccion)->nombre);
				$model->save();
				$model->fullTags= implode(",", $model->getTags());
				$model->save();
				
				$idModel= $model->id;
				
				$contenidos= ProductoContenido::model()->findAll(array("condition"=>"producto_id = $idModel","order"=>"id"));

				foreach($contenidos as $contenido){
					$model->addTags(ProductoPartes::model()->findByPk($contenido->parte)->nombre);
					$model->save();
				}
				
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('createCode',array(
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
		if(!Yii::app()->user->checkAccess('updateProducto')){
			$this->layout="adminProductos";
			$this->render("//site/error",array('error'=>"No tiene permisos para acceder a la siguiente sección.","code"=>"","message"=>"No tiene permisos para acceder a la siguiente sección.",));
			exit();
		}
		$this->layout="create";
		$model=$this->loadModel($id);
		/*$tags= $model->getTags();
		$auxTag="";
		foreach($tags as $tag){
			$auxTag.=$tag.',';
		}
		$model->tags= $auxTag;*/
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Producto']))
		{
			$model->attributes=$_POST['Producto'];
			date_default_timezone_set("America/Argentina/Buenos_Aires");
			$d=strtotime("now");
			$model->fecha=date("Y-m-d H:i:sa", $d);
			
			if($model->save()){
				
				/*$imagen= Imagen::model()->findByPk($_POST['Producto']['imagen']);
				$imagen->producto_id= $model->id;
				$imagen->save();*/
				
				$contenidos= ProductoContenido::model()->findAll(array("condition"=>"producto_id = $id","order"=>"id"));
				foreach($contenidos as $contenido){
					$contenido->delete();
				}
				
				$partes= explode(";",$_POST['Producto']["partes"]);
				$partes_contenido= explode(";;;;",$_POST['Producto']["partes_contenido"]);
				for($i = 0; $i < count($partes); ++$i) {
					$contenido= new ProductoContenido;
					$contenido->producto_id= $model->id;
					$contenido->parte=$partes[$i];
					$contenido->text=$partes_contenido[$i];
					$contenido->save();
				}
				
				$model->removeAllTags()->save();
				$tags= $_POST['Producto']['tags'];
				$model->setTags($tags)->save();
				$model->addTags(Seccion::model()->findByPk($model->seccion)->nombre);
				$model->save();
				$paises= explode(",",$_POST['Producto']["pais"]);
				for($i = 0; $i < count($paises); ++$i) {
					$model->addTags(Pais::model()->findByPk($paises[$i])->nombre);
				}
				$model->save();
				$model->fullTags= implode(",", $model->getTags());
				$model->save();
				
				$idModel= $model->id;
				
				$contenidos= ProductoContenido::model()->findAll(array("condition"=>"producto_id = $idModel","order"=>"id"));

				foreach($contenidos as $contenido){
					$model->addTags(ProductoPartes::model()->findByPk($contenido->parte)->nombre);
					$model->save();
				}
				
				$this->redirect(array('view','id'=>$model->id));
			}
		}
		$model->pais= explode(",",$model->pais);
		$this->render('update',array(
			'model'=>$model,
		));
	}
	
	public function actionUpdateCode($id)
	{
		if(!Yii::app()->user->checkAccess('adminAccess')){
			$this->layout="adminProductos";
			$this->render("//site/error",array('error'=>"No tiene permisos para acceder a la siguiente sección.","code"=>"","message"=>"No tiene permisos para acceder a la siguiente sección.",));
			exit();
		}
		$this->layout="create";
		$model=$this->loadModel($id);
		/*$tags= $model->getTags();
		$auxTag="";
		foreach($tags as $tag){
			$auxTag.=$tag.',';
		}
		$model->tags= $auxTag;*/
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		$this->layout="create";
		$model=$this->loadModel($id);
		/*$tags= $model->getTags();
		$auxTag="";
		foreach($tags as $tag){
			$auxTag.=$tag.',';
		}
		$model->tags= $auxTag;*/
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Producto']))
		{
			$model->attributes=$_POST['Producto'];
			date_default_timezone_set("America/Argentina/Buenos_Aires");
			$d=strtotime("now");
			$model->fecha=date("Y-m-d H:i:sa", $d);
			
			if($model->save()){
				
				if(isset($_POST['Producto']['imagen'])&&$_POST['Producto']['imagen']!="-1"){
					$imagen= Imagen::model()->findByPk($_POST['Producto']['imagen']);
					$imagen->producto_id= $model->id;
					$imagen->save();
				}
				$contenidos= ProductoContenido::model()->findAll(array("condition"=>"producto_id = $id","order"=>"id"));
				foreach($contenidos as $contenido){
					$contenido->delete();
				}
				
				$partes= explode(";",$_POST['Producto']["partes"]);
				$partes_contenido= explode(";;;;",$_POST['Producto']["partes_contenido"]);
				for($i = 0; $i < count($partes); ++$i) {
					$contenido= new ProductoContenido;
					$contenido->producto_id= $model->id;
					$contenido->parte=$partes[$i];
					$contenido->text=$partes_contenido[$i];
					$contenido->save();
				}
				
				$model->removeAllTags()->save();
				if(isset($_POST['Producto']['tags'])){
					$tags= $_POST['Producto']['tags'];
					$model->setTags($tags)->save();
				}
				$model->addTags(Seccion::model()->findByPk($model->seccion)->nombre);
				$model->save();
				$paises= explode(",",$_POST['Producto']["pais"]);
				for($i = 0; $i < count($paises); ++$i) {
					$model->addTags(Pais::model()->findByPk($paises[$i])->nombre);
				}
				$model->codeContent=1;
				$model->save();
				$model->fullTags= implode(",", $model->getTags());
				$model->save();
				
				$idModel= $model->id;
				
				$contenidos= ProductoContenido::model()->findAll(array("condition"=>"producto_id = $idModel","order"=>"id"));

				foreach($contenidos as $contenido){
					$model->addTags(ProductoPartes::model()->findByPk($contenido->parte)->nombre);
					$model->save();
				}
				
				$this->redirect(array('view','id'=>$model->id));
			}
		}
		$model->pais= explode(",",$model->pais);
		$this->render('updateCode',array(
			'model'=>$model,
		));
	}
	
	public function actionSendProducto(){
		header("Access-Control-Allow-Origin: *");
		$model=$this->loadModel($_POST["id"]);
		$id= $_POST["id"];
		$seccion=Seccion::model()->findByPk($model->seccion)->nombre;
		$imagenSeccion=strtolower($seccion);
		$imagenSeccion=str_replace('ó',"o",$imagenSeccion);
		$imagenSeccion=str_replace('é',"e",$imagenSeccion);
		$imagenSeccion=str_replace('á',"a",$imagenSeccion);
		$imagenSeccion=str_replace('í',"i",$imagenSeccion);
		$imagenSeccion=str_replace('ú',"u",$imagenSeccion);
		$seccionImage=  str_replace(' ',"-",$imagenSeccion).".png";
		$contenidos= ProductoContenido::model()->findAll(array("condition"=>"producto_id = $id","order"=>"id"));
		$id=$model->id;
		$to=$_POST["to"];
		$from=$_POST["from"];
		$imagen= Imagen::model()->find(array("condition"=>"producto_id = $id","order"=>"id DESC"));
		$message=file_get_contents(Yii::app()->getBaseUrl(true).'/templates/mailTemplate.html');
		$message= str_replace ('${image}',Yii::app()->getBaseUrl(true)."/index.php?r=imagen/view&id=".$imagen->id,$message);
		$message= str_replace ('${seccion}',$seccion,$message);
		$message= str_replace ('${seccionImage}',Yii::app()->getBaseUrl(true).'/images/'.$seccionImage,$message);
		$message= str_replace ('${nombre}',$model->nombre,$message);
		$contHtml="";
		
		foreach($contenidos as $contenido){
			
			$contHtml.='<tr><td>&nbsp;</td><td width=550><h3 style="font-family: Arial; font-weight:bold;font-size:15px; color:#404040;">'.ProductoPartes::model()->findByPk($contenido->parte)->nombre.'</h3></td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td width=550 style="font-family: Arial; font-weight:regular; font-size:15px; color:#646464;text-align:center-left;">'.$contenido->text.'<br></td><td>&nbsp;</td></tr>';
					
			
		}
		
		$target="";
		
		if($model->target[0]==1){
			$target.='<img src="http://ni54.com/bagomailing/caballo.png" style="float:left;width:19%;"/>';
		}else{
			//$target.='<img src="http://ni54.com/bagomailing/caballo-1.png" style="float:left;width:19%;opacity:0.1;"/>';
		}
		if($model->target[1]==1){
			$target.='<img src="http://ni54.com/bagomailing/cabra.png"   style="float:left;width:19%;"/>';
		}else{
			//$target.='<img src="http://ni54.com/bagomailing/cabra-1.png"   style="float:left;width:19%;opacity:0.1;"/>';
		}
		if($model->target[2]==1){
			$target.='<img src="http://ni54.com/bagomailing/chancho.png" style="float:left;width:19%;"/>';
		}else{
			//$target.='<img src="http://ni54.com/bagomailing/chancho-1.png" style="float:left;width:19%;opacity:0.1;"/>';
		}
		if($model->target[3]==1){
			$target.='<img src="http://ni54.com/bagomailing/conejo.png"  style="float:left;width:19%;"/>';
		}else{
			//$target.='<img src="http://ni54.com/bagomailing/conejo-1.png"  style="float:left;width:19%;opacity:0.1;"/>';
		}
		if($model->target[4]==1){
			$target.='<img src="http://ni54.com/bagomailing/gallina.png" style="float:left;width:19%;"/>';
		}else{
			//$target.='<img src="http://ni54.com/bagomailing/gallina-1.png" style="float:left;width:19%;opactiy:0.1;"/>';
		}
		if($model->target[5]==1){
			$target.='<img src="http://ni54.com/bagomailing/perro.png"style="float:left;width:19%;"/>';
		}else{
			//$target.='<img src="http://ni54.com/bagomailing/perro-1.png"style="float:left;width:19%;opacity:0.1;"/>';
		}
		if($model->target[6]==1){
			$target.='<img src="http://ni54.com/bagomailing/gato.png"    style="float:left;width:19%;"/>';
		}else{
			//$target.='<img src="http://ni54.com/bagomailing/gato-1.png"    style="float:left;width:19%;opacity:0.1;"/>';
		}
		if($model->target[7]==1){
			$target.='<img src="http://ni54.com/bagomailing/oveja.png"   style="float:left;width:19%;"/>';
		}else{
			//$target.='<img src="http://ni54.com/bagomailing/oveja-1.png"   style="float:left;width:19%;opacity:0.1;"/>';
		}
		if($model->target[8]==1){
			$target.='<img src="http://ni54.com/bagomailing/pez.png"     style="float:left;width:19%;"/>';
		}else{
			//$target.='<img src="http://ni54.com/bagomailing/pez-1.png"     style="float:left;width:19%;opacity:0.1;"/>';
		}
		if($model->target[9]==1){
			$target.='<img src="http://ni54.com/bagomailing/vaca.png"    style="float:left;width:19%;"/>';
		}else{
			//$target.='<img src="http://ni54.com/bagomailing/vaca-1.png"    style="float:left;width:19%;opacity:0.1;"/>';
		}
		
		$message= str_replace ('${target}',$target,$message);
		
		$message= str_replace ('${content}',$contHtml,$message);
		
		$message= "<p style='font-size:14px;'>Enviado por ".$from." a través del Vedemecum Virtual de Bagó</p><br>".$message;
		
		MailService::sendMail($to,"Bagó Vademecum Virtual - ". $model->nombre,$message,"info@ni54.com");
		echo "ok";
		
		/*$to = "fran@ni54.com";
		$subject = "HTML email";

		$message=file_get_contents('mailTemplate.html');;


		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		// More headers
		$headers .= 'From: <info@ni54.com>' . "\r\n";
		//$headers .= 'Cc: myboss@example.com' . "\r\n";

		mail($to,$subject,$message,$headers);*/
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(!Yii::app()->user->checkAccess('deleteProducto')){
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
		$this->layout="adminProductos";
		if(!Yii::app()->user->checkAccess('createProducto')){
			$this->layout="admin";
			$this->render("//site/error",array('error'=>"No tiene permisos para acceder a la siguiente sección.","code"=>"","message"=>"No tiene permisos para acceder a la siguiente sección.",));
			exit();
		}
			$dataProvider=new CActiveDataProvider('Producto');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
		
		
	}
	
	public function actionUpload(){
		$model= new Imagen;
		 if (isset($_FILES['file'])) {
			 $fileName = $_FILES['file']['name'];
			$tmpName  = $_FILES['file']['tmp_name'];
			$fileSize = $_FILES['file']['size'];
			$fileType = $_FILES['file']['type'];
			$fp      = fopen($tmpName, 'r');
			$content = fread($fp, filesize($tmpName));
			fclose($fp);
			$model->producto_id=0;
			$model->imagen=$content;
			if($model->save()){
				echo $model->id;
			}
		 }
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$this->layout="adminProductos";
		if(!Yii::app()->user->checkAccess('createProducto')){
			$this->layout="admin";
			$this->render("//site/error",array('error'=>"No tiene permisos para acceder a la siguiente sección.","code"=>"","message"=>"No tiene permisos para acceder a la siguiente sección.",));
			exit();
		}
		
		$model=new Producto('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Producto']))
			$model->attributes=$_GET['Producto'];

		$this->render('admin',array(
			'model'=>$model,
		));
		
	}
	
	public function actionAdminPais()
	{
		$this->layout="adminProductos";
		$posts = Producto::model()->findAll();
		/*if(isset($_GET['pais'])){
			$posts = Producto::model()->taggedWith($_GET['pais'])->findAll();
		}else{
			
		}*/
		$this->render('adminPais',array(
			'model'=>$posts,
		));
	}
	
	public function actionAdminCode()
	{
		if(isset($_GET['pais'])){
			$posts = Producto::model()->taggedWith($_GET['pais'])->findAll();
		}else{
			$posts = Producto::model()->findAll();
		}
		$this->render('adminCode',array(
			'model'=>$posts,
		));
	}
	
	public function actionCheckVersion(){
		header("Access-Control-Allow-Origin: *");
		$userVersion=$_POST["version"];
		$pais= Pais::model()->findByPk( $_POST["pais"])->nombre;
		$productos= Producto::model()->findAll(array("condition"=>"fecha > '$userVersion'","order"=>"fecha ASC"));
		$isFirst=true;
		foreach($productos as $producto){
			if($producto->hasTag($pais)){
				if($isFirst){
					$isFirst=false;				
				}else{
					echo "-";
				}
				echo $producto->id;
			}
		}
	}
	
	public function actionGetTraduction(){
		header("Access-Control-Allow-Origin: *");
		/*$paisId= $_POST["pais"];
		$pais= Pais::model()->findByPk( $_POST["pais"])->nombre;
		$secciones= SeccionRegionalizacion::model()->findAll(array("condition"=>"pais > '$paisId'","order"=>"idCategoria ASC"));
		$partes= PpartesRegionalizacion::model()->findAll(array("condition"=>"pais > '$paisId'","order"=>"idParte ASC"));
		$isFirst=true;
		foreach($secciones as $seccion){
			if($isFirst){
				$isFirst=false;				
			}else{
				echo ";;;;";
			}
			echo $seccion->id;
		}
		echo "?????";
		foreach($partes as $seccion){
			if($isFirst){
				$isFirst=false;				
			}else{
				echo ";;;;";	
			}
			echo $seccion->id;
		}*/
	}
	
	public function actionDownloadProduct(){
		header("Access-Control-Allow-Origin: *");
		$id= $_POST["id"];
		$model= Producto::model()->findByPk($id);
		$tags = $model->getTags();
		$echoingTags="";
		
		echo $model->id.";";
		echo $model->nombre.";";
		echo $model->seccion.";";
		echo $model->target.";";
		echo $model->fullTags.";";
		echo $model->link.";";
		echo $model->fecha.";";
		echo $model->codeContent.";";
		echo $model->descripcion;
	}
	
	public function actionDownloadContent(){
		header("Access-Control-Allow-Origin: *");
		$id= $_POST["id"];
		$contenidos= ProductoContenido::model()->findAll(array("condition"=>"producto_id = $id","order"=>"id"));
		$first=true;
		foreach($contenidos as $contenido){
			if($first){
				$first=false;
			}else{
				echo ";;;;;";
			}
			echo ProductoPartes::model()->findByPk($contenido->parte)->nombre;;
			echo ";;;;;";
			echo $contenido->text;
		}
	}
	
	public function actionGetImage(){
		header("Access-Control-Allow-Origin: *");
		$id= $_POST["id"];
		$imagen= Imagen::model()->find(array("condition"=>"producto_id = $id","order"=>"id DESC"));
		
		echo Yii::app()->getBaseUrl(true)."/index.php?r=imagen/view&id=".$imagen->id;
		
	}

	public function loadModel($id)
	{
		$model=Producto::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Producto $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='producto-form')
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

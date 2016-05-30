<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
                 'class'=>'CaptchaExtendedAction',
                // if needed, modify settings
                'mode'=>CaptchaExtendedAction::MODE_WORDS,
            ),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}
	
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}
	
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','error',"contact","login","logout","captcha","forbidden","chatprocess","chatInit","chatFinish","lastChat","chatData"),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('admin'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}
	
	public function actionAdmin()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->layout="admin";
		$this->render('admin');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest){
				echo $error['message'];
			}else{
				
			
				$this->renderPartial("//static/layout");
				$this->renderPartial('//static/error', $error);
				$this->renderPartial("//static/footer");
				//$this->render('error', $error);
			}
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		if(Yii::app()->user->getId()){
			$this->redirect('/'.$_SESSION['webRoot']."site/admin");
		}
		if(!isset($_SESSION["short"])){
			$_SESSION["short"]= "ar";
			$_SESSION["pais"]= "1";
			$_SESSION["lng"]= "es";
		}
		$model=new LoginForm;
		
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form'){
			echo $_POST["ajax"];
		}else if(isset($_POST['LoginForm'])){
					
			$identity=new UserIdentity( $_POST["LoginForm"]["username"], $_POST["LoginForm"]["password"]);
			//echo $identity->authenticate();
			if($identity->authenticate()){
				Yii::app()->user->login($identity);
				$this->redirect('/'.$_SESSION['webRoot']."site/admin");
			}else{
				echo $identity->errorMessage;
			}
		}
		$this->render('login',array('model'=>$model));
		// if it is ajax validation request
		/*if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			//if($model->validate() && $model->login())
			$identity=new UserIdentity($model->username,$model->password);
			if($identity->authenticate())
				//Yii::app()->user->login($identity);
				$this->redirect(Yii::app()->user->returnUrl);
			else
				echo $identity->errorMessage;	
			
			
		}
		// display the login form
		*/
	}
	public function actionChatprocess($id){
		
		$admin=true;
		if(!Yii::app()->user->id){
			  $admin=false;
		  }
		
		$chat= Chat::model()->findByPk($id);
		if(!$chat){
			exit();
		}
		
		$webroot = Yii::getPathOfAlias('webroot');
		$file =  $webroot . DIRECTORY_SEPARATOR . 'chat_log' . DIRECTORY_SEPARATOR . "chat_".$id.'.txt';
		
		$function = $_POST['function'];
		
		$log = array();
		
		switch($function) {
		
			 case('getState'):
				
				 if(file_exists($file)){
				   $lines = file($file);
				 }
				 /*if(isset($lines)){
				 $log['state'] = count($lines); 
				 }else{
					 $log['state'] =0;
				 }*/
				 $log["state"]=0;
				 break;	
			
			 case('update'):
				if(!isset($_POST["state"])){
					$state=0;
				}else{
					$state = $_POST['state'];
				}
				if(file_exists($file)){
				   $lines = file($file);
				 }
				 if(isset($lines)){
				 $count =  count($lines);
				}else{
					$count=0;
				}
				 if($state == $count){
					 $log['state'] = $state;
					 $log['text'] = false;
					 
					 }
					 else{
						 if(isset($lines)){
						 $text= array();
						 $log['state'] = $state + count($lines) - $state;
						 foreach ($lines as $line_num => $line)
						   {
							   if($line_num >= $state){
							 $text[] =  $line = str_replace("\n", "", $line);
							   }
			 
							}
						 $log['text'] = $text; 
						 }
					 }
				  
				 break;
			 
			 case('send'):
			  //$nickname = htmlentities(strip_tags($_POST['nickname']));
			  if($chat->abierto==0){
				  exit();
			  }
			  if($admin){
				  $nickname= "Admin";
			  }else{
				  $nickname= $chat->nombre;
			  }
				 $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
				  $message = htmlentities(strip_tags($_POST['message']));
			 if(($message) != "\n"){
				
				 if(preg_match($reg_exUrl, $message, $url)) {
					$message = preg_replace($reg_exUrl, '<a href="'.$url[0].'" target="_blank">'.$url[0].'</a>', $message);
					} 
				 
				
				 fwrite(fopen($file, 'a'), "<span>". $nickname . "</span>" . $message = str_replace("\n", " ", $message) . "\n"); 
			 }
				 break;
			
		}
		
		echo json_encode($log);
	}
	public function actionChatprocess2($id){
		//chequear ip solo en no admins???
		
		header('Content-Type: text/event-stream');
		header('Cache-Control: no-cache');
		if(isset($_POST['name'])&&isset($_POST['msg'])){
			$name=strip_tags($_POST['name']);
			$msg=strip_tags($_POST['msg']);
		}
		
		$webroot = Yii::getPathOfAlias('webroot');
		$file =  $webroot . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . $id .'.txt';

		function sendMsg($msg) {
		  echo "$msg" . PHP_EOL;
		  ob_flush();
		  flush();
		}
		if(!empty($name) && !empty($msg)){
			$fp = fopen($file, 'a');  
			fwrite($fp, '<div class="chatmsg"><b>'.$name.'</b>: '.$msg.'<br/></div>'.PHP_EOL);  
			fclose($fp);  
		}
			$html="";
		  if(file_exists($file) && filesize($file) > 0){  
		   $arrhtml=array_reverse(file($file));
		   //$html=$arrhtml[0];
		   foreach(file($file)as $f){
			   $html.= $f;
		   }
			
		  }
		  /*if(filesize($file) > 100){
			unlink($file);
		  }*/
		  

		sendMsg($html);
	}
	
	public function actionChatInit(){
		$newChat= new Chat();
		$newChat->nombre= $_POST["nombre"];
		$newChat->mail= $_POST["email"];
		$newChat->motivo= $_POST["motivo"];
		date_default_timezone_set("America/Argentina/Buenos_Aires");
		$newChat->fecha= date("Y-m-d H:i:s");
		$newChat->abierto= 1;
		$newChat->save();
		$id= $newChat->id;
		$webroot = Yii::getPathOfAlias('webroot');
		$file =  $webroot . DIRECTORY_SEPARATOR . 'chat_log' . DIRECTORY_SEPARATOR . "chat_".$id.'.txt';
		fwrite(fopen($file, 'a'), "<span>Bienvenido a la mesa de ayuda de Fronteras 2.0. Aguarde unos instantes y será atendido.</span>". "\n"); 
		echo $id;
	}
	
	public function actionLastChat($id){
		$conf = new PermissionChecker;
		if(!$conf->CheckUrl("/chat")){
			return false;
		}
		echo Chat::model()->chatList($id);
	}
	
	public function actionChatData($id){
		$conf = new PermissionChecker;
		if(!$conf->CheckUrl("/chat")){
			return false;
		}
		$chat= Chat::model()->findByPk($id);
		$toEcho="";
		$toEcho.=$chat->nombre.";;;;;";
		$toEcho.=$chat->motivo;
		echo $toEcho;
	}
	
	public function actionChatFinish($id){
		$conf = new PermissionChecker;
		if(!$conf->CheckUrl("/chat")){
			return false;
		}
		
		$chat= Chat::model()->findByPk($id);
		if(!$chat){
			exit();
		}
		
		$webroot = Yii::getPathOfAlias('webroot');
		$file =  $webroot . DIRECTORY_SEPARATOR . 'chat_log' . DIRECTORY_SEPARATOR . "chat_".$id.'.txt';
		
		if($chat->abierto==0){
			  exit();
		  }
		  
			 $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
			 
			 
			
			 fwrite(fopen($file, 'a'), "<span>". "Conversación terminada" . "</span>"); 
		
		
		$chat->abierto= 0;
		echo $chat->save();
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	
	public function actionForbidden(){
		$this->renderPartial('//static/forbidden');
		
		
	}
}
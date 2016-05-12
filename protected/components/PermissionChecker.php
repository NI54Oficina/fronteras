<?php
class PermissionChecker extends CApplicationComponent
    {
		public $webRoot="fronteras/";
		public $webRootO="fronteras";
		
        public function PermissionCheck()
        {
			//$auth=Yii::app()->authManager;
			//$auth->assign('admin',10);
			//$auth->revoke('admin',"Fran");
			$access= $this->CheckUrl($_SERVER['REQUEST_URI']);
			
			
			if(!$access){
				header("Location: http://".$_SERVER['SERVER_NAME']."/".$this->webRoot."forbidden");
				exit();
			}
			
        }
		
		public function CheckUrl($url){
			
			if(Yii::app()->user->checkAccess("fullAccess")){
				
				return true;
			}
			$partsUrl= explode("/",$url);
			$currentUrl="";
			$auxLike="";
			foreach($partsUrl as $part){
				if(strlen( $part)>3&&$part!=$this->webRootO){
					if($currentUrl!=""){
						$currentUrl.="/";
					}
					if($auxLike==""){
						$auxLike=$part;
					}
					$currentUrl.=$part;
				//	echo $part;
					//echo "<br>";
					//break;
				}
			}
			//echo $currentUrl;
			//echo $auxLike;
			//echo "<br>";
			//$currentUrl=$url;
			/*$currentUrl=str_replace($this->webRoot,"",$url);
			//Yii::log("pemisos", CLogger::LEVEL_ERROR, "check permiso");
			if($currentUrl[0]=="/"){
				$currentUrl=substr ($currentUrl,1);
			}
			$auxLike= strpos($currentUrl,"/");
			if($auxLike>0){
				$auxLike= substr($currentUrl,0,$auxLike);
			}else{
				$auxLike= $currentUrl;
			}*/
			//$auxLike=$currentUrl;
			
           // $permissions= Permission::model()->findAllByAttributes(
			//array('url'=>$currentUrl));
			//echo $auxLike;
			$criteria=new CDbCriteria;
                $criteria->condition='url LIKE :id';
                $criteria->params=array(':id'=>"%".$auxLike."%");
                $permissions = Permission::model()->findAll($criteria);
			//echo count($permissions);
			$access=false;
			foreach($permissions as $permission){
				//echo $permission->operation;
				//echo "<br>";
				if(strpos($currentUrl,$permission->url)>=0 && Yii::app()->user->checkAccess($permission->operation) ){
					$access=true;
				//	echo "entra";
			//		echo "<br>";
					break;
				}
			}
			//echo "<br>";	
			//echo $access;
			//exit();
			return $access;
			
		}
    }
?>
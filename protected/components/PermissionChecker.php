<?php
class PermissionChecker extends CApplicationComponent
    {
		
        public function PermissionCheck()
        {
			/*$webRoot="webBago/";
			$currentUrl=str_replace($webRoot,"",$_SERVER['REQUEST_URI']);
			Yii::log("pemisos", CLogger::LEVEL_ERROR, "check permiso");
			if($currentUrl[0]=="/"){
				$currentUrl=substr ($currentUrl,2);
			}
            $permissions= Permission::model()->findAllByAttributes(
			array('url'=>$currentUrl));
			
			foreach($permissions as $permission){
				if(!Yii::app()->user->checkAccess($permission->operation)){
					
					header("Location: http://".$_SERVER['SERVER_NAME']."/".$webRoot."site/error");
					exit();
				}
			}*/
			
        }
    }
?>
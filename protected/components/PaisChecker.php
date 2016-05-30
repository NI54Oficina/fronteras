<?php
class PaisChecker extends CApplicationComponent
    {
		
        public function PaisCheck()
        {
		
			$_SESSION["webRoot"]="fronteras/";
			$webRoot=$_SESSION["webRoot"];
			$initUrl=$_SERVER['REQUEST_URI'];
			/*Hardcodeo pais*/
			$_SESSION["short"]= "ar";
			$_SESSION["pais"]= "1";
			$_SESSION["lng"]= "es";
			/**Fin Hardcodeo pais **/
			if(substr($initUrl, -1)!="/"){
						$toGo=$_SERVER['SERVER_NAME']."/".$initUrl."/";
						$toGo= str_replace("//","/",$toGo);
						header("Location: http://".$toGo);
						exit();
			}
			
			$initUrl=substr($initUrl,1);
		
			$currentUrl=str_replace($webRoot,"",$initUrl);
			/*if(!ctype_lower($currentUrl)){
				$currentUrl=strtolower($currentUrl);
				$toGo=$_SERVER['SERVER_NAME']."/".$webRoot.$currentUrl."/";
				$toGo= str_replace("//","/",$toGo);
				header("Location: http://".$toGo);
				exit();
			}*/
			
			$firstArg="";
			if(strlen($currentUrl)>1){
			
				if($currentUrl[0]=="/"){
					$currentUrl=substr ($currentUrl,4);
				}
			
				$endFirstArg= strpos ($currentUrl,"/");
				if(!$endFirstArg){
					$firstArg=$currentUrl;	
				}else{
					$firstArg= substr($currentUrl,0,$endFirstArg);
				}
			}
			if(strlen($firstArg)==2){
				$currentPais =Pais::model()->findByAttributes(array('short'=>$firstArg));
				if($currentPais){
					$_SESSION["short"]= $currentPais->short;
					$_SESSION["pais"]= $currentPais->id;
					$_SESSION["lng"]= $currentPais->lng;
				}
				
			}else if($firstArg!="paises"){
				
				if( isset($_SESSION["pais"])){
					$short= Pais::model()->findByPk($_SESSION["pais"])->short;
					$toGo= $_SERVER['SERVER_NAME']."/".$webRoot.$short."/".$currentUrl;
					$toGo= str_replace("//","/",$toGo);
					header("Location: http://".$toGo);
				}else{
					if(!isset($_SESSION["redirectURL"])){
						//echo "entra session";
						$_SESSION["redirectURL"]= $currentUrl;
					}else{
						
					}
					$toGo=$_SERVER['SERVER_NAME']."/".$webRoot."paises";
					$toGo= str_replace("//","/",$toGo);
					header("Location: http://".$toGo);
				}
				
				exit();
			}
            
        }
		
		public function getBaseUrl(){
			$short="";
			if(isset($_SESSION["short"])){
				$short=$_SESSION["short"];
			}
			$baseUrl="http://" . $_SERVER['SERVER_NAME']. $_SERVER['PHP_SELF'];
			$baseUrl= str_replace("index.php","",$baseUrl);
			return $baseUrl.$short;
			/*if($this->_baseUrl===null){
				$this->_baseUrl=rtrim(dirname($this->getScriptUrl()),'\\/');
			}
			$short="ar/";
			if($absolute){
				return $this->getHostInfo().$short . $this->_baseUrl;
			}else{
				return $short.$this->_baseUrl;
			}*/
			//return $absolute ? $this->getHostInfo() . $this->_baseUrl : $this->_baseUrl;
		}
		
		public function getSeccion($idSeccion){
			$traduccion= SeccionRegionalizacion::model()->findByAttributes(array("idCategoria"=>$idSeccion,"pais"=>Yii::app()->session['pais']));
			if($traduccion!=null){
				return $traduccion->nombre;;
			}else{
				return Seccion::model()->findByPk($idSeccion)->nombre;
			}
		}
		
		public function getTitles($idSeccion){
			$traduccion= PpartesRegionalizacion::model()->findByAttributes(array("idParte"=>$idSeccion,"pais"=>Yii::app()->session['pais']));
			if($traduccion!=null){
				return $traduccion->nombre;;
			}else{
				return ProductoPartes::model()->findByPk($idSeccion)->nombre;
			}
		}
    }
?>
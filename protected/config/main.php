<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Biogenesis Bago',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		//tag
		//'ext.behaviors.model.taggable.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'ni54ni54',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('*','::1'),
		),
		
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		
		'request'=>array( 
            'class' => 'CmsCHttpRequest',
        ),
		
		'paisChecker' => array(
            'class' => 'ext.components.PaisChecker',
        ),
		
		'permissionChecker' => array(
            'class' => 'application.components.PermissionChecker',
        ),
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'class'=>'ext.DbUrlManager.EDbUrlManager',
			'connectionID'=>'db',
			'rules'=>array(
				
				"<pais>/admin"=>"site/admin",
				"admin"=>"site/login",
				
				"ar/testAjax"=>array("web/testAjax"),
				"<pais>/getLocalidades/id/<id>"=>array("web/getLocalidades/id/<id>"),
				"<pais>/setClima/id/<id>"=>array("web/setClima/id/<id>"),
				"<pais>/getVeterinaria/id/<id>"=>array("web/getVeterinaria/id/<id>"),
				"<pais>/getVeterinariaByProvincia/id/<id>"=>array("web/getVeterinariaByProvincia/id/<id>"),
				"paises"=>array("web/get/data/paises"	),
				"contacto"=>array("web/contacto"),
				
				"<pais>/home"=>"web/get/data/home/",
				"<pais>/<data>"=>array(
					"web/get/"
				),
				
				"<pais>/noticia/<id>"=>"web/get/data/noticia/id/<id>",
				"<pais>/ganado/<id>"=>"web/get/data/ganado/id/<id>",
				"<pais>/clima/<id>"=>"web/get/data/clima/id/<id>",
				"<pais>/hoy/<id>"=>"web/get/data/hoy/id/<id>",
				"<pais>/enfermedad/<id>"=>"web/get/data/enfermedad/id/<id>",

				'<controller:\w+>/<action:\w+>/id/<id>'=>'<controller>/<action>/id/<id>',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>/id/<id:\d+>',
				
				
				'<pais>/<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				
				
				'<pais>/<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
				
				"gii/<data1>/<data2>"=>array("gii/<data1>/<data2>"),
				'<pais>/<controller:\w+>/<id:\d+>'=>'<controller>/view',
				
				
				'producto/<producto:[\w\/.-]+>'=>array(
				  'producto/view',
				  'type'=>'db',
				  
				  'fields'=>array(
					'producto'=>array(
					  'table'=>'tbl_producto',
					  'field'=>'link'
					),
				  ),
				),
				
				
				
				'<pais>/seccion/<seccion:[\w\/.-]+>'=>array(
				  'seccion/view',
				  'type'=>'db',
				  
				  'fields'=>array(
					'seccion'=>array(
					  'table'=>'tbl_seccion',
					  'field'=>'url'
					),
				  ),
				),
				
				'<pais>/pais/<p:[\w\/.-]+>'=>array(
				  'p/view',
				  'type'=>'db',
				  
				  'fields'=>array(
					'p'=>array(
					  'table'=>'tbl_pais',
					  'field'=>'url'
					),
				  ),
				),
				
				"<pais>/vademecum/<id>"=>array("web/get/data/vademecum/id/<id>"),
				"<pais>/productos/<id>"=>array("web/get/data/productos/id/<id>"),
				"<pais>/print/<id>"=>array("web/get/data/print/id/<id>"),
				"<pais>/vista/<id>"=>array("web/get/data/vista/id/<id>"),
				"<pais>/gii/default/login"=>array("gii/default/login"),
				
				'<pais>/<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
				
				
				'admin/'=>array(
				  'site/admin',
				  'type'=>'db',
				  
				),
				
				'producto/admin'=>array(
				  'producto/adminPais',
				  'type'=>'db',
				  
				),
				'producto/'=>array(
				  'producto/adminPais',
				  'type'=>'db',
				  
				),
				"<pais>/<data>"=>array(
					"web/get/"
				),
				"<pais>/<data>/<id>"=>array(
					"web/get/data/<data>/id/<id>"
				),
				
				
				"<pais>/"=>array(
					"web/get/data/home"
				),
				"/"=>array(
					"web/get/data/home"
				),
				
				
			
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
			'showScriptName'=>false,
		),
		
		/*'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=fronteras',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		
		 'authManager'=>array(
            'class'=>'CDbAuthManager',
            'connectionID'=>'db',
        ),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
	

);
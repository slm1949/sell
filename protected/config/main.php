<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',
	'theme'=>'bootstrap',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.widgets.*',
		'application.helpers.*'
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'sell',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
			'generatorPaths' => array(
			'bootstrap.gii'
			)
		),	
		'admin',
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		'bootstrap'=>array(
            'class'=>'bootstrap.components.Bootstrap',
        ),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'doc/<key:\w+>'=>'doc/view',
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
			'showScriptName'=>false,
			'caseSensitive'=>false,
		),
		
		// 'db'=>array(
		// 	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		// ),
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=sell',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			'enableProfiling'=>true, 
			'enableParamLogging'=>true,
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
	            array(
	                'class'=>'ext.yii-debug-toolbar.YiiDebugToolbarRoute',
	                // Access is restricted by default to the localhost
	                'ipFilters'=>array('127.0.0.1', '192.168.1.*'),
	            ),
			),
		),
		'cache'=>array(
            'class'=>'system.caching.CFileCache',
        ),
		'settings'=>array(
	        'class'             => 'CmsSettings',
	        'cacheComponentId'  => 'cache',
	        'cacheId'           => 'global_website_settings',
	        'cacheTime'         => 84000,
	        'tableName'         => 'settings',
	        'dbComponentId'     => 'db',
	        'createTable'       => true,
	        'dbEngine'      => 'InnoDB',
	    ),
	    'image'=>array(
          'class'=>'application.extensions.image.CImageComponent',
            // GD or ImageMagick
            'driver'=>'GD'
        ),
        'widgetFactory'=>array(
            'widgets'=>array(
                'SAImageDisplayer'=>array(
                	'baseDir' => 'upload/images',
                    'sizes' =>array(
					    'tiny' => array('width' => 50, 'height' => 50),
					    'big' => array('width' => 400, 'height' => 400),
					    'thumb' => array('width' => 100, 'height' => 100),
					),
					'groups' => array(
				    	'product' => array(
						    'tiny' => array('width' => 50, 'height' => 50),
						    'big' => array('width' => 600, 'height' => 600),
						    'thumb' => array('width' =>250, 'height' => 250),
				    	),
					),
                ),
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
<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '4oodUZFCBFMjnEk9UMx9MFIX3PcDl06m',
        ],
    		// DB connection
    		'db' => [
    				'class' => 'yii\db\Connection',
    				'dsn' => 'mysql:host=localhost;dbname=shadow_v2',
    				'username' => 'root',
    				'password' => '1',
    				'charset' => 'utf8',
    		],
    	],
	
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;

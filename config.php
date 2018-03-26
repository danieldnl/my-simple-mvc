<?php

//DB Params
$databases = [
    'bd1' => [
        'DB_HOST' => 'localhost',
        'DB_CONNECTION' => 'mysql',
        'DB_NAME' => 'shareposts',
        'DB_USER' => 'root',
        'DB_PASS' => 'root',
    ],
];

//App Root
define('APPROOT', dirname(__FILE__).'/app');

//Url Root
define('URLROOT', 'http://localhost:8000/my-simple-mvc');

//Site Name
define('SITENAME', 'MySimpleMVC');

//App Version
define('APPVERSION', '1.0.0');

//Enviroment
define('ENV', 'DEV'); //Values: DEV OR PROD

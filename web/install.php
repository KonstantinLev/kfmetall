<?php
defined('YII_DEBUG') or define('YII_DEBUG', false);
defined('YII_ENV') or define('YII_ENV', 'prod');

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/console.php';


$application = new yii\console\Application($config);
$application->runAction('migrate/up',  ['interactive' => false]);

$file = fopen('.htaccess', 'w+');

fwrite($file, 'RewriteEngine on

# if a directory or a file exists, use it directly
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d

# otherwise forward it to index.php
RewriteRule . index.php');

fclose($file);


if (YII_ENV == 'prod'){
    unlink(__FILE__);
}
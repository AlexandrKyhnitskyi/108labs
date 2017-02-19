<?php

$local = __DIR__ . DIRECTORY_SEPARATOR . 'db.local.php';
if (file_exists($local)) {
    return require $local;
}

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=108labs',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8',
    'tablePrefix' => '',
    'enableSchemaCache' => true,
];

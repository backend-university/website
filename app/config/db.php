<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:dbname=' . getenv('MYSQL_NAME') . ';host=' . getenv('MYSQL_HOST'),
    'username' => getenv('MYSQL_USER'),
    'password' => getenv('MYSQL_PASSWORD'),
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];

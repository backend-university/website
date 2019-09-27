<?php
require __DIR__ . '/../vendor/autoload.php';

(new josegonzalez\Dotenv\Loader(__DIR__ . '/../.env'))->parse()->putenv(true);

defined('YII_DEBUG') or define('YII_DEBUG', getenv('DEBUG'));
defined('YII_ENV') or define('YII_ENV', getenv('ENV_DEV') ? 'dev' : 'prod');

require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/web.php';

(new yii\web\Application($config))->run();

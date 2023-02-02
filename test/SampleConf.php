<?php

use BaiduBce\BceClientConfigOptions;

date_default_timezone_set('UTC');

define('__BOS_CLIENT_ROOT', dirname(__DIR__));

$BOS_TEST_CONFIG = array(
    'credentials' => array(
        'accessKeyId' => 'your ak',
        'secretAccessKey' => 'your sk',
        'sessionToken' => 'your session token'
    ),
    'endpoint' => 'host',
    'stsEndpoint' => 'sts host',
);

$CUSTOM_BOS_TEST_CONFIG = array(
    'credentials' => array(
        'accessKeyId' => 'your ak',
        'secretAccessKey' => 'your sk',

        'sessionToken' => 'your session token'
    ),
    'endpoint' => 'customized host',
    'custom' => true,
    'stsEndpoint' => 'sts host',
);

// this in your YourConf.php
$SMS_TEST_CONFIG = array(
    BceClientConfigOptions::PROTOCOL => 'http',
    BceClientConfigOptions::REGION => 'bj',
    'credentials' => array(
        'ak' => 'your ak',
        'sk' => 'your sk'
    ),
    'endpoint' => 'smsv3.bj.baidubce.com',
);

$STDERR = fopen('php://stderr', 'w+');

$__handler = new \Monolog\Handler\StreamHandler($STDERR, \Monolog\Logger::DEBUG);

$__handler->setFormatter(
    new \Monolog\Formatter\LineFormatter(null, null, false, true)
);

\BaiduBce\Log\LogFactory::setInstance(
    new \BaiduBce\Log\MonoLogFactory(array($__handler))
);

\BaiduBce\Log\LogFactory::setLogLevel(\Psr\Log\LogLevel::DEBUG);

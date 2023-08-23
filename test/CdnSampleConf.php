<?php

date_default_timezone_set('UTC');

define('CDN_CLIENT_ROOT', dirname(__DIR__));

$g_CDN_TEST_CONFIG = array(
    'credentials' => array(
        'accessKeyId' => 'your ak',
        'secretAccessKey' => 'your sk',
    ),
    'endpoint' => 'http://cdn.baidubce.com',
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

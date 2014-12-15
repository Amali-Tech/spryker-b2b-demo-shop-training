<?php

use ProjectA\Shared\Mail\MailConfig;
use ProjectA\Shared\Payone\PayoneConfig;
use ProjectA\Shared\Setup\SetupConfig;
use ProjectA\Shared\System\SystemConfig;

$environment = 'development';
$tld = 'de';

$config[SystemConfig::ZED_MYSQL_USERNAME] = 'development';
$config[SystemConfig::ZED_MYSQL_PASSWORD] = 'mate20mg';
$config[SystemConfig::ZED_MYSQL_DATABASE] = 'DE_development_zed';
$config[SystemConfig::ZED_MYSQL_HOST] = 'localhost';
$config[SystemConfig::ZED_MYSQL_PORT] = 3306;

$config[PayoneConfig::PAYONE_PORTALID] = '2018246';
$config[PayoneConfig::PAYONE_KEY] = 'dFWR8GlNG8aonscn';

$config[SystemConfig::HOST_YVES]
    = $config[SystemConfig::HOST_STATIC_ASSETS]
    = $config[SystemConfig::HOST_STATIC_MEDIA]
    = $config[SystemConfig::HOST_SSL_YVES]
    = $config[SystemConfig::HOST_SSL_STATIC_ASSETS]
    = $config[SystemConfig::HOST_SSL_STATIC_MEDIA]
    = 'www-'.$environment.'.project-yz.'.$tld;

$config[SystemConfig::HOST_ZED_GUI]
    = $config[SystemConfig::HOST_ZED_API]
    = $config[SystemConfig::HOST_SSL_ZED_GUI]
    = $config[SystemConfig::HOST_SSL_ZED_API]
    = 'zed-'.$environment.'.project-yz.'.$tld;

$config[SystemConfig::CLOUD_CDN_STATIC_MEDIA_HTTP] = 'http://static-'.$environment.'.project-yz.'.$tld;
$config[SystemConfig::CLOUD_CDN_STATIC_MEDIA_HTTPS] = 'https://static-'.$environment.'.project-yz.'.$tld;

$config[SetupConfig::JENKINS_BASE_URL] = 'http://' . $config[SystemConfig::HOST_ZED_GUI] . ':10007/jenkins';
$config[MailConfig::MAILCATCHER_GUI] = 'http://' . $config[SystemConfig::HOST_ZED_GUI] . ':1080';
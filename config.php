<?php
// HTTP
define('HTTP_SERVER', 'http://oc3/');

// HTTPS
define('HTTPS_SERVER', 'http://oc3/');

// DIR
define('DIR_APPLICATION', '/home/user2/domains/opencart3.0_check/app/catalog/');
define('DIR_SYSTEM', '/home/user2/domains/opencart3.0_check/app/system/');
define('DIR_IMAGE', '/home/user2/domains/opencart3.0_check/app/image/');
define('DIR_STORAGE', '/home/user2/domains/opencart3.0_check/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'opencart');
define('DB_PASSWORD', '1234');
define('DB_DATABASE', 'ocstore');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');
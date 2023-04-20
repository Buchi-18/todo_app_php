<?php

require_once dirname(__FILE__).'/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../');
$dotenv->load();

session_start();

define('DSN', $_ENV['DSN']);
define('DB_USER', $_ENV['DB_USER']);
define('DB_PASS', $_ENV['DB_PASS']);
define('SITE_URL', 'http://'.$_SERVER['HTTP_HOST']);

spl_autoload_register(function ($class) {
    $prefix = 'MyApp\\';
    if (strpos($class, $prefix) === 0) {
        $fileName = sprintf(__DIR__.'/%s.php', substr($class, strlen($prefix)));
        if (file_exists($fileName)) {
            require($fileName);
        } else {
            echo 'File not found'.$fileName;
            exit;
        }
    }
});

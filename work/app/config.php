<?php
require_once dirname(__FILE__).'/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../');
$dotenv->load();

session_start();

define('DSN', $_ENV['DSN']);
define('DB_USER', $_ENV['DB_USER']);
define('DB_PASS', $_ENV['DB_PASS']);
define('SITE_URL', 'http://'.$_SERVER['HTTP_HOST']);

require_once(__DIR__.'/functions.php');
<?php
// Turn on error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__.'/php/autoload.php';
require_once realpath(__DIR__ . "/vendor/autoload.php");
use Dotenv\Dotenv;

//  Load environment variables
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();



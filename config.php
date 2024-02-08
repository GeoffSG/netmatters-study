<?php
require_once __DIR__.'/php/autoload.php';
require_once realpath(__DIR__ . "/vendor/autoload.php");
use Dotenv\Dotenv;

//  Load environment variables
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$db = new DatabaseController(
    $_ENV['DB_HOST'],
    $_ENV['DB_USERNAME'],
    $_ENV['DB_PASSWORD'],
    $_ENV['DB_DATABASE']
);

if ($db->connect()) {
    echo "Connected to MySQL database successfully!";
} else {
    echo "Connection failed!";
}




//  Directory paths
$officeMapDir = "/assets/img/offices/maps/";
$officeCoverDir = "/assets/img/offices/covers/";

//  Office data
$offices = [
    new Office(
        "Unit G6",
        "Pixel Business Centre",
        "110 Brooker Road",
        "Waltham Abbey",
        "London",
        "",
        "EN9 1JH",
        "02045 397354",
        "london"
    ),
    new Office(
        "Unit 1.31",
        "St John's Innovation Centre",
        "Cowley Road",
        "Milton",
        "Cambridge",
        "",
        "CB4 0WS",
        "01223 37 57 72",
        "cambridge"
    ),
    new Office(
        "Unit 15",
        "Penfold Drive",
        "Gateway 11 Business Park",
        "",
        "Wymondham",
        "",
        "NR18 0WZ",
        "01603 70 40 20",
        "wymondham"
    ),
    new Office(
        "Suite F23",
        "Beacon Innovation Centre",
        "Beacon Park",
        "Gorleston",
        "Great Yarmouth",
        "Norfolk",
        "EN9 1JH",
        "02045 397354",
        "yarmouth"
    ),
];

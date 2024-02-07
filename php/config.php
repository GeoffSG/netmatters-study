<?php

function autoloader($class_name) {
    foreach(glob(__DIR__ . '/*', GLOB_ONLYDIR) as $dir) {
        if (file_exists("$dir/" . $class_name . '.php')) {
            require_once "$dir/" . $class_name . '.php';
            break;
        } 
    }
}

spl_autoload_register('autoloader');

/*
Offices Data
*/
$officeMapDir = "/assets/img/offices/maps/";
$officeCoverDir = "/assets/img/offices/covers/";

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

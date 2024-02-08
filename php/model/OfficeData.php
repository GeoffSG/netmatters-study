<?php

class OfficeData
{
    public static $officeMapDir = "/assets/img/offices/maps/";
    public static $officeCoverDir = "/assets/img/offices/covers/";

    
    public static $offices = [];

    public static function init() {
        self::$offices[] = new Office("Unit G6", "Pixel Business Centre", "110 Brooker Road", "Waltham Abbey", "London", "", "EN9 1JH", "02045 397354", "london");
        self::$offices[] = new Office("Unit 1.31", "St John's Innovation Centre", "Cowley Road", "Milton", "Cambridge", "", "CB4 0WS", "01223 37 57 72", "cambridge");
        self::$offices[] = new Office("Unit 15", "Penfold Drive", "Gateway 11 Business Park", "", "Wymondham", "", "NR18 0WZ", "01603 70 40 20", "wymondham");
        self::$offices[] = new Office("Suite F23", "Beacon Innovation Centre", "Beacon Park", "Gorleston", "Great Yarmouth", "Norfolk", "EN9 1JH", "02045 397354", "yarmouth");
    }    
}

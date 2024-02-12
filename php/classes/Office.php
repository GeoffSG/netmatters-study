<?php

class Office
{
    private $address;
    private $telephone;
    private $coverImage;
    private $map;

    public function __construct($unit, $building, $street, $district, $town, $county, $postCode, $telephone, $assetName)
    {
        $this->address = array();
        $this->address = [
            "unit" => $unit,
            "building" => $building,
            "street" => $street,
            "district" => $district,
            "town" => $town,
            "county" => $county,
            "postCode" => $postCode
        ];
        $this->telephone = $telephone;
        $this->map = "/assets/img/offices/maps/" . $assetName . ".png";
        $this->coverImage = "/assets/img/offices/covers/" . $assetName . ".jpg";
    }
    
    public function getCoverImage() {
        return $this->coverImage;
    }
    
    public function getMap() {
        return $this->map;
    }
    
    public function getFormattedAddress() {
        return 
            $this->address['unit'] . ',<br>' . 
            $this->address['building'] . ',<br>' . 
            $this->address['street'] . (!empty($this->address['district']) ? ', ' . $this->address['district'] : '') . ',<br>' .
            $this->address['town'] . (!empty($this->address['county']) ? ', ' . $this->address['county'] : '') . ',<br>' .
            $this->address['postCode'];
    }

    public function getTelephone($formatted) {
        return $formatted ? str_replace(' ', '', $this->telephone) : $this->telephone;
    }

    public function getAddressPart($key) {
        if(array_key_exists($key, $this->address))
            return $this->address[$key];
    }

    public function getAddress() {
        return $this->address;
    }
}
<?php

namespace app\Classes;

use app\Classes\Apartment;
use app\Interfaces\HasAmenitiesInterface;

class LuxuryApartment extends Apartment implements HasAmenitiesInterface{

    private $amenities;

    public function __construct($apartmentNumber, $area, $numberOfBedrooms, $amenities){
        parent::__construct($apartmentNumber, $area, $numberOfBedrooms);
        $this->amenities = $amenities;
    }

    public function calculateRent(){
        $this->rent = $this->area * 0.8 + $this->numberOfBedrooms * 150;
    }

    public function getAmenities(){
        return implode(', ', $this->amenities);
    }
}
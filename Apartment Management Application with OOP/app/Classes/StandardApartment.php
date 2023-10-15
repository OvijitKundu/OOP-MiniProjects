<?php

namespace app\Classes;

use app\Classes\Apartment;
use app\Traits\HasBalconyTrait;

class StandardApartment extends Apartment{
    
    use HasBalconyTrait;
    
    public function calculateRent(){
        $this->rent = $this->area * 0.5 + $this->numberOfBedrooms * 100;

        if($this->hasBalcony()){
            $this->rent += 50;
        }
    }
}
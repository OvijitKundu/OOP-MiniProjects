<?php

namespace app\Classes;

abstract class Apartment{

    protected $apartmentNumber;
    protected $area;
    protected $numberOfBedrooms;
    protected $rent;

    public function __construct($apartmentNumber, $area, $numberOfBedrooms){
        $this->apartmentNumber = $apartmentNumber;
        $this->area = $area;
        $this->numberOfBedrooms = $numberOfBedrooms;
        $this->calculateRent();
    }

    abstract public function calculateRent();

    public function displayApartmentDetails(){
        echo "Apartment Number: " . $this->apartmentNumber . PHP_EOL;
        echo "Area(sq. ft.): " . $this->area . PHP_EOL;
        echo "Number of Bedrooms: " . $this->numberOfBedrooms . PHP_EOL;
        echo "Monthly Rent: " . $this->rent . "\n";
    }

    public function getApartmentNumber(){
        return $this->apartmentNumber;
    }
}
<?php

include 'autoloader.php';

use app\Classes\StandardApartment;
use app\Classes\LuxuryApartment;
use app\Classes\Owner;



$standardApartment = new StandardApartment('501', 1800, 2);
$luxuryApartment = new LuxuryApartment('502', 3000, 3, ['Swimming Pool', 'Gym', 'Parking']);


$standardApartment->setBalcony(true);
$standardApartment->calculateRent();


$owner1 = new Owner('Robin', $standardApartment);
$owner2 = new Owner('Hood', $luxuryApartment);


echo PHP_EOL;
echo "Standard Apartment Details: \n";
$standardApartment->displayApartmentDetails();
echo PHP_EOL;

echo "Luxury Apartment Details: \n";
$luxuryApartment->displayApartmentDetails();
echo "Amenities: " . $luxuryApartment->getAmenities() . PHP_EOL;


echo "\nOwner Details: " . PHP_EOL;
$owner1->displayOwnerDetails();
$owner2->displayOwnerDetails();
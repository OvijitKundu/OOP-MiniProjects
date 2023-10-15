<?php

include 'autoloader.php';

use app\Classes\BloodBank;
use app\Classes\VolunteerDonor;
use app\Classes\ProfessionalDonor;

//Instantiate
$donor1 = new VolunteerDonor('Alice', 'A+', 25);
$donor2 = new VolunteerDonor('Bob', 'B+', 29);
$donor3 = new ProfessionalDonor('Charlie', 'A-', 36);

$bloodBank = new BloodBank();

//Receive blood from donors
$bloodBank->receiveBlood($donor1);
$bloodBank->receiveBlood($donor2);
$bloodBank->receiveBlood($donor3);


//Display Donors info and perform blood test
$bloodBank->displayDonors();

//Get donors by blood group
echo "\nDonors with Blood Group A+:\n";
$aPositiveDonors = $bloodBank->getDonorsByBloodGroup("A+");

foreach($aPositiveDonors as $donor){
    $donor->displayDonorInfo();
}


echo "\nPolymorphism: \n";

$donors = [$donor1, $donor2, $donor3];

foreach($donors as $donor){
    $donor->donateBlood();
}
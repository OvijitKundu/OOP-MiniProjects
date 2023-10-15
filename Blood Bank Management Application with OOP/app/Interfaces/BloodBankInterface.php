<?php

namespace app\Interfaces;

use app\Classes\BloodDonor;

interface BloodBankInterface{
    public function receiveBlood(BloodDonor $donor);
    public function getDonorsByBloodGroup($bloodGroup);
}
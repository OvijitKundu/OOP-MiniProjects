<?php

namespace app\Classes;

class ProfessionalDonor extends BloodDonor{
    public function donateBlood(){
        echo $this->name . "is a professional donor.\n";
    }
}
<?php

namespace app\Classes;

class VolunteerDonor extends BloodDonor{
    public function donateBlood(){
        echo $this->name . "is donating blood.\n";
    }
}
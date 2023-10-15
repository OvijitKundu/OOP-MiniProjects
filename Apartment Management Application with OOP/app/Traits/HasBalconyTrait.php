<?php

namespace app\Traits;

trait HasBalconyTrait{
    protected $balcony;

    public function setBalcony($balcony){
        $this->balcony = $balcony;
    }

    public function hasBalcony(){
        return $this->balcony;
    }
}
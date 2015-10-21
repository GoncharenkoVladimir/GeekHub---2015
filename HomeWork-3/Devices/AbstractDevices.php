<?php

namespace Devices;


abstract class AbstractDevices {

    public function __set($var,$value){
        $this->$var = $value;
    }
    public function __get($value){
        return $this->$value;
    }
}
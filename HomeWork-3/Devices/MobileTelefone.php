<?php

namespace Devices;


class MobileTelefone extends Device{

    public $parametrListOfMobiles = array();

    public function showPage(){
        echo "This page showing in mobile devices<br>";
    }
}
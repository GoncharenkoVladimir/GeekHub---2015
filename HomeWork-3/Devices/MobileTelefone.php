<?php

namespace Devices;


class MobileTelefone extends Device implements PhoneInterace{

    public $parametrListOfMobiles = array();
    private $phoneNumber;

    public function __construct($number)
    {
        $this->phoneNumber = $number;
    }

    public function callToNumber()
    {
        echo "Calling to $this->phoneNumber .....<br>";
    }

    public function endColl()
    {
        echo "End call!!!";
    }

    public function showPage()
    {
        echo "This page showing in mobile devices<br>";
    }
}
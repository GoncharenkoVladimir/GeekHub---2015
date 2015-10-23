<?php

namespace Devices;


class Device extends AbstractDevices{
    public $parametrListOfDevices = array();

    public function showPage()
    {
        echo "This page showing in all devices <br>";
    }

}
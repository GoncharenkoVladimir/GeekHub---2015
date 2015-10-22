<?php

namespace Devices;


class Printer extends Device
{
    public $parametrListOfPrinter = array();

    public function showPage(){
        echo "This page print all printers<br>";
    }
}
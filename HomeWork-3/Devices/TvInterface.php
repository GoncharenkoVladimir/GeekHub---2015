<?php

namespace Devices;

interface TvInterface
{
    public function checkNextChanel();
    public function checkPrevChanel();
    public function upVolume();
    public function downVolume();
    public function onTv();
    public function offTv();
}
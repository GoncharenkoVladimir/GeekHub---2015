<?php
/**
 * Created by PhpStorm.
 * User: Vladimir
 * Date: 11/4/15
 * Time: 1:51 PM
 */

namespace Entity;


abstract class AbstractFigure
{
    abstract public function calcSquareFigure ($a, $b, $c);
    abstract public function calcPerimeterFigure ($a, $b, $c);
}
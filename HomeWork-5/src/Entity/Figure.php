<?php
/**
 * Created by PhpStorm.
 * User: Vladimir
 * Date: 11/4/15
 * Time: 2:00 PM
 */

namespace Entity;


class Figure extends AbstractFigure
{
    private $squareFigure;
    private $perimeterFigure;

    public function calcSquareFigure($a, $b, $c)
    {
        return $this->squareFigure;
    }

    public function calcPerimeterFigure($a, $b, $c)
    {
        return $this->perimeterFigure;
    }
}
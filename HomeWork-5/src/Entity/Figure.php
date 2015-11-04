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

    public function calcSquareFigure()
    {
        return $this->squareFigure;
    }

    public function calcPerimeterFigure()
    {
        return $this->perimeterFigure;
    }
}
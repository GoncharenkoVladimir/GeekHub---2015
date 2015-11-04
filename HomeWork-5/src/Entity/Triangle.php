<?php

namespace Entity;


class Triangle extends Figure
{
    private $squareFigure;
    private $perimeterFigure;
    private $a, $b, $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function calcSquareFigure()
    {
        return $this->squareFigure;
    }

    public function calcPerimeterFigure()
    {
        $this->perimeterFigure = $this->a + $this->b + $this->c;
        return $this->perimeterFigure;
    }
}
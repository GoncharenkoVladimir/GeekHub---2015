<?php

namespace Entity;


class Triangle extends Figure
{
    private $squareFigure;
    private $perimeterFigure;

    public function calcSquareFigure($a, $b, $c)
    {
        $p = $this->perimeterFigure/2;
        $this->squareFigure = sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
        return $this->squareFigure;
    }

    public function calcPerimeterFigure($a, $b, $c)
    {
        $this->perimeterFigure = $a + $b + $c;
        return $this->perimeterFigure;
    }
}
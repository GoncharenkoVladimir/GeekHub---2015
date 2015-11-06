<?php

namespace Entity;


class Triangle extends Figure
{
    private $squareFigure;
    private $perimeterFigure;
    private $a, $b, $c;

    public function calcSquareFigure()
    {
        $p = $this->perimeterFigure/2;
        $this->squareFigure = sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
        return $this->squareFigure;
    }

    public function calcPerimeterFigure()
    {
        $this->perimeterFigure = $this->a + $this->b + $this->c;
        return $this->perimeterFigure;
    }

    public function setA($a)
    {
        $this->a = $a;
    }

    public function setB($b)
    {
        $this->b = $b;
    }

    public function setC($c)
    {
        $this->c = $c;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }

    public function getC()
    {
        return $this->c;
    }
}
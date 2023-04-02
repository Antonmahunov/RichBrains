<?php

namespace App\Factory;

use App\Base\AbstractFigure;
use App\Classes\Circle;
use App\Classes\Square;

class FigureFactory
{
    public static function create($figureName): AbstractFigure
    {
        return match (strtolower($figureName)) {
            Circle::NAME => new Circle(),
            Square::NAME => new Square(),
            default => throw new \Exception("$figureName - not defined")
        };
    }
}
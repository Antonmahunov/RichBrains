<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use App\Classes\Circle;
use App\Classes\Square;

class Main
{
    public function getShapeCornersCount(string ...$figureNames): void
    {
        foreach ($figureNames as $figureName) {
                $shape = match (strtolower($figureName)) {
                    Circle::NAME => new Circle(),
                    Square::NAME => new Square(),
                    default => "$figureName - not defined"
                };
                 echo $shape . PHP_EOL;
        }
    }
}

(new Main())->getShapeCornersCount('Circle', 'Square', 'Triangle');

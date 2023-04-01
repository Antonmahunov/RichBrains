<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Classes\Circle;
use App\Classes\Square;

class Main
{
    public function getShapeCornersCount(string ...$figureNames): void
    {
        foreach ($figureNames as $figureName) {
            try {
                $shape = match (strtolower($figureName)) {
                    'circle' => new Circle(),
                    'square' => new Square(),
                    default => throw new \Exception("$figureName - not defined")
                };
                echo $shape . PHP_EOL;
            } catch (\Exception $exception) {
                echo $exception->getMessage() . PHP_EOL;
            }
        }
    }
}

(new Main())->getShapeCornersCount('Circle', 'Square', 'Triangle', 1);

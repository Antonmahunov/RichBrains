<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use App\Factory\FigureFactory;

class Main
{
    public function getShapeCornersCount(string ...$figureNames): void
    {
        foreach ($figureNames as $figureName) {
            try {
                $shape = FigureFactory::create($figureName);

                echo $shape . PHP_EOL;
            } catch (Exception $exception) {
                echo $exception->getMessage() . PHP_EOL;
            }
        }
    }
}

$args = array_slice($argv, 1, count($argv));
(new Main())->getShapeCornersCount(...$args);

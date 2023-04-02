<?php

namespace App\Classes;

use App\Base\AbstractFigure;

class Circle extends AbstractFigure
{
    public const NAME = 'circle';
    public const CORNERS = 0;

    public function __construct()
    {
        parent::__construct(self::NAME, self::CORNERS);
    }
}

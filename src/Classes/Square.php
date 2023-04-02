<?php

namespace App\Classes;

use App\Base\AbstractFigure;

class Square extends AbstractFigure
{
    public const NAME = 'square';
    public const CORNERS = 4;

    public function __construct()
    {
        parent::__construct(self::NAME, self::CORNERS);
    }
}


<?php

namespace App\Classes;

use App\Base\Figure;

class Circle extends Figure
{
    public function __construct()
    {
        parent::__construct('circle', 0);
    }
}

<?php

namespace App\Classes;

use App\Base\Figure;

class Square extends Figure
{
    public function __construct()
    {
        parent::__construct('square', 4);
    }
}

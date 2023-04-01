<?php

namespace App\Base;

abstract class Figure
{
    public function __construct(
        protected string $name,
        protected int    $corners,
    ) {}

    public function __toString(): string
    {
        return $this->name . ' - ' . $this->corners;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCorners(): int
    {
        return $this->corners;
    }
}

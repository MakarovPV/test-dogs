<?php

namespace Classes\Animals;

use Classes\Sounds\Squeak;

class SqueakerTaksa extends Dog
{
    public function __construct()
    {
        $this->sound = new Squeak();
    }
}
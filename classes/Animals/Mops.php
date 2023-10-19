<?php

namespace Classes\Animals;

use Classes\Sounds\Woof;

class Mops extends Dog
{
    public function __construct()
    {
        $this->sound = new Woof();
    }
}
<?php

namespace Classes\Animals;

use Classes\Sounds\Woof;
use Classes\Hunts\Hunt;

class Taksa extends Dog
{
    public function __construct()
    {
        $this->sound = new Woof();
        $this->hunt = new Hunt();
    }
}
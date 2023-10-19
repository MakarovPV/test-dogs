<?php

namespace Classes\Animals;

use Classes\Hunts\Hunt;
use Classes\Sounds\Woof;

class ShibaInu extends Dog
{
    public function __construct()
    {
        $this->sound = new Woof();
        $this->hunt = new Hunt();
    }
}
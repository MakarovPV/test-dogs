<?php

namespace Classes\Animals;

use Classes\Sounds\Sound;
use Classes\Hunts\Hunt;

abstract class Dog
{
    protected Sound|string $sound = 'makes no sounds';
    protected Hunt|string $hunt = 'does not hunt';

    public function sound()
    {
        return is_object($this->sound) ? $this->sound->sound() : $this->sound;
    }

    public function hunt()
    {
        return is_object($this->hunt) ? $this->hunt->hunt() : $this->hunt;
    }
}
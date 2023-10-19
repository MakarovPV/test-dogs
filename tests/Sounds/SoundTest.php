<?php

namespace Tests\Sounds;

use Classes\Sounds\Sound;
use PHPUnit\Framework\TestCase;

abstract class SoundTest extends TestCase
{
    protected Sound $sound;

    abstract public function testSoundSuccess();
    abstract public function testSoundFailed();
    abstract public function testInstanceOfInterfaceSuccess();
}
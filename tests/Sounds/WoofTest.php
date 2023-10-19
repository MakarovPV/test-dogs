<?php

namespace Tests\Sounds;

use Classes\Sounds\Sound;
use Classes\Sounds\Woof;

class WoofTest extends SoundTest
{
    protected function setUp(): void
    {
        $this->sound = new Woof();
    }

    public function testSoundSuccess()
    {
        $this->assertEquals('woof!', $this->sound->sound());
    }

    public function testSoundFailed()
    {
        $this->assertNotEquals('squeak!', $this->sound->sound());
    }

    public function testInstanceOfInterfaceSuccess()
    {
        $this->assertInstanceOf(Sound::class, $this->sound);
    }
}
<?php

namespace Tests\Sounds;

use Classes\Sounds\Sound;
use Classes\Sounds\Squeak;

class SqueakTest extends SoundTest
{
    protected function setUp(): void
    {
        $this->sound = new Squeak();
    }

    public function testSoundSuccess()
    {
        $this->assertEquals('squeak!', $this->sound->sound());
    }

    public function testSoundFailed()
    {
        $this->assertNotEquals('woof!', $this->sound->sound());
    }

    public function testInstanceOfInterfaceSuccess()
    {
        $this->assertInstanceOf(Sound::class, $this->sound);
    }
}
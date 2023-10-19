<?php

namespace Tests\Dogs;

use Classes\Animals\ToyLabrador;

class ToyLabradorTest extends DogTest
{
    protected function setUp(): void
    {
        $this->dog = new ToyLabrador();
    }

    public function testSoundSuccess()
    {
        $this->assertEquals('makes no sounds', $this->dog->sound());
    }

    public function testSoundError()
    {
        $this->assertNotEquals('squeak!', $this->dog->sound());
        $this->assertNotEquals('woof!', $this->dog->sound());
    }

    public function testHuntSuccess()
    {
        $this->assertEquals('does not hunt', $this->dog->hunt());
    }

    public function testHuntError()
    {
        $this->assertNotEquals('hunts', $this->dog->hunt());
    }
}
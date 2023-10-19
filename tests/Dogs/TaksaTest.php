<?php

namespace Tests\Dogs;

use Classes\Animals\Taksa;

class TaksaTest extends DogTest
{
    protected function setUp(): void
    {
        $this->dog = new Taksa();
    }

    public function testSoundSuccess()
    {
        $this->assertEquals('woof!', $this->dog->sound());
    }

    public function testSoundError()
    {
        $this->assertNotEquals('squeak!', $this->dog->sound());
    }

    public function testSoundEmptyError()
    {
        $this->assertNotEquals('makes no sounds', $this->dog->sound());
    }

    public function testHuntSuccess()
    {
        $this->assertEquals('hunts', $this->dog->hunt());
    }

    public function testHuntError()
    {
        $this->assertNotEquals('does not hunt', $this->dog->hunt());
    }
}
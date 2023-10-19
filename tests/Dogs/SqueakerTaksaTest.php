<?php

namespace Tests\Dogs;

use Classes\Animals\SqueakerTaksa;

class SqueakerTaksaTest extends DogTest
{
    protected function setUp(): void
    {
        $this->dog = new SqueakerTaksa();
    }

    public function testSoundSuccess()
    {
        $this->assertEquals('squeak!', $this->dog->sound());
    }

    public function testSoundError()
    {
        $this->assertNotEquals('woof!', $this->dog->sound());
    }

    public function testSoundEmptyError()
    {
        $this->assertNotEquals('makes no sounds', $this->dog->sound());
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
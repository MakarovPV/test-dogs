<?php

namespace Tests\Dogs;

use Classes\Animals\Mops;

class MopsTest extends DogTest
{
    protected function setUp(): void
    {
        $this->dog = new Mops();
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
        $this->assertEquals('does not hunt', $this->dog->hunt());
    }

    public function testHuntError()
    {
        $this->assertNotEquals('hunts', $this->dog->hunt());
    }
}
<?php

namespace Tests\Dogs;

use Classes\Animals\Dog;
use PHPUnit\Framework\TestCase;

abstract class DogTest extends TestCase
{
    protected Dog $dog;

    abstract public function testSoundSuccess();
    abstract public function testSoundError();
    abstract public function testHuntSuccess();
    abstract public function testHuntError();
}

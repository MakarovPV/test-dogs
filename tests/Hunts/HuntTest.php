<?php

namespace Tests\Hunts;

use Classes\Hunts\Hunt;
use PHPUnit\Framework\TestCase;

class HuntTest extends TestCase
{
    protected Hunt $hunt;

    protected function setUp(): void
    {
        $this->hunt = new Hunt();
    }

    public function testHuntSuccess()
    {
        $this->assertEquals('hunts', $this->hunt->hunt());
    }

    public function testHuntError()
    {
        $this->assertNotEquals('random string', $this->hunt->hunt());
    }
}
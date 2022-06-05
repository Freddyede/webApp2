<?php

namespace App\Tests\Unit;

use PHPUnit\Framework\TestCase;

class HomeTest extends TestCase {
    public function testFailed() {
        $this->assertEquals(2, 1+1);
    }
}
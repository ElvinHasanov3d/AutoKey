<?php
/**
 * Tests for AutoKey
 */

use PHPUnit\Framework\TestCase;
use Autokey\Autokey;

class AutokeyTest extends TestCase {
    private Autokey $instance;

    protected function setUp(): void {
        $this->instance = new Autokey(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Autokey::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

<?php

declare(strict_types=1);

namespace Tests\Stack\Complete;

use Exercises\Stack\Complete\StackComplete;
use PHPUnit\Framework\TestCase;
use function method_exists;

final class StackCompleteTest extends TestCase
{
    /** @var StackComplete */
    private $stack;

    protected function setUp(): void
    {
        $this->stack = new StackComplete();
    }

    public function testHasMethods(): void
    {
        self::markTestSkipped();
        self::assertTrue(
            method_exists(StackComplete::class, 'push'),
            'Class does not have method push'
        );
        self::assertTrue(
            method_exists(StackComplete::class, 'pop'),
            'Class does not have method pop'
        );
        self::assertTrue(
            method_exists(StackComplete::class, 'peek'),
            'Class does not have method peek'
        );
    }

    public function testCanCreateObject(): void
    {
        self::markTestSkipped();
        self::assertIsObject($this->stack);
    }

    public function testCanPush(): void
    {
        self::markTestSkipped();
        $this->stack->push(1);
        $this->stack->push(2);
        $this->stack->push(3);
        self::assertTrue(true);
    }

    public function testCanPop(): void
    {
        self::markTestSkipped();
        $this->stack->push(1);
        $this->stack->push(2);
        $this->stack->push(3);
        self::assertSame(3, $this->stack->pop());
        self::assertSame(2, $this->stack->pop());
        self::assertSame(1, $this->stack->pop());
        self::assertNull($this->stack->pop());
    }

    public function testCanPeek(): void
    {
        self::markTestSkipped();
        self::assertNull($this->stack->peek());
        $this->stack->push(1);
        $this->stack->push(2);
        $this->stack->push(3);

        $this->stack->pop();
        $this->stack->push(1);

        self::assertSame(1, $this->stack->peek());
    }
}

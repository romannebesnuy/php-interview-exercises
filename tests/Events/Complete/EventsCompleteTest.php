<?php

declare(strict_types=1);

namespace Tests\Events\Complete;

use Exercises\Events\Complete\EventsComplete;
use PHPUnit\Framework\TestCase;
use function method_exists;

final class EventsCompleteTest extends TestCase
{
    public function testHasProperty(): void
    {
        self::markTestSkipped();
        self::assertClassHasAttribute('events', EventsComplete::class);
    }

    public function testHasMethods(): void
    {
        self::markTestSkipped();
        self::assertTrue(
            method_exists(EventsComplete::class, 'on'),
            'Class does not have method on'
        );
        self::assertTrue(
            method_exists(EventsComplete::class, 'fire'),
            'Class does not have method fire'
        );
        self::assertTrue(
            method_exists(EventsComplete::class, 'off'),
            'Class does not have method off'
        );
    }

    public function testOnAndFire(): void
    {
        self::markTestSkipped();
        $counter = 0;
        $events = new EventsComplete();

        $callback = static function () use (&$counter): void {
            ++$counter;
        };

        $events->on('load', $callback);
        $events->fire('load');

        self::assertEquals(1, $counter);
    }

    public function testOnAndFireMultipleCallbacks(): void
    {
        self::markTestSkipped();
        $counter = 0;
        $events = new EventsComplete();
        $callback1 = static function () use (&$counter): void {
            ++$counter;
        };
        $callback2 = static function () use (&$counter): void {
            ++$counter;
        };

        $events->on('load', $callback1);
        $events->on('load', $callback2);
        $events->fire('load');

        self::assertEquals(2, $counter);
    }

    public function testOnAndFireMultipleTimes(): void
    {
        self::markTestSkipped();
        $counter = 0;
        $events = new EventsComplete();
        $callback1 = static function () use (&$counter): void {
            ++$counter;
        };
        $callback2 = static function () use (&$counter): void {
            ++$counter;
        };

        $events->on('load', $callback1);
        $events->on('load', $callback2);
        $events->fire('load');
        $events->fire('load');
        $events->fire('load');

        self::assertEquals(6, $counter);
    }

    public function testOnAndFireWithDifferentNames(): void
    {
        self::markTestSkipped();
        $counter = 0;
        $events = new EventsComplete();
        $callback1 = static function () use (&$counter): void {
            ++$counter;
        };
        $callback2 = static function () use (&$counter): void {
            ++$counter;
        };

        $events->on('load', $callback1);
        $events->on('visit', $callback2);
        $events->on('load', $callback2);
        $events->fire('load');
        $events->fire('visit');
        $events->fire('load');

        self::assertEquals(5, $counter);
    }

    public function testOff(): void
    {
        self::markTestSkipped();
        $counter = 0;
        $events = new EventsComplete();
        $callback1 = static function () use (&$counter): void {
            ++$counter;
        };
        $callback2 = static function () use (&$counter): void {
            ++$counter;
        };

        $events->on('load', $callback1);
        $events->on('visit', $callback2);
        $events->on('load', $callback2);

        $events->off('load');

        $events->fire('load');
        $events->fire('visit');
        $events->fire('load');

        self::assertEquals(1, $counter);
    }
}

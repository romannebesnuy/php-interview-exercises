<?php

declare(strict_types=1);

namespace Tests\Anagram\Complete;

use Exercises\Anagram\Complete\AnagramComplete;
use PHPUnit\Framework\TestCase;

final class AnagramCompleteTest extends TestCase
{
    public function testCanCheckString1(): void
    {
        self::markTestSkipped();
        self::assertTrue(AnagramComplete::check('rail safety', 'fairy tales'));
    }

    public function testCanCheckString2(): void
    {
        self::markTestSkipped();
        self::assertTrue(AnagramComplete::check('Elvis', 'lives'));
    }

    public function testCanCheckString3(): void
    {
        self::markTestSkipped();
        self::assertFalse(AnagramComplete::check('roast beef', 'goat roast'));
    }
}

<?php

declare(strict_types=1);

namespace Tests\Search\Complete;

use Exercises\Search\Complete\SearchComplete;
use PHPUnit\Framework\TestCase;
use function method_exists;

final class SearchCompleteTest extends TestCase
{
    public function testHasMethods(): void
    {
        self::markTestSkipped();
        self::assertTrue(
            method_exists(SearchComplete::class, 'linear'),
            'Class does not have static method linear'
        );
        self::assertTrue(
            method_exists(SearchComplete::class, 'binary'),
            'Class does not have static method binary'
        );
    }

    public function testLinear(): void
    {
        self::markTestSkipped();
        self::assertSame(
            5,
            SearchComplete::linear([34, 51, 1, 2, 3, 45, 56, 687], 45)
        );
        self::assertNull(
            SearchComplete::linear([34, 51, 1, 2, 3, 45, 56, 687], 100)
        );
        self::assertNull(SearchComplete::linear([], 100));
    }

    public function testBinary(): void
    {
        self::markTestSkipped();
        self::assertSame(
            5,
            SearchComplete::binary([34, 51, 1, 2, 3, 45, 56, 687], 45)
        );
        self::assertNull(
            SearchComplete::binary([34, 51, 1, 2, 3, 45, 56, 687], 100)
        );
        self::assertNull(SearchComplete::binary([], 100));
    }

    public function testNaive(): void
    {
        self::markTestSkipped();
        self::assertSame(3, SearchComplete::naive('ox mox pox', 'ox'));
        self::assertSame(0, SearchComplete::naive('ox mox pox', 'box'));
    }
}

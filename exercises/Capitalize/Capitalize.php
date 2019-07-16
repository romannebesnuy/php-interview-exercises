<?php

declare(strict_types=1);

namespace Exercises\Capitalize;

/**
 * Capitalize each word.
 *
 * @example Capitalize::get('hello there') === 'Hello There'
 * @example Capitalize::get("hey, so it's working!") === "Hey, So It's Working!"
 */
final class Capitalize
{
    public static function get(string $string)
    {
        return self::try2($string);
    }

    protected static function try1(string $string)
    {
        return ucwords($string);
    }

    protected static function try2(string $string)
    {
        return implode(' ', array_map('ucfirst', explode(' ', $string)));
    }
}

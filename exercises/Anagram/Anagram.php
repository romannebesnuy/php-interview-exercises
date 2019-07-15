<?php

declare(strict_types=1);

namespace Exercises\Anagram;

use phpDocumentor\Reflection\Types\Boolean;

/**
 * Two strings are anagrams if same characters are used in both.
 * Only case insensitive characters, not spaces or punctuation should be counted.
 *
 * @example Anagram::check('rail safety', 'fairy tales') === true
 * @example Anagram::check('roast beef', 'goat roast') === false
 * @example Anagram::check('Elvis, 'lives') === true
 */
final class Anagram
{
    public static function check(string $first, string $second)
    {
        return self::try1($first, $second);
    }

    protected static function try1(string $first, string $second)
    {
        $first = array_filter(array_map('trim', str_split(strtolower($first))));
        $second = array_filter(array_map('trim', str_split(strtolower($second))));

        return empty(array_diff($first, $second));
    }
}

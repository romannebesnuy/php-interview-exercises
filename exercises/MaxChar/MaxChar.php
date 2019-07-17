<?php

declare(strict_types=1);

namespace Exercises\MaxChar;

/**
 * Find the most used character.
 *
 * @example MaxChar::get('qqweqrty')  === 'q'
 * @example MaxChar::get('apple 2202')  === '2'
 */
final class MaxChar
{
    public static function get(string $string)
    {
        return self::try2($string);
    }

    protected static function try1($string)
    {
        $array = array_count_values(array_filter(str_split($string)));
        return (string) array_keys($array, max($array))[0];
    }

    protected static function try2($string)
    {
        $array = array_count_values(array_filter(str_split($string)));
        return (string) array_search(max($array), $array);
    }
}

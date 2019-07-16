<?php

//declare(strict_types=1);

namespace Exercises\ArrayGroup;

/**
 * Divide the array into many sub-arrays,
 * where each subarray is at most of group size.
 *
 * @example ArrayGroup::group([1, 2, 3, 4, 5], 2) -> [[ 1, 2], [3, 4], [5]]
 * @example ArrayGroup::group([1, 2, 3, 4, 5], 3) -> [[ 1, 2, 3], [4, 5]]
 * @example ArrayGroup::group([1, 2, 3, 4, 5], 6) -> [[ 1, 2, 3, 4, 5]]
 */
final class ArrayGroup
{
    public static function group(array $array, int $size)
    {
        return self::try3($array, $size);
    }

    protected static function try1(array $array, int $size)
    {
        return array_chunk($array, $size);
    }

    protected static function try2(array $array, int $size)
    {
        $count = round(count($array) / $size);
        $array_new = [];

        for ($i = 1; $i <= $count; ++$i) {
            list($array_slice, $array) = self::slice2($array, $size);
            $array_new[] = $array_slice;
        }

        return $array_new;
    }

    protected static function slice2(array $array, int $size)
    {
        $array_slice = array_slice($array, 0, $size);
        $array_last = array_diff($array, $array_slice);

        return [$array_slice, $array_last];
    }

    protected static function try3(array $array, int $size)
    {
        $a = [];
        self::slice3($array, $size, $a);
        return $a;
    }

    protected static function slice3(array $array, int $size, &$a)
    {
        if (count($array) > $size) {
            $array_slice = array_slice($array, 0, $size);
            $array_last = array_slice($array, $size);

            $a[] = $array_slice;

            self::slice3($array_last, $size, $a);
        } else {
            $a[] = $array;
        }

    }
}

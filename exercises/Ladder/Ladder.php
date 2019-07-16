<?php

declare(strict_types=1);

namespace Exercises\Ladder;

/**
 * Print a ladder.
 *
 * @example Ladder::print(3)  -> '#  '
 *                               '## '
 *                               '###'
 */
final class Ladder
{
    public static function print(int $level)
    {
        return self::try4($level);
    }

    protected static function try1(int $level)
    {
        for ($i = 1; $i <= $level; ++$i) {
            echo implode('', array_fill(0, $i, '#')) . implode('', array_fill(0, ($level - $i), ' '));
        }
    }

    protected static function try2(int $level)
    {
        for ($i = 1; $i <= $level; ++$i) {
            echo implode('', array_merge(array_fill(0, $i, '#'), array_fill(0, ($level - $i), ' ')));
        }
    }

    protected static function try3(int $level)
    {
        for ($i = 1; $i <= $level; ++$i) {
            for ($j = 1; $j <= $level; ++$j) {
                echo ($j <= $i ) ? '#' : ' ';
            }
        }
    }

    protected static function try4(int $level)
    {
        for ($i = 1; $i <= $level; ++$i) {
            echo str_repeat('#', $i) . str_repeat(' ', $level - $i);
        }
    }
}

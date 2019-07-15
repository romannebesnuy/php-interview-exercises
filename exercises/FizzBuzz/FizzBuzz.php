<?php

declare(strict_types=1);

namespace Exercises\FizzBuzz;

/**
 * Print numbers from 1 to n.
 * When n is divisible by 3 echo 'fizz'.
 * When n is divisible by 5 echo 'buzz.
 * When n is divisible by both 3 and 5 echo 'fizzbuzz'.
 *
 * @example FizzBuzz::print('5') -> 1, 2, 'fizz', 4, 'buzz'
 */
final class FizzBuzz
{
    public static function print(int $limit)
    {
        return self::try6($limit);
    }

    protected static function try1($l)
    {
        for ($i=1; $i<= $l; ++$i) {
            if ($i % (3 * 5) === 0) {
                echo 'fizzbuzz';
            } elseif ($i % 3 === 0) {
                echo 'fizz';
            } elseif ($i % 5 === 0) {
                echo 'buzz';
            } else {
                echo $i;
            }
        }
    }

    protected static function try2($l)
    {
        for ($i=1; $i<= $l; ++$i) {
            $output = '';
            if ($i % 3 === 0) {
                $output .= 'fizz';
            }

            if ($i % 5 === 0) {
                $output .= 'buzz';
            }

            if ($output === '') {
                $output = $i;
            }

            echo $output;
        }
    }

    protected static function try3($l)
    {
        $i = 0; while (++$i <= $l) echo $i%3 == 0 ? ($i%5 == 0 ? 'fizzbuzz': 'fizz') : ($i%5 == 0 ? 'buzz': $i);
    }

    protected static function try4($l)
    {
        $i = 0; while (++$i <= $l) echo !($i%3) ? (!($i%5) ? 'fizzbuzz': 'fizz') : (!($i%5) ? 'buzz': $i);
    }

    protected static function try5($l)
    {
        $i=0;while(++$i<=$l)echo((!($i%3)?'fizz':'').(!($i%5)?'buzz':''))?:$i;
    }

    protected static function try6($l)
    {
        $i=0;while($i++<$l)echo($i%3?'':'fizz').($i%5?'':'buzz')?:$i;
    }

    protected static function try7($l)
    {
        error_reporting(0);
        while($i++<$l)echo($i%3?'':'fizz').($i%5?'':'buzz')?:$i;
    }

    protected static function try8($l)
    {
        error_reporting(0);
        while($i++<$l)echo$i%3?!$$i=$i:fizz,$i%5?$$i:buzz;
    }

}

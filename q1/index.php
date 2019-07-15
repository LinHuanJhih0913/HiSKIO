<?php

class Solution
{
    CONST ONE_STEP = 1;
    CONST TWO_STEP = 2;

    public function howManyWays(int $n)
    {
        if ($n <= 0) {
            return 'input error';
        }

        $counter = 0;

        while (true) {
            if ((static::TWO_STEP * $counter + static::ONE_STEP * ($n - static::TWO_STEP * $counter)) === $n) {
                if ((static::ONE_STEP * ($n - static::TWO_STEP * $counter)) < 0) {
                    return $counter;
                }
                $counter++;
            }
        }

        return $counter;
        /**
         * 令 x 是兩層階梯的數量, y 是一層階梯的數量
         * 2x + 1y = n
         * 假設 n = 10, x = 0, x auto increment
         * 2 * 0 + 1 * 10 = 10
         * 2 * 1 + 1 * 8 = 10
         * 2 * 2 + 1 * 6 = 10
         * 2 * 3 + 1 * 4 = 10
         * 2 * 4 + 1 * 2 = 10
         * 2 * 5 + 1 * 0 = 10
         * 2 * 6 + 1 * -2 = 10, 但是階梯沒有負數
         * 仔細再看一下，
         * 2 * 0 + 1 * (10 - 2 * 0) = 10
         * 2 * 1 + 1 * (10 - 2 * 1) = 10
         * 2 * 2 + 1 * (10 - 2 * 2) = 10
         * 2 * 3 + 1 * (10 - 2 * 3) = 10
         * 2 * 4 + 1 * (10 - 2 * 4) = 10
         * 2 * 5 + 1 * (10 - 2 * 5) = 10
         * 不可能是這樣 y = 0, y auto increment
         * 2 * 5 + 1 * 0 = 10
         * 2 * 9/2 + 1 * 1 = 10, x 的數量皆是正整數
         */
    }

    public function result($n)
    {
        return $n <= 0 ? 'input error' : floor($n / 2 + 1);
    }
}

var_dump((new Solution())->howManyWays(10));
var_dump((new Solution())->result(10));
var_dump((new Solution())->howManyWays(11));
var_dump((new Solution())->result(11));

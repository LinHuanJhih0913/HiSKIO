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

    public function ans(int $n)
    {
        /**
         * n = 1, (1), 1
         * n = 2, (11, 2), 2
         * n = 3, (111, 12, 21), 3
         * n = 4, (1111, 112, 121, 211, 22), 5
         * n = 5, (11111, 1112, 1121, 1211, 2111, 122, 212, 221), 8
         * n = 6, 5 + 8, 13
         */
        /**
         * f1 = 1
         * f2 = 2
         * fn = fn-1 + fn-2, n
         */
        $f = [0, 1, 2];

        if ($n === 0 || $n === 1 || $n === 2) {
            return $f[$n];
        }

        for ($i = 3; $i < $n; $i++) {
            $f[$i] = $f[$i - 1] + $f[$i - 2];
        }

        return $f[$n - 1] + $f[$n - 2];
    }
}

var_dump((new Solution())->ans(5));

<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/12/23
 * Time: 7:32
 */

namespace Strategy;

class MyStrategyB implements IMyStrategy
{
    public function check(int $point): int
    {
        if ($point > 50) {
            return 1;
        } elseif ($point > 30) {
            return 0;
        } else {
            return -1;
        }
    }
}
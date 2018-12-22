<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/12/23
 * Time: 7:29
 */

namespace Strategy;

class MyStrategyA implements IMyStrategy
{
    public function check(int $point): int
    {
        if ($point > 50) {
            return 1;
        } else {
            return -1;
        }
    }
}
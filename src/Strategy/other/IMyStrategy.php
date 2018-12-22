<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/12/23
 * Time: 7:22
 */

namespace Strategy;

interface IMyStrategy
{
    public function check(int $point): int;
}
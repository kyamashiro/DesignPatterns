<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/12/23
 * Time: 13:51
 */

namespace Strategy\TYDP\After;

interface Dialect
{
    public function sayWelcome(): void;

    public function sayThanks(): void;
}
<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/12/23
 * Time: 13:57
 */

namespace Strategy\TYDP\After;

class NagoyaDialect implements Dialect
{
    public function sayWelcome(): void
    {
        echo "いりゃあせ";
    }

    public function sayThanks(): void
    {
        echo "ありがとう";
    }
}
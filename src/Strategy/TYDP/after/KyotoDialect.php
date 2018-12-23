<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/12/23
 * Time: 13:53
 */

namespace Strategy\TYDP\After;

class KyotoDialect implements Dialect
{
    public function sayWelcome(): void
    {
        echo "おいでやす";
    }

    public function sayThanks(): void
    {
        echo "おおきに";
    }
}
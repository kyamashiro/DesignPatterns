<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/12/23
 * Time: 14:34
 */

namespace Strategy\TYDP\After;

class Client
{
    public function anOperation(int $dialect)
    {
        $client = new DialectSpeaker($dialect);
        $client->sayWelcome();
        $client->sayThanks();
    }
}
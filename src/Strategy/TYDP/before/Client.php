<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/12/23
 * Time: 13:26
 */

namespace Strategy\TYDP\Before;

class Client
{
    public function anOperation()
    {
        $kyotoPerson = new DialectSpeaker(DialectSpeaker::KYOTO);
        $kyotoPerson->sayWelcome();
        $kyotoPerson->sayThanks();
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/12/23
 * Time: 13:28
 */

namespace Strategy\TYDP\Before;

class DialectSpeaker
{
    const KYOTO = 1;
    const NAGOYA = 2;

    /**
     * @var int
     */
    private $dialect;

    /**
     * DialectSpeaker constructor.
     * @param $dialect
     */
    public function __construct(int $dialect)
    {
        $this->dialect = $dialect;
    }

    public function sayWelcome()
    {
        switch ($this->dialect) {
            case self::KYOTO :
                echo "おいでやす";
                break;
            case self::NAGOYA :
                echo "いりゃあせ";
                break;
        }
    }

    public function sayThanks()
    {
        switch ($this->dialect) {
            case self::KYOTO :
                echo "おおきに";
                break;
            case self::NAGOYA :
                echo "ありがとう";
                break;
        }
    }
}
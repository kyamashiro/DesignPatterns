<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/12/23
 * Time: 13:59
 */

namespace Strategy\TYDP\After;

class DialectSpeaker
{
    const KYOTO = 1;
    const NAGOYA = 2;

    /**
     * @var Dialect
     */
    private $dialect;

    /**
     * DialectSpeaker constructor.
     * @param int $dialect
     */
    public function __construct(int $dialect)
    {
        switch ($dialect) {
            case self::KYOTO :
                $this->dialect = new KyotoDialect();
                break;
            case self::NAGOYA :
                $this->dialect = new NagoyaDialect();
                break;
        }
    }

    public function sayWelcome()
    {
        $this->dialect->sayWelcome();
    }

    public function sayThanks()
    {
        $this->dialect->sayThanks();
    }
}
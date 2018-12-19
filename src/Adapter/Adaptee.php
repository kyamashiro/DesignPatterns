<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/12/19
 * Time: 21:36
 */

namespace App;

class Adaptee
{
    /**
     * @var string
     */
    private $string;

    /**
     * Banner constructor.
     * @param string $string
     */
    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function showWithParen(): void
    {
        echo "({$this->string})";
    }

    public function showWithAster(): void
    {
        echo "*{$this->string}*";
    }
}
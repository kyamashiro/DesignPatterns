<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/12/19
 * Time: 21:40
 */

namespace App;

class Adapter implements Target
{
    private $adaptee;
    /**
     * Adapter constructor.
     * @param string $string
     */
    public function __construct(string $string)
    {
        $this->adaptee = new Adaptee($string);
    }

    public function printWeak(): void
    {
        $this->adaptee->showWithParen();
    }

    public function printStrong(): void
    {
        $this->adaptee->showWithAster();
    }
}
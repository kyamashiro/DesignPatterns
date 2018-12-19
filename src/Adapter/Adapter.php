<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/12/19
 * Time: 21:40
 */

namespace App;

class Adapter extends Adaptee implements Target
{
    /**
     * Adapter constructor.
     * @param string $string
     */
    public function __construct(string $string)
    {
        parent::__construct($string);
    }

    public function printWeak(): void
    {
        $this->showWithParen();
    }

    public function printStrong(): void
    {
        $this->showWithAster();
    }
}
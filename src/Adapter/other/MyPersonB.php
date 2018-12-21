<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/12/21
 * Time: 20:02
 */

namespace Other;

class MyPersonB
{
    /**
     * @var string
     */
    private $name;

    /**
     * MyPersonB constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
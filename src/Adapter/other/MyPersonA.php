<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/12/21
 * Time: 20:00
 */

namespace Adapter\Other;

class MyPersonA
{
    /**
     * @var string
     */
    private $firstName;
    /**
     * @var string
     */
    private $lastName;

    /**
     * MyPersonA constructor.
     * @param string $firstName
     * @param string $lastName
     */
    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getName(): string
    {
        return $this->getFirstName() . $this->getLastName();
    }
}
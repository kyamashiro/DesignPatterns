<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/12/21
 * Time: 22:12
 */

namespace Other;

class Adapter extends MyPersonB
{
    /**
     * @var MyPersonA
     */
    private $person;

    /**
     * Adapter constructor.
     * @param MyPersonA $person
     */
    public function __construct(MyPersonA $person)
    {
        $this->person = $person;
    }

    public function getName(): string
    {
        return $this->person->getFirstName() . $this->person->getLastName();
    }
}
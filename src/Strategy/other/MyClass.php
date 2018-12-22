<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/12/23
 * Time: 7:21
 */

namespace Strategy;

class MyClass
{
    /**
     * @var IMyStrategy
     */
    private $currentStrategy;

    /**
     * MyClass constructor.
     * @param IMyStrategy $currentStrategy
     */
    public function __construct(IMyStrategy $currentStrategy)
    {
        $this->currentStrategy = $currentStrategy;
    }

    public function changeStrategy(IMyStrategy $newStrategy)
    {
        $this->currentStrategy = $newStrategy;
    }

    public function getOpinion(int $point)
    {
        $result = $this->currentStrategy->check($point);

        if ($result > 0) {
            echo $point . " : Good";
        } elseif ($result === 0) {
            echo $point . " : So so";
        } else {
            echo $point . " : Bad";
        }
    }
}
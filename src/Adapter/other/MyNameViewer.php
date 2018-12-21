<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/12/21
 * Time: 20:01
 */

namespace Other;

class MyNameViewer
{
    /**
     * @param MyPersonB $person
     */
    public function viewName(MyPersonB $person): void
    {
        echo $person->getName();
    }
}
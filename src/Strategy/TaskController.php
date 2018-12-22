<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/12/22
 * Time: 19:35
 */

class TaskController
{
    public function process()
    {
        $myTax = $this->getTaxRulesForCountry();
        $mySO = new SalesOrder();
        $mySO->process($myTax);
    }

    private function getTaxRulesForCountry(): CalcTax
    {
        return new USTAX();
    }
}
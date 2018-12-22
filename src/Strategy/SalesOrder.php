<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/12/22
 * Time: 19:37
 */

class SalesOrder
{
    public function process(CalcTax $taxToUse)
    {
        $itemSold = new Salable;
        $qty = 0;
        $price = 0;

        $tax = $taxToUse->taxAmount($itemSold, $qty, $price);
    }
}
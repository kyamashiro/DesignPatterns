<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/12/22
 * Time: 19:44
 */

class CanTax extends CalcTax
{
    public function taxAmount(Salable $itemSold, int $qty, float $price): float
    {
        return 0.0;
    }
}
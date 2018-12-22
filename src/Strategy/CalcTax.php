<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/12/22
 * Time: 19:42
 */

abstract class CalcTax
{
    /**
     * @param Salable $itemSold 注文品名
     * @param int $qty 数量
     * @param float $price 価格
     * @return float
     */
    abstract function taxAmount(Salable $itemSold, int $qty, float $price): float;
}
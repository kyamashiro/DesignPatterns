<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/12/19
 * Time: 21:33
 */
namespace App;
interface Target
{
    public function printWeak(): void;

    public function printStrong(): void;
}
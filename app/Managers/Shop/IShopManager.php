<?php

namespace App\Managers\Shop;

use App\Services\Shop\IShopService;

interface IShopManager
{
    public function make($name): IShopService;
}

<?php

namespace Srosenthal\Walmart\Facades;

use Illuminate\Support\Facades\Facade;

class WalmartInventory extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'walmartinventory';
    }
}
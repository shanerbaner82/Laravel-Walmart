<?php

namespace Srosenthal\Walmart\Facades;

use Illuminate\Support\Facades\Facade;

class WalmartItem extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'walmartitem';
    }
}
<?php

namespace Srosenthal\Walmart\Facades;

use Illuminate\Support\Facades\Facade;

class WalmartPrice extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'walmartprice';
    }
}
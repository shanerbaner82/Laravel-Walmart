<?php

namespace Srosenthal\Walmart\Facades;

use Illuminate\Support\Facades\Facade;

class WalmartOrder extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'walmartorder';
    }
}
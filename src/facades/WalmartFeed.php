<?php

namespace Srosenthal\Walmart\Facades;

use Illuminate\Support\Facades\Facade;

class WalmartFeed extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'walmartfeed';
    }
}
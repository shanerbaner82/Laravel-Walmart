<?php
namespace Srosenthal\Walmart;

use Walmart\Feed;
use Walmart\Inventory;
use Walmart\Item;
use Walmart\Order;

class WalmartServiceProvider extends \Illuminate\Support\ServiceProvider
{

    protected $defer = true;

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/walmart.php' => config_path('walmart.php'),
        ], 'config');

    }

    public function register()
    {
        $this->app->singleton('walmartfeed', function ($app) {
            return new Feed(config('walmart'));
        });

        $this->app->singleton('walmartinventory', function ($app) {
            return new Inventory(config('walmart'));
        });

        $this->app->singleton('walmartitem', function ($app) {
            return new Item(config('walmart'));
        });

        $this->app->singleton('walmartorder', function ($app) {
            return new Order(config('walmart'));
        });

        $this->app->singleton('walmartprice', function ($app) {
            return new Order(config('walmart'));
        });
    }

    public function provides()
    {
        return ['walmartfeed', 'walmartinventory', 'walmartitem', 'walmartorder', 'walmartprice'];
    }
}
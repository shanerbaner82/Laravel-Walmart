# Walmart Partner APIs PHP SDK
This library provides an easy to use interface to [Walmart's Partner APIs](https://developer.walmartapis.com/). It is a Laravel 5.* wrapper for the Walmart Marketplace PHP SDK that you can find [here](https://github.com/fillup/walmart-partner-api-sdk-php).
## Installation
It is easiest to use [Composer](https://getcomposer.org/) to install, simply run:

    composer require srosenthal/laravel-walmart



## Usage Documentation
 Simply add the Service provider to your config/app.php
    
    Srosenthal\Walmart\WalmartServiceProvider::class
    
And add the facades to the config/app.php 'aliases':

    'WalmartFeed' => \Srosenthal\Walmart\Facades\WalmartFeed::class,
    'WalmartInventory' => \Srosenthal\Walmart\Facades\WalmartInventory::class,
    'WalmartItem' => \Srosenthal\Walmart\Facades\WalmartItem::class,
    'WalmartOrder' => \Srosenthal\Walmart\Facades\WalmartOrder::class,
    'WalmartPrice' => \Srosenthal\Walmart\Facades\WalmartPrice::class,  
    
Now you can use the facades and any of the classes found in Phillip's SDK:

    dd(WalmartFeed::list());
    
Make sure to add the following variables to your .env:

    WALMART_CONSUMER_ID
    WALMART_PRIVATE_KEY
    WALMART_CONSUMER_CHANNEL_TYPE          

## API Coverage
Currently 100% (19 of 19) are supported by this SDK

| Object    | Operation                     | SDK Class -> Method   | Unit / Int Tested   | API Docs |
|-----------|-------------------------------|-----------------------|---------------------|----------|
| Feeds     | Get all feed statuses         | Feed -> List          | Yes / Yes           |https://developer.walmartapis.com/#get-all-feed-statuses |
|           | Get a feedItems status        | Feed -> GetFeedItem   | Yes / Yes           |https://developer.walmartapis.com/#get-a-feeditems-status |
|           | Get a feed status             | Feed -> Get           | Yes / Yes           |https://developer.walmartapis.com/#get-a-feed-status |
| Items     | Get all items                 | Item -> List          | Yes / Yes           |https://developer.walmartapis.com/#get-all-items |
|           | Get an item                   | Item -> Get           | Yes / Yes           |https://developer.walmartapis.com/#get-an-item |
|           | Retire an item                | Item -> Retire        | Yes / Yes           |https://developer.walmartapis.com/#retire-an-item |
|           | Bulk create/update items      | Item -> Bulk          | Yes / Yes           |https://developer.walmartapis.com/#bulk-createupdate-items |
| Prices    | Update a price                | Price -> Update       | Yes / Yes           |https://developer.walmartapis.com/#update-a-price---v3-endpoint |
|           | Update bulk prices            | Price -> Bulk         | Yes / Yes           |https://developer.walmartapis.com/#update-bulk-prices |
| Orders    | Get all released orders       | Order -> ListReleased | Yes / Yes           |https://developer.walmartapis.com/#get-all-released-orders |
|           | Get all orders                | Order -> List         | Yes / Yes           |https://developer.walmartapis.com/#get-all-orders |
|           | Get an order                  | Order -> Get          | Yes / Yes           |https://developer.walmartapis.com/#get-an-order |
|           | Acknowledge purchase order    | Order -> Acknowledge  | Yes /               |https://developer.walmartapis.com/#acknowledging-purchase-orders |
|           | Cancel order lines            | Order -> Cancel       | Yes /               |https://developer.walmartapis.com/#cancelling-order-lines |
|           | Refund order lines            | Order -> Refund       | Yes /               |https://developer.walmartapis.com/#refunding-order-lines |
|           | Shipping notification/updates | Order -> Ship         | Yes /               |https://developer.walmartapis.com/#shipping-notificationsupdates |
| Inventory | Get inventory for an item     | Inventory -> Get      | Yes / Yes           |https://developer.walmartapis.com/#get-inventory-for-an-item |
|           | Update inventory for an item  | Inventory -> Update   | Yes / Yes           |https://developer.walmartapis.com/#update-inventory-for-an-item |
|           | Bulk update inventory         | Inventory-> Bulk      | Yes / Yes           |https://developer.walmartapis.com/#bulk-update-inventory |


## todo
 - [ ] Perform integration testing for remaining Order APIs
 - [ ] Write middleware for error response handling to parse message from response xml

## Reporting Issues
Please use Github Issues to report any problems you find or questions
about usage.

## Contributing
Pull requests are welcome for improvements to the core library, tests,
and documentation.

#  No Warranty

This package is a free distribution, provided at no cost.
It does not come with any warranty, expressed or implied.
Source code is provided for your convenience.
Walmart does not assume any responsibilities for its quality or support.

# License

The MIT License (MIT)

Copyright (c) 2019 Shane Rosenthal

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
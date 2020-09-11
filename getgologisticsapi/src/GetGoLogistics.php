<?php

namespace Adityafullstackdeveloper\GetGoLogistics;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Seshac\GetGoLogistics\GetGoLogisticsApi
 */
class GetGoLogistics extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'getgologistics';
    }
}

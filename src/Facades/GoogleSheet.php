<?php

namespace Ibnuhalimm\LaravelGoogleSheet\Facades;

use Ibnuhalimm\LaravelGoogleSheet\Service;
use Illuminate\Support\Facades\Facade;

/**
 * @see \Ibnuhalimm\LaravelGoogleSheet\Service
 */
class GoogleSheet extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Service::class;
    }
}

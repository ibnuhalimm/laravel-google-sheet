<?php

namespace Ibnuhalimm\LaravelGoogleSheet\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ibnuhalimm\LaravelGoogleSheet\Skeleton\SkeletonClass
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
        return GoogleSheet::class;
    }
}

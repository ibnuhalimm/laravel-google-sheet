<?php

namespace Ibnuhalimm\LaravelGoogleSheet\Facades;

use Illuminate\Support\Facades\Facade;
use Ibnuhalimm\LaravelGoogleSheet\GoogleSheet as IbnuhalimmGoogleSheet;

/**
 * @see \Ibnuhalimm\LaravelGoogleSheet\GoogleSheet
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
        return IbnuhalimmGoogleSheet::class;
    }
}

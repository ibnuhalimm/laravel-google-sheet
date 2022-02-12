<?php

namespace Tests;

use Ibnuhalimm\LaravelGoogleSheet\Facades\GoogleSheet;
use Ibnuhalimm\LaravelGoogleSheet\GoogleSheetServiceProvider;
use Orchestra\Testbench\TestCase as TestbenchTestCase;

abstract class TestCase extends TestbenchTestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            GoogleSheetServiceProvider::class
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'GoogleSheet' => GoogleSheet::class
        ];
    }
}
<?php

namespace Tests\Integration;

use Ibnuhalimm\LaravelGoogleSheet\Exceptions\InvalidConfiguration;
use Ibnuhalimm\LaravelGoogleSheet\Facades\GoogleSheet;
use Illuminate\Support\Facades\Storage;
use Tests\DummyData;
use Tests\TestCase;

class ServiceProviderTest extends TestCase
{
    /** @var \Tests\DummyData */
    protected $dummyData;

    public function setUp(): void
    {
        parent::setUp();

        $this->dummyData = new DummyData();

        Storage::disk('local')
            ->put('google-sheet/credentials.json', json_encode($this->dummyData->getCredentials()));;
    }

    /** @test */
    public function it_should_throw_exception_if_credentials_not_provided()
    {
        $this->app['config']->set('google-sheet.service_account_json', '');

        $this->expectException(InvalidConfiguration::class);

        GoogleSheet::useDocument($this->dummyData->getSpreadSheetId())
            ->fetchData($this->dummyData->getSheetName(), $this->dummyData->getCellRange());
    }

    /** @test */
    public function it_should_throw_exception_if_no_one_scope_available()
    {
        $this->app['config']->set('google-sheet.scopes', []);

        $this->expectExceptionMessage('You must specify at least one scope.');

        GoogleSheet::useDocument($this->dummyData->getSpreadSheetId())
            ->fetchData($this->dummyData->getSheetName(), $this->dummyData->getCellRange());
    }
}
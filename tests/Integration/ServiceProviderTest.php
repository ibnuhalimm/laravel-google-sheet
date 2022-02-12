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
    public function it_allows_credentials_as_json_file()
    {
        Storage::fake('testing-storage');
        Storage::disk('testing-storage')
            ->put('credentials.json', json_encode($this->dummyData->getCredentials()));

        $credentialsPath = 'framework/testing-disk/credentials.json';
        $this->app['config']
            ->set('google-sheet.service_account_json', $credentialsPath);

        $googleSheet = $this->app['GoogleSheet'];
        $this->assertInstanceOf(GoogleSheet::class, $googleSheet);
    }
}
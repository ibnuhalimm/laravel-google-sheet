<?php

namespace Tests\Unit;

use Ibnuhalimm\LaravelGoogleSheet\Service;
use Mockery;
use PHPUnit\Framework\TestCase;
use Tests\DummyData;

class ServiceTest extends TestCase
{
    /** @var \Ibnuhalimm\LaravelGoogleSheet\Client|\Mockery\Mock */
    protected $client;

    /** @var \Ibnuhalimm\LaravelGoogleSheet\Service */
    protected $service;

    /** @var \Tests\DummyData */
    protected $dummyData;

    public function setUp(): void
    {
        /** @var \Ibnuhalimm\LaravelGoogleSheet\Client */
        $this->client = Mockery::mock(Client::class);

        $this->service = new Service($this->client);

        $this->dummyData = new DummyData();
    }

    public function tearDown(): void
    {
        Mockery::close();
    }

    /** @test */
    public function it_can_fetch_cell_data()
    {
        $mockArguments = [
            $this->dummyData->getSpreadSheetId(),
            $this->dummyData->getSheetName() . '!' . $this->dummyData->getCellRange(),
        ];

        $expectedData = [
            [
                "Alexandra",
                "Female",
                "4. Senior",
                "CA",
                "English",
                "Drama Club",
            ],
        ];

        $this->client
            ->shouldReceive('getCellValues')->withArgs($mockArguments)
            ->once()
            ->andReturn($expectedData);

        $this->service
            ->useDocument($this->dummyData->getSpreadSheetId())
            ->fetchData($this->dummyData->getSheetName(), $this->dummyData->getCellRange());

        $this->assertIsArray($expectedData);
    }
}
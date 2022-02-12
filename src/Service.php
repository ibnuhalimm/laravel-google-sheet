<?php

namespace Ibnuhalimm\LaravelGoogleSheet;

class Service
{
    /** @var Client */
    protected $client;

    /** @var string */
    protected $spreadSheetId;

    /**
     * Create new instance
     *
     * @param  Client  $client
     * @return void
     */
    public function __construct($client)
    {
        $this->client = $client;
    }

    /**
     * Set spread sheet id
     *
     * @param  string  $spreadSheetId
     * @return self
     */
    public function useDocument(string $spreadSheetId)
    {
        $this->spreadSheetId = $spreadSheetId;

        return $this;
    }

    /**
     * Merge sheet name with cell range
     *
     * @param  string  $sheetName
     * @param  string  $cellRange
     * @return string
     */
    public function mergeSheetAndCellRange(string $sheetName, string $cellRange)
    {
        return $sheetName . '!' . $cellRange;
    }

    /**
     * Get the values
     *
     * @param  string  $sheetName
     * @param  string  $cellRange
     * @return array
     */
    public function fetchData(string $sheetName, string $cellRange)
    {
        $mergedCellRange = $this->mergeSheetAndCellRange($sheetName, $cellRange);

        return $this->client->getCellValues($this->spreadSheetId, $mergedCellRange);
    }
}

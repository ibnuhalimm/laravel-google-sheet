<?php

namespace Ibnuhalimm\LaravelGoogleSheet;

use Google_Client;
use Google_Service_Sheets;

class Client
{
    /** @var ConfigRepository */
    protected $config;

    /** @var Google_Client */
    protected $google;

    /**
     * Create new instance
     *
     * @param  ConfigRepository  $config
     * @return void
     */
    public function __construct(ConfigRepository $config)
    {
        $this->config = $config;

        $this->google = new Google_Client();
        $this->google->setAuthConfig($this->config->getServiceAccountCredentials());
        $this->google->setScopes($this->config->getScopes());
    }

    /**
     * Make Google_Service_Sheets object
     *
     * @return Google_Service_Sheet
     */
    public function makeService()
    {
        return new Google_Service_Sheets($this->google);
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
     * @param  string  $spreadSheetId
     * @param  string  $sheetName
     * @param  string  $cellRange
     * @return array
     */
    public function getCellValues($spreadSheetId, $sheetName, $cellRange)
    {
        $mergedCellRange = $this->mergeSheetAndCellRange($sheetName, $cellRange);
        $response = $this->makeService()->spreadsheets_values->get($spreadSheetId, $mergedCellRange);

        return $response->getValues();
    }
}
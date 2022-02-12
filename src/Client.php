<?php

namespace Ibnuhalimm\LaravelGoogleSheet;

class Client
{
    /** @var ConfigRepository */
    protected $config;

    /** @var \Google_Client */
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

        $this->google = new \Google_Client();
        $this->google->setApplicationName($this->config->getAppName());
        $this->google->setScopes($this->config->getScopes());
        $this->google->setAuthConfig($this->config->getServiceAccountCredentials());
        $this->google->setAccessType($this->config->getAccessType());
        $this->google->setPrompt($this->config->getPrompt());
    }

    /**
     * Make Google_Service_Sheets object
     *
     * @return \Google_Service_Sheet
     */
    public function makeService()
    {
        return new \Google_Service_Sheets($this->google);
    }

    /**
     * Get the values
     *
     * @param  string  $spreadSheetId
     * @param  string  $cellRange
     * @return array
     */
    public function getCellValues($spreadSheetId, $cellRange)
    {
        $response = $this->makeService()->spreadsheets_values->get($spreadSheetId, $cellRange);

        return $response->getValues();
    }
}
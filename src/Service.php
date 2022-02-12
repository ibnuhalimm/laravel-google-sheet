<?php

namespace Ibnuhalimm\LaravelGoogleSheet;

class Service
{
    /** @var \Google_Client */
    protected $client;

    /** @var \Google_Sheet_Service */
    protected $service;

    /** @var string */
    protected $spreadSheetId;

    /** @var string */
    protected $cellRange;

    /**
     * Create new instance
     *
     * @param  ConfigRepository  $config
     * @return void
     */
    public function __construct(ConfigRepository $config)
    {
        $this->client = new \Google_Client();
        $this->client->setApplicationName($config->getAppName());
        $this->client->setScopes($config->getScopes());
        $this->client->setAuthConfig($config->getServiceAccountCredentials());
        $this->client->setAccessType($config->getAccessType());
        $this->client->setPrompt($config->getPrompt());
    }

    /**
     * Make Google_Service_Sheets instance
     *
     * @return self
     */
    public function service()
    {
        $this->service = new \Google_Service_Sheets($this->client);

        return $this;
    }

    /**
     * Set the spreadsheetId
     *
     * @param  string  $spreadSheetId
     * @return self
     */
    public function spreadSheet(string $spreadSheetId)
    {
        $this->spreadSheetId = $spreadSheetId;

        return $this;
    }

    /**
     * Set cell range with sheet name
     *
     * @param  string  $cellRange
     * @return self
     */
    public function cellRange(string $cellRange)
    {
        $this->cellRange = $cellRange;

        return $this;
    }

    /**
     * Get the values
     *
     * @return array
     */
    public function get()
    {
        $response = $this->service->spreadsheets_values->get($this->spreadSheetId, $this->cellRange);

        return $response->getValues();
    }
}

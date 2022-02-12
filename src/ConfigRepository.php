<?php

namespace Ibnuhalimm\LaravelGoogleSheet;

use Ibnuhalimm\LaravelGoogleSheet\Exceptions\InvalidConfiguration;

class ConfigRepository
{
    /** @var array */
    private $config;

    /**
     * Create new instance
     *
     * @param  array  $config
     * @return void
     */
    public function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * Get the application name
     *
     * @return string
     */
    public function getAppName()
    {
        return $this->config['app_name'];
    }

    /**
     * Get the scopes
     *
     * @return array
     */
    public function getScopes()
    {
        return $this->config['scopes'];
    }

    /**
     * Get the service account credentials
     *
     * @return string
     */
    public function getServiceAccountCredentials()
    {
        if (! file_exists($this->config['service_account_json'])) {
            throw InvalidConfiguration::missingCredentialsJsonFile($this->config['service_account_json']);
        }

        return $this->config['service_account_json'];
    }

    /**
     * Get the access type
     *
     * @return string
     */
    public function getAccessType()
    {
        return $this->config['access_type'];
    }

    /**
     * Get the prompt
     *
     * @return string
     */
    public function getPrompt()
    {
        return $this->config['prompt'];
    }
}
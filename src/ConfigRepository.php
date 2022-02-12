<?php

namespace Ibnuhalimm\LaravelGoogleSheet;

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
     * @return string|null
     */
    public function getAppName()
    {
        return $this->config['app_name'] ?? null;
    }

    /**
     * Get the scopes
     *
     * @return array
     */
    public function getScopes()
    {
        return $this->config['scopes'] ?? [];
    }

    /**
     * Get the service account credentials
     *
     * @return string|null
     */
    public function getServiceAccountCredentials()
    {
        return $this->config['service_account_json'] ?? null;
    }

    /**
     * Get the access type
     *
     * @return string|null
     */
    public function getAccessType()
    {
        return $this->config['access_type'] ?? null;
    }

    /**
     * Get the prompt
     *
     * @return string|null
     */
    public function getPrompt()
    {
        return $this->config['prompt'] ?? null;
    }
}
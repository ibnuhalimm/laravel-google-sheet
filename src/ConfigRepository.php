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
     * Get the scopes
     *
     * @return array
     */
    public function getScopes()
    {
        if (empty($this->config['scopes'])) {
            throw InvalidConfiguration::missingScopes();
        }

        return $this->config['scopes'];
    }

    /**
     * Validate scopes config
     *
     * @return bool
     */
    private function validateScopesConfig()
    {
        //
    }
}
<?php

namespace Ibnuhalimm\LaravelGoogleSheet\Exceptions;

use Exception;

class InvalidConfiguration extends Exception
{
    public static function missingCredentialsJsonFile(string $path): static
    {
        return new static("Could not find service account credentials file at `{$path}`.");
    }

    public static function missingScopes()
    {
        return new static('You must specify at least one scope.');
    }
}
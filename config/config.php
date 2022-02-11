<?php

return [
    /**
     * Set the application name
     */
    'app_name' => env('GOOGLE_SHEET_APP_NAME', config('app.name')),

    /**
     * See the catalogue of the scopes at https://developers.google.com/identity/protocols/oauth2/scopes
     */
    'scopes' => [
        // 'https://www.googleapis.com/auth/drive',
        // 'https://www.googleapis.com/auth/drive.file',
        // 'https://www.googleapis.com/auth/drive.readonly',
        'https://www.googleapis.com/auth/spreadsheets',
        // 'https://www.googleapis.com/auth/spreadsheets.readonly',
    ],

    /**
     * Service account credentials
     * Create a new service account on the Google API console
     * Then download the credentials.json file and place it in the storage/app/google-sheet/ folder
     */
    'service_account_json' => storage_path(env('GOOGLE_SHEET_SERVICE_ACCOUNT_JSON', 'app/google-sheet/credentials.json')),

    /**
     * Set the access type
     */
    'access_type' => env('GOOGLE_SHEET_ACCESS_TYPE', 'offline'),

    /**
     * Prompt the user to select an account
     */
    'prompt' => env('GOOGLE_SHEET_PROMPT', 'select_account consent'),
];
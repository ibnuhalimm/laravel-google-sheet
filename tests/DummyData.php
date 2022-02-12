<?php

namespace Tests;

class DummyData
{
    public function getSpreadSheetId()
    {
        return '1cyUalLbuw_TpAIgkf76JcU-BbsYCSwtVqJuf_gCNzYA';
    }

    public function getSheetName()
    {
        return 'Class Data';
    }

    public function getCellRange()
    {
        return 'A2:G2';
    }

    public function getCredentials()
    {
        return [
            'type' => 'service_account',
            'project_id' => 'isocoding-id',
            'private_key_id' => 'isocoding-private-key--id',
            'private_key' => 'isocoding-private-key',
            'client_email' => 'package-dev@isocoding-id.iam.gserviceaccount.com',
            'client_id' => '123456780',
            'auth_uri' => 'https://accounts.google.com/o/oauth2/auth',
            'token_uri' => 'https://oauth2.googleapis.com/token',
            'auth_provider_x509_cert_url' => 'https://www.googleapis.com/oauth2/v1/certs',
            'client_x509_cert_url' => 'https://www.googleapis.com/robot/v1/metadata/x509/package-dev%40isocoding-id.iam.gserviceaccount.com'
        ];
    }
}
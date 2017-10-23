<?php

namespace BlueVertex\EMRBridgeNextGen\Services;

use BlueVertex\EMRBridge\Contracts\EMRAPI;
use Zttp\Zttp;
use Zttp\ZttpResponse;

class NextGenAPI implements EMRAPI
{
    public function getPatient($id)
    {
        return [];
    }

    private function url($url)
    {
        return vsprintf('%s/%s', [
            'http://localhost:'
            ltrim($url, '/'),
        ]);
    }

    private function makeGetRequest($url, $params = [])
    {
        $response = Zttp::get($this->url($url), [
            'foo' => 'bar',
            'baz' => 'qux',
        ]);
    }
}

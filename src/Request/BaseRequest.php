<?php

namespace Abbotton\MeituanTakeaway\Request;

use Abbotton\MeituanTakeaway\Config;
use GuzzleHttp\Client;

class BaseRequest
{
    protected $guzzleOptions = [];
    private $config;
    private $log;

    public function __construct(Config $config)
    {
        $this->config = $config;
        $this->log = $config->getLogger();
    }

    protected function get($action, array $options = [])
    {
        $params_head = [
            'timestamp' => time(),
            'app_id'    => $this->config->app_id,
        ];

        $options = array_merge($params_head, $options);
        $sig = $this->generateSignature($this->config->request_url.$action, $options);
        $options['sig'] = $sig;

        $url = $this->config->request_url.$action;

        return $this->request('GET', $url, ['query' => $options]);
    }

    private function generateSignature($action, $params)
    {
        $params = $this->concatParams($params);
        $str = $action.'?'.$params.$this->config->app_secret;

        return md5($str);
    }

    private function concatParams($params)
    {
        ksort($params);
        $pairs = [];
        foreach ($params as $key => $val) {
            array_push($pairs, $key.'='.$val);
        }

        return join('&', $pairs);
    }

    private function request($method, $url, $options = [])
    {
        $log_id = $this->createRequestId();

        $method = strtoupper($method);

        if ($this->config->log_path) {
            $this->log->debug('API Request:', compact('log_id', 'url', 'method', 'options'));
        }

        $response = $this->getHttpClient()->request($method, $url, $options);
        if ($this->config->log_path) {
            $this->log->debug('API Response:', [
                'log_id'  => $log_id,
                'Status'  => $response->getStatusCode(),
                'Reason'  => $response->getReasonPhrase(),
                'Headers' => $response->getHeaders(),
                'Body'    => strval($response->getBody()),
            ]);
        }

        return $response->getBody();
    }

    private function createRequestId()
    {
        return sprintf(
            '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0x0fff) | 0x4000,
            mt_rand(0, 0x3fff) | 0x8000,
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff)
        );
    }

    public function getHttpClient()
    {
        return new Client($this->guzzleOptions);
    }

    protected function post($action, array $params = [], string $enctype = 'form_params')
    {
        $params_head = [
            'timestamp' => time(),
            'app_id'    => $this->config->app_id,
        ];

        $params = array_merge($params_head, $params);
        $url = $this->config->request_url.$action;
        $sig = $this->generateSignature($url, $params);
        $params['sig'] = $sig;

        return $this->request('POST', $url, [$enctype => $params]);
    }

    public function setGuzzleOptions(array $options)
    {
        $this->guzzleOptions = $options;
    }
}

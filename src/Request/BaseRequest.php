<?php

namespace Abbotton\MeituanTakeaway\Request;

use Abbotton\MeituanTakeaway\Config;

class BaseRequest
{
    private $config;

    private $client;

    public $isAsync = false;

    public function __construct(Config $config, $client)
    {
        $this->config = $config;
        $this->client = $client;
    }

    protected function get($action, array $options = [])
    {
        $params_head = [
            'timestamp' => time(),
            'app_id' => $this->config->app_id,
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
        if (isset($params['img_data'])) {
            unset($params['img_data']);
        }
        ksort($params);
        $pairs = [];
        foreach ($params as $key => $val) {
            array_push($pairs, $key.'='.$val);
        }

        return join('&', $pairs);
    }

    private function request($method, $url, $options = [])
    {
        $method = strtoupper($method);
        if ($this->isAsync) {
            $options['headers'] = [
                'request-process-way' => 'asyn',
            ];
        }
        $response = $this->client->request($method, $url, $options);

        return $response->getBody()->getContents();
    }

    protected function post($action, array $params = [])
    {
        $params_head = [
            'timestamp' => time(),
            'app_id' => $this->config->app_id,
        ];

        $params = array_merge($params_head, $params);
        $url = $this->config->request_url.$action;
        $sig = $this->generateSignature($url, $params);
        $params['sig'] = $sig;

        return $this->request('POST', $url, ['form_params' => $params]);
    }

    /**
     * @return $this
     */
    public function async()
    {
        $this->isAsync = true;

        return $this;
    }
}

<?php

namespace Abbotton\MeituanTakeaway;

use Exception;

class Config
{
    public $app_id;
    public $app_secret;
    public $request_url = 'https://waimaiopen.meituan.com/api/v1/';

    public function __construct($config)
    {
        if ($config === null || empty($config)) {
            throw new Exception('配置不能为空');
        }

        if (! isset($config['app_id']) || $config['app_id'] === '') {
            throw new Exception('app_id不存在');
        }

        if (! isset($config['app_secret']) || $config['app_secret'] === '') {
            throw new Exception('app_secret不存在');
        }

        $this->app_id = $config['app_id'];
        $this->app_secret = $config['app_secret'];

        if (! empty($config['request_url'])) {
            $this->request_url = $config['request_url'];
        }
    }
}

<?php

namespace Abbotton\MeituanTakeaway;

use DateTimeZone;
use Exception;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Logger;

class Config
{
    public $app_id;
    public $app_secret;
    public $request_url = "https://waimaiopen.meituan.com/api/v1/";
    
    private $logger;
    public $log_path;
    
    public function __construct($config)
    {
        if ($config === null || empty($config)) {
            throw new Exception('配置不能为空');
        }
        
        if (!isset($config['app_id']) || $config['app_id'] === '') {
            throw new Exception('app_id不存在');
        }
        
        if (!isset($config['app_secret']) || $config['app_secret'] === '') {
            throw new Exception('app_secret不存在');
        }
        
        $this->app_id = $config['app_id'];
        $this->app_secret = $config['app_secret'];
        
        if (!empty($config['request_url'])) {
            $this->request_url = $config['request_url'];
        }
        
        $this->log_path = isset($config['log_path']) ? $config['log_path'] : '';
    }
    
    public function getLogger()
    {
        return $this->logger ?: $this->logger = $this->createDefaultLogger();
    }
    
    private function createDefaultLogger()
    {
        $log = new Logger('takeaway');
        $log->setTimezone(new DateTimeZone('Asia/Shanghai'));
        $handler = new RotatingFileHandler($this->log_path);
        $handler->setFormatter(
            new LineFormatter("[%datetime%] [%level_name%] %message% %context% %extra%\n", 'H:i:s', true, true)
        );
        $log->pushHandler($handler);
        return $log;
    }
}
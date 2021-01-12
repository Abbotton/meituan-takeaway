<?php

namespace Abbotton\MeituanTakeaway\Tests;

use Abbotton\MeituanTakeaway\Config;

class ConfigTest extends TestCase
{
    public function test_will_get_except_if_config_is_empty()
    {
        try {
            $config = [];
            new Config($config);
        } catch (\Exception $e) {
            $this->assertEquals('配置不能为空', $e->getMessage());
        }
    }

    public function test_will_get_except_if_app_id_is_not_set()
    {
        try {
            $config = [
                'app_secret' => 'bar'
            ];
            new Config($config);
        } catch (\Exception $e) {
            $this->assertEquals('app_id不存在', $e->getMessage());
        }
    }

    public function test_will_get_except_if_app_secret_is_not_set()
    {
        try {
            $config = [
                'app_id' => 'foo',
            ];
            new Config($config);
        } catch (\Exception $e) {
            $this->assertEquals('app_secret不存在', $e->getMessage());
        }
    }

    public function test_will_get_instance_if_config_is_right()
    {
        $config = [
            'app_id' => 'foo',
            'app_secret' => 'bar'
        ];
        $instance = new Config($config);
        $this->assertInstanceOf(Config::class, $instance);
        $this->assertEquals('foo', $instance->app_id);
        $this->assertEquals('bar', $instance->app_secret);
    }
}

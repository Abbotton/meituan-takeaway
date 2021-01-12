<?php

namespace Abbotton\MeituanTakeaway\Tests;

use Abbotton\MeituanTakeaway\Application;
use PHPUnit\Framework\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    public function getApplicationInstance(): Application
    {
        $config = [
            'app_id' => 'foo',
            'app_secret' => 'bar',
        ];

        return new Application($config);
    }
}

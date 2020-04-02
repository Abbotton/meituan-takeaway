### 美团外卖开放平台PHP SDK

美团外卖开放平台PHP SDK，支持`零售综合`以及`医疗综合`两大板块。

# 安装

```shell script
composer require abbotton/meituan-takeaway:dev-master
```

# 使用
```php
use Abbotton\MeituanTakeaway\Application;

......

$config = [
    'app_id' => 'xxx',
    'app_secret' => 'xxx',
    'request_url' => '', // 默认 `https://waimaiopen.meituan.com/api/v1/`
    'log_path' => '/path/of/log'
];

$app = new Application($config);

$params = ['order_id' => '27061900338318741', 'is_mt_logistics' => 1];
$orderDetail = $app->order->getOrderDetail($params);

print_r(json_decode($orderDetail, true));

......
```
<?php

namespace Abbotton\MeituanTakeaway;

use Abbotton\MeituanTakeaway\Request\Act;
use Abbotton\MeituanTakeaway\Request\Comment;
use Abbotton\MeituanTakeaway\Request\Delivery;
use Abbotton\MeituanTakeaway\Request\Goods;
use Abbotton\MeituanTakeaway\Request\Im;
use Abbotton\MeituanTakeaway\Request\Image;
use Abbotton\MeituanTakeaway\Request\Medicine;
use Abbotton\MeituanTakeaway\Request\Order;
use Abbotton\MeituanTakeaway\Request\Poi;
use Abbotton\MeituanTakeaway\Request\Retail;
use Abbotton\MeituanTakeaway\Request\Shipping;
use Abbotton\MeituanTakeaway\Request\Task;
use Exception;
use GuzzleHttp\Client;

/**
 * Class Application.
 *
 * @property Comment $comment
 * @property Act $act
 * @property Image $image
 * @property Medicine $medicine
 * @property Order $order
 * @property Poi $poi
 * @property Retail $retail
 * @property Shipping $shipping
 * @property Im $im
 * @property Goods $goods
 * @property Delivery $delivery
 * @property Task $task
 */
class Application
{
    private $config;

    public function __construct($config)
    {
        $this->config = new Config($config);
        $this->client = new Client();
    }

    public function setHttpClient($client)
    {
        $this->client = $client;

        return $this;
    }

    public function __get($name)
    {
        if (! isset($this->$name)) {
            $class_name = ucfirst($name);
            $application = "\\Abbotton\\MeituanTakeaway\\Request\\{$class_name}";
            if (! class_exists($application)) {
                throw new Exception($class_name.'不存在');
            }
            $this->$name = new $application($this->config, $this->client);
        }

        return $this->$name;
    }
}

<?php

namespace Abbotton\MeituanTakeaway\Request;

use Psr\Http\Message\StreamInterface;

class Image extends BaseRequest
{
    /**
     * 图片上传API
     *
     * @param array $params
     * @return StreamInterface
     */
    public function upload(array $params)
    {
        return $this->post('image/upload', $params, 'multipart');
    }
}
<?php

namespace Abbotton\MeituanTakeaway\Request;

class Image extends BaseRequest
{
    /**
     * 图片上传API
     *
     * @param array $params
     * @return string
     */
    public function upload(array $params)
    {
        return $this->post('image/upload', $params);
    }
}
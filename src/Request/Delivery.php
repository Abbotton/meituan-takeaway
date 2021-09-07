<?php

namespace Abbotton\MeituanTakeaway\Request;

class Delivery extends BaseRequest
{
    /**
     * 创建运费模板.
     *
     * @param  array  $params
     * @return string
     */
    public function templateCreate(array $params)
    {
        return $this->post('gw/delivery/template/create', $params);
    }

    /**
     * 更新运费模板.
     *
     * @param  array  $params
     * @return string
     */
    public function templateUpdate(array $params)
    {
        return $this->post('gw/delivery/template/update', $params);
    }

    /**
     * 删除运费模板.
     *
     * @param  array  $params
     * @return string
     */
    public function templateDelete(array $params)
    {
        return $this->post('gw/delivery/template/delete', $params);
    }

    /**
     * 删除运费模板.
     *
     * @param  array  $params
     * @return string
     */
    public function templateDetail(array $params)
    {
        return $this->get('gw/delivery/template/detail', $params);
    }

    /**
     * 查询运费模板列表.
     *
     * @param  array  $params
     * @return string
     */
    public function templateList(array $params)
    {
        return $this->get('gw/delivery/template/list', $params);
    }

    /**
     * 查询行政区域编码.
     *
     * @param  array  $params
     * @return string
     */
    public function templateGetAreas(array $params)
    {
        return $this->get('gw/delivery/template/getAreas', $params);
    }
}

<?php

namespace Abbotton\MeituanTakeaway\Request;

class GroupBuy extends BaseRequest
{
    /**
     * 同步配送信息接口.
     *
     * @param array $params
     * @return string
     */
    public function perform(array $params)
    {
        return $this->post('gw/order/perform', $params);
    }

    /**
     * 查询订单退款信息接口.
     *
     * @param array $params
     * @return string
     */
    public function getRefundInfo(array $params)
    {
        return $this->post('gw/order/getRefundInfo', $params);
    }

    /**
     * 批量查询订单退款信息接口.
     *
     * @param array $params
     * @return string
     */
    public function batchGetRefundInfo(array $params)
    {
        return $this->post('gw/order/batchGetRefundInfo', $params);
    }

    /**
     * 批量查询订单状态信息.
     *
     * @param array $params
     * @return string
     */
    public function batchGetStatus(array $params)
    {
        return $this->post('gw/order/batchGetStatus', $params);
    }

    /**
     * 查询订单详情信息.
     *
     * @param array $params
     * @return string
     */
    public function detail(array $params)
    {
        return $this->post('gw/order/detail', $params);
    }

    /**
     * 查询门店订单列表信息.
     *
     * @param array $params
     * @return string
     */
    public function list(array $params)
    {
        return $this->post('gw/order/list', $params);
    }
}

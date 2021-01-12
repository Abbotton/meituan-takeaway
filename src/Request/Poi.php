<?php

namespace Abbotton\MeituanTakeaway\Request;

class Poi extends BaseRequest
{
    /**
     * 创建或更新门店信息.
     *
     * @param array $params
     * @return string
     */
    public function save(array $params)
    {
        return $this->post('poi/save', $params);
    }

    /**
     * 获取门店ID.
     *
     * @param array $params
     * @return string
     */
    public function getIds()
    {
        return $this->get('poi/getids');
    }

    /**
     * 批量获取门店详细信息.
     *
     * @param array $params
     * @return string
     */
    public function mget(array $params)
    {
        return $this->get('poi/mget', $params);
    }

    /**
     * 门店设置为营业状态
     *
     * @param array $params
     * @return string
     */
    public function open(array $params)
    {
        return $this->post('poi/open', $params);
    }

    /**
     * 门店设置为休息状态
     *
     * @param array $params
     * @return string
     */
    public function close(array $params)
    {
        return $this->post('poi/close', $params);
    }

    /**
     * 门店设置为下线状态
     *
     * @param array $params
     * @return string
     */
    public function offline(array $params)
    {
        return $this->post('poi/offline', $params);
    }

    /**
     * 门店设置为上线状态
     *
     * @param array $params
     * @return string
     */
    public function online(array $params)
    {
        return $this->post('poi/online', $params);
    }

    /**
     * 更改门店公告信息.
     *
     * @param array $params
     * @return string
     */
    public function updatePromoteInfo(array $params)
    {
        return $this->post('poi/updatepromoteinfo', $params);
    }

    /**
     * 获取门店品类列表.
     *
     * @param array $params
     * @return string
     */
    public function tagList(array $params)
    {
        return $this->post('poiTag/list', $params);
    }

    /**
     * 更新门店营业时间.
     *
     * @param array $params
     * @return string
     */
    public function shippingTimeUpdate(array $params)
    {
        return $this->post('shippingtime/update', $params);
    }

    /**
     * 查询门店是否延迟发配送
     *
     * @param array $params
     * @return string
     */
    public function isDelayPush(array $params)
    {
        return $this->post('poi/logistics/isDelayPush', $params);
    }

    /**
     * 设置门店延迟发配送时间.
     *
     * @param array $params
     * @return string
     */
    public function setDelayPush(array $params)
    {
        return $this->post('poi/logistics/setDelayPush', $params);
    }

    /**
     * 获取三方门店映射信息.
     *
     * @param array $params
     * @return string
     */
    public function boundList(array $params)
    {
        return $this->post('ecommerce/poi/bound/list', $params);
    }

    /**
     * 已授权商家账号所关联门店的绑定与解绑.
     *
     * @param array $params
     * @return string
     */
    public function bindAppByAccount(array $params)
    {
        return $this->post('ecommerce/poi/bind/app/by/account', $params);
    }
}

<?php

namespace Abbotton\MeituanTakeaway\Request;

class Im extends BaseRequest
{
    /**
     * 获取长连接的token.
     *
     * @return string
     */
    public function getConnectionToken()
    {
        return $this->post('wm/IM/getConnectionToken');
    }

    /**
     * 查询门店IM状态.
     *
     * @return string
     */
    public function getPoiIMStatus(array $params)
    {
        return $this->post('wm/IM/getPoiIMStatus', $params);
    }

    /**
     * 设置门店IM状态.
     *
     * @param array $params
     * @return string
     */
    public function setPoiIMStatus(array $params)
    {
        return $this->post('wm/IM/setPoiIMStatus', $params);
    }

    /**
     * 设置门店IM线上状态.
     *
     * @param array $params
     * @return string
     */
    public function setPoiIMOnlineStatus(array $params)
    {
        return $this->post('wm/IM/setPoiIMOnlineStatus', $params);
    }

    /**
     * 设置消息已读状态.
     *
     * @param array $params
     * @return string
     */
    public function msgRead(array $params)
    {
        return $this->post('wm/IM/msgRead', $params);
    }

    /**
     * 设置门店IM群会话状态.
     *
     * @param array $params
     * @return string
     */
    public function setPoiIMGroupSwitch(array $params)
    {
        return $this->post('ecommerce/IM/setPoiIMGroupSwitch', $params);
    }

    /**
     * IM群聊管理门店群公告.
     *
     * @param array $params
     * @return string
     */
    public function managePoiImGroupNotice(array $params)
    {
        return $this->post('gw/IM/managePoiImGroupNotice', $params);
    }

    /**
     * 查看门店IM群列表.
     *
     * @param array $params
     * @return string
     */
    public function getPoiImGroupList(array $params)
    {
        return $this->post('gw/IM/getPoiImGroupList', $params);
    }

    /**
     * 查询IM门店消息服务分.
     *
     * @param array $params
     * @return string
     */
    public function getPoiImServiceScore(array $params)
    {
        return $this->post('gw/IM/getPoiImServiceScore', $params);
    }

    /**
     * 闪购开放平台app下门店组列表数据.
     *
     * @param array $params
     * @return string
     */
    public function listPoiGroupInfoList(array $params)
    {
        return $this->post('ecommerce/IM/listPoiGroupInfoList', $params);
    }

    /**
     * 门店组关联客服账号.
     *
     * @param array $params
     * @return string
     */
    public function addAccountToGroup(array $params)
    {
        return $this->post('ecommerce/IM/addAccountToGroup', $params);
    }
}

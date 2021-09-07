<?php

namespace Abbotton\MeituanTakeaway\Request;

class Retail extends BaseRequest
{
    /**
     * 创建/更新商品分类.
     *
     * @param array $params
     * @return string
     */
    public function catUpdate(array $params)
    {
        return $this->post('retailCat/update', $params);
    }

    /**
     * 删除商品分类.
     *
     * @param array $params
     * @return string
     */
    public function catDelete(array $params)
    {
        return $this->post('retailCat/delete', $params);
    }

    /**
     * 查询门店商品分类列表.
     *
     * @param array $params
     * @return string
     */
    public function catList(array $params)
    {
        return $this->get('retailCat/list', $params);
    }

    /**
     * 创建/更新商品[支持商品多规格,不含删除逻辑].
     *
     * @param array $params
     * @return string
     */
    public function initData(array $params)
    {
        return $this->post('retail/initdata', $params);
    }

    /**
     * 批量创建/更新商品[支持商品多规格,不含删除逻辑].
     *
     * @param array $params
     * @return string
     */
    public function batchInitData(array $params)
    {
        return $this->post('retail/batchinitdata', $params);
    }

    /**
     * 按 UPC/EAN 批量创建/更新标品
     *
     * @param array $params
     * @return string
     */
    public function batchInitDataByUPC(array $params)
    {
        return $this->post('retail/batchinitdatabyupc', $params);
    }

    /**
     * 查询多店同步任务的进程.
     *
     * @param array $params
     * @return string
     */
    public function taskStatus(array $params)
    {
        return $this->get('task/status', $params);
    }

    /**
     * 批量更新售卖（上下架）状态
     *
     * @param array $params
     * @return string
     */
    public function sellStatus(array $params)
    {
        return $this->post('retail/sellStatus', $params);
    }

    /**
     * 创建/更新SKU信息.
     *
     * @param array $params
     * @return string
     */
    public function skuSave(array $params)
    {
        return $this->post('retail/sku/save', $params);
    }

    /**
     * 批量更新SKU价格
     *
     * @param array $params
     * @return string
     */
    public function skuPrice(array $params)
    {
        return $this->post('retail/sku/price', $params);
    }

    /**
     * 批量更新SKU库存.
     *
     * @param array $params
     * @return string
     */
    public function skuStock(array $params)
    {
        return $this->post('retail/sku/stock', $params);
    }

    /**
     * 查询门店商品列表.
     *
     * @param array $params
     * @return string
     */
    public function list(array $params)
    {
        return $this->get('retail/list', $params);
    }

    /**
     * 查询商品详情.
     *
     * @param array $params
     * @return string
     */
    public function getDetail(array $params)
    {
        return $this->get('retail/get', $params);
    }

    /**
     * 批量绑定商品属性.
     *
     * @param array $params
     * @return string
     */
    public function bindProperty(array $params)
    {
        return $this->post('retail/bind/property', $params);
    }

    /**
     * 创建/更新商品[支持商品多规格,不含删除逻辑].
     *
     * @param array $params
     * @return string
     */
    public function propertyList(array $params)
    {
        return $this->get('retail/property/list', $params);
    }

    /**
     * 删除商品
     *
     * @param array $params
     * @return string
     */
    public function delete(array $params)
    {
        return $this->post('retail/delete', $params);
    }

    /**
     * 删除SKU信息.
     *
     * @param array $params
     * @return string
     */
    public function skuDelete(array $params)
    {
        return $this->post('retail/sku/delete', $params);
    }

    /**
     * 批量删除商品分类及商品
     *
     * @param array $params
     * @return string
     */
    public function batchDeleteCatAndRetail(array $params)
    {
        return $this->post('retailCat/batchdelete/catandretail', $params);
    }

    /**
     * 根据原商品编码更换新商品编码
     *
     * @param array $params
     * @return string
     */
    public function updateAppFoodCodeByOrigin(array $params)
    {
        return $this->post('retail/updateAppFoodCodeByOrigin', $params);
    }

    /**
     * 根据商品名称和规格名称更换新的商品编码
     *
     * @param array $params
     * @return string
     */
    public function updateAppFoodCodeByNameAndSpec(array $params)
    {
        return $this->post('retail/updateAppFoodCodeByNameAndSpec', $params);
    }

    /**
     * 获取美团后台商品类目（末级类目id）.
     *
     * @param array $params
     * @return string
     */
    public function getSpTagIds(array $params)
    {
        return $this->get('retail/getSpTagIds', $params);
    }

    /**
     * 根据末级类目id获取类目属性列表.
     *
     * @param array $params
     * @return string
     */
    public function catAttrList(array $params)
    {
        return $this->get('gw/category/attr/list', $params);
    }

    /**
     * 查询特殊属性的属性值列表.
     *
     * @param array $params
     * @return string
     */
    public function catAttrValueList(array $params)
    {
        return $this->get('gw/category/attr/value/list', $params);
    }

    /**
     * 批量上传商品视频.
     *
     * @param array $params
     * @return string
     */
    public function videoUpload(array $params)
    {
        return $this->post('ecommerce/video/upload', $params);
    }

    /**
     * 查询门店商品视频.
     *
     * @param array $params
     * @return string
     */
    public function videoList(array $params)
    {
        return $this->get('gw/video/list', $params);
    }

    /**
     * 删除商品视频.
     *
     * @param array $params
     * @return string
     */
    public function videoDelete(array $params)
    {
        return $this->post('gw/video/delete', $params);
    }

    /**
     * 更新商品视频关联关系.
     *
     * @param array $params
     * @return string
     */
    public function videoBindUpdate(array $params)
    {
        return $this->post('gw/video/bind/update', $params);
    }

    /**
     * 批量更新商品信息至多店.
     *
     * @param array $params
     * @return string
     */
    public function multiPoiUpdate(array $params)
    {
        return $this->post('retail/multipoi/update', $params);
    }

    /**
     * 批量创建商品信息至多店.
     *
     * @param array $params
     * @return string
     */
    public function multiPoiCreate(array $params)
    {
        return $this->post('retail/multipoi/create', $params);
    }

    /**
     * 查询门店商品审核状态信息.
     *
     * @param array $params
     * @return string
     */
    public function auditStatus(array $params)
    {
        return $this->post('retail/audit/status', $params);
    }

    /**
     * 根据商品UPC或商品名称查询平台推荐类目信息.
     *
     * @param array $params
     * @return string
     */
    public function recommendTag(array $params)
    {
        return $this->post('retail/recommend/tag', $params);
    }

    /**
     * 查询门店品牌商品推广开关状态.
     *
     * @param array $params
     * @return mixed
     */
    public function promotionSwitchStatus(array $params)
    {
        return $this->get('retail/brandProduct/promotionSwitch/status', $params);
    }

    /**
     * 更新门店品牌商品推广开关状态.
     *
     * @param array $params
     * @return mixed
     */
    public function promotionSwitchUpdate(array $params)
    {
        return $this->post('retail/brandProduct/promotionSwitch/update', $params);
    }

    /**
     * 查询门店待推广品牌商品列表.
     *
     * @param array $params
     * @return mixed
     */
    public function promotionList(array $params)
    {
        return $this->get('retail/brandProduct/promotion/list', $params);
    }

    /**
     * 批量更新商品分类顺序及分类下商品智能排序开关.
     *
     * @param  array  $params
     * @return mixed
     */
    public function retailCatSetSequence(array $params)
    {
        return $this->post('retailCat/setSequence', $params);
    }

    /**
     * 批量更新商品顺序.
     *
     * @param  array  $params
     * @return mixed
     */
    public function retailSetSequence(array $params)
    {
        return $this->post('retail/setSequence', $params);
    }

    /**
     * 批量根据sku_id查询app_spu_code列表.
     *
     * @param  array  $params
     * @return mixed
     */
    public function batchGetAppSpuCodesBySkuIds(array $params)
    {
        return $this->post('gw/retail/batchGetAppSpuCodesBySkuIds', $params);
    }
}

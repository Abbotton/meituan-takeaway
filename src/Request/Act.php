<?php

namespace Abbotton\MeituanTakeaway\Request;

class Act extends BaseRequest
{
    /**
     * 批量创建/更新第二份半价商品（本接口预计2020年2月26日下线，建议接入“第N件优惠”活动接口。）.
     *
     * @param array $params
     * @return string
     * @deprecated
     */
    public function secondHalfBatchSave(array $params)
    {
        return $this->post('act/second/half/batchsave', $params);
    }

    /**
     * 批量删除第二份半价商品（本接口预计2020年2月26日下线，建议接入“第N件优惠”活动接口。）.
     *
     * @param array $params
     * @return string
     * @deprecated
     */
    public function secondHalfDelete(array $params)
    {
        return $this->post('act/second/half/delete', $params);
    }

    /**
     * 批量修改第二份半价商品当日活动库存（本接口预计2020年2月26日下线，建议接入“第N件优惠”活动接口。）.
     *
     * @param array $params
     * @return string
     * @deprecated
     */
    public function secondHalfStock(array $params)
    {
        return $this->post('act/second/half/stock', $params);
    }

    /**
     * 批量查询门店第二份半价商品（本接口预计2020年2月26日下线，建议接入“第N件优惠”活动接口。）.
     *
     * @param array $params
     * @return string
     * @deprecated
     */
    public function secondHalfList(array $params)
    {
        return $this->get('act/second/half/list', $params);
    }

    /**
     * 批量创建买赠活动.
     *
     * @param array $params
     * @return string
     */
    public function buyGiftsBatchSave(array $params)
    {
        return $this->post('act/buygifts/batchsave', $params);
    }

    /**
     * 批量删除买赠活动.
     *
     * @param array $params
     * @return string
     */
    public function buyGiftsDelete(array $params)
    {
        return $this->post('act/buygifts/delete', $params);
    }

    /**
     * 批量修改买赠活动当日活动库存.
     *
     * @param array $params
     * @return string
     */
    public function buyGiftsStock(array $params)
    {
        return $this->post('act/buygifts/stock', $params);
    }

    /**
     * 批量查询门店买赠活动.
     *
     * @param array $params
     * @return string
     */
    public function buyGiftsList(array $params)
    {
        return $this->get('act/buygifts/list', $params);
    }

    /**
     * 批量创建指定商品满减活动或创建店内满减活动.
     *
     * @param array $params
     * @return string
     */
    public function fullDiscountBatchSave(array $params)
    {
        return $this->post('act/full/discount/batchsave', $params);
    }

    /**
     * 批量查询指定商品满减活动或店内满减活动.
     *
     * @param array $params
     * @return string
     */
    public function fullDiscountList(array $params)
    {
        return $this->post('act/full/discount/list', $params);
    }

    /**
     * 批量删除指定商品满减活动或店内满减活动.
     *
     * @param array $params
     * @return string
     */
    public function fullDiscountDelete(array $params)
    {
        return $this->post('act/full/discount/delete', $params);
    }

    /**
     * 批量添加活动商品至指定商品满减活动.
     *
     * @param array $params
     * @return string
     */
    public function fullDiscountFoodsBatchSave(array $params)
    {
        return $this->post('act/full/discount/foods/batchsave', $params);
    }

    /**
     * 批量查询指定商品满减活动中的活动商品
     *
     * @param array $params
     * @return string
     */
    public function fullDiscountFoodsList(array $params)
    {
        return $this->post('act/full/discount/foods/list', $params);
    }

    /**
     * 批量删除指定商品满减活动中活动商品
     *
     * @param array $params
     * @return string
     */
    public function fullDiscountFoodsDelete(array $params)
    {
        return $this->post('act/full/discount/foods/delete', $params);
    }

    /**
     * 批量修改指定商品满减活动中商品的当日活动库存.
     *
     * @param array $params
     * @return string
     */
    public function fullDiscountFoodsDayLimit(array $params)
    {
        return $this->post('act/full/discount/foods/daylimit', $params);
    }

    /**
     * 批量创建阶梯满减配送费活动（本接口预计2020年2月5日下线）.
     *
     * @param array $params
     * @return string
     */
    public function fullDiscountShippingFeeBatchSave(array $params)
    {
        return $this->post('act/full/discount/shippingfee/batchsave', $params);
    }

    /**
     * 查询阶梯满减配送费活动（本接口预计2020年2月5日下线）.
     *
     * @param array $params
     * @return string
     */
    public function fullDiscountShippingFeeList(array $params)
    {
        return $this->get('act/full/discount/shippingfee/list', $params);
    }

    /**
     * 批量删除阶梯满减配送费活动（本接口预计2020年2月5日下线）.
     *
     * @param array $params
     * @return string
     */
    public function fullDiscountShippingFeeBatchDelete(array $params)
    {
        return $this->post('act/full/discount/shippingfee/batchdelete', $params);
    }

    /**
     * 批量创建或更新零售折扣商品和爆品商品活动.
     *
     * @param array $params
     * @return string
     */
    public function retailDiscountBatchSave(array $params)
    {
        return $this->post('act/retail/discount/batchsave', $params);
    }

    /**
     * 查询门店零售折扣商品和爆品商品活动.
     *
     * @param array $params
     * @return string
     */
    public function retailDiscountList(array $params)
    {
        return $this->get('act/retail/discount/list', $params);
    }

    /**
     * 批量删除零售折扣商品和和爆品商品活动.
     *
     * @param array $params
     * @return string
     */
    public function retailDiscountBatchDelete(array $params)
    {
        return $this->post('act/retail/discount/batchdelete', $params);
    }

    /**
     * 批量修改零售折扣商品和爆品商品当日活动库存.
     *
     * @param array $params
     * @return string
     */
    public function retailDiscountBatchStock(array $params)
    {
        return $this->post('act/retail/discount/batchstock', $params);
    }

    /**
     * 批量修改零售折扣商品和爆品商品活动每单限购数量.
     *
     * @param array $params
     * @return string
     */
    public function retailDiscountBatchLimit(array $params)
    {
        return $this->post('act/retail/discount/batchlimit', $params);
    }

    /**
     * 批量新增商家券（店内发券）活动.
     *
     * @param array $params
     * @return string
     */
    public function instoreCouponBatchSave(array $params)
    {
        return $this->post('act/instore/coupon/batchsave', $params);
    }

    /**
     * 批量删除商家券（店内发券）活动.
     *
     * @param array $params
     * @return string
     */
    public function instoreCouponDelete(array $params)
    {
        return $this->post('act/instore/coupon/delete', $params);
    }

    /**
     * 查询商家券（店内发券）活动.
     *
     * @param array $params
     * @return string
     */
    public function instoreCouponList(array $params)
    {
        return $this->post('act/instore/coupon/list', $params);
    }

    /**
     * 创建/更新X元M件活动.
     *
     * @param array $params
     * @return string
     */
    public function itemBundlesSave(array $params)
    {
        return $this->post('act/item/bundles/save', $params);
    }

    /**
     * 查询X元M件活动.
     *
     * @param array $params
     * @return string
     */
    public function itemBundlesList(array $params)
    {
        return $this->get('act/item/bundles/list', $params);
    }

    /**
     * 批量删除X元M件活动.
     *
     * @param array $params
     * @return string
     */
    public function itemBundlesBatchDelete(array $params)
    {
        return $this->post('act/item/bundles/batchdelete', $params);
    }

    /**
     * 查询X元M件活动中的商品
     *
     * @param array $params
     * @return string
     */
    public function itemBundlesFoodsList(array $params)
    {
        return $this->get('act/item/bundles/foods/list', $params);
    }

    /**
     * 删除X元M件活动中的商品
     *
     * @param array $params
     * @return string
     */
    public function itemBundlesFoodsBatchDelete(array $params)
    {
        return $this->post('act/item/bundles/foods/batchdelete', $params);
    }

    /**
     * 加价购批量新增或者更新接口.
     *
     * @param array $params
     * @return string
     */
    public function markupRepurchaseBatchSave(array $params)
    {
        return $this->post('act/markup/repurchase/batchsave', $params);
    }

    /**
     * 删除加价换购营销活动接口.
     *
     * @param array $params
     * @return string
     */
    public function markupRepurchaseDelete(array $params)
    {
        return $this->post('act/markup/repurchase/delete', $params);
    }

    /**
     * 查询加价购活动商品明细.
     *
     * @param array $params
     * @return string
     */
    public function markupRepurchaseFoodList(array $params)
    {
        return $this->get('act/markup/repurchase/food/list', $params);
    }

    /**
     * 查询门店内的所有加价购活动信息.
     *
     * @param array $params
     * @return string
     */
    public function markupRepurchaseList(array $params)
    {
        return $this->get('act/markup/repurchase/list', $params);
    }

    /**
     * 创建商品券活动.
     *
     * @param array $params
     * @return string
     */
    public function goodsCouponSave(array $params)
    {
        return $this->post('act/goods/coupon/save', $params);
    }

    /**
     * 删除商品券活动.
     *
     * @param array $params
     * @return string
     */
    public function goodsCouponDelete(array $params)
    {
        return $this->post('act/goods/coupon/delete', $params);
    }

    /**
     * 查询门店下商品券活动.
     *
     * @param array $params
     * @return string
     */
    public function goodsCouponList(array $params)
    {
        return $this->get('act/goods/coupon/list', $params);
    }

    /**
     * 批量查询商品券活动中的商品
     *
     * @param array $params
     * @return string
     */
    public function goodsCouponGoodsList(array $params)
    {
        return $this->get('act/goods/coupon/goodslist', $params);
    }

    /**
     * 创建/更新第N件优惠活动.
     *
     * @param array $params
     * @return string
     */
    public function nthDiscountSave(array $params)
    {
        return $this->post('act/nth/discount/save', $params);
    }

    /**
     * 删除第N件优惠活动.
     *
     * @param array $params
     * @return string
     */
    public function nthDiscountDelete(array $params)
    {
        // TODO 检查请求是否方式是否为GET, 官方文档可能有误, 因为其他删除操作的接口全部是POST请求;
        return $this->get('act/nth/discount/delete', $params);
    }

    /**
     * 查询第N件优惠活动信息.
     *
     * @param array $params
     * @return string
     */
    public function nthDiscountInfo(array $params)
    {
        return $this->get('act/nth/discount/info', $params);
    }

    /**
     * 查询第N件优惠活动中的商品信息.
     *
     * @param array $params
     * @return string
     */
    public function nthDiscountProducts(array $params)
    {
        return $this->get('act/nth/discount/products', $params);
    }

    /**
     * 查询商品参加的活动.
     *
     * @param array $params
     * @return string
     */
    public function allGetByAppFoodCodes(array $params)
    {
        return $this->get('act/all/get/byAppFoodCodes', $params);
    }

    /**
     * 修改折扣/爆品活动门店级每单限购商品总数.
     *
     * @param array $params
     * @return string
     */
    public function retailDiscountProductCount(array $params)
    {
        return $this->post('act/retail/discount/productcount', $params);
    }

    /**
     * 查询门店内活动信息.
     *
     * @param array $params
     * @return string
     */
    public function getByAppPoiCodeAndType(array $params)
    {
        return $this->get('act/all/get/byAppPoiCodeAndType', $params);
    }

    /**
     * 将门店商品从所参加的活动中删除.
     *
     * @param array $params
     * @return string
     */
    public function deleteActsByProducts(array $params)
    {
        return $this->post('act/deleteActsByProducts', $params);
    }
}

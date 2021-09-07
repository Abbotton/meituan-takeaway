<?php

namespace Abbotton\MeituanTakeaway\Request;

class Order extends BaseRequest
{
    /**
     * 自配订单已送达.
     *
     * @param array $params
     * @return string
     */
    public function arrived(array $params)
    {
        return $this->get('order/arrived', $params);
    }

    /**
     * 订单确认退款请求
     *
     * @param array $params
     * @return string
     */
    public function refundAgree(array $params)
    {
        return $this->get('order/refund/agree', $params);
    }

    /**
     * 驳回订单退款申请.
     *
     * @param array $params
     * @return string
     */
    public function refundReject(array $params)
    {
        return $this->get('order/refund/reject', $params);
    }

    /**
     * 查询订单状态
     *
     * @param array $params
     * @return string
     */
    public function viewStatus(array $params)
    {
        return $this->get('order/viewstatus', $params);
    }

    /**
     * 获取订单详细信息.
     *
     * @param array $params
     * @return string
     */
    public function getOrderDetail(array $params)
    {
        return $this->get('order/getOrderDetail', $params);
    }

    /**
     * 下发美团配送订单.
     *
     * @param array $params
     * @return string
     */
    public function logisticsPush(array $params)
    {
        return $this->get('order/logistics/push', $params);
    }

    /**
     * 取消美团配送订单.
     *
     * @param array $params
     * @return string
     */
    public function logisticsCancel(array $params)
    {
        return $this->get('order/logistics/cancel', $params);
    }

    /**
     * 获取订单配送状态
     *
     * @param array $params
     * @return string
     */
    public function logisticsStatus(array $params)
    {
        return $this->get('order/logistics/status', $params);
    }

    /**
     * 获取当日最新订单流水号.
     *
     * @param array $params
     * @return string
     */
    public function getOrderDaySeq(array $params)
    {
        return $this->get('order/getOrderDaySeq', $params);
    }

    /**
     * 根据流水号获取订单ID.
     *
     * @param array $params
     * @return string
     */
    public function getOrderIdByDaySeq(array $params)
    {
        return $this->get('order/getOrderIdByDaySeq', $params);
    }

    /**
     * 批量查询众包配送费.
     *
     * @param array $params
     * @return string
     */
    public function zhongBaoShippingFee(array $params)
    {
        return $this->get('order/zhongbao/shippingFee', $params);
    }

    /**
     * 众包发配送
     *
     * @param array $params
     * @return string
     */
    public function zhongBaoDispatch(array $params)
    {
        return $this->get('order/zhongbao/dispatch', $params);
    }

    /**
     * 众包配送单追加小费.
     *
     * @param array $params
     * @return string
     */
    public function zhongBaoUpdateTip(array $params)
    {
        return $this->get('order/zhongbao/update/tip', $params);
    }

    /**
     * 查询可被部分退款的商品详情.
     *
     * @param array $params
     * @return string
     */
    public function getPartRefundFoods(array $params)
    {
        return $this->get('order/getPartRefundFoods', $params);
    }

    /**
     * 发起部分退款.
     *
     * @param array $params
     * @return string
     */
    public function applyPartRefund(array $params)
    {
        return $this->post('order/applyPartRefund', $params);
    }

    /**
     * 催单回复接口.
     *
     * @param array $params
     * @return string
     */
    public function remindReply(array $params)
    {
        return $this->post('order/remindReply', $params);
    }

    /**
     * 商家确认已完成拣货.
     *
     * @param array $params
     * @return string
     */
    public function preparationMealComplete(array $params)
    {
        return $this->get('order/preparationMealComplete', $params);
    }

    /**
     * 商家获取备货时长
     *
     * @param array $params
     * @return string
     */
    public function getPreparationMealTime(array $params)
    {
        return $this->get('order/getPreparationMealTime', $params);
    }

    /**
     * 拉取用户真实手机号.
     *
     * @param array $params
     * @return string
     */
    public function batchPullPhoneNumber(array $params)
    {
        return $this->post('order/batchPullPhoneNumber', $params);
    }

    /**
     * 查询可申请货损赔付的订单.
     *
     * @param array $params
     * @return string
     */
    public function getSupportedCompensation(array $params)
    {
        return $this->get('order/getSupportedCompensation', $params);
    }

    /**
     * 申请货损赔付.
     *
     * @param array $params
     * @return string
     */
    public function applyCompensation(array $params)
    {
        return $this->post('order/applyCompensation', $params);
    }

    /**
     * 查询货损赔付结果.
     *
     * @param array $params
     * @return string
     */
    public function getCompensationResult(array $params)
    {
        return $this->get('order/getCompensationResult', $params);
    }

    /**
     * 专快混配送转为商家自配送
     *
     * @param array $params
     * @return string
     */
    public function logisticsChangePoiSelf(array $params)
    {
        return $this->post('order/logistics/change/poi_self', $params);
    }

    /**
     * 批量拉取异常订单.
     *
     * @param array $params
     * @return string
     */
    public function batchFetchAbnormalOrder(array $params)
    {
        return $this->post('order/batchFetchAbnormalOrder', $params);
    }

    /**
     * 获取订单退款记录.
     *
     * @param array $params
     * @return string
     */
    public function ecommerceOrderGetOrderRefundDetail(array $params)
    {
        return $this->get('ecommerce/order/getOrderRefundDetail', $params);
    }

    /**
     * 查询订单中的活动信息.
     *
     * @param array $params
     * @return string
     */
    public function ecommerceOrderGetOrderActDetail(array $params)
    {
        return $this->get('ecommerce/order/getOrderActDetail', $params);
    }

    /**
     * 根据流水号获取订单ID.
     *
     * @param array $params
     * @return string
     */
    public function ecommerceOrderGetOrderIdByDaySeq(array $params)
    {
        return $this->get('ecommerce/order/getOrderIdByDaySeq', $params);
    }

    /**
     * 自配送商家同步配送信息.
     *
     * @param array $params
     * @return string
     */
    public function ecommerceOrderLogisticsSync(array $params)
    {
        return $this->post('ecommerce/order/logistics/sync', $params);
    }

    /**
     * 快递配送商家同步配送信息接口.
     *
     * @param array $params
     * @return string
     */
    public function ecommerceOrderLogisticsBtocSync(array $params)
    {
        return $this->post('ecommerce/order/logistics/btoc/sync', $params);
    }

    /**
     * 批量查询客服赔付商家责任订单信息.
     *
     * @param array $params
     * @return string
     */
    public function batchCompensationOrder(array $params)
    {
        return $this->get('order/batchCompensationOrder', $params);
    }

    /**
     * 拉取骑手真实手机号.
     *
     * @param array $params
     * @return string
     */
    public function getRiderInfoPhoneNumber(array $params)
    {
        return $this->post('order/getRiderInfoPhoneNumber', $params);
    }

    /**
     * 售后审查接口.
     *
     * @param array $params
     * @return string
     */
    public function ecommerceOrderReviewAfterSales(array $params)
    {
        return $this->get('ecommerce/order/reviewAfterSales', $params);
    }

    /**
     * 获取取消跑腿配送原因列表.
     *
     * @param array $params
     * @return string
     */
    public function getCancelDeliveryReason(array $params)
    {
        return $this->get('order/getCancelDeliveryReason', $params);
    }

    /**
     * 取消跑腿配送
     *
     * @param array $params
     * @return string
     */
    public function cancelLogisticsByWmOrderId(array $params)
    {
        return $this->post('order/cancelLogisticsByWmOrderId', $params);
    }

    /**
     * 查询门店售后订单列表.
     *
     * @param array $params
     * @return string
     */
    public function getAfterSaleOrders(array $params)
    {
        return $this->get('ecommerce/order/getAfterSaleOrders', $params);
    }

    /**
     * 按克重退差价的金额预览.
     *
     * @param array $params
     * @return string
     */
    public function getUnitPartRefundPreview(array $params)
    {
        return $this->get('ecommerce/order/getUnitPartRefundPreview', $params);
    }

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

    /**
     * 门店日账单查询接口.
     *
     * @param array $params
     * @return string
     */
    public function billList(array $params)
    {
        return $this->post('gw/bill/list', $params);
    }

    /**
     * 修改订单备注.
     *
     * @param array $params
     * @return string
     */
    public function remarkUpdate(array $params)
    {
        return $this->post('gw/order/remark/update', $params);
    }

    /**
     * 售后审批.
     *
     * @param array $params
     * @return string
     */
    public function refundAudit(array $params)
    {
        return $this->post('gw/order/refund/audit', $params);
    }

    /**
     * 查询众包配送费与配送费优惠券详情.
     *
     * @param  array  $params
     * @return string
     */
    public function logisticsPtPreview(array $params)
    {
        return $this->get('order/logistics/pt/preview', $params);
    }

    /**
     * 获取跨境订单清关信息.
     *
     * @param  array  $params
     * @return string
     */
    public function getCrossBorderDetail(array $params)
    {
        return $this->get('ecommerce/order/getCrossBorderDetail', $params);
    }

    /**
     * 自配送商家同步预计送达时间接口.
     *
     * @param  array  $params
     * @return string
     */
    public function syncEstimateArrivalTime(array $params)
    {
        return $this->post('ecommerce/order/syncEstimateArrivalTime', $params);
    }

    /**
     * 查询支持的物流公司列表.
     *
     * @param  array  $params
     * @return string
     */
    public function logisticsCompanyList(array $params)
    {
        return $this->get('gw/logistics/company/list', $params);
    }

    /**
     * 查询增量订单列表信息.
     *
     * @param  array  $params
     * @return string
     */
    public function orderIncrementList(array $params)
    {
        return $this->get('gw/order/increment/list', $params);
    }

    /**
     * 批量查询电子面单信息.
     *
     * @param  array  $params
     * @return string
     */
    public function logisticsLabelBatchGetInfo(array $params)
    {
        return $this->get('gw/logistics/label/batchGetInfo', $params);
    }

    /**
     * 创建电子面单.
     *
     * @param  array  $params
     * @return string
     */
    public function create(array $params)
    {
        return $this->post('gw/logistics/label/create', $params);
    }

    /**
     * 批量解密接口.
     *
     * @param  array  $params
     * @return string
     */
    public function batchDecrypt(array $params)
    {
        return $this->post('gw/order/batchDecrypt', $params);
    }

    /**
     * 批量加密接口.
     *
     * @param  array  $params
     * @return string
     */
    public function batchEncrypt(array $params)
    {
        return $this->post('gw/order/batchDecrypt', $params);
    }

    /**
     * 商家开通的物流公司查询.
     *
     * @param  array  $params
     * @return mixed
     */
    public function logisticsLabelLogisticsAccountList(array $params)
    {
        return $this->get('gw/logistics/label/logisticsAccount/list', $params);
    }

    /**
     * 查询自定义打印模板.
     *
     * @param  array  $params
     * @return mixed
     */
    public function logisticsLabelPrintTemplateList(array $params)
    {
        return $this->get('gw/logistics/label/printTemplate/list', $params);
    }

    /**
     * 查询自定义打印模板.
     *
     * @param  array  $params
     * @return mixed
     */
    public function logisticsLabelCancel(array $params)
    {
        return $this->post('gw/logistics/label/cancel', $params);
    }
}

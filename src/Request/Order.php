<?php

namespace Abbotton\MeituanTakeaway\Request;

use Psr\Http\Message\StreamInterface;

class Order extends BaseRequest
{
    /**
     * 设订单为商家已收到.
     *
     * @param array $params
     *
     * @return StreamInterface
     */
    public function received(array $params)
    {
        return $this->get('order/poi_received', $params);
    }

    /**
     * 商家确认订单.
     *
     * @param array $params
     *
     * @return StreamInterface
     */
    public function confirm(array $params)
    {
        return $this->get('order/confirm', $params);
    }

    /**
     * 商家取消订单.
     *
     * @param array $params
     *
     * @return StreamInterface
     */
    public function cancel(array $params)
    {
        return $this->get('order/cancel', $params);
    }

    /**
     * 自配订单配送中.
     *
     * @param array $params
     *
     * @return StreamInterface
     */
    public function delivering(array $params)
    {
        return $this->get('order/delivering', $params);
    }

    /**
     * 自配订单已送达.
     *
     * @param array $params
     *
     * @return StreamInterface
     */
    public function arrived(array $params)
    {
        return $this->get('order/arrived', $params);
    }

    /**
     * 订单确认退款请求
     *
     * @param array $params
     *
     * @return StreamInterface
     */
    public function refundAgree(array $params)
    {
        return $this->get('order/refund/agree', $params);
    }

    /**
     * 驳回订单退款申请.
     *
     * @param array $params
     *
     * @return StreamInterface
     */
    public function refundReject(array $params)
    {
        return $this->get('order/refund/reject', $params);
    }

    /**
     * 查询订单状态
     *
     * @param array $params
     *
     * @return StreamInterface
     */
    public function viewStatus(array $params)
    {
        return $this->get('order/viewstatus', $params);
    }

    /**
     * 获取订单详细信息.
     *
     * @param array $params
     *
     * @return StreamInterface
     */
    public function getOrderDetail(array $params)
    {
        return $this->get('order/getOrderDetail', $params);
    }

    /**
     * 下发美团配送订单.
     *
     * @param array $params
     *
     * @return StreamInterface
     */
    public function logisticsPush(array $params)
    {
        return $this->get('order/logistics/push', $params);
    }

    /**
     * 取消美团配送订单.
     *
     * @param array $params
     *
     * @return StreamInterface
     */
    public function logisticsCancel(array $params)
    {
        return $this->get('order/logistics/cancel', $params);
    }

    /**
     * 获取订单配送状态
     *
     * @param array $params
     *
     * @return StreamInterface
     */
    public function logisticsStatus(array $params)
    {
        return $this->get('order/logistics/status', $params);
    }

    /**
     * 获取当日最新订单流水号.
     *
     * @param array $params
     *
     * @return StreamInterface
     */
    public function getOrderDaySeq(array $params)
    {
        return $this->get('order/getOrderDaySeq', $params);
    }

    /**
     * 根据流水号获取订单ID.
     *
     * @param array $params
     *
     * @return StreamInterface
     */
    public function getOrderIdByDaySeq(array $params)
    {
        return $this->get('order/getOrderIdByDaySeq', $params);
    }

    /**
     * 批量查询众包配送费.
     *
     * @param array $params
     *
     * @return StreamInterface
     */
    public function zhongBaoShippingFee(array $params)
    {
        return $this->get('order/zhongbao/shippingFee', $params);
    }

    /**
     * 众包发配送
     *
     * @param array $params
     *
     * @return StreamInterface
     */
    public function zhongBaoDispatch(array $params)
    {
        return $this->get('order/zhongbao/dispatch', $params);
    }

    /**
     * 众包配送单追加小费.
     *
     * @param array $params
     *
     * @return StreamInterface
     */
    public function zhongBaoUpdateTip(array $params)
    {
        return $this->get('order/zhongbao/update/tip', $params);
    }

    /**
     * 查询可被部分退款的商品详情.
     *
     * @param array $params
     *
     * @return StreamInterface
     */
    public function getPartRefundFoods(array $params)
    {
        return $this->get('order/getPartRefundFoods', $params);
    }

    /**
     * 发起部分退款.
     *
     * @param array $params
     *
     * @return StreamInterface
     */
    public function applyPartRefund(array $params)
    {
        return $this->post('order/applyPartRefund', $params);
    }

    /**
     * 催单回复接口.
     *
     * @param array $params
     *
     * @return StreamInterface
     */
    public function remindReply(array $params)
    {
        return $this->post('order/remindReply', $params);
    }

    /**
     * 商家确认已完成拣货.
     *
     * @param array $params
     *
     * @return StreamInterface
     */
    public function preparationMealComplete(array $params)
    {
        return $this->get('order/preparationMealComplete', $params);
    }

    /**
     * 商家获取备货时长
     *
     * @param array $params
     *
     * @return StreamInterface
     */
    public function getPreparationMealTime(array $params)
    {
        return $this->get('order/getPreparationMealTime', $params);
    }

    /**
     * 拉取用户真实手机号.
     *
     * @param array $params
     *
     * @return StreamInterface
     */
    public function batchPullPhoneNumber(array $params)
    {
        return $this->post('order/batchPullPhoneNumber', $params);
    }

    /**
     * 查询可申请货损赔付的订单.
     *
     * @param array $params
     *
     * @return StreamInterface
     */
    public function getSupportedCompensation(array $params)
    {
        return $this->get('order/getSupportedCompensation', $params);
    }

    /**
     * 申请货损赔付.
     *
     * @param array $params
     *
     * @return StreamInterface
     */
    public function applyCompensation(array $params)
    {
        return $this->post('order/applyCompensation', $params);
    }

    /**
     * 查询货损赔付结果.
     *
     * @param array $params
     *
     * @return StreamInterface
     */
    public function getCompensationResult(array $params)
    {
        return $this->get('order/getCompensationResult', $params);
    }

    /**
     * 专快混配送转为商家自配送
     *
     * @param array $params
     *
     * @return StreamInterface
     */
    public function logisticsChangePoiSelf(array $params)
    {
        return $this->post('order/logistics/change/poi_self', $params);
    }

    /**
     * 批量拉取异常订单.
     *
     * @param array $params
     *
     * @return StreamInterface
     */
    public function batchFetchAbnormalOrder(array $params)
    {
        return $this->post('order/batchFetchAbnormalOrder', $params);
    }

    /**
     * 获取订单退款记录.
     *
     * @param array $params
     *
     * @return StreamInterface
     */
    public function ecommerceOrderGetOrderRefundDetail(array $params)
    {
        return $this->get('ecommerce/order/getOrderRefundDetail', $params);
    }

    /**
     * 查询订单中的活动信息.
     *
     * @param array $params
     *
     * @return StreamInterface
     */
    public function ecommerceOrderGetOrderActDetail(array $params)
    {
        return $this->get('ecommerce/order/getOrderActDetail', $params);
    }

    /**
     * 根据流水号获取订单ID.
     *
     * @param array $params
     *
     * @return StreamInterface
     */
    public function ecommerceOrderGetOrderIdByDaySeq(array $params)
    {
        return $this->get('ecommerce/order/getOrderIdByDaySeq', $params);
    }

    /**
     * 自配送商家同步配送信息.
     *
     * @param array $params
     *
     * @return StreamInterface
     */
    public function ecommerceOrderLogisticsSync(array $params)
    {
        return $this->post('ecommerce/order/logistics/sync', $params);
    }

    /**
     * 快递配送商家同步配送信息接口.
     *
     * @param array $params
     *
     * @return StreamInterface
     */
    public function ecommerceOrderLogisticsBtocSync(array $params)
    {
        return $this->post('ecommerce/order/logistics/btoc/sync', $params);
    }

    /**
     * 批量查询客服赔付商家责任订单信息.
     *
     * @param array $params
     *
     * @return StreamInterface
     */
    public function batchCompensationOrder(array $params)
    {
        return $this->get('order/batchCompensationOrder', $params);
    }

    /**
     * 拉取骑手真实手机号.
     *
     * @param array $params
     *
     * @return StreamInterface
     */
    public function getRiderInfoPhoneNumber(array $params)
    {
        return $this->post('order/getRiderInfoPhoneNumber', $params);
    }

    /**
     * 售后审查接口.
     *
     * @param array $params
     *
     * @return StreamInterface
     */
    public function ecommerceOrderReviewAfterSales(array $params)
    {
        return $this->get('ecommerce/order/reviewAfterSales', $params);
    }
}

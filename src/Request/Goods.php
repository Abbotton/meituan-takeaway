<?php

namespace Abbotton\MeituanTakeaway\Request;

class Goods extends BaseRequest
{
    /**
     * 查询商品类目.
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->post('gw/goods/getCategory');
    }

    /**
     * 查询商品类目属性.
     *
     * @return string
     */
    public function getCategoryProperty(array $params)
    {
        return $this->post('gw/goods/getCategoryProperty', $params);
    }

    /**
     * 查询商品标准规格信息.
     *
     * @param array $params
     * @return string
     */
    public function getCategoryStandard(array $params)
    {
        return $this->post('gw/goods/getCategoryStandard', $params);
    }

    /**
     * 查询运费模板.
     *
     * @param array $params
     * @return string
     */
    public function getDeliveryTemplate(array $params)
    {
        return $this->post('gw/goods/getDeliveryTemplate', $params);
    }

    /**
     * 商品图片上传.
     *
     * @param array $params
     * @return string
     */
    public function imageUpload(array $params)
    {
        return $this->post('gw/goods/imageUpload', $params);
    }

    /**
     * 创建商品.
     *
     * @param array $params
     * @return string
     */
    public function create(array $params)
    {
        return $this->post('gw/goods/create', $params);
    }

    /**
     * 更新商品.
     *
     * @param array $params
     * @return string
     */
    public function update(array $params)
    {
        return $this->post('gw/goods/update', $params);
    }

    /**
     * 查询商品详情.
     *
     * @param array $params
     * @return string
     */
    public function detail(array $params)
    {
        return $this->post('gw/goodds/detail', $params);
    }

    /**
     * 查询门店商品列表.
     *
     * @param array $params
     * @return string
     */
    public function list(array $params)
    {
        return $this->post('gw/goods/list', $params);
    }

    /**
     * 批量修改sku库存.
     *
     * @param array $params
     * @return string
     */
    public function batchUpdateStock(array $params)
    {
        return $this->post('gw/goods/batchUpdateStock', $params);
    }

    /**
     * 批量修改sku价格.
     *
     * @param array $params
     * @return string
     */
    public function batchUpdatePrice(array $params)
    {
        return $this->post('gw/goods/batchUpdatePrice', $params);
    }

    /**
     * 团好货查询商品品牌列表.
     *
     * @param array $params
     * @return string
     */
    public function brandList(array $params)
    {
        return $this->post('gw/goods/brand/list', $params);
    }
}

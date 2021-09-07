<?php

namespace Abbotton\MeituanTakeaway\Request;

class Medicine extends BaseRequest
{
    /**
     * 批量更新药品价格
     *
     * @param array $params
     * @return string
     */
    public function price(array $params)
    {
        return $this->post('medicine/price', $params);
    }

    /**
     * 批量更新 app_medicine_code.
     *
     * @param array $params
     * @return string
     */
    public function codeUpdate(array $params)
    {
        return $this->post('medicine/code/update', $params);
    }

    /**
     * 药品批量上下架.
     *
     * @param array $params
     * @return string
     */
    public function isSoldOut(array $params)
    {
        return $this->post('medicine/isSoldOut', $params);
    }

    /**
     * 查询任务进程.
     *
     * @param array $params
     * @return string
     */
    public function taskStatus(array $params)
    {
        return $this->get('task/status', $params);
    }

    /**
     * 导入标品主图优化图片.
     *
     * @param array $params
     * @return mixed
     */
    public function importUpcImageData(array $params)
    {
        return $this->post('medicine/importUpcImageData', $params);
    }

    /**
     * 批量更新药品仓库库存.
     *
     * @param array $params
     * @return mixed
     */
    public function warehouseStock(array $params)
    {
        return $this->post('medicine/warehouse/stock', $params);
    }

    /**
     * 查询门店药品详情.
     *
     * @param  array  $params
     * @return mixed
     */
    public function medicineGet(array $params)
    {
        return $this->get('medicine/get', $params);
    }

    /**
     * 查询药品标品审核结果.
     *
     * @param  array  $params
     * @return mixed
     */
    public function auditResult(array $params)
    {
        return $this->get('gw/medicine/audit/result', $params);
    }

    /**
     * 查询品牌商品库列表.
     *
     * @param  array  $params
     * @return mixed
     */
    public function medicineHqMerchantList(array $params)
    {
        return $this->get('medicine/hq/merchant/list', $params);
    }

    /**
     * 新建总部药品分类.
     *
     * @param  array  $params
     * @return mixed
     */
    public function medicineCatHqSave(array $params)
    {
        return $this->post('medicineCat/hq/save', $params);
    }

    /**
     * 删除总部药品分类.
     *
     * @param  array  $params
     * @return mixed
     */
    public function medicineCatHqDelete(array $params)
    {
        return $this->post('medicineCat/hq/delete', $params);
    }

    /**
     * 查询总部药品分类列表.
     *
     * @param  array  $params
     * @return mixed
     */
    public function medicineCatHqList(array $params)
    {
        return $this->get('medicineCat/hq/list', $params);
    }

    /**
     * 批量新建总部药品.
     *
     * @param  array  $params
     * @return mixed
     */
    public function medicineHqBatchSave(array $params)
    {
        return $this->post('medicine/hq/batchSave', $params);
    }

    /**
     * 批量更新总部药品.
     *
     * @param  array  $params
     * @return mixed
     */
    public function medicineHqBatchUpdate(array $params)
    {
        return $this->post('medicine/hq/batchUpdate', $params);
    }

    /**
     * 批量删除总部药品.
     *
     * @param  array  $params
     * @return mixed
     */
    public function medicineHqBatchDelete(array $params)
    {
        return $this->post('medicine/hq/batchDelete', $params);
    }

    /**
     * 查询总部药品详情.
     *
     * @param  array  $params
     * @return mixed
     */
    public function medicineHqDetail(array $params)
    {
        return $this->get('medicine/hq/detail', $params);
    }

    /**
     * 查询总部药品列表.
     *
     * @param  array  $params
     * @return mixed
     */
    public function medicineHqList(array $params)
    {
        return $this->post('medicine/hq/list', $params);
    }

    /**
     * 批量新增总部药品至门店.
     *
     * @param  array  $params
     * @return mixed
     */
    public function medicineHqBatchAddPoi(array $params)
    {
        return $this->post('medicine/hq/batchAddPoi', $params);
    }
}

<?php

namespace Abbotton\MeituanTakeaway\Request;

class Medicine extends BaseRequest
{
    /**
     * 创建药品分类
     *
     * @param array $params
     * @return string
     */
    public function catSave(array $params)
    {
        return $this->post('medicineCat/save', $params);
    }
    
    /**
     * 更新药品分类
     *
     * @param array $params
     * @return string
     */
    public function catUpdate(array $params)
    {
        return $this->post('medicineCat/update', $params);
    }
    
    /**
     * 删除药品分类
     *
     * @param array $params
     * @return string
     */
    public function catDelete(array $params)
    {
        return $this->post('medicineCat/delete', $params);
    }
    
    /**
     * 查询门店药品分类列表
     *
     * @param array $params
     * @return string
     */
    public function catList(array $params)
    {
        return $this->get('medicineCat/list', $params);
    }
    
    /**
     * 创建药品
     *
     * @param array $params
     * @return string
     */
    public function save(array $params)
    {
        return $this->post('medicine/save', $params);
    }
    
    /**
     * 更新药品
     *
     * @param array $params
     * @return string
     */
    public function update(array $params)
    {
        return $this->post('medicine/update', $params);
    }
    
    /**
     * 批量创建药品
     *
     * @param array $params
     * @return string
     */
    public function batchsave(array $params)
    {
        return $this->post('medicine/batchsave', $params);
    }
    
    /**
     * 批量更新药品
     *
     * @param array $params
     * @return string
     */
    public function batchupdate(array $params)
    {
        return $this->post('medicine/batchupdate', $params);
    }
    
    /**
     * 删除药品
     *
     * @param array $params
     * @return string
     */
    public function delete(array $params)
    {
        return $this->post('medicine/delete', $params);
    }
    
    /**
     * 查询门店药品列表
     *
     * @param array $params
     * @return string
     */
    public function list(array $params)
    {
        return $this->get('medicine/list', $params);
    }
    
    /**
     * 批量更新药品库存
     *
     * @param array $params
     * @return string
     */
    public function stock(array $params)
    {
        return $this->post('medicine/stock', $params);
    }
    
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
     * 批量更新 app_medicine_code
     *
     * @param array $params
     * @return string
     */
    public function codeUpdate(array $params)
    {
        return $this->post('medicine/code/update', $params);
    }
    
    /**
     * 药品批量上下架
     *
     * @param array $params
     * @return string
     */
    public function isSoldOut(array $params)
    {
        return $this->post('medicine/isSoldOut', $params);
    }
    
    /**
     * 查询任务进程
     *
     * @param array $params
     * @return string
     */
    public function taskStatus(array $params)
    {
        return $this->get('task/status', $params);
    }

    /**
     * 查询药品标品审核结果
     *
     * @param array $params
     * @return mixed
     */
    public function auditResult(array $params)
    {
        return $this->get('medicine/audit/result', $params);
    }

    /**
     * 导入标品主图优化图片
     *
     * @param array $params
     * @return mixed
     */
    public function importUpcImageData(array $params)
    {
        return $this->post('medicine/importUpcImageData', $params);
    }

    /**
     * 批量更新药品仓库库存
     *
     * @param array $params
     * @return mixed
     */
    public function warehouseStock(array $params)
    {
        return $this->post('medicine/warehouse/stock', $params);
    }
}
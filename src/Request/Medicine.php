<?php

namespace Abbotton\MeituanTakeaway\Request;

use Psr\Http\Message\StreamInterface;

class Medicine extends BaseRequest
{
    /**
     * 创建药品分类
     *
     * @param array $params
     * @return StreamInterface
     */
    public function catSave(array $params)
    {
        return $this->post('medicineCat/save', $params);
    }
    
    /**
     * 更新药品分类
     *
     * @param array $params
     * @return StreamInterface
     */
    public function catUpdate(array $params)
    {
        return $this->post('medicineCat/update', $params);
    }
    
    /**
     * 删除药品分类
     *
     * @param array $params
     * @return StreamInterface
     */
    public function catDelete(array $params)
    {
        return $this->post('medicineCat/delete', $params);
    }
    
    /**
     * 查询门店药品分类列表
     *
     * @param array $params
     * @return StreamInterface
     */
    public function catList(array $params)
    {
        return $this->get('medicineCat/list', $params);
    }
    
    /**
     * 创建药品
     *
     * @param array $params
     * @return StreamInterface
     */
    public function save(array $params)
    {
        return $this->post('medicine/save', $params);
    }
    
    /**
     * 更新药品
     *
     * @param array $params
     * @return StreamInterface
     */
    public function update(array $params)
    {
        return $this->post('medicine/update', $params);
    }
    
    /**
     * 批量创建药品
     *
     * @param array $params
     * @return StreamInterface
     */
    public function batchsave(array $params)
    {
        return $this->post('medicine/batchsave', $params);
    }
    
    /**
     * 批量更新药品
     *
     * @param array $params
     * @return StreamInterface
     */
    public function batchupdate(array $params)
    {
        return $this->post('medicine/batchupdate', $params);
    }
    
    /**
     * 删除药品
     *
     * @param array $params
     * @return StreamInterface
     */
    public function delete(array $params)
    {
        return $this->post('medicine/delete', $params);
    }
    
    /**
     * 查询门店药品列表
     *
     * @param array $params
     * @return StreamInterface
     */
    public function list(array $params)
    {
        return $this->get('medicine/list', $params);
    }
    
    /**
     * 批量更新药品库存
     *
     * @param array $params
     * @return StreamInterface
     */
    public function stock(array $params)
    {
        return $this->post('medicine/stock', $params);
    }
    
    /**
     * 批量更新药品价格
     *
     * @param array $params
     * @return StreamInterface
     */
    public function price(array $params)
    {
        return $this->post('medicine/price', $params);
    }
    
    /**
     * 批量更新 app_medicine_code
     *
     * @param array $params
     * @return StreamInterface
     */
    public function codeUpdate(array $params)
    {
        return $this->post('medicine/code/update', $params);
    }
    
    /**
     * 药品批量上下架
     *
     * @param array $params
     * @return StreamInterface
     */
    public function isSoldOut(array $params)
    {
        return $this->post('medicine/isSoldOut', $params);
    }
    
    /**
     * 查询任务进程
     *
     * @param array $params
     * @return StreamInterface
     */
    public function taskStatus(array $params)
    {
        return $this->get('task/status', $params);
    }
}
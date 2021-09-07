<?php

namespace Abbotton\MeituanTakeaway\Request;

class Task extends BaseRequest
{
    /**
     * 根据任务Id查询任务进度.
     *
     * @param  array  $params
     * @return string
     */
    public function detail(array $params)
    {
        return $this->get('task/detail', $params);
    }
}

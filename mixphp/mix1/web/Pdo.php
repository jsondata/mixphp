<?php

namespace mix\web;

/**
 * Mysql组件
 * @author 刘健 <coder.liu@qq.com>
 */
class Pdo extends \mix\rdb\Pdo
{

    // 请求开始事件
    public function onRequestStart()
    {
        parent::onRequestStart();
        // 连接
        $this->connect();
    }

    // 请求结束事件
    public function onRequestEnd()
    {
        parent::onRequestEnd();
        // 关闭连接
        $this->close();
    }

}

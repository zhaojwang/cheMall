<?php
namespace app\common\model;

use think\Model;

class Artclass extends Model
{


    protected $updateTime = 'updatetime';
    protected $insert = ['updatetime'];


    //自定义初始化
    protected function initialize()
    {
        //需要调用`Model`的`initialize`方法
        parent::initialize();
    }
    /**
     * [setUpdatetimeAttr 更新时间]
     * @Author:  slade
     * @DateTime :2017-03-23T10:35:28+080
     */
    protected function setUpdatetimeAttr() {
        return time();
    }

}

?>
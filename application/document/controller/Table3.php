<?php
/**
 * Created by PhpStorm.
 * User: waterforest
 * Date: 2018/3/8
 * Time: 9:50
 */

namespace app\document\controller;


use app\admin\controller\Base;

class Table3 extends Base
{
    public function index()
    {
        return $this->fetch();
    }

}
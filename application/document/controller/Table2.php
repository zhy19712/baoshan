<?php
/**
 * Created by PhpStorm.
 * User: waterforest
 * Date: 2018/3/8
 * Time: 9:49
 */

namespace app\document\controller;


use app\admin\controller\Base;

class Table2 extends Base
{
    public function index()
    {
        return $this->fetch();
    }

}
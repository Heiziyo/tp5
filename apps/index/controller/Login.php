<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/9
 * Time: 16:10
 */
namespace app\index\controller;
use app\common\controller\Home;

class Login extends Home{


    public function _initialize()
    {
        parent::_initialize();
    }

    public function login(){


        return $this->view->fetch();
    }

}

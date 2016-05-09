<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/9
 * Time: 16:06
 */
namespace app\common\controller;
use think\View;
use think\Controller;

class Heizi extends Controller{
    protected $view;
    public function _initialize(){
        $this->view = new View();
    }
}

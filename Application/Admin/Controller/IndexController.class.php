<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    /**
     * 管理端首页
     */
    public function index(){
        $this->display();
    }
}
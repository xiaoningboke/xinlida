<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
        /**
         * 判断是否登录，或者有没有权限访问
         * @return [type] [description]
         */
        public function _initialize(){
         if (!session('?user')) {
             $this->error('对不起，您还没有登录!请先登录在进行操作',U('Login/Index/index'));
        }
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: sunxiaoning
 * Date: 2019/1/30
 * Time: 9:58
 */
namespace Home\Controller;
use Home\Model\ConfigModel;
use Home\Model\FenleiModel;
use Think\Controller;
class CommonController extends Controller{
    public function _initialize(){
        $fenlei = new FenleiModel();
        $config = new ConfigModel();
        $fenleiData = $fenlei->selFenlei();
        $configData = $config->selConfig();
        $this->assign('fenlei',$fenleiData);
        $this->assign('config',$configData);
    }
}
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
use Home\Model\PictureModel;
use Think\Controller;
class CommonController extends Controller{
    public function _initialize(){
        $fenlei = new FenleiModel();
        $config = new ConfigModel();
        $pic = new PictureModel();
        $picdata = $pic->sel();
        $fenleiData = $fenlei->selFenlei();
        $configData = $config->selConfig();
        $this->assign('fenlei',$fenleiData);
        $this->assign('config',$configData);
        $this->assign('picdata',$picdata);


        if (ismobile()) {
            //设置默认默认主题为 Mobile
            C('DEFAULT_V_LAYER','Mobile');
        }

    }
}
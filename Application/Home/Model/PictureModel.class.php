<?php
/**
 * Created by PhpStorm.
 * User: sunxiaoning
 * Date: 2019/1/30
 * Time: 16:11
 */
namespace Home\Model;
use Think\Model;
class PictureModel extends Model {
    /**
     * 返回所有图片
     * @return mixed
     */
    public function sel(){
        $pic = M("Picture");
        $data = $pic->select();
        return $data;
    }

}
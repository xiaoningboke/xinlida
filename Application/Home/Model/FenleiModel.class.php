<?php
/**
 * Created by PhpStorm.
 * User: sunxiaoning
 * Date: 2019/1/30
 * Time: 9:50
 */
namespace Home\Model;
use Think\Model;
class FenleiModel extends Model {
    /**
     * 查询所有的产品分类
     * @return mixed
     */
    public function selFenlei(){
        $fenlei = M("Fenlei");
        $data = $fenlei->select();
        return $data;
    }
}
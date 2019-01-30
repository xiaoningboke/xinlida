<?php
/**
 * Created by PhpStorm.
 * User: sunxiaoning
 * Date: 2019/1/29
 * Time: 17:16
 */
namespace Admin\Model;
use Think\Model;
class FenleiModel extends Model {

    /**
     * 添加产品的分类
     * @param $data
     * @return mixed
     */
    public function addFenlei($data){
        $fenlei = M('Fenlei');
        $i = $fenlei->add($data);
        return $i;
    }

    /**
     * 查询所有分类
     * @return mixed
     */
    public function fenleiList(){
        $fenlei = M('Fenlei');
        $data = $fenlei->select();
        return $data;
    }

    /**
     * 根据id查询分类
     * @param $id
     * @return mixed
     */
    public function findFenlei($id){
        $fenlei = M('Fenlei');
        $map['id'] =array('eq',$id);
        $data = $fenlei->where($map)->find();
        return $data;
    }

    /**
     * 根据id修改产品分类
     * @param $data
     * @return bool
     */
    public function exitFenlei($data){
        $id = $data[id];
        $map['id'] =array('eq',$id);
        $fenlei = M('Fenlei');
        $i = $fenlei->where($map)->save($data);
        return $i;
    }

    /**
     * 删除分类
     * @param $id
     * @return mixed
     */
    public function delFenlei($id){
        $map['id'] =array('eq',$id);
        $fenlei = M('Fenlei');
        $i = $fenlei->where($map)->delete();
        return $i;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: sunxiaoning
 * Date: 2019/1/30
 * Time: 14:05
 */
namespace Admin\Model;
use Think\Model;
class YqljModel extends Model {
    /**
     * 添加友情链接
     * @param $data
     * @return mixed
     */
    public function addYqlj($data){
        $yqlj = M('Yqlj');
        $i = $yqlj->add($data);
        return $i;
    }

    /**
     * 查询所有的友情链接
     * @return mixed
     */
    public function yqljList(){
        $yqlj = M('Yqlj');
        $data = $yqlj->select();
        return $data;
    }

    /**
     * 根据id查询友情链接
     * @param $id
     * @return mixed
     */
    public function findYqlj($id){
        $yqlj = M('Yqlj');
        $map['id'] =array('eq',$id);
        $data = $yqlj->where($map)->find();
        return $data;
    }

    /**
     * 修改友情链接
     * @param $data
     * @return bool
     */
    public function exitYqlj($data){
        $id = $data[id];
        $map['id'] =array('eq',$id);
        $yqlj = M('Yqlj');
        $i = $yqlj->where($map)->save($data);
        return $i;
    }

    /**
     * 删除友情链接
     * @param $id
     * @return mixed
     */
    public function delYqlj($id){
        $map['id'] =array('eq',$id);
        $yqlj = M('Yqlj');
        $i = $yqlj->where($map)->delete();
        return $i;
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: sunxiaoning
 * Date: 2019/1/30
 * Time: 16:11
 */
namespace Admin\Model;
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

    /**
     * 根据id查找图片
     * @param $id
     * @return mixed
     */
    public function findpic($id){
        $pic = M("Picture");
        $map['id'] =array('eq',$id);
        $data = $pic->where($map)->find();
        return $data;
    }

    /**
     * 更换图片
     * @param $data
     * @return bool
     */
    public function exitpic($data){
        $id = $data[id];
        $map['id'] =array('eq',$id);
        $pic = M('Picture');
        $i = $pic->where($map)->save($data);
        return $i;
    }
}
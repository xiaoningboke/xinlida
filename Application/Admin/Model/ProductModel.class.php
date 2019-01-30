<?php
/**
 * Created by PhpStorm.
 * User: sunxiaoning
 * Date: 2019/1/30
 * Time: 8:21
 */
namespace Admin\Model;
use Think\Model;
class ProductModel extends Model {

    /**
     * 添加产品
     * @param $data
     * @return mixed
     */
    public function addProduct($data){
        $product = M("Product");
        $i = $product->add($data);
        return $i;
    }

    /**
     * 查询所有商品
     * @return mixed
     */
    public function productList(){
        $product = M("Product");
        $data = $product->select();
        return $data;
    }

    /**
     * 根据id查找产品
     * @param $id
     * @return mixed
     */
    public function findProduct($id){
        $map['id'] =array('eq',$id);
        $product = M("Product");
        $data = $product->where($map)->find();
        return $data;
    }

    /**
     * 修改产品资料
     * @param $data
     * @return bool
     */
    public function exitProduct($data){
        $id = $data[id];
        $map['id'] =array('eq',$id);
        $product = M('Product');
        $i = $product->where($map)->save($data);
        return $i;
    }

    /**
     * 删除产品
     * @param $id
     * @return mixed
     */
    public function delProduct($id){
        $map['id'] =array('eq',$id);
        $product = M('Product');
        $i = $product->where($map)->delete();
        return $i;
    }
}
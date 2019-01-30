<?php
/**
 * Created by PhpStorm.
 * User: sunxiaoning
 * Date: 2019/1/30
 * Time: 8:21
 */
namespace Home\Model;
use Think\Model;
class ProductModel extends Model {

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

}
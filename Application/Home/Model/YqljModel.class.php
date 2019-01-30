<?php
/**
 * Created by PhpStorm.
 * User: sunxiaoning
 * Date: 2019/1/30
 * Time: 14:05
 */
namespace Home\Model;
use Think\Model;
class YqljModel extends Model {
    /**
     * 查询所有的友情链接
     * @return mixed
     */
    public function yqljList(){
        $yqlj = M('Yqlj');
        $data = $yqlj->select();
        return $data;
    }
}
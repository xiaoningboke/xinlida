<?php
/**
 * Created by PhpStorm.
 * User: sunxiaoning
 * Date: 2019/1/28
 * Time: 14:18
 */

namespace Home\Model;

use Think\Model;

class ConfigModel extends Model
{
    /**
     * 查询网站的基本配置
     * @return mixed 基本配置
     */
    public function selConfig()
    {
        $config = M("Config");
        $data = $config->where("id = 1")->find();
        return $data;
    }

}
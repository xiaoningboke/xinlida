<?php
/**
 * Created by PhpStorm.
 * User: sunxiaoning
 * Date: 2019/1/28
 * Time: 16:03
 */

namespace Home\Model;

use Think\Model;

class ArticleModel extends Model
{

    /**
     * 根据标题查询文章
     * @param $title
     * @return mixed
     */
    public function findTitle($title)
    {
        $map['title'] = array('eq', $title);
        $article = M('Article');
        $data = $article->where($map)->find();
        return $data;
    }


    /**
     * 根据$classify查询新闻列表
     * @param $id
     * @return mixed
     */
    public function newsList($classify)
    {
        $map['classify'] = array('eq', $classify);
        $article = M('Article');
        $data = $article->where($map)->order('id DESC')->select();
        return $data;
    }

    /**
     * 根据id查询文章
     * @param $id
     * @return mixed
     */
    public function findNews($id)
    {
        $map['id'] = array('eq', $id);
        $article = M('Article');
        $data = $article->where($map)->find();
        return $data;
    }

    /**
     * 根据分类查询6条
     * @param $fenlei
     * @return mixed
     */
    public function selFenlei($fenlei){
        $map['fenlei'] = array('eq', $fenlei);
        $article = M('Article');
        $data = $article->where($map)->order('id DESC')->limit(6)->select();
        return $data;
    }


}
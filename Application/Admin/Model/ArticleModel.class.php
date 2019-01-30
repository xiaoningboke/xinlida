<?php
/**
 * Created by PhpStorm.
 * User: sunxiaoning
 * Date: 2019/1/28
 * Time: 16:03
 */
namespace Admin\Model;
use Think\Model;
class ArticleModel extends Model {

    /**
     * 根据标题查询文章
     * @param $title
     * @return mixed
     */
    public function findTitle($title){
        $map['title'] =array('eq',$title);
        $article = M('Article');
        $data = $article->where($map)->find();
        return $data;
    }

    /**
     * 根据标题进行更改
     * @param $data
     * @return bool
     */
    public function updateTitle($data){
        $map['title'] =array('eq',$data[title]);
        $article = M('Article');
        $i = $article->where($map)->save($data);
        return $i;
    }

    /**
     * 添加文章
     * @param $data
     * @return mixed
     */
    public function addNews($data){
        $article = M('Article');
        $i = $article->add($data);
        return $i;
    }

    /**
     * 根据$classify查询新闻列表
     * @param $id
     * @return mixed
     */
    public function newsList($classify){
        $map['classify'] =array('eq',$classify);
        $article = M('Article');
        $data = $article->where($map)->order('id DESC')->select();
        return $data;
    }

    /**
     * 根据id查询文章
     * @param $id
     * @return mixed
     */
    public function findNews($id){
        $map['id'] =array('eq',$id);
        $article = M('Article');
        $data = $article->where($map)->find();
        return $data;
    }

    /**
     * 根据id进行修改
     * @param $data
     * @return bool
     */
    public function exitNews($data){
        $id = $data[id];
        $map['id'] =array('eq',$id);
        $article = M('Article');
        $i = $article->where($map)->save($data);
        return $i;
    }

    /**
     * 根据id删除文章
     * @param $id
     * @return mixed
     */
    public function delNews($id){
        $map['id'] =array('eq',$id);
        $article = M('Article');
        $i = $article->where($map)->delete();
        return $i;
    }
}
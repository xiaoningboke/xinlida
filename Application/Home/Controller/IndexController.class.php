<?php
namespace Home\Controller;
use Home\Model\ArticleModel;
use Home\Model\ProductModel;
use Home\Model\YqljModel;
use Think\Controller;

class IndexController extends CommonController {
    /**
     * 网站首页
     */
    public function index(){
        $article = new ArticleModel();
        $gsjj = $article->findTitle("公司简介");//获取公司简介
        $rdzx = $article->selFenlei(0);//热点资讯
        $hqgz = $article->selFenlei(1);//行情关注
        $zshb = $article->selFenlei(2);//知识汇编
        $product = new ProductModel();
        $cp = $product->productList();//获取公司产品
        $yqlj = new YqljModel();
        $yqljData = $yqlj->yqljList();
        $this->assign('yqlj',$yqljData);
        $this->assign('gsjj',$gsjj);
        $this->assign('rdzx',$rdzx);
        $this->assign('hqgz',$hqgz);
        $this->assign('zshb',$zshb);
        $this->assign('cp',$cp);
        $this->display();
    }

    /**
     * 公司简介
     */
    public function gsjj(){
        $article = new ArticleModel();
        $gsjj = $article->findTitle("公司简介");//获取公司简介
        $this->assign('gsjj',$gsjj);
        $this->display();
    }

    /**
     * 产品列表
     */
    public function product(){
        $User = M('Product');//实例化Goods数据对象  Goods是你的表名
        //p是前台传值过来的参数，也就是页码
        if($_GET['p']==NULL){
            $p=1;
        }else{
            $p=$_GET['p'];
        }

        if($_GET[id]==NULL){
            $list = $User->order('id DESC')->page($p.',8')->select();// 查询满足要求的总记录数
            $count = $User->count();
        }else{
            $map['fenlei'] =array('eq',$_GET[id]);
            $list = $User->where($map)->order('id DESC')->page($p.',8')->select();// 查询满足要求的总记录数
            $count = $User->where($map)->count();

        }

        $this->assign('list',$list);// 赋值数据集
        $Page = new \Think\Page($count,8);
        $show = $Page->show();
        $this->assign('title','产品中心');
        $this->assign('page',$show);
        $this->display();
    }

    /**
     * 显示产品详情
     */
    public function chanpin(){
        $id = I("id");
        $product = new ProductModel();
        $data = $product->findProduct($id);
        $this->assign('data',$data);
        $this->display();
    }

    /**
     * 显示现货资源
     */
    public function xhzy(){
        $article = new ArticleModel();
        $xhzy = $article->findTitle("现货资源");//获取现货资源
        $this->assign('xhzy',$xhzy);
        $this->display();
    }

    /**
     * 显示库存展示
     */
    public function kczy(){
        $article = new ArticleModel();
        $kczy = $article->findTitle("库存展示");//获取库存资源
        $this->assign('kczy',$kczy);
        $this->display();
    }

    /**
     * 显示行情资讯列表
     */
    public function hqzx(){
        $User = M('Article');//实例化Goods数据对象  Goods是你的表名
        //p是前台传值过来的参数，也就是页码
        if($_GET['p']==NULL){
            $p=1;
        }else{
            $p=$_GET['p'];
        }
        $list = $User->where("classify = 1")->order('id DESC')->page($p.',10')->select();// 查询满足要求的总记录数
        $this->assign('list',$list);// 赋值数据集
        $count = $User->count();
        $Page = new \Think\Page($count,10);
        $show = $Page->show();
        $this->assign('page',$show);
        $this->display();
    }

    /**
     * 显示行情资讯的内容
     */
    public function news(){
        $id = I(id);
        $article = new ArticleModel();
        $data = $article->findNews($id);
        $this->assign('data',$data);
        $this->display();
    }

    /**
     * 显示联系方式
     */
    public function lxfs(){
        $this->display();
    }
}
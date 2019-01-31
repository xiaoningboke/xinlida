<?php
namespace Admin\Controller;
use Admin\Model\ArticleModel;
use Admin\Model\FenleiModel;
use Admin\Model\PictureModel;
use Admin\Model\ProductModel;
use Admin\Model\YqljModel;
use Think\Controller;

use Admin\Model\ConfigModel;
class IndexController extends Controller {
    /**
     * 管理端首页
     */
    public function index(){
        $this->display();
    }

    /**
     * 网站的基本配置
     */
    public function jbpz(){
        $config = new ConfigModel();
        $data = $config->selConfig();
        $this->assign('data',$data);
        $this->display();
    }

    /**
     * 修改网站的基本配置
     */
    public function upJbpz(){
        $data = I();
        $config = new ConfigModel();
        $i = $config->updateConfig($data);
        if($i>0){
            $this->success("修改成功");
        }else{
            $this->error("未进行修改");
        }

    }

    /**
     * 显示公司简介
     */
    public function gsjj(){
        $article = new ArticleModel();
        $data = $article->findTitle("公司简介");
        $this->assign('data',$data);
        $this->display();
    }



    /**
     * 显示现货资源
     */
    public function xhzy(){
        $article = new ArticleModel();
        $data = $article->findTitle("现货资源");
        $this->assign('data',$data);
        $this->display();
    }

    /**
     * 显示库存展示
     */
    public function kczs(){
        $article = new ArticleModel();
        $data = $article->findTitle("库存展示");
        $this->assign('data',$data);
        $this->display();
    }

    /**
     * 修改公司简介，现货资源,库存展示
     */
    public function upGsjj(){
        $data = $_POST;
        $datas[content] = $data[editorValue];
        $datas[title] = $data[title];
        $article = new ArticleModel();
        $i = $article->updateTitle($datas);
        if ($i>0){
            $this->success("修改成功");
        }else{
            $this->error("修改失败");
        }
    }

    /**
     * 显示新闻发布
     */
    public function showNews(){
        $this->display();
    }

    /**
     * 添加文章操作
     */
    public function addNews(){
        $data[title] = $_POST[title];
        $data[time] = $_POST[time];
        $data[content] = $_POST[editorValue];
        $data[classify] = $_POST[classify];
        $data[fenlei] = $_POST[fenlei];
        $article = new ArticleModel();
        $i = $article->addNews($data);
        if ($i>0){
            $this->success("添加成功");
        }else{
            $this->error("添加失败");
        }
    }

    /**
     * 新闻列表显示
     */
    public function newsList(){
        $article = new ArticleModel();
        $data = $article->newsList(1);
        $this->assign('data',$data);
        $this->display();
    }

    /**
     * 显示单篇文章
     */
    public function findNews(){
        $id = I("id");
        $article = new ArticleModel();
        $data = $article->findNews($id);
        $this->assign('data',$data);
        $this->display();
    }

    /**
     * 修改文章
     */
    public function exitNews(){
        $data = $_POST;
        $data[content] = $_POST[editorValue];
        $article = new ArticleModel();
        $i = $article->exitNews($data);
        if ($i>0){
            $this->success("修改成功");
        }else{
            $this->error("修改失败");
        }
    }

    /**
     * 根据id进行删除
     */
    public function delNews(){
        $id = I(id);
        $article = new ArticleModel();
        $i = $article->delNews($id);
        if ($i>0){
            $this->success("删除成功");
        }else{
            $this->error("删除失败");
        }
    }

    /**
     * 显示添加产品分类
     */
    public function fenlei(){
        $this->display();
    }

    /**
     * 添加产品分类
     */
    public function addFenlei(){
        $data = I();
        $fenlei = new FenleiModel();
        $i = $fenlei->addFenlei($data);
        if ($i>0){
            $this->success("添加成功");
        }else{
            $this->error("添加失败");
        }
    }

    /**
     * 显示产品的分类列表
     */
    public function fenleiList(){
        $fenlei = new FenleiModel();
        $data = $fenlei->fenleiList();
        $this->assign('data',$data);
        $this->display();
    }

    /**
     * 显示修改分类
     */
    public function findFenlei(){
        $id = I(id);
        $fenlei = new FenleiModel();
        $data = $fenlei->findFenlei($id);
        $this->assign('data',$data);
        $this->display();
    }

    /**
     * 根据id修改产品分类
     */
    public function exitFenlei(){
        $data = I();
        $fenlei = new FenleiModel();
        $i = $fenlei->exitFenlei($data);
        if ($i>0){
            $this->success("修改成功");
        }else{
            $this->error("修改失败");
        }
    }

    /**
     * 根据id删除
     */
    public function delFenlei(){
        $id = I(id);
        $fenlei = new FenleiModel();
        $i = $fenlei->delFenlei($id);
        if ($i>0){
            $this->success("删除成功");
        }else{
            $this->error("删除失败");
        }
    }

    /**
     * 显示添加产品
     */
    public function product(){
        $fenlei = new FenleiModel();
        $data = $fenlei->fenleiList();
        $this->assign('data',$data);
        $this->display();
    }

    /**
     * 添加产品
     */
    public function addProduct(){
        $data = $_POST;
        $savename = $this->upload();
        $data[picture] = $savename[picture][savename];
        $data[content] = $data[editorValue];
        $product = new ProductModel();
        $i = $product->addProduct($data);
        if ($i>0){
            $this->success("添加成功");
        }else{
            $this->error("添加失败");
        };
    }

    /**
     * 显示产品
     */
    public function productList(){
        $product = new ProductModel();
        $pro = $product->productList();
        $fenlei = new FenleiModel();
        $data = array();
        foreach($pro as $k=>$val){
            $fl = $fenlei->findFenlei($val[fenlei]);
            $val[fenlei] = $fl[name];
            array_push($data,$val);
        }
        $this->assign('data',$data);
        $this->display();
    }

    /**
     * 显示修改的产品
     */
    public function findProduct(){
        $id = $_GET[id];
        $product = new ProductModel();
        $fenleiClass = new FenleiModel();
        $data = $product->findProduct($id);
        $fl = $fenleiClass->findFenlei($data[fenlei]);
        $data[fenlei] = $fl[name];
        $this->assign('data',$data);
        $this->display();
    }

    /**
     * 修改产品
     */
    public function exitProduct(){
        $data[id] = $_POST[id];
        $data[name] = $_POST[name];
        $data[content] = $_POST[editorValue];

        $pic = $this->upload();
        if(!is_null($pic)){
            $data[picture] = $pic[picture][savename];
        }


        $product = new ProductModel();
        $i = $product->exitProduct($data);
        if ($i>0){
            $this->success("修改成功");
        }else{
            $this->error("修改失败");
        }
    }

    /**
     * 删除产品
     */
    public function delProduct(){
        $id = I(id);
        $product = new ProductModel();
        $i = $product->delProduct($id);
        if ($i>0){
            $this->success("删除成功");
        }else{
            $this->error("删除失败");
        }
    }



    /**
     * 显示添加友情链接
     */
    public function yqlj(){
        $this->display();
    }

    /**
     * 添加友情链接
     */
    public function addYqlj(){
        $data = I();
        $yqlj = new YqljModel();
        $i = $yqlj->addYqlj($data);
        if ($i>0){
            $this->success("添加成功");
        }else{
            $this->error("添加失败");
        };
    }

    /**
     * 友情链接列表
     */
    public function yqljList(){
        $yqlj = new YqljModel();
        $data = $yqlj->yqljList();
        $this->assign('data',$data);
        $this->display();
    }

    /**
     * 显示修改友情链接
     */
    public function findYqlj(){
        $id = I(id);
        $yqlj = new YqljModel();
        $data = $yqlj->findYqlj($id);
        $this->assign('data',$data);
        $this->display();
    }

    /**
     * 修改友情链接
     */
    public function exitYqlj(){
        $data = I();
        $yqlj = new YqljModel();
        $i = $yqlj->exitYqlj($data);
        if ($i>0){
            $this->success("修改成功");
        }else{
            $this->error("修改失败");
        }
    }

    /**
     * 删除友情链接
     */
    public function delYqlj(){
        $id = I(id);
        $yqlj = new YqljModel();
        $i = $yqlj->delYqlj($id);
        if ($i>0){
            $this->success("删除成功");
        }else{
            $this->error("删除失败");
        }
    }

    /**
     *显示图片配置页面
     */
    public function picture(){
        $pic = new PictureModel();
        $data = $pic->sel();
        $this->assign('data',$data);
        $this->display();
    }

    /**
     * 显示更换图片
     */
    public function findpic(){
        $id = I("id");
        $pic= new PictureModel();
        $data = $pic->findpic($id);
        $this->assign('data',$data);
        $this->display();
    }

    /**
     * 修改图片
     */
    public function exitPic(){
        $pic = $this->upload();
        if(!is_null($pic)){
            $data[id] = $_POST[id];
            $data[url] = $pic[url][savename];
            $pic = new PictureModel();
            $i = $pic->exitpic($data);
            if ($i>0){
                $this->success("修改成功",U('Admin/Index/picture'));
            }else{
                $this->error("修改失败");
            }
        }
    }


    ////////////////////////////////////////////文件上传/////////////////////////////////////////////
    public function upload(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728 ;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
        // 设置附件上传类型
        $upload->rootPath = './Public/Uploads/'; // 设置附件上传根目录
        $upload->savePath = ''; // 设置附件上传（子）目录
        $upload->replace = false;//如果存在同名文件就覆盖
        $upload->autoSub = false;
        //不使用子目录保存上传文件，即上传到指定的文件夹
        $info = $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            return $info;
            $this->error('上传成功！');
        }
    }

    ///////////////////////////////////////////富文本编辑器///////////////////////////////////////////
    public function save_info(){
        $ueditor_config = json_decode(preg_replace("/\/\*[\s\S]+?\*\//", "",     file_get_contents("./Public/Ueditor/php/config.json")), true);
        $action = $_GET['action'];
        switch ($action) {
            case 'config':
                $result = json_encode($ueditor_config);
                break;
            /* 上传图片 */
            case 'uploadimage':
                /* 上传涂鸦 */
            case 'uploadscrawl':
                /* 上传视频 */
            case 'uploadvideo':
                /* 上传文件 */
            case 'uploadfile':
                $upload = new \Think\Upload();
                $upload->maxSize = 3145728;
                $upload->rootPath = './Public/Uploads/';
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
                $info = $upload->upload();
                if (!$info) {
                    $result = json_encode(array(
                        'state' => $upload->getError(),
                    ));
                } else {
                    $url = __ROOT__ . "/Public/Uploads/" . $info["upfile"]["savepath"] . $info["upfile"]['savename'];
                    $result = json_encode(array(
                        'url' => $url,
                        'title' => htmlspecialchars($_POST['pictitle'], ENT_QUOTES),
                        'original' => $info["upfile"]['name'],
                        'state' => 'SUCCESS'
                    ));
                }
                break;
            default:
                $result = json_encode(array(
                    'state' => '请求地址出错'
                ));
                break;
        }
        /* 输出结果 */
        if (isset($_GET["callback"])) {
            if (preg_match("/^[\w_]+$/", $_GET["callback"])) {
                echo htmlspecialchars($_GET["callback"]) . '(' . $result . ')';
            } else {
                echo json_encode(array(
                    'state' => 'callback参数不合法'
                ));
            }
        } else {
            echo $result;
        }
    }

}
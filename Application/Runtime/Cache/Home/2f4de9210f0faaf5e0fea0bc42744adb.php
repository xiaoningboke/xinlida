<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>无缝钢管_无缝管_无缝钢管公司 - 十年专业无缝钢管现货销售公司</title>
            <link rel="stylesheet" href="/xinlida/Public/css/base.css">
            <link rel="stylesheet" href="/xinlida/Public/css/header.css">
            <link rel="stylesheet" href="/xinlida/Public/css/public.css">
        </head>
<body>
<div class="content">
    <div class="header">
        <div class="header-top">
            <div class="ht-left lf">具有十年无缝钢管销售经验，专业销售无缝管现货</div>
            <div class="ht-right lr">无缝钢管公司销售热线：0635-8228686</div>
        </div>
        <div class="clear"></div>
        <div class="header-con w">
            <div class="logo lf">
                <img src="/xinlida/Public/images/logo.png" alt="">
            </div>
            <div class="nav lr">
                <ul>
                    <li><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
                    <li><a href="<?php echo U('Home/Index/gsjj');?>">公司简介</a></li>
                    <li><a href="<?php echo U('Home/Index/product');?>">产品中心</a></li>
                    <li><a href="<?php echo U('Home/Index/xhzy');?>">现货资源</a></li>
                    <li><a href="<?php echo U('Home/Index/kczy');?>">库存资源</a></li>
                    <li><a href="<?php echo U('Home/Index/hqzx');?>">行情资讯</a></li>
                    <li><a href="#">联系方式</a></li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div></title>

<link rel="stylesheet" href="/xinlida/Public/css/product.css">

<div class="main">
        <div class="bannerny"></div>
        <div class="main-info">
            <!--左侧-->
<div class="main-infol">
    <!--产品展示-->
    <div class="info-title">产品展示</div>
    <div class="product-list">
        <ul>
            <?php if(is_array($fenlei)): foreach($fenlei as $key=>$vo): ?><li><a href="<?php echo U('Home/Index/product',array('id'=>$vo['id']));?>"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; ?>
        </ul>
    </div>

    <!--联系方式-->
    <div class="info-title">联系方式</div>
    <div class="info-content">
        销售经理：<?php echo ($config["xsjj"]); ?><br/>
        销售电话：<?php echo ($config["xsdh"]); ?><br/>
        联系手机：<?php echo ($config["lxsj"]); ?><br/>
        公司传真：<?php echo ($config["gscz"]); ?><br/>
        公司地址：<?php echo ($config["gsdz"]); ?><br/>
    </div>
</div>
            <!--右侧-->
            <div class="main-infonc">
                <div class="info-title">产品中心</div>
                <div class="info-contentn">
                    <div class="nymbx">
                        您的位置:
                        <a href="">首页</a>>>
                        <a href="">首页</a>

                    </div>
                    <div class="info-conbt">
                        <h3><?php echo ($title); ?></h3>
                    </div>
                    <div class="product-page">
                        <ul>
                            <?php if(is_array($list)): foreach($list as $key=>$vo): ?><li><a class="a1" href="<?php echo U('Home/Index/chanpin',array('id'=>$vo['id']));?>"><img src="/xinlida/Public/Uploads/<?php echo ($vo["picture"]); ?>" alt="<?php echo ($vo["name"]); ?>" /><br /><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; ?>
                        </ul>
                    </div>
                    <div class="nynewsfy">
                        <div class="result page"><?php echo ($page); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="bottombg">
            <div class="bottomlm">Copyright © 2010-2017 聊城市坤联钢材有限公司 All Rights Reserved.　</div>
            <div class="bottomlx">
                销售电话：0635-8228686　8877887　公司传真：0635-8877887　地址：聊城市开发区辽河路东首A2号楼<br/>
                十年专业无缝钢管现货销售公司　www.yaogangguan.cn　技术支持：千宇软件
            </div>
        </div>
    </div>
</div>
</body>
</html>
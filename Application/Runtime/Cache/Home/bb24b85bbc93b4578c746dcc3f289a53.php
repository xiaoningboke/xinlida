<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>行情资讯-<?php echo ($config["name"]); ?></title>
    <meta name="keywords" content="<?php echo ($config["keywords"]); ?>" />
    <meta name="description" content="<?php echo ($config["description"]); ?>" />
    <link type="text/css" href="/xinlida/Public/m/css/style.css" rel="stylesheet">
    <link type="text/css" href="/xinlida/Public/m/css/component.css" rel="stylesheet" />
    <link rel="stylesheet" href="/xinlida/Public/css/base.css">

    <script type="text/javascript" src="/xinlida/Public/m/js/jquery.js"></script>
    <script type="text/javascript" src="/xinlida/Public/m/js/modernizr.custom.js"></script>
    <script type="text/javascript" src="/xinlida/Public/m/js/jquery.dlmenu.js"></script>
</head>
<body>

<header class="header">
    <a href="http://<?php echo ($config["url"]); ?>" class="logo"><?php echo ($config["name"]); ?></a>
    <div id="dl-menu" class="dl-menuwrapper">
        <button id="dl-menu-button">Open Menu</button>
        <ul class="dl-menu">
            <li><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
            <li><a href="<?php echo U('Home/Index/gsjj');?>">公司简介</a></li>
            <li><a href="<?php echo U('Home/Index/product');?>">产品中心</a></li>
            <li><a href="<?php echo U('Home/Index/xhzy');?>">现货资源</a></li>
            <li><a href="<?php echo U('Home/Index/kczy');?>">库存资源</a></li>
            <li><a href="<?php echo U('Home/Index/hqzx');?>">行情资讯</a></li>
            <li><a href="<?php echo U('Home/Index/lxfs');?>">联系方式</a></li>
            <li><a href="<?php echo U('Home/Index/jsq');?>">计算器</a></li>
        </ul>
    </div>
</header>
<link rel="stylesheet" href="/xinlida/Public/m/css/public.css">
<div class="banner">
    <img src="/xinlida/Public/Uploads/<?php echo ($picdata[2][url]); ?>" alt="">
</div>
<div class="lgywm">

    <!--标题开始-->

    <div class="lgywm_title">
        <div class="xian"></div>
        <div class="lwenzi">
            <p><strong>行情资讯</strong><br/>
                NEWS</p>
        </div>
    </div>

    <!--标题结束-->

    <div class="lgywm_wz">
        <div class="info-nynews">
            <ul>
                <?php if(is_array($list)): foreach($list as $key=>$vo): ?><li><a href="<?php echo U('Home/Index/news',array('id'=>$vo['id']));?>"><?php echo ($vo["title"]); ?>　<span><?php echo ($vo["time"]); ?></span></a></li><?php endforeach; endif; ?>
            </ul>
        </div>
        <div class="nynewsfy">
            <div class="result page"><?php echo ($page); ?></div>
        </div>
    </div>

    <!--按钮更多开始-->


    <!--按钮更多结束-->

</div>
<footer>
    <div class="bottombg">
        <div class="bottomlm"><?php echo ($config["dbbq"]); ?></div>
        <div class="bottomlx">
            销售电话：<?php echo ($config["xsdh"]); ?>　<br/>公司传真：<?php echo ($config["gscz"]); ?>　<br/>地址：<?php echo ($config["gsdz"]); ?><br/>
            <?php echo ($config["dbby"]); ?>　<br/>　技术支持：千宇软件
        </div>
    </div>
</footer>
<div class="lfooter">
    <ul>
        <li><a href="<?php echo U('Home/Index/index');?>"><img src="/xinlida/Public/m/images/dbsy.png" width="30" height="30" /><br />
            网站首页</a></li>
        <li><a href="tel:<?php echo ($config["kf"]); ?>"><img src="/xinlida/Public/m/images/dbdh.png" width="30" height="30" /><br />
            电话咨询</a></li>
        <li><a href="mqqwpa://im/chat?chat_type=wpa&uin=<?php echo ($config["qq"]); ?>&version=1"><img src="/xinlida/Public/m/images/dbqq.png" width="30" height="30" /><br />
            QQ咨询</a></li>
        <li><a href="<?php echo U('Home/Index/lxfs');?>"><img src="/xinlida/Public/m/images/dblx.png" width="30" height="30" /><br />
            联系我们</a></li>
    </ul>
</div>

<div class="dbgao"></div>
</body>
</html>
<script>
    $(function () {
        $('#dl-menu').dlmenu();
    });
</script>
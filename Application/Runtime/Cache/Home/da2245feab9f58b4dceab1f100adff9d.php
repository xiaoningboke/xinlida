<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo ($config["keywords"]); ?>-<?php echo ($config["name"]); ?></title>
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
<link rel="stylesheet" href="/xinlida/Public/m/css/index.css">
<div class="main">
    <div class="banner">
        <img src="/xinlida/Public/Uploads/<?php echo ($picdata[1][url]); ?>" alt="">
    </div>
    <!--公司简介-->
    <div class="lgywm">

        <!--标题开始-->

        <div class="lgywm_title">
            <div class="xian"></div>
            <div class="lwenzi">
                <p><strong>公司简介</strong><br/>
                    ABOUT US</p>
            </div>
        </div>

        <!--标题结束-->

        <div class="lgywm_wz">
            <?php echo ($gsjj["content"]); ?>
        </div>

        <!--按钮更多开始-->

        <div class="angd"><a href="<?php echo U('Home/Index/gsjj');?>">了解更多 &gt;&gt; </a></div>

        <!--按钮更多结束-->

    </div>

    <!--产品展示-->
    <div class="lgywm">

        <!--标题开始-->

        <div class="lgywm_title">
            <div class="xian"></div>
            <div class="lwenzi">
                <p><strong>产品展示</strong><br/>
                    Product display</p>
            </div>
        </div>

        <!--标题结束-->

        <div class="">
            <div id="div1">
                <ul>
                    <?php if(is_array($cp)): foreach($cp as $key=>$vo): ?><li><a class="a1" href="<?php echo U('Home/Index/chanpin',array('id'=>$vo['id']));?>"><img src="/xinlida/Public/Uploads/<?php echo ($vo["picture"]); ?>" alt="<?php echo ($vo["name"]); ?>" /><br /><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; ?>
                </ul>

                <ul>
                    <?php if(is_array($cp)): foreach($cp as $key=>$vo): ?><li><a class="a1" href="<?php echo U('Home/Index/chanpin',array('id'=>$vo['id']));?>"><img src="/xinlida/Public/Uploads/<?php echo ($vo["picture"]); ?>" alt="<?php echo ($vo["name"]); ?>" /><br /><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; ?>
                </ul>
            </div>
        </div>

        <!--按钮更多开始-->

        <div class="angd"><a href="<?php echo U('Home/Index/product');?>">了解更多 &gt;&gt; </a></div>

        <!--按钮更多结束-->

        </div>
    <!--新闻-->
    <div class="lgywm">

        <!--标题开始-->

        <div class="lgywm_title">
            <div class="xian"></div>
            <div class="lwenzi">
                <p><strong>热点资讯</strong><br/>
                    NEWS</p>
            </div>
        </div>

        <!--标题结束-->

        <div class="">
            <div class="news-content">
                <ul>
                    <?php if(is_array($rdzx)): foreach($rdzx as $key=>$vo): ?><li><a href="#"><?php echo ($vo["title"]); ?></a><span><?php echo ($vo["time"]); ?></span></li><?php endforeach; endif; ?>
                </ul>
            </div>
        </div>

        <!--按钮更多开始-->

        <div class="angd"><a href="<?php echo U('Home/Index/gsjj');?>">了解更多 &gt;&gt; </a></div>

        <!--按钮更多结束-->

        </div>
    <div class="lgywm">

        <!--标题开始-->

        <div class="lgywm_title">
            <div class="xian"></div>
            <div class="lwenzi">
                <p><strong>行情关注</strong><br/>
                    NEWS</p>
            </div>
        </div>

        <!--标题结束-->

        <div class="">
            <div class="news-content">
                <ul>
                    <?php if(is_array($hqgz)): foreach($hqgz as $key=>$vo): ?><li><a href="#"><?php echo ($vo["title"]); ?></a><span><?php echo ($vo["time"]); ?></span></li><?php endforeach; endif; ?>
                </ul>
            </div>
        </div>

        <!--按钮更多开始-->

        <div class="angd"><a href="<?php echo U('Home/Index/gsjj');?>">了解更多 &gt;&gt; </a></div>

        <!--按钮更多结束-->

    </div>    <div class="lgywm">

    <!--标题开始-->

    <div class="lgywm_title">
        <div class="xian"></div>
        <div class="lwenzi">
            <p><strong>知识汇编</strong><br/>
                NEWS</p>
        </div>
    </div>

    <!--标题结束-->

    <div class="">
        <div class="news-content">
            <ul>
                <?php if(is_array($zshb)): foreach($zshb as $key=>$vo): ?><li><a href="#"><?php echo ($vo["title"]); ?></a><span><?php echo ($vo["time"]); ?></span></li><?php endforeach; endif; ?>
            </ul>
        </div>
    </div>

    <!--按钮更多开始-->

    <div class="angd"><a href="<?php echo U('Home/Index/gsjj');?>">了解更多 &gt;&gt; </a></div>

    <!--按钮更多结束-->

</div>
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

<script type="text/javascript">


    window.onload=function(){
        var odiv = document.getElementById('div1');
        var oul = odiv.getElementsByTagName('ul')[0];
        var oul1 = odiv.getElementsByTagName('ul')[1];
        var ali = oul.getElementsByTagName('li');
        var ali1 = oul1.getElementsByTagName('li');
        var spa = -2;
        oul.innerHTML=oul.innerHTML+oul.innerHTML;
        oul.style.width=ali[0].offsetWidth*ali.length+'px';
        oul1.style.width=ali[0].offsetWidth*ali1.length+'px';
        function move(){
            spa=-2;
            if(oul.offsetLeft<-oul.offsetWidth/2){
                oul.style.left='0';
            }
            if(oul.offsetLeft>0){
                oul.style.left=-oul.offsetWidth/2+'px'
            }
            oul.style.left=oul.offsetLeft+spa+'px';
        }
        function move1(){
            spa=2;
            if(oul1.offsetLeft<-oul1.offsetWidth/2){
                oul.style.left='0';
            }
            if(oul1.offsetLeft>0){
                oul1.style.left=-oul1.offsetWidth/2+'px'
            }
            oul1.style.left=oul1.offsetLeft+spa+'px';
        }
        var timer = setInterval(move,30)
        var timer = setInterval(move1,30)

        odiv.onmousemove=function(){clearInterval(timer);}
        odiv.onmouseout=function(){timer = setInterval(move,30)};

    }

</script>
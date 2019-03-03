<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title><?php echo ($data["name"]); ?>-<?php echo ($config["name"]); ?></title>
            <link rel="stylesheet" href="/xinlida/Public/css/base.css">
            <link rel="stylesheet" href="/xinlida/Public/css/header.css">
            <link rel="stylesheet" href="/xinlida/Public/css/public.css">
        </head>
<body>
<div class="content">
    <div class="header">
        <div class="header-top">
            <div class="ht-left lf"><?php echo ($config["tbby"]); ?></div>
            <div class="ht-right lr">无缝钢管公司销售热线：<?php echo ($config["xsdh"]); ?></div>
        </div>
        <div class="clear"></div>
        <div class="header-con w">
            <div class="logo lf">
                <img src="/xinlida/Public/Uploads/<?php echo ($picdata[0][url]); ?>" alt="">
            </div>
            <div class="nav lr">
                <ul>
                    <li><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
                    <li><a href="<?php echo U('Home/Index/gsjj');?>">公司简介</a></li>
                    <li><a href="<?php echo U('Home/Index/product');?>">产品中心</a></li>
                    <li><a href="<?php echo U('Home/Index/xhzy');?>">现货资源</a></li>
                    <li><a href="<?php echo U('Home/Index/kczy');?>">库存资源</a></li>
                    <li><a href="<?php echo U('Home/Index/hqzx');?>">行情资讯</a></li>
                    <li><a href="<?php echo U('Home/Index/lxfs');?>">联系方式</a></li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div></title>

<div class="main">
    <div class="bannerny" style="background: url('/xinlida/Public/Uploads/<?php echo ($picdata[2][url]); ?>') no-repeat center center;"></div>

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
                <div class="info-title"><?php echo ($data["name"]); ?></div>
                <div class="info-conbt">
                    <h1><?php echo ($data["name"]); ?></h1>
                </div>
                <div class="info-contentn">
                    <div class="info-conbt">
                        <h1><?php echo ($data["name"]); ?></h1>
                    </div>
                    <?php echo ($data["content"]); ?>
                      <article class="article-content">
                        <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_tieba" data-cmd="tieba" title="分享到百度贴吧"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a></div>

                              <script>                  window._bd_share_config = { "common": { "bdSnsKey": {}, "bdText": "", "bdMini": "2", "bdMiniList": false, "bdPic": "", "bdStyle": "1", "bdSize": "32" }, "share": {} }; with (document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=0.js?cdnversion=' + ~(-new Date() / 36e5)];</script>
                      </article>
                </div>
            </div>
        </div>
    </div>
<div class="footer">
    <div class="bottombg">
        <div class="bottomlm"><?php echo ($config["dbbq"]); ?></div>
        <div class="bottomlx">
            销售电话：<?php echo ($config["xsdh"]); ?>　公司传真：<?php echo ($config["gscz"]); ?>　地址：<?php echo ($config["gsdz"]); ?><br/>
            <?php echo ($config["dbby"]); ?>　<?php echo ($config["url"]); ?>　技术支持：千宇软件
        </div>
    </div>
</div>
</div>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>计算器-<?php echo ($config["name"]); ?></title>
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

<link rel="stylesheet" href="/xinlida/Public/css/jisuanqi.css">
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
                <div class="info-title">计算器</div>
                <div class="info-contentn" style="padding-top: 25px;">
                      <div class="box">
                         <ul>
                             <li class="current">无缝钢管</li>
                             <li>圆钢重量</li>
                             <li>方矩管重量</li>
                         </ul>
                         <span class="show">
                             <div>
                                <br>
                                 壁厚:<input type="text" id="wfbh" onkeyup="enfocus()">
                                 外径:<input type="text" id="wfwj" onkeyup="enfocus()">
                                 长度:<input type="text" id="wfcd" onkeyup="enfocus()">
                                 数量:<input type="text" id="wfsl" onkeyup="enfocus()"><br><br>
                                 理论重量:<input type="text" id="wfzl" readonly onkeyup="enfocus()"><br>
                                 理论重量X长度:<input type="text" id="wfzlcd" readonly onkeyup="enfocus()"><br>
                                 理论总重量:<input type="text" id="wfzzl" readonly onkeyup="enfocus()"><br>
                             </div>
                         </span>
                         <span>
                             <div>
                                <br>
                                 外径:<input type="text" id="ygwj" onkeyup="enfocus()">
                                 长度:<input type="text" id="ygcd" onkeyup="enfocus()">
                                 数量:<input type="text" id="ygsl" onkeyup="enfocus()"><br><br>
                                 理论重量:<input type="text" id="ygzl" readonly onkeyup="enfocus()"><br>
                                 理论重量X长度:<input type="text" id="ygzlcd" readonly onkeyup="enfocus()"><br>
                                 理论总重量:<input type="text" id="ygzzl" readonly onkeyup="enfocus()"><br>
                             </div>
                         </span>
                         <span>
                             <div>
                                  <br>
                                 长:<input type="text" id="fjc" onkeyup="enfocus()">
                                 宽:<input type="text" id="fjk" onkeyup="enfocus()">
                                 壁厚:<input type="text" id="fjbh" onkeyup="enfocus()"><br>
                                长度:<input type="text" id="fjcd" onkeyup="enfocus()">
                                 数量:<input type="text" id="fjsl" onkeyup="enfocus()"><br><br>
                                 理论重量:<input type="text" id="fjzl" readonly onkeyup="enfocus()"><br>
                                 理论重量X长度:<input type="text" id="fjzlcd" readonly onkeyup="enfocus()"><br>
                                 理论总重量:<input type="text" id="fjzzl" readonly onkeyup="enfocus()"><br>
                             </div>
                         </span>
                     </div>
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
<script>

    function enfocus(){

         var fjc = document.getElementById("fjc").value;
         var fjk = document.getElementById("fjk").value;
         var fjbh = document.getElementById("fjbh").value;
         var fjcd = document.getElementById("fjcd").value;
         var fjsl = document.getElementById("fjsl").value;

         var fjzl = (2*(parseFloat(fjc)+parseFloat(fjk))*parseFloat(fjbh)*7.85).toFixed(3);
         var fjzlcd = (2*(parseFloat(fjc)+parseFloat(fjk))*parseFloat(fjbh)*7.85*parseFloat(fjcd)).toFixed(3);
         var fjzzl = (2*(parseFloat(fjc)+parseFloat(fjk))*parseFloat(fjbh)*7.85*parseFloat(fjcd)*parseFloat(fjsl)).toFixed(3);


         document.getElementById("fjzl").value = fjzl;
         document.getElementById("fjzlcd").value = fjzlcd;
         document.getElementById("fjzzl").value = fjzzl;


         var ygwj = document.getElementById("ygwj").value;
         var ygcd = document.getElementById("ygcd").value;
         var ygsl = document.getElementById("ygsl").value;

         var ygzl = (0.00617*parseFloat(ygwj)*parseFloat(ygwj)).toFixed(3);
         var ygzlcd = (0.00617*parseFloat(ygwj)*parseFloat(ygwj)*parseFloat(ygcd)).toFixed(3);
         var ygzzl = (0.00617*parseFloat(ygwj)*parseFloat(ygwj)*parseFloat(ygcd)*parseFloat(ygsl)).toFixed(3);


         document.getElementById("ygzl").value = ygzl;
         document.getElementById("ygzlcd").value = ygzlcd;
         document.getElementById("ygzzl").value = ygzzl;




         var wfbh = document.getElementById("wfbh").value;
         var wfwj = document.getElementById("wfwj").value;
         var wfcd = document.getElementById("wfcd").value;
         var wfsl = document.getElementById("wfsl").value;

         var wfzl = (0.02466*parseFloat(wfbh)*(parseFloat(wfwj)-parseFloat(wfbh))).toFixed(3);
         var wfzlcd = (0.02466*parseFloat(wfbh)*(parseFloat(wfwj)-parseFloat(wfbh))*parseFloat(wfcd)).toFixed(3);
         var wfzzl = (0.02466*parseFloat(wfbh)*(parseFloat(wfwj)-parseFloat(wfbh))*parseFloat(wfcd)*parseFloat(wfsl)).toFixed(3);


         document.getElementById("wfzl").value = wfzl;
         document.getElementById("wfzlcd").value = wfzlcd;
         document.getElementById("wfzzl").value = wfzzl;
     }

      var boxArr = document.getElementsByClassName("box");
    for (var i = 0;i<boxArr.length;i++){
        fn(boxArr[i]);
    }
    function fn(ele) {
        var liArr = ele.getElementsByTagName("li");
        var spanArr = ele.getElementsByTagName("span");
        for (var i = 0 ;i<liArr.length;i++){
            liArr[i].setAttribute("index",i);
            liArr[i].onclick = function () {
                for (var j = 0;j<liArr.length;j++){
                    liArr[j].removeAttribute("class");
                    spanArr[j].removeAttribute("class");
                }
                this.setAttribute("class","current");
                spanArr[this.getAttribute("index")].setAttribute("class","show");
            }
        }
    }
     
   

</script>
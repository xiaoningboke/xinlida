<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo ($config["keywords"]); ?>-<?php echo ($config["name"]); ?></title>
    <meta name="keywords" content="<?php echo ($config["keywords"]); ?>" />
    <meta name="description" content="<?php echo ($config["description"]); ?>" />
    <link rel="stylesheet" href="/xinlida/Public/css/base.css">
    <link rel="stylesheet" href="/xinlida/Public/css/header.css">
    <link rel="stylesheet" href="/xinlida/Public/css/index.css">
    <script type="text/javascript"> <?php echo ($config["tbjs"]); ?>	</script>
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
    </div>
<div class="main">
			<div class="banner" style="background: url('/xinlida/Public/Uploads/<?php echo ($picdata[1][url]); ?>') no-repeat center center;"></div>
			<div class="main-info w">
				<div class="cpzs">
					<div class="info-title">产品展示</div>
					<div class="product-list">
						<ul>
							<?php if(is_array($fenlei)): foreach($fenlei as $key=>$vo): ?><li><a href="<?php echo U('Home/Index/product',array('id'=>$vo['id']));?>"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; ?>
						</ul>
					</div>
				</div>
				<div class="gsjj">
					<div class="info-title">公司简介</div>
					<div class="info-content">
						<?php echo ($gsjj["content"]); ?>
					</div>
				</div>
				<div class="lxfs">
					<div class="info-title">联系方式</div>
					<div class="info-content">
						<img src="/xinlida/Public/Uploads/<?php echo ($picdata[3][url]); ?>" alt="">
						<h4><?php echo ($config["name"]); ?></h4>
						销售经理：<?php echo ($config["xsjj"]); ?><br/>
						销售电话：<?php echo ($config["xsdh"]); ?><br/>
						联系手机：<?php echo ($config["lxsj"]); ?><br/>
						公司传真：<?php echo ($config["gscz"]); ?><br/>
						公司地址：<?php echo ($config["gsdz"]); ?><br/>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<div class="main-product w">
				<div class="info-title">产品中心</div>
				<div>
					<div id="demo6" class="cp-top">
						<table cellpadding="0" align="left" border="0" cellspace="0">
							<tbody>
							<tr>
								<td id="demo4" valign="top">
									<table cellspacing="0" cellpadding="4" width="2150" border="0" >
										<tbody>
										<tr>
											<?php if(is_array($cp)): foreach($cp as $key=>$vo): ?><td align="middle"><a class="a1" href="<?php echo U('Home/Index/chanpin',array('id'=>$vo['id']));?>"><img src="/xinlida/Public/Uploads/<?php echo ($vo["picture"]); ?>" alt="<?php echo ($vo["name"]); ?>" /><br /><?php echo ($vo["name"]); ?></a></td><?php endforeach; endif; ?>
										</tr>
										</tbody>
									</table></td>
								<td id="demo5" valign="top"></td>
							</tr>
							</tbody>
						</table>
					</div>


					<div id="demo" class="cp-top" >
					   <table cellpadding="0" align="left" border="0" cellspace="0">
						<tbody>
						 <tr>
						  <td id="demo1" valign="top">
						   <table cellspacing="0" cellpadding="4" width="2150" border="0" id="tupian">
							<tbody>
							 <tr>
								 <?php if(is_array($cp)): foreach($cp as $key=>$vo): ?><td align="middle"><a class="a1" href="<?php echo U('Home/Index/chanpin',array('id'=>$vo['id']));?>"><img src="/xinlida/Public/Uploads/<?php echo ($vo["picture"]); ?>" alt="<?php echo ($vo["name"]); ?>" /><br /><?php echo ($vo["name"]); ?></a></td><?php endforeach; endif; ?>
							 </tr>
							</tbody>
						   </table></td>
						  <td id="demo2" valign="top"></td>
						 </tr>
						</tbody>
					   </table>
				  </div>
				</div>
			</div>

			<div class="w">
				<div class="news-infol">
					<div class="info-title">热点资讯</div>
					<div class="news-content">
						<ul>
							<?php if(is_array($rdzx)): foreach($rdzx as $key=>$vo): ?><li><a href="#"><?php echo ($vo["title"]); ?></a><span><?php echo ($vo["time"]); ?></span></li><?php endforeach; endif; ?>
						</ul>
					</div>
				</div>
				<div class="news-infoc">
					<div class="info-title">行情关注</div>
					<div class="news-content">
						<ul>
							<?php if(is_array($hqgz)): foreach($hqgz as $key=>$vo): ?><li><a href="#"><?php echo ($vo["title"]); ?></a><span><?php echo ($vo["time"]); ?></span></li><?php endforeach; endif; ?>
						</ul>
					</div>
				</div>
				<div class="news-infor">
					<div class="info-title">知识汇编</div>
					<div class="news-content">
						<ul>
							<?php if(is_array($zshb)): foreach($zshb as $key=>$vo): ?><li><a href="#"><?php echo ($vo["title"]); ?></a><span><?php echo ($vo["time"]); ?></span></li><?php endforeach; endif; ?>
						</ul>
					</div>
				</div>
			</div>
			<!--友情链接-->
			<div class="w">
				<div class="main-link">
					<div class="info-title">友情链接</div>
					<div class="info-link">
						<?php if(is_array($yqlj)): foreach($yqlj as $key=>$vo): ?><a href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["name"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><?php endforeach; endif; ?>
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
      var speed1=25//速度数值越大速度越慢
      document.getElementById("demo2").innerHTML=document.getElementById("demo1").innerHTML
      function Marquee1(){
          if(document.getElementById("demo2").offsetWidth-document.getElementById("demo").scrollLeft<=0)
            document.getElementById("demo").scrollLeft-=document.getElementById("demo1").offsetWidth
          else{
            document.getElementById("demo").scrollLeft++
             }
          }
          var MyMar1=setInterval(Marquee1,speed1)
          document.getElementById("demo").onmouseover=function () {clearInterval(MyMar1)}
          document.getElementById("demo").onmouseout=function () {MyMar1=setInterval(Marquee1,speed1)}


	  document.getElementById("demo5").innerHTML=document.getElementById("demo4").innerHTML
	  function Marquee2(){
		  if(demo6.scrollLeft<=0)
			  demo6.scrollLeft+=demo5.offsetWidth
		  else{
			  demo6.scrollLeft--
		  }
	  }
	  var MyMar2=setInterval(Marquee2,speed1)
	  document.getElementById("demo6").onmouseover=function () {clearInterval(MyMar2)}
	  document.getElementById("demo6").onmouseout=function () {MyMar2=setInterval(Marquee2,speed1)}
  </script>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link href="/xinlida/Public/Admin/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/xinlida/Public/Admin/css/style.css"/>
    <link href="/xinlida/Public/Admin/assets/css/codemirror.css" rel="stylesheet">
    <link rel="stylesheet" href="/xinlida/Public/Admin/assets/css/ace.min.css" />
    <link rel="stylesheet" href="/xinlida/Public/Admin/assets/css/font-awesome.min.css" />
    <!--[if IE 7]>
    <link rel="stylesheet" href="/xinlida/Public/Admin/assets/css/font-awesome-ie7.min.css" />
    <![endif]-->
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="/xinlida/Public/Admin/assets/css/ace-ie.min.css" />
    <![endif]-->
    <script src="/xinlida/Public/Admin/js/jquery-1.9.1.min.js"></script>
    <script src="/xinlida/Public/Admin/assets/js/bootstrap.min.js"></script>
    <script src="/xinlida/Public/Admin/assets/js/typeahead-bs2.min.js"></script>
    <script src="/xinlida/Public/Admin/assets/layer/layer.js" type="text/javascript" ></script>
    <script src="/xinlida/Public/Admin/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="/xinlida/Public/Admin/assets/js/jquery.ui.touch-punch.min.js"></script>
    <script src="/xinlida/Public/Admin/assets/js/ace-elements.min.js"></script>
    <script src="/xinlida/Public/Admin/assets/js/ace.min.js"></script>
    <script src="/xinlida/Public/Admin/js/H-ui.js" type="text/javascript"></script>
    <script src="/xinlida/Public/Admin/js/displayPart.js" type="text/javascript"></script>

    <title>系统设置</title>

</head>

<body>
<div class="margin clearfix">
    <div class="stystems_style">
        <div class="tabbable">

            <div class="tab-content">
                <form action="<?php echo U('Admin/Index/upJbpz');?>" method="post">
                <div id="home" class="tab-pane active">
                    <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>公司名称： </label>
                        <div class="col-sm-9"><input type="text" id="website-title" placeholder="公司名称" value="<?php echo ($data["name"]); ?>" name="name" class="col-xs-10" ></div>
                    </div>
                    <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>销售经理： </label>
                        <div class="col-sm-9"><input type="text" id="website-title" placeholder="销售经理" value="<?php echo ($data["xsjj"]); ?>" name="xsjj" class="col-xs-10 "></div>
                    </div>
                    <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>公司地址： </label>
                        <div class="col-sm-9"><input type="text" id="website-title" placeholder="公司地址" value="<?php echo ($data["gsdz"]); ?>" name="gsdz" class="col-xs-10 "></div>
                    </div>
                    <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>销售电话： </label>
                        <div class="col-sm-9"><input type="text" id="website-title" placeholder="销售电话" value="<?php echo ($data["xsdh"]); ?>" name="xsdh" class="col-xs-10"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>联系手机： </label>
                        <div class="col-sm-9"><input type="text" id="website-title" placeholder="联系手机" value="<?php echo ($data["lxsj"]); ?>" name="lxsj" class="col-xs-10"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>公司传真： </label>
                        <div class="col-sm-9"><input type="text" id="website-title" placeholder="公司传真" value="<?php echo ($data["gscz"]); ?>" name="gscz" class="col-xs-10 "></div>
                    </div>
                    <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>在线客服： </label>
                        <div class="col-sm-9"><input type="text" id="website-title" placeholder="QQ" value="<?php echo ($data["qq"]); ?>" name="gscz" class="col-xs-10 "></div>
                    </div>
                    <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>客服热线： </label>
                        <div class="col-sm-9"><input type="text" id="website-title" placeholder="客服热线" value="<?php echo ($data["kf"]); ?>" name="gscz" class="col-xs-10 "></div>
                    </div>
                    <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>邮箱： </label>
                        <div class="col-sm-9"><input type="text" id="website-title" placeholder="邮箱" value="<?php echo ($data["email"]); ?>" name="email" class="col-xs-10 "></div>
                    </div>
                    <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>头部标语： </label>
                        <div class="col-sm-9"><input type="text" id="website-title" placeholder="头部标语" value="<?php echo ($data["tbby"]); ?>" name="tbby" class="col-xs-10 "></div>
                    </div>
                    <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>底部标语： </label>
                        <div class="col-sm-9"><input type="text" id="website-title" placeholder="底部标语" value="<?php echo ($data["dbby"]); ?>" name="dbby" class="col-xs-10 "></div>
                    </div>
                    <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>网站备案号： </label>
                        <div class="col-sm-9"><input type="text" id="website-title" placeholder="网站备案号" value="<?php echo ($data["bah"]); ?>" name="bah" class="col-xs-10 "></div>
                    </div>
                    <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>底部版权： </label>
                    <div class="col-sm-9"><input type="text" id="website-title" placeholder="底部版权" value="<?php echo ($data["dbbq"]); ?>" name="dbbq" class="col-xs-10 "></div>
                </div>
                    <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>网址： </label>
                        <div class="col-sm-9"><input type="text" id="website-title" placeholder="网址" value="<?php echo ($data["url"]); ?>" name="url" class="col-xs-10 "></div>
                    </div>
                    <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>关键字： </label>
                        <div class="col-sm-9"><input type="text" id="website-title" placeholder="关键字" value="<?php echo ($data["keywords"]); ?>" name="keywords" class="col-xs-10 "></div>
                    </div>
                    <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>网站描述： </label>
                        <div class="col-sm-9"><input type="text" id="website-title" placeholder="网站描述" value="<?php echo ($data["description"]); ?>" name="description" class="col-xs-10 "></div>
                    </div>
                    <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>头部js代码： </label>
                        <div class="col-sm-9"><textarea class="textarea" name="tbjs"><?php echo ($data["tbjs"]); ?></textarea></div>
                    </div>
                    <div class="Button_operation">
                        <button onclick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="fa fa-save "></i>&nbsp;保存</button>
                    </div>
                </div>
                </form>
                <div id="profile" class="tab-pane ">

                </div>
                <div id="dropdown" class="tab-pane">

                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>
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

<script src="/xinlida/Public/Admin/assets/js/jquery.dataTables.min.js"></script>
<script src="/xinlida/Public/Admin/assets/js/jquery.dataTables.bootstrap.js"></script>
<body>
<div class="margin clearfix">
    <div class="sort_style">
        <!--分类类表-->
        <div class="article_sort_list">
            <table class="table table-striped table-bordered table-hover" id="sample-table">
                <thead>
                <tr>
                    <th width="80px">描述</th>
                    <th width="80px">图片</th>
                    <th width="150px">修改</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
                        <td><?php echo ($vo["name"]); ?></td>
                        <td><img src="/xinlida/Public/Uploads/<?php echo ($vo["url"]); ?>" alt="" width="300"></td>
                        <td class="td-manage">
                            <a href="<?php echo U('Admin/Index/findpic',array('id'=>$vo['id']));?>">更换</a>
                        </td>
                    </tr><?php endforeach; endif; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
<!--添加文章分类图层-->
<div id="addsort_style" style="display:none" class="article_style">
    <div class="add_content" id="form-article-add">
        <ul>
            <li class="clearfix Mandatory"><label class="label_name"><i>*</i>分类名称</label>
                <span class="formControls w_txt"><input name="分类名称" type="text" id="form-field-1" class="col-xs-7 col-sm-5 "></span>
            </li>
            <li class="clearfix"><label class="label_name">排序</label>
                <span class="formControls w_txt"><input name="排序" type="text" id="form-field-1" value="0" class="col-xs-7 col-sm-2 "></span>
            </li>
            <li class="clearfix"><label class="label_name">简介</label>
                <span class="formControls w_txt"><textarea name="权限描述" class="form-control" id="form_textarea" placeholder="" onkeyup="checkLength(this);"></textarea><span  style=" margin-left:10px;">剩余字数：<span id="sy" style="color:Red;">200</span>字</span></span>
            </li>
        </ul>
    </div>
</div>
</body>
</html>
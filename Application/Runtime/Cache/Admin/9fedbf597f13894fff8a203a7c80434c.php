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
    <div class="article_style">
        <div class="add_content" id="form-article-add">
            <ul>
                <li class="clearfix"><label class="label_name">公司简介</label>
                    <form action="<?php echo U('Admin/Index/upGsjj');?>" method="post">
                        <input type="hidden" name="title" value="公司简介">
                        <span class="formControls col-10"><script id="editor" type="text/plain" style="width:100%;height:400px; margin-left:10px;"><?php echo ($data["content"]); ?></script></span>
                </li>
            </ul>
                    <div class="Button_operation">
                        <button onclick="article_save_submit();" class="btn btn-primary radius" type="submit">保存并提交</button>
                    </div>
                        </form>
                    </div>
                    </div>
                    </div>
                    </body>
                    </html>
                    <script type="text/javascript" src="/xinlida/Public/Admin/Widget/ueditor/1.4.3/ueditor.config.js"></script>
                    <script type="text/javascript" src="/xinlida/Public/Admin/Widget/ueditor/1.4.3/ueditor.all.min.js"></script>
                    <script type="text/javascript" src="/xinlida/Public/Admin/Widget/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
                    <script type="text/javascript">
                    /**提交操作**/
                    function article_save_submit(){
                        var num=0;
                        var str="";
                        $(".Mandatory input[type$='text']").each(function(n){
                            if($(this).val()=="")
                            {

                                layer.alert(str+=""+$(this).attr("name")+"不能为空！\r\n",{
                                    title: '提示框',
                                    icon:0,
                                });
                                num++;
                                return false;
                            }
                        });
                        if(num>0){  return false;}
                        else{
                            layer.alert('添加成功！',{
                                title: '提示框',
                                icon:1,
                            });
                            layer.close(index);
                        }
                    }
                    $(function(){
                        var ue = UE.getEditor('editor');
                    });
                    /*radio激发事件*/
                    function Enable(){ $('.date_Select').css('display','block');}
                    function closes(){$('.date_Select').css('display','none')}


                    </script>
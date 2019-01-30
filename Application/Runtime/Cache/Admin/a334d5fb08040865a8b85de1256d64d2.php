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

<script src="/xinlida/Public/Admin/assets/laydate/laydate.js" type="text/javascript"></script>
<body>
<div class="margin clearfix">
    <div class="article_style">
        <div class="add_content" id="form-article-add">
            <form action="<?php echo U('Admin/Index/addNews');?>" method="post">
                <input type="hidden" name="classify" value="1">
            <ul>
                <li class="clearfix Mandatory">
                    <label class="label_name"><i>*</i>新闻标题</label><span class="formControls col-10"><input name="title" type="text" id="form-field-1" class="col-xs-10 col-sm-5 "></span>
                </li>
                <li class="clearfix"><label class="label_name"><i>*</i>所属分类</label>
                    <span class="formControls col-4">
                        <select class="form-control" id="form-field-select-1" name="fenlei">
                            <option value="">--选择所属分类--</option>
                          <option value="0">热点资讯</option>
                          <option value="1">行情关注</option>
                          <option value="2">知识汇编</option>
                       </select>
                   </span>
                </li>
                <li class="clearfix"><label class="label_name">时间</label>
                    <span class="formControls col-10">
                        <em class="laydate-icon" id="start"  style="width:200px; margin-left:10px; padding-left:5px; margin-right:10px;float:left"></em>
                    </span>
                    <input type="hidden" name="time" id="time">
                </li>
                <li class="clearfix"><label class="label_name">文章内容</label>
                    <span class="formControls col-10"><script id="editor" type="text/plain" style="width:100%;height:400px; margin-left:10px;"></script> </span>
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
                        <script type="text/javascript" src="/xinlida/Public/Admin/Widget/ueditor/1.4.3/ueditor.all.min.js"> </script>
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
                        /**日期选择**/
                        var start = {
                            elem: '#start',
                            format: 'YYYY/MM/DD',
                            min: laydate.now(), //设定最小日期为当前日期
                            max: '2099-06-16', //最大日期
                            istime: true,
                            istoday: false,
                            choose: function(datas){
                                $("#time").val(datas);
                                end.min = datas; //开始日选好后，重置结束日的最小日期
                                end.start = datas //将结束日的初始值设定为开始日
                            }
                        };
                        var end = {
                            elem: '#end',
                            format: 'YYYY/MM/DD',
                            min: laydate.now(),
                            max: '2099-06-16 ',
                            istime: true,
                            istoday: false,
                            choose: function(datas){
                                start.max = datas; //结束日选好后，重置开始日的最大日期
                            }
                        };
                        laydate(start);
                        laydate(end);
                        </script>
<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:92:"C:\phpStudy\PHPTutorial\WWW\shuzi\public/../application/quality\view\construction\index.html";i:1516803117;s:87:"C:\phpStudy\PHPTutorial\WWW\shuzi\public/../application/quality\view\public\header.html";i:1517675489;s:87:"C:\phpStudy\PHPTutorial\WWW\shuzi\public/../application/quality\view\public\footer.html";i:1516333031;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo config('WEB_SITE_TITLE'); ?></title>
    <link href="/static/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/static/admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/static/admin/css/animate.min.css" rel="stylesheet">
    <link href="/static/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/static/admin/css/plugins/chosen/chosen.css" rel="stylesheet">
    <link href="/static/admin/css/plugins/switchery/switchery.css" rel="stylesheet">
    <link href="/static/admin/css/style.min.css?v=4.1.0" rel="stylesheet">
    <link href="/static/admin/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <style type="text/css">
    .long-tr th{
        text-align: center
    }
    .long-td td{
        text-align: center
    }
    input{
        background-color: transparent;
    }
    .layui-layer-shade{
        top: -20px;
    }
    .dataTables_wrapper .dataTables_length, .dataTables_wrapper .dataTables_filter, .dataTables_wrapper .dataTables_info, .dataTables_wrapper .dataTables_processing, .dataTables_wrapper .dataTables_paginate{
        margin-top: 5px;
    }
        table th,table td{
            text-align: center !important;
        }
    </style>
</head>
<link rel="stylesheet" type="text/css" href="/static/admin/webupload/webuploader.css">
<link rel="stylesheet" type="text/css" href="/static/admin/webupload/style.css">
<link rel="stylesheet" href="/static/admin/css/zTreeStyle/zTreeStyle.css">
<link rel="stylesheet" href="/static/admin/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="/static/admin/css/jedate.css">
<link rel="stylesheet" href="/static/admin/css/iconfont.css">
<link rel="stylesheet" href="__JS__/dist/plyr.css">
<style>
    .vcontainer{
        display: inline-block;
        width: 31%;
        margin: 5px 1%;
        position: relative;
    }
    .vcontainer input{
        vertical-align: middle;
    }
    .container{
        display: inline-block;
        vertical-align: middle;
        width: 100%;
        position: relative;
        top: 0;
        left: 20px;
    }
    .mask{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        z-index: 999;
        cursor: pointer;
    }
    .icheckbox_square-green{
        position: absolute !important;
        top: 50% !important;
        display: none;
    }
    .plyr--audio{
        display: none;
    }
</style>
<body class="gray-bg" style="background-color:#fff;">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="ibox float-e-margins">
        <div class="ibox-content">
            <div class="row" id="content">
                <div id="file_per"></div>
                <div id="myheader">
                    <div id="upload" style="display: inline-block;vertical-align: middle;">上传视频文件</div>
                    <button id="edit" class="btn btn-primary">编辑</button>
                    <button id="del" class="btn btn-danger" disabled="disabled">删除</button>
                    <div class="input-group col-md-3 col-sm-6 col-xs-6" style="margin-top:0px;positon:relative;top: -38px;left: 254px;">
                        <input id="key" name="key" type="text" class="form-control" placeholder="请输入视频名称" />
                        <span class="input-group-btn">
                           <button class="btn btn-info btn-search" onclick="search()">查找</button>
                        </span>
                    </div>
                </div>
                <div id="mywrapper">
                </div>
                <div id="footer">
                </div>
                <div id="allpage"></div>
            </div>
        </div>
    </div>
</div>

<script src="__JS__/jquery.min.js?v=2.1.4"></script>
<script src="__JS__/bootstrap.min.js?v=3.3.6"></script>
<script src="__JS__/content.min.js?v=1.0.0"></script>
<script src="__JS__/plugins/chosen/chosen.jquery.js"></script>
<script src="__JS__/plugins/iCheck/icheck.min.js"></script>
<script src="__JS__/plugins/layer/laydate/laydate.js"></script>
<script src="__JS__/plugins/switchery/switchery.js"></script><!--IOS开关样式-->
<script src="__JS__/jquery.form.js"></script>
<script src="__JS__/layer/layer.js"></script>
<script src="__JS__/laypage/laypage.js"></script>
<script src="__JS__/laytpl/laytpl.js"></script>
<script src="__JS__/lunhui.js"></script>
<script>
    $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
</script>
<script type="text/javascript" src="/static/admin/webupload/webuploader.min.js"></script>

<script src="__JS__/jquery.dataTables.min.js"></script>
<script src="__JS__/jquery.jedate.js"></script>
<script src="__JS__/dist/plyr.js"></script>

<script type="text/javascript">
    var x = 0;
    var serachVal = "";
    function getVideo(page,searchName) {
        $.ajax({
            url: "./index",
            type: "post",
            data: {page:page,searchName:searchName},
            dataType: "json",
            success: function (res) {
                console.log(res);
                $("#mywrapper").empty();
                if(res.list.length > 0){
                    $.each(res.list,function (i,n) {
                        var path = n.path.substr(1);
                        var index = n.name.lastIndexOf(".");
                        var name = n.name.substring(0,index);
                        var str = "";
                        str += ""
                            +  "<div class='vcontainer'>"
                            +  "<input type='checkbox' name='status'value=\""+ n.id +"\"/>"
                            +  "<div class='container'>"
                            +  "<video controls>"
                            +  "<source src="+ path +" type='video/mp4'>"
                            +  "</video>"
                            +  "<p style='text-align: center;line-height: 30px;'>"+ name +"</p>"
                            +  "<div class='mask' onclick='play(this)'></div>"
                            +  "</div>"
                            +  "</div>"
                        $("#mywrapper").append(str);
                    })
                    $(".vcontainer input").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",});
                    edit();
                    plyr.setup({
                        controls: ["duration"]
                    });
                }else {
                    if(searchName){
                        layer.msg("没有相关内容");
                    }
                }
                if(res.allpage === 0){
                    res.allpage += 1
                }
                laypage({
                    cont: $('#footer'),//容器。值支持id名、原生dom对象，jquery对象,
                    pages: res.allpage,//总页数
                    skip: false,//是否开启跳页
                    skin: '#1AB5B7',//分页组件颜色
                    curr: page || 1,
                    groups: 3,//连续显示分页数
                    jump: function(obj, first){
                        if(!first){
                            console.log(obj)
                            getVideo(obj.curr,serachVal);
                        }
                        $('#allpage').html('第'+ obj.curr +'页，共'+ obj.pages +'页，共' + res.num + '个视频');
                    }
                });
            }
        })
    }
    getVideo(1,"");

    function play(that) {
        var url = $(that).parent(".container").find("source").attr("src");
        console.log(url);
        url = encodeURIComponent(url);
        window.open("./videoplay.html?url=" + url,"_blank");
    }
    function edit() {
        if(x%2 === 0){
            $("#del").attr("disabled",true);
            $(".icheckbox_square-green").css("display","none");
        }else {
            $("#del").attr("disabled",false);
            $(".icheckbox_square-green").css("display","block");
        }
    }
    $("#edit").click(function () {
        x += 1;
        edit();
    })
    $("#del").click(function () {
        var id_arr = [];
        $("#content input[type='checkbox']:checked").each(function (i,n) {
            console.log(i,n);
            id_arr.push($(n).val());
        })
        if(id_arr.length>0){
            id_arr = id_arr.toString();
            console.log(id_arr);
            $.ajax({
                url: "./videoDel",
                type: "post",
                data: {id_arr:id_arr},
                dataType: "json",
                success: function (res) {
                    if(res.code === 1){
                        layer.msg("删除成功");
                        getVideo(1,serachVal);
                    }
                }
            })
        }else {
            layer.msg("请选择要删除的视频");
        }

    })

    function search() {
        serachVal = $("#key").val();
        // console.log(val);
        getVideo(1,serachVal);
    }
    var uploader = WebUploader.create({
        auto: true,// 选完文件后，是否自动上传。
        swf: '/static/admin/webupload/Uploader.swf',// swf文件路径
        server: "<?php echo url('Upload/uploadVideo'); ?>",// 文件接收服务端。
        chunked: false,
        fileSizeLimit: 1000 *1024 *1024,
        duplicate :true,// 重复上传图片，true为可重复false为不可重复
        pick: {
            multiple: false,
            id: "#upload"
        },
        accept: {
            title: 'mp4',
            extensions: 'mp4',
            mimeTypes: '.mp4'
        }
    });

    uploader.on( 'fileQueued', function( file ) {
        $("#file_per").append('<div id="' + file.id + '" class="item">' +
            '</div>');
    });
    // 文件上传过程中创建进度条实时显示。
    uploader.on('uploadProgress', function (file, percentage) {
        var $li = $('#' + file.id),
            $percent = $li.find('.progress .progress-bar');
        // 避免重复创建
        if (!$percent.length) {
            $percent = $('<div class="progress progress-striped active">' +
                '<div class="progress-bar" role="progressbar" style="width: 0%">' +
                '</div>' +
                '</div>').appendTo($li).find('.progress-bar');
        }
        $li.find('p.state').text('上传中');
        $percent.css('width', percentage * 100 + '%');
    });
    // 文件上传成功
    uploader.on( 'uploadSuccess', function( file,data, response ) {
        console.log(file)
        console.log(data)
        if(data.code === 1){
            layer.msg(data.msg,{icon:1,time:1500,shade: 0.1});
            $("#file_per").empty();
            getVideo(1,"");
        }else {
            layer.msg("抱歉，您没有此权限");
        }

    });

    // 文件上传失败，显示上传出错。
    uploader.on( 'uploadError', function( file ,data) {
        layer.msg("上传失败",{icon:2,time:1500,shade: 0.1});
        $("#file_per").empty();
    });
</script>
</body>
</html>
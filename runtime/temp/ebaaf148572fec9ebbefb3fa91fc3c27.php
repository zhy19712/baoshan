<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:87:"C:\phpStudy\PHPTutorial\WWW\shuzi\public/../application/files\view\fileshuma\index.html";i:1517500912;s:85:"C:\phpStudy\PHPTutorial\WWW\shuzi\public/../application/files\view\public\header.html";i:1517500912;s:85:"C:\phpStudy\PHPTutorial\WWW\shuzi\public/../application/files\view\public\footer.html";i:1517500912;}*/ ?>
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
        #mytable1_wrapper{
            padding-top: 10px;
        }
    </style>
</head>
<link rel="stylesheet" type="text/css" href="/static/admin/webupload/webuploader.css">
<link rel="stylesheet" type="text/css" href="/static/admin/webupload/style.css">
<link rel="stylesheet" href="/static/admin/css/zTreeStyle/zTreeStyle.css">
<link rel="stylesheet" href="/static/admin/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="/static/admin/css/jedate.css">
<link rel="stylesheet" href="/static/admin/css/iconfont.css">
<style>
    #path{
        line-height: 30px;
        font-weight: 700;
        border-bottom: 1px solid #000;
    }
    .mybtn,.mybtn2{
         margin-right: 30px;
         float: left;
     }
    #imgPicker>div:nth-child(2){
        width: 100% !important;
        height: 100% !important;
    }
    #mytable1_wrapper th,#mytable1_wrapper td{
        text-align: center;
    }
    #myModal input,#myModal select,#myModal textarea{
        background-color: transparent;
    }
    #operate{
        font-size: 0;
        border: 1px solid #ccc;
    }
    #operate i {
        display: inline-block;
        width: 25%;
        font-size: 16px;
        line-height: 30px;
        text-align: center;
        color: #000;
        cursor: pointer;
    }
    .webuploader-pick{
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: transparent;
    }
    .webuploader-pick:hover{
        background-color: transparent;
    }
    #btn_upload{
        display: none;
    }
    #file_upload>div:nth-child(2){
        position: absolute;
        left: 0 !important;
        top: 0 !important;
        width: 100%;
        height: 100%;
    }
    .mysel{
        width: 150px;
        float: left;
        line-height: 30px;
        margin-left: 50%;
    }
    .mysel select{
        width: 100px;
    }
    label{
        text-align: right;
    }
    .ibox-content>.col-lg-12{
        padding-top: 10px;
    }
    #file_upload1{
        width: 100px;
        height: 38px;
        background-color: #00b7ee;
    }
    #img_show img{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
    }
</style>
<body style="text-align: center;">
<div id="mycontent" style="width: 20%;height: 98%;display: inline-block;margin: 0 10px;background-color:#fff;overflow-x: scroll;padding-top: 20px;padding-right:10px;border-right: 1px solid #ccc;">
    <div style="text-align: center;background-color:#1ab394;line-height: 30px;color: #fff;">数码影像资料分类结构</div>
    <div id="tree_container" class="ztree"></div>
    <p style="display: none;"></p>
</div>
<div class="wrapper wrapper-content animated fadeInRight" style="display: inline-block;width: 78%;vertical-align: top;padding: 0;margin-top: 20px;">
    <div class="ibox float-e-margins">
        <div class="ibox-content">
            <div class="row">
                <div id="mytable1_wrapper">
                    <table id="admin_table" width="100%" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>时间</th>
                            <th>地点</th>
                            <th>人物</th>
                            <th>事由</th>
                            <th>背景</th>
                            <th>摄影者</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="mymodal" data-keyboard="false" data-backdrop="static" class="modal animated fadeInRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width: 60%;margin: 0 auto;margin-top: 40px;">
    <div class="row">
        <div class="col-sm-12" style="background-color:#fff;">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5></h5>
                </div>
                <div class="ibox-content">
                    <div class="col-lg-12 col-xs-12">
                        <label class="col-xs-3 control-label">拍摄时间：</label>
                        <div class="myblock col-xs-8 input-group">
                            <input id="time" type="text" class="form-control" name="name" >
                        </div>
                    </div>
                    <div class="col-lg-12 col-xs-12">
                        <label class="col-xs-3 control-label">拍摄人：</label>
                        <div class="myblock col-xs-8 input-group">
                            <input id="photographer" type="text" class="form-control" name="year" >
                        </div>
                    </div>
                    <div class="col-lg-12 col-xs-12">
                        <label class="col-xs-3 control-label">拍摄地点：</label>
                        <div class="myblock col-xs-8 input-group">
                            <input id="address" type="text" class="form-control" name="year" >
                        </div>
                    </div>
                    <div class="col-lg-12 col-xs-12">
                        <label class="col-xs-3 control-label">人物：</label>
                        <div class="myblock col-xs-8 input-group">
                            <input id="user" type="text" class="form-control" name="year" >
                        </div>
                    </div>
                    <div class="col-lg-12 col-xs-12">
                        <label class="col-xs-3 control-label">事由：</label>
                        <div class="myblock col-xs-8 input-group">
                            <input id="deed" type="text" class="form-control" name="year" >
                        </div>
                    </div>
                    <div class="col-lg-12 col-xs-12">
                        <label class="col-xs-3 control-label">背景：</label>
                        <div class="myblock col-xs-8 input-group">
                            <input id="background" type="text" class="form-control" name="year" >
                        </div>
                    </div>
                    <div class="col-lg-12 col-xs-12">
                        <label class="col-xs-3 control-label">照片：</label>
                        <div class="myblock col-xs-8 input-group" style="text-align: left;">
                            <div id="file_per1" style="display: inline-block;vertical-align: middle;"></div>
                            <div id="file_upload1" style="display: inline-block;vertical-align: middle;"></div>
                            <div id="file_list1" style="display: inline-block;vertical-align: middle;"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xs-12">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> 保存</button>&nbsp;&nbsp;&nbsp;
                        <a class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> 返回</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="img_show" data-keyboard="false" data-backdrop="static" class="modal animated fadeInRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width: 60%;margin: 0 auto;margin-top: 40px;">
    <div class="row" style="height: 90%;">
        <div class="col-sm-12" style="height: 100%;">
            <div class="ibox float-e-margins" style="height: 100%;">
                <div class="ibox-content" style="height: 100%;">
                    <img src="" alt="" style="max-height: 85%;">
                    <a class="btn btn-danger" data-dismiss="modal" style="position: absolute;bottom: 10px;left: 50%;margin-left: -30px;"><i class="fa fa-close"></i> 返回</a>
                </div>
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

<script src="__JS__/jquery.ztree.all.js"></script>
<script src="__JS__/jquery.dataTables.min.js"></script>
<script src="__JS__/jquery.jedate.js"></script>

<script type="text/javascript">
    $("#time").jeDate({
        format: "YYYY-MM-DD"
    });
    var uploader1;
    function upload() {
        if(!uploader1){
            uploader1 = WebUploader.create({
                auto: false,// 选完文件后，是否自动上传。
                swf: '/static/admin/webupload/Uploader.swf',// swf文件路径
                server: "<?php echo url('Upload/uploadphoto'); ?>",// 文件接收服务端。
                chunked: false,
                fileSizeLimit: 1000 *1024 *1024,
                fileNumLimit: 1,
                formData: {"time":"","photographer":"","address":"","user":"","deed":"","background":""},
                duplicate :true,// 重复上传图片，true为可重复false为不可重复
                pick: {
                    multiple: false,
                    id: "#file_upload1",
                    innerHTML: "上传文件"
                },
                accept: {
                    title: 'Images',
                    extensions: 'gif,jpg,jpeg,bmp,png',
                    mimeTypes: 'image/jpg,image/jpeg,image/png'
                }
            });

            uploader1.on( 'fileQueued', function( file ) {
                $("#file_per1").append('<div id="' + file.id + '" class="item">' +
                    '</div>');
                $("#file_list1").append('<div style="display: inline-block;vertical-align: middle;" class="' + file.id + '" class="item">' +
                    '<span class="info">' + file.name + '</span>&nbsp' +
                    '<span class="webuploadDelbtn" style="color: #0d8ddb;text-decoration: underline;cursor: pointer;">删除</span>' +
                    '</div>' );
            });
            $("#file_list1").on("click", ".webuploadDelbtn", function () {
                var $ele = $(this);
                var id = $ele.parent().attr("class");
                var file = uploader1.getFile(id);
                uploader1.removeFile(file,true);
            });
            uploader1.on('fileDequeued', function (file) {
                $(file.id).remove();
                $('.'+file.id).remove();
                console.log("remove");
            });
            uploader1.on("uploadStart",function () {
                uploader1.options.formData.time = $("#time").val();
                uploader1.options.formData.photographer = $("#photographer").val();
                uploader1.options.formData.address = $("#address").val();
                uploader1.options.formData.user = $("#user").val();
                uploader1.options.formData.deed = $("#deed").val();
                uploader1.options.formData.background = $("#background").val();
            });
            uploader1.on('beforeFileQueued', function (file) {
                if($("#file_list1").html()){
                    alert("只能上传一个文件,请先删除文件");
                    return false;
                }else {
                    return true;
                }
            });
            // 文件上传过程中创建进度条实时显示。
            uploader1.on('uploadProgress', function (file, percentage) {
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
            uploader1.on( 'uploadSuccess', function( file,data, response ) {
                console.log(file)
                console.log(data)
                if(data.code === 1){
                    layer.msg(data.msg,{icon:1,time:1500,shade: 0.1});
                    $("#file_upload1").empty();
                    $("#file_per1").empty();
                    $("#file_list1").empty();
                    $("#mymodal").modal('hide');
                    admin_table.ajax.url("__SCRIPT__/fileshuma.php").load();
                }else {
                    layer.msg("抱歉，您没有此权限");
                }
            });

            // 文件上传失败，显示上传出错。
            uploader1.on( 'uploadError', function( file ) {
                layer.msg("上传失败",{icon:2,time:1500,shade: 0.1});
                $("#file_per1").empty();
            });
        }
    }
    function detail(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();
        $.ajax({
            url: "./index",
            type: "post",
            data: {id:id},
            success: function (res) {
                console.log(res);
                var path = res.data.path.substr(1);
                $("#img_show img").attr('src',path);
                $("#img_show").modal('show');
            }
        })
    }
        var admin_table = $('#admin_table').DataTable( {
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "__SCRIPT__/fileshuma.php"
            },
            "dom": '<"mybtn btn btn-outline btn-primary"><"myl"l><"mysel">frtip',
            "columnDefs": [
                {
                    "searchable": false,
                    "orderable": false,
                    "targets": [7],
                    "render" :  function(data,type,row) {
                        var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='detail(this)' value='查看'/>";
                        html += "<input type='button' class='btn btn-primary btn-outline btn-xs' style='margin-left: 5px;' onclick='edit(this)' value='编辑'/>" ;
                        html += "<input type='button' class='btn btn-success btn-outline btn-xs' style='margin-left: 5px;' onclick='edit(this)' value='下载'/>" ;
                        html += "<input type='button' class='btn btn-danger btn-outline btn-xs' style='margin-left: 5px;' onclick='del(this)' value='删除'/>" ;
                        return html;
                    }
                }
            ],
            "language": {
                "lengthMenu": "每页_MENU_ 条记录",
                "zeroRecords": "没有找到记录",
                "info": "第 _PAGE_ 页 ( 总共 _PAGES_ 页 )",
                "infoEmpty": "无记录",
                "search": "搜索：",
                "infoFiltered": "(从 _MAX_ 条记录过滤)",
                "paginate": {
                    "previous": "上一页",
                    "next": "下一页"
                }
            }
        } );
    $("div.mybtn").html('<div>新增</div>');
    $("div.mysel").html('<span>年度:</span><select><option value="2017">2017</option><option value="2018">2018</option></select>');
    $("#mytable1_wrapper .mybtn").click(function () {
        $("#mymodal input").val("");
        uploader1 = null;
        upload();
        console.log(123);
        $("#mymodal").modal('show');
    })
    $("#mymodal .btn-primary").click(function () {
        uploader1.upload();
    })
    //组织结构
    var zTreeObj;
    var nodes = [
        {name: "数码影像资料",children: [
            {name:"形象类"},
            {name:"安全类"},
            {name:"质量类"},
            {name:"大事类"}
        ]}
    ];
    var setting = {
    };
    zTreeObj = $.fn.zTree.init($("#tree_container"), setting,nodes);



</script>
</body>
</html>
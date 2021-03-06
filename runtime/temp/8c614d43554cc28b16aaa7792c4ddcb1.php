<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:85:"C:\phpStudy\PHPTutorial\WWW\shuzi\public/../application/quality\view\stage\index.html";i:1517325921;s:87:"C:\phpStudy\PHPTutorial\WWW\shuzi\public/../application/quality\view\public\header.html";i:1517675489;s:87:"C:\phpStudy\PHPTutorial\WWW\shuzi\public/../application/quality\view\public\footer.html";i:1516333031;}*/ ?>
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
<link rel="stylesheet" href="/static/admin/css/jquery.dataTables.min.css">
<style>
    #container{
        width: 96%;
        margin: 0 auto;
        padding-top: 10px;
    }
</style>
<body class="gray-bg animated fadeInRight">
<div id="container">
    <ul class="nav nav-tabs" id="myTab">
        <li class="active"><a href="#home">截流验收</a></li>
        <li><a href="#profile">蓄水验收</a></li>
        <li><a href="#messages">机组启动验收</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="home">
            <div id="table1_wrapper">
                <table id="table1" width="100%" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>文件名称</th>
                        <th>上传人</th>
                        <th>上传时间</th>
                        <th>状态</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="tab-pane" id="profile">
            <div id="table2_wrapper">
                <table id="table2" width="100%" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>文件名称</th>
                        <th>上传人</th>
                        <th>上传时间</th>
                        <th>状态</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="tab-pane" id="messages">
            <div id="table3_wrapper">
                <table id="table3" width="100%" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>文件名称</th>
                        <th>上传人</th>
                        <th>上传时间</th>
                        <th>状态</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
<div id="form_container" style="display: none;"></div>
<div id="fname" data-keyboard="false" data-backdrop="static" class="modal animated fadeInRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width: 60%;margin: 0 auto;margin-top: 40px;">
    <div class="row">
        <div class="col-sm-12" style="background-color:#fff;">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5></h5>
                </div>
                <div class="ibox-content">
                    <div class="col-lg-12 col-xs-12">
                        <label class="col-xs-3 control-label" id="file" style="text-align: right;line-height: 44px;">文件：</label>
                        <div class="myblock col-xs-8 input-group">
                            <div id="file_per" style="display: inline-block;vertical-align: middle;"></div>
                            <div id="file_upload" style="display: inline-block;vertical-align: middle;"></div>
                            <div id="file_list" style="display: inline-block;vertical-align: middle;"></div>
                        </div>
                    </div>
                    <div class="col-xs-12" style="text-align: center;">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> 保存</button>&nbsp;&nbsp;&nbsp;
                        <a class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> 返回</a>
                    </div>
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
<script src="__JS__/jquery.dataTables.min.js"></script>
<script>
    function showpdf1(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();
        var parent = $(that).parent("td").parent("tr").parent("tbody").parent("table").attr("id");
        if(parent === "table1"){
            tablename = "jlys"
        }else if(parent === "table2"){
            tablename = "xsys"
        }else if(parent === "table3"){
            tablename = "jzqdys"
        }
        showPdf(id,"./attachmentPreview");
    }
    $('#myTab a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
        console.log($(this).text());
    });
    var uploader,tablename;
    function showPdf(id,url) {
        $.ajax({
            url: url,
            type: "post",
            data: {id:id,table_name:tablename},
            success: function (res) {
                console.log(res);
                if(res.code === 1){
                    var path = res.path;
                    window.open("__JS__/web/viewer.html?file=" + path,"_blank");
                }else {
                    layer.msg(res.msg);
                }
            }
        })
    }
    function upload(that) {
        var cid = $(that).parent("td").parent("tr").children("td:first-child").text();
        var parent = $(that).parents("table").attr("id");
        if(parent === "table1"){
            tablename = "jlys"
        }else if(parent === "table2"){
            tablename = "xsys"
        }else if(parent === "table3"){
            tablename = "jzqdys"
        }
        $("#file_list").empty();
        $("#fname").modal('show');
        if(!uploader){
            uploader = WebUploader.create({
                auto: false,// 选完文件后，是否自动上传。
                swf: '/static/admin/webupload/Uploader.swf',// swf文件路径
                server: "<?php echo url('Upload/uploadProjectStage'); ?>",// 文件接收服务端。
                chunked: false,
                fileSizeLimit: 1000 *1024 *1024,
                fileNumLimit: 1,
                formData: {"uid":"","table_name":""},
                duplicate :true,// 重复上传图片，true为可重复false为不可重复
                pick: {
                    multiple: false,
                    id: "#file_upload",
                    innerHTML: "上传文件"
                }
            });

            uploader.on( 'fileQueued', function( file ) {
                $("#file_per").append('<div id="' + file.id + '" class="item">' +
                    '</div>');
                $("#file_list").append('<div style="display: inline-block;vertical-align: middle;" class="' + file.id + '" class="item">' +
                    '<span class="info">' + file.name + '</span>&nbsp' +
                    '<span class="webuploadDelbtn" style="color: #0d8ddb;text-decoration: underline;cursor: pointer;">删除</span>' +
                    '</div>' );
            });
            $("#file_list").on("click", ".webuploadDelbtn", function () {
                var $ele = $(this);
                var id = $ele.parent().attr("class");
                var file = uploader.getFile(id);
                uploader.removeFile(file,true);
            });
            uploader.on('fileDequeued', function (file) {
                $(file.id).remove();
                $('.'+file.id).remove();
                console.log("remove");
            });
            uploader.on("uploadStart",function () {
                uploader.options.formData.uid = cid;
                uploader.options.formData.table_name = tablename;
            });
            uploader.on('beforeFileQueued', function (file) {
                if($("#file_list").html()){
                    alert("只能上传一个文件,请先删除文件");
                    return false;
                }else {
                    return true;
                }
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
                    uploader = null;
                    $("#file_upload").empty();
                    $("#fname").modal('hide');
                    $("#file_per").empty();
                    if(parent === "table1"){
                        table1.ajax.url("__SCRIPT__/project_stage1.php?table_name=jlys").load();
                    }else if(parent === "table2"){
                        table2.ajax.url("__SCRIPT__/project_stage2.php?table_name=xsys").load();
                    }else if(parent === "table3"){
                        table3.ajax.url("__SCRIPT__/project_stage3.php?table_name=jzqdys").load();
                    }
                }else {
                    layer.msg("抱歉，您没有此权限");
                }
            });

            // 文件上传失败，显示上传出错。
            uploader.on( 'uploadError', function( file ) {
                layer.msg("上传失败",{icon:2,time:1500,shade: 0.1});
//                $("#file_per").empty();
//                $("#file_upload").empty();
            });
        }
    }
    $("#fname .btn-primary").click(function () {
        uploader.upload();
    })
    function del(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();
        var parent = $(that).parent("td").parent("tr").parent("tbody").parent("table").attr("id");
        if(parent === "table1"){
            tablename = "jlys"
        }else if(parent === "table2"){
            tablename = "xsys"
        }else if(parent === "table3"){
            tablename = "jzqdys"
        }
        layer.confirm('确认删除此条记录吗?', {icon: 3, title:'提示'}, function(index){
            $.ajax({
                url: "./stageDel",
                data: {'id' : id,table_name:tablename},
                type: "post",
                dataType: "json",
                success: function (res) {
                    if(res.code == 1){
                        layer.msg(res.msg,{icon:1,time:1500,shade: 0.1});
                        if(parent === "table1"){
                            table1.ajax.url("__SCRIPT__/project_stage1.php?table_name=jlys").load();
                        }else if(parent === "table2"){
                            table2.ajax.url("__SCRIPT__/project_stage2.php?table_name=xsys").load();
                        }else if(parent === "table3"){
                            table3.ajax.url("__SCRIPT__/project_stage3.php?table_name=jzqdys").load();
                        }
                    }else{
                        layer.msg(res.msg,{icon:0,time:1500,shade: 0.1});
                    }
                }
            })
            layer.close(index);
        })
    }
    function download(that) {
        $.ajax({
            url: "./stageDownload",
            success: function (res) {
                if(res.code != 1){
                    layer.msg(res.msg)
                }else {
                    $("#form_container").empty();
                    var id = $(that).parent("td").parent("tr").children("td:first-child").text();
                    var parent = $(that).parents("table").attr("id");
                    if(parent === "table1"){
                        tablename = "jlys"
                    }else if(parent === "table2"){
                        tablename = "xsys"
                    }else if(parent === "table3"){
                        tablename = "jzqdys"
                    }
                    var str = "";
                    str += ""
                        + "<iframe name=downloadFrame"+ id +" style='display:none;'></iframe>"
                        + "<form name=download"+ id +" action='./stageDownload' method='get' target=downloadFrame"+ id +">"
                        + "<span class='file_name' style='color: #000;'>"+str+"</span>"
                        + "<input class='file_url' style='display: none;' name='id' value="+ id +">"
                        + "<input style='display: none;' name='table_name' value="+ tablename +">"
                        + "<button type='submit' class=btn" + id +"></button>"
                        + "</form>"
                    $("#form_container").append(str);
                    $("#form_container").find(".btn" + id).click();
                }
            }
        })
    }
    var table1 = $('#table1').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "__SCRIPT__/project_stage1.php?table_name=jlys",
            "async": false
        },
        "dom": 'f',
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [5],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='download(this)' value='下载'/>";
                    html += "<input type='button' class='btn btn-primary btn-outline btn-xs' style='margin-left: 5px;' onclick='upload(this)' value='上传'/>" ;
                    html += "<input type='button' class='btn btn-success btn-outline btn-xs' style='margin-left: 5px;' onclick='showpdf1(this)' value='预览'/>" ;
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

    var table2 = $('#table2').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "__SCRIPT__/project_stage2.php?table_name=xsys",
            "async": false
        },
        "dom": 'f',
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [5],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='download(this)' value='下载'/>";
                    html += "<input type='button' class='btn btn-primary btn-outline btn-xs' style='margin-left: 5px;' onclick='upload(this)' value='上传'/>" ;
                    html += "<input type='button' class='btn btn-success btn-outline btn-xs' style='margin-left: 5px;' onclick='showpdf1(this)' value='预览'/>" ;
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

    var table3 = $('#table3').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "__SCRIPT__/project_stage3.php?table_name=jzqdys",
            "async": false
        },
        "dom": 'f',
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [5],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='download(this)' value='下载'/>";
                    html += "<input type='button' class='btn btn-primary btn-outline btn-xs' style='margin-left: 5px;' onclick='upload(this)' value='上传'/>" ;
                    html += "<input type='button' class='btn btn-success btn-outline btn-xs' style='margin-left: 5px;' onclick='showpdf1(this)' value='预览'/>" ;
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
</script>
</body>
</html>
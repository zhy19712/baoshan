<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:93:"C:\phpStudy\PHPTutorial\WWW\shuzi\public/../application/safety\view\responsibility\index.html";i:1520329261;s:86:"C:\phpStudy\PHPTutorial\WWW\shuzi\public/../application/safety\view\public\header.html";i:1517675489;s:86:"C:\phpStudy\PHPTutorial\WWW\shuzi\public/../application/safety\view\public\footer.html";i:1517325921;}*/ ?>
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
<link rel="stylesheet" href="/static/admin/css/jedate.css">
<style>
    #container{
        width: 96%;
        margin: 0 auto;
        padding-top: 10px;
    }
    .mybtn{
        float: left;
        margin-right: 20px;
    }
    #home,#profile,#messages{
        padding-top: 20px;
    }
    #file_upload1>div:nth-child(2),#file_upload2>div:nth-child(2),#file_upload3>div:nth-child(2){
        width: 100% !important;
        height: 100% !important;
    }
    #tab_li{
        font-size: 0;
    }
    #tab_li>div{
        display: inline-block;
        vertical-align: middle;
        width: 50%;
        text-align: center;
        border: 1px solid #ccc;
        font-size: 14px;
        line-height: 30px;
        cursor: pointer;
    }
    #tab_li>div:first-child{
        background-color: #bae2f3;
    }
    #tab_con>div:nth-child(2){
        display: none;
    }
</style>
<body class="gray-bg animated fadeInRight">
<div id="container">
    <ul class="nav nav-tabs" id="myTab">
        <li class="active"><a href="#home">总体目标</a></li>
        <li><a href="#profile">年度目标</a></li>
        <li><a href="#messages">责任书</a></li>
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
                        <th>备注</th>
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
                        <th>年度</th>
                        <th>上传人</th>
                        <th>上传时间</th>
                        <th>备注</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="tab-pane" id="messages">
            <div id="tab_li">
                <div>部门</div>
                <div>个人</div>
            </div>
            <div id="table3_wrapper">
                <table id="table3" width="100%" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>文件名称</th>
                        <th>所属部门</th>
                        <th>上传时间</th>
                        <th>上传人</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
<div id="form_container" style="display: none;"></div>
<div id="fname1" data-keyboard="false" data-backdrop="static" class="modal animated fadeInRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width: 60%;margin: 0 auto;margin-top: 40px;">
    <div class="row">
        <div class="col-sm-12" style="background-color:#fff;">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5></h5>
                </div>
                <div class="ibox-content">
                    <input id="aid" type="text" class="form-control" value="" style="display: none;">
                    <div class="col-lg-12 col-xs-12">
                        <label class="col-xs-3 control-label" style="text-align: right;line-height: 44px;">备注：</label>
                        <div class="myblock col-xs-8 input-group">
                            <input id="remark1" type="text" class="form-control" name="remark" >
                        </div>
                    </div>
                    <div class="col-lg-12 col-xs-12">
                        <label class="col-xs-3 control-label" id="file" style="text-align: right;line-height: 44px;">文件：</label>
                        <div class="myblock col-xs-8 input-group">
                            <div id="file_per1" style="display: inline-block;vertical-align: middle;"></div>
                            <div id="file_upload1" style="display: inline-block;vertical-align: middle;"></div>
                            <div id="file_list1" style="display: inline-block;vertical-align: middle;"></div>
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
<div id="fname2" data-keyboard="false" data-backdrop="static" class="modal animated fadeInRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width: 60%;margin: 0 auto;margin-top: 40px;">
    <div class="row">
        <div class="col-sm-12" style="background-color:#fff;">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5></h5>
                </div>
                <div class="ibox-content">
                    <input id="gid" type="text" class="form-control" value="" style="display: none;">
                    <div class="col-lg-12 col-xs-12">
                        <label class="col-xs-3 control-label" style="text-align: right;line-height: 44px;">年度：</label>
                        <div class="myblock col-xs-8 input-group">
                            <input id="year2" type="text" class="form-control" name="year" >
                        </div>
                    </div>
                    <div class="col-lg-12 col-xs-12">
                        <label class="col-xs-3 control-label" style="text-align: right;line-height: 44px;">备注：</label>
                        <div class="myblock col-xs-8 input-group">
                            <input id="remark2" type="text" class="form-control" name="remark" >
                        </div>
                    </div>
                    <div class="col-lg-12 col-xs-12">
                        <label class="col-xs-3 control-label" id="file2" style="text-align: right;line-height: 44px;">文件：</label>
                        <div class="myblock col-xs-8 input-group">
                            <div id="file_per2" style="display: inline-block;vertical-align: middle;"></div>
                            <div id="file_upload2" style="display: inline-block;vertical-align: middle;"></div>
                            <div id="file_list2" style="display: inline-block;vertical-align: middle;"></div>
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
<div id="fname3" data-keyboard="false" data-backdrop="static" class="modal animated fadeInRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width: 60%;margin: 0 auto;margin-top: 40px;">
    <div class="row">
        <div class="col-sm-12" style="background-color:#fff;">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5></h5>
                </div>
                <div class="ibox-content">
                    <input id="rid" type="text" class="form-control" value="" style="display: none;">
                    <div class="col-lg-12 col-xs-12" id="dept">
                        <label class="col-xs-3 control-label" style="text-align: right;line-height: 44px;">部门：</label>
                        <div class="myblock col-xs-8 input-group">
                            <select name="department" id="department" class="form-control" value="安全组">
                                <option value="安全组">安全组</option>
                                <option value="质量组">质量组</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xs-12" id="person">
                        <label class="col-xs-3 control-label" style="text-align: right;line-height: 44px;">个人姓名：</label>
                        <div class="myblock col-xs-8 input-group">
                            <input id="personal" type="text" class="form-control" name="personal" >
                        </div>
                    </div>
                    <div class="col-lg-12 col-xs-12">
                        <label class="col-xs-3 control-label" id="file3" style="text-align: right;line-height: 44px;">文件：</label>
                        <div class="myblock col-xs-8 input-group">
                            <div id="file_per3" style="display: inline-block;vertical-align: middle;"></div>
                            <div id="file_upload3" style="display: inline-block;vertical-align: middle;"></div>
                            <div id="file_list3" style="display: inline-block;vertical-align: middle;"></div>
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
<script src="__JS__/jquery.jedate.js"></script>
<script>
    //日期插件
    $("#year2").jeDate({
        format: "YYYY-MM"
    });
    //预览
    function showPdf(id,url) {
        $.ajax({
            url: url,
            type: "post",
            data: {id:id},
            success: function (res) {
                if(res.code === 1){
                    var path = res.path;
                    window.open("__JS__/web/viewer.html?file=" + path,"_blank");
                }else {
                    layer.msg(res.msg);
                }
            }
        })
    }
    //删除
    function del(id,url) {
        layer.confirm('确认删除此条记录吗?', {icon: 3, title:'提示'}, function(index){
            $.ajax({
                url: url,
                data: {'id' : id},
                type: "post",
                dataType: "json",
                success: function (res) {
                    if(res.code == 1){
                        layer.msg(res.msg,{icon:1,time:1500,shade: 0.1});
                        if(url === "./anualDel"){
                            table1.ajax.url("__SCRIPT__/safety_goal_anual.php").load();
                        }else if(url === "./generalDel"){
                            table2.ajax.url("__SCRIPT__/safety_goal_general.php").load();
                        }else if(url === "./responsibilityDel"){
                            if(tablename == "department"){
                                table3.ajax.url("__SCRIPT__/safety_responsibility_agreemnet.php?tablename=department").load();
                            }else {
                                table3.ajax.url("__SCRIPT__/safety_responsibility_agreemnet.php?tablename=personal").load();
                            }
                        }
                    }else{
                        layer.msg(res.msg,{icon:0,time:1500,shade: 0.1});
                    }
                }
            })
            layer.close(index);
        })
    }
    //下载
    function download(id,url) {
        $.ajax({
            url: url,
            success: function (res) {
                if(res.code != 1){
                    layer.msg(res.msg)
                }else {
                    $("#form_container").empty();
                    var str = "";
                    str += ""
                        + "<iframe name=downloadFrame"+ id +" style='display:none;'></iframe>"
                        + "<form name=download"+ id +" action="+ url +" method='get' target=downloadFrame"+ id +">"
                        + "<span class='file_name' style='color: #000;'>"+str+"</span>"
                        + "<input class='file_url' style='display: none;' name='id' value="+ id +">"
                        + "<button type='submit' class=btn" + id +"></button>"
                        + "</form>"
                    $("#form_container").append(str);
                    $("#form_container").find(".btn" + id).click();
                }
            }
        })
    }
    //bootstrap,tab切换
    $('#myTab a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
        console.log($(this).text());
    });

    //table1
    var uploader1,uploader2,uploader3;          //初始化三个upload按钮
    //总体目标
    var aname1,aname2;           //用于区分 编辑时是否修改了文件

    //总体目标-初始化upload
    //http://localhost:81/static/admin/js/web/viewer.html?file=/uploads/temp/9f6feec0d40ac402373846180d903346.docx.pdf
    function upload1() {
        if(!uploader1){
            uploader1 = WebUploader.create({
                auto: false,// 选完文件后，是否自动上传。
                swf: '/static/admin/webupload/Uploader.swf',// swf文件路径
                server: "<?php echo url('Upload/uploadSafeyGoalAnual'); ?>",// 文件接收服务端。
                chunked: false,
                fileSizeLimit: 1000 *1024 *1024,
                fileNumLimit: 1,
                formData: {"remark":"","aid":""},
                duplicate :true,// 重复上传图片，true为可重复false为不可重复
                pick: {
                    multiple: false,
                    id: "#file_upload1",
                    innerHTML: "上传文件"
                }
            });

            uploader1.on( 'fileQueued', function( file ) {
                aname2 = file.name;
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
                uploader1.options.formData.aid = $("#aid").val();
                uploader1.options.formData.remark = $("#remark1").val();
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
                    $("#fname1").modal('hide');
                    table1.ajax.url("__SCRIPT__/safety_goal_anual.php").load();
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

    //总体目标-预览
    function showpdf1(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();
        showPdf(id,"./anualPreview");
    }

    //总体目标-删除
    function del1(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();
        del(id,"./anualDel");
    }

    //总体目标-下载
    function download1(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();
        download(id,"./anualDownload");
    }

    //总体目标-编辑-删除文件
    function fdelatt1(that) {
        var id = $(that).parent("div").attr("id");
        $("#"+id).remove();
    }

    //总体目标-编辑
    function edit1(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();
        $.ajax({
            url: "./index",
            type: "post",
            data: {id:id},
            dataType: "json",
            success: function (res) {
                console.log(res);
                if(res.code === 1){
                    $("#aid").val(res.data.id);
                    $("#remark1").val(res.data.remark);
                    aname1 = res.data.name;
                    aname2 = res.data.name;
                    uploader1 = null;
                    upload1();
                    if(res.data.path){
                        $("#file_list1").empty().append('<div style="display: inline-block;vertical-align: middle;" id="' + res.data.id + '" class="item">' +
                            '<span class="info">' + res.data.name + '</span>&nbsp' +
                            '<span onclick="fdelatt1(this)" style="color: #0d8ddb;text-decoration: underline;cursor: pointer;">删除</span>' +
                            '</div>' );
                    }
                    $("#fname1").modal('show');
                }
            }
        })
    }

    //总体目标-表格
    var table1 = $('#table1').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "__SCRIPT__/safety_goal_anual.php"
        },
        "dom": '<"mybtn btn btn-outline btn-primary"><"myl"l>frtip',
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [5],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='download1(this)' value='下载'/>";
                    html += "<input type='button' class='btn btn-primary btn-outline btn-xs' style='margin-left: 5px;' onclick='edit1(this)' value='编辑'/>" ;
                    html += "<input type='button' class='btn btn-success btn-outline btn-xs' style='margin-left: 5px;' onclick='showpdf1(this)' value='预览'/>" ;
                    html += "<input type='button' class='btn btn-danger btn-outline btn-xs' style='margin-left: 5px;' onclick='del1(this)' value='删除'/>" ;
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

    //总体目标-新增
    $("#table1_wrapper .mybtn").click(function () {
        uploader1 = null;
        $("#fname1 input").val("");
        $("#file_list1").empty();
        $("#fname1").modal('show');
        upload1();
    })

    //总体目标-提交
    $("#fname1 .btn-primary").click(function () {
        if($("#file_list1").html()){
            if(!$("#aid").val()){
                uploader1.upload();
            }else {
                if(aname1 === aname2){
                    $.ajax({
                        url: "./anualEdit",
                        type: "post",
                        data: {aid:$("#aid").val(),remark:$("#remark1").val()},
                        datatype: "json",
                        success: function (res) {
                            if(res.code === 1){
                                layer.msg(res.msg);
                                table1.ajax.url("__SCRIPT__/safety_goal_anual.php").load();
                                $("#fname1").modal('hide');
                            }else {
                                layer.msg(res.msg);
                            }
                        }
                    })
                }else {
                    uploader1.upload();
                }
            }
        }else {
            alert("请选择上传文件");
        }
    })



    //年度目标
    var bname1,bname2;           //用于区分 编辑时是否修改了文件
    //年度目标-初始化upload
    function upload2() {
        if(!uploader2){
            uploader2 = WebUploader.create({
                auto: false,// 选完文件后，是否自动上传。
                swf: '/static/admin/webupload/Uploader.swf',// swf文件路径
                server: "<?php echo url('Upload/uploadSafeyGoalGeneral'); ?>",// 文件接收服务端。
                chunked: false,
                fileSizeLimit: 1000 *1024 *1024,
                fileNumLimit: 1,
                formData: {"remark":"","gid":"","year":""},
                duplicate :true,// 重复上传图片，true为可重复false为不可重复
                pick: {
                    multiple: false,
                    id: "#file_upload2",
                    innerHTML: "上传文件"
                }
            });

            uploader2.on( 'fileQueued', function( file ) {
                bname2 = file.name;
                $("#file_per2").append('<div id="' + file.id + '" class="item">' +
                    '</div>');
                $("#file_list2").append('<div style="display: inline-block;vertical-align: middle;" class="' + file.id + '" class="item">' +
                    '<span class="info">' + file.name + '</span>&nbsp' +
                    '<span class="webuploadDelbtn" style="color: #0d8ddb;text-decoration: underline;cursor: pointer;">删除</span>' +
                    '</div>' );
            });
            $("#file_list2").on("click", ".webuploadDelbtn", function () {
                var $ele = $(this);
                var id = $ele.parent().attr("class");
                var file = uploader2.getFile(id);
                uploader2.removeFile(file,true);
            });
            uploader2.on('fileDequeued', function (file) {
                $(file.id).remove();
                $('.'+file.id).remove();
                console.log("remove");
            });
            uploader2.on("uploadStart",function () {
                uploader2.options.formData.gid = $("#gid").val();
                uploader2.options.formData.year = $("#year2").val();
                uploader2.options.formData.remark = $("#remark2").val();
            });
            uploader2.on('beforeFileQueued', function (file) {
                if($("#file_list2").html()){
                    alert("只能上传一个文件,请先删除文件");
                    return false;
                }else {
                    return true;
                }
            });
            // 文件上传过程中创建进度条实时显示。
            uploader2.on('uploadProgress', function (file, percentage) {
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
            uploader2.on( 'uploadSuccess', function( file,data, response ) {
                console.log(file)
                console.log(data)
                if(data.code === 1){
                    layer.msg(data.msg,{icon:1,time:1500,shade: 0.1});
                    $("#file_upload2").empty();
                    $("#file_per2").empty();
                    $("#file_list2").empty();
                    $("#fname2").modal('hide');
                    table2.ajax.url("__SCRIPT__/safety_goal_general.php").load();
                }else {
                    layer.msg("抱歉，您没有此权限");
                }
            });

            // 文件上传失败，显示上传出错。
            uploader2.on( 'uploadError', function( file ) {
                layer.msg("上传失败",{icon:2,time:1500,shade: 0.1});
                $("#file_per2").empty();
            });
        }
    }

    //年度目标-预览
    function showpdf2(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();
        showPdf(id,"./generalPreview");
    }

    //年度目标-删除
    function del2(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();
        del(id,"./generalDel");
    }

    //年度目标-下载
    function download2(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();
        download(id,"./generalDownload");
    }

    //年度目标-编辑-删除文件
    function fdelatt2(that) {
        var id = $(that).parent("div").attr("id");
        $("#"+id).remove();
    }

    //年度目标-编辑
    function edit2(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();
        $.ajax({
            url: "./postGeneral",
            type: "post",
            data: {id:id},
            dataType: "json",
            success: function (res) {
                console.log(res);
                if(res.code === 1){
                    $("#gid").val(res.data.id);
                    $("#year2").val(res.data.year);
                    $("#remark2").val(res.data.remark);
                    bname1 = res.data.name;
                    bname2 = res.data.name;
                    uploader2 = null;
                    upload2();
                    if(res.data.path){
                        $("#file_list2").empty().append('<div style="display: inline-block;vertical-align: middle;" id="' + res.data.id + '" class="item">' +
                            '<span class="info">' + res.data.name + '</span>&nbsp' +
                            '<span onclick="fdelatt2(this)" style="color: #0d8ddb;text-decoration: underline;cursor: pointer;">删除</span>' +
                            '</div>' );
                    }
                    $("#fname2").modal('show');
                }
            }
        })
    }

    //年度目标-表格
    var table2 = $('#table2').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "__SCRIPT__/safety_goal_general.php",
            "async": false
        },
        "dom": '<"mybtn btn btn-outline btn-primary"><"myl"l>frtip',
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [6],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='download2(this)' value='下载'/>";
                    html += "<input type='button' class='btn btn-primary btn-outline btn-xs' style='margin-left: 5px;' onclick='edit2(this)' value='编辑'/>" ;
                    html += "<input type='button' class='btn btn-success btn-outline btn-xs' style='margin-left: 5px;' onclick='showpdf2(this)' value='预览'/>" ;
                    html += "<input type='button' class='btn btn-danger btn-outline btn-xs' style='margin-left: 5px;' onclick='del2(this)' value='删除'/>" ;
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

    //年度目标-新增
    $("#table2_wrapper .mybtn").click(function () {
        uploader2 = null;
        $("#fname2 input").val("");
        $("#file_list2").empty();
        $("#fname2").modal('show');
        upload2();
    })

    //年度目标-提交
    $("#fname2 .btn-primary").click(function () {
        if($("#file_list2").html()){
            if(!$("#gid").val()){
                uploader2.upload();
            }else {
                if(bname1 === bname2){
                    $.ajax({
                        url: "./generalEdit",
                        type: "post",
                        data: {gid:$("#gid").val(),remark:$("#remark2").val(),year:$("#year2").val()},
                        datatype: "json",
                        success: function (res) {
                            if(res.code === 1){
                                layer.msg(res.msg);
                                table2.ajax.url("__SCRIPT__/safety_goal_general.php").load();
                                $("#fname2").modal('hide');
                            }else {
                                layer.msg(res.msg);
                            }
                        }
                    })
                }else {
                    uploader2.upload();
                }
            }
        }else {
            alert("请选择上传文件");
        }
    })


    //责任书
    var tablename = "department";                 //表格区分
    var cname1,cname2;           //用于区分 编辑时是否修改了文件
    //责任书-初始化upload
    function upload3() {
        if(!uploader3){
            uploader3 = WebUploader.create({
                auto: false,// 选完文件后，是否自动上传。
                swf: '/static/admin/webupload/Uploader.swf',// swf文件路径
                server: "<?php echo url('Upload/uploadResponsibility'); ?>",// 文件接收服务端。
                chunked: false,
                fileSizeLimit: 1000 *1024 *1024,
                fileNumLimit: 1,
                formData: {"remark":"","rid":"","dept":"","rname":""},
                duplicate :true,// 重复上传图片，true为可重复false为不可重复
                pick: {
                    multiple: false,
                    id: "#file_upload3",
                    innerHTML: "上传文件"
                }
            });

            uploader3.on( 'fileQueued', function( file ) {
                cname2 = file.name;
                $("#file_per3").append('<div id="' + file.id + '" class="item">' +
                    '</div>');
                $("#file_list3").append('<div style="display: inline-block;vertical-align: middle;" class="' + file.id + '" class="item">' +
                    '<span class="info">' + file.name + '</span>&nbsp' +
                    '<span class="webuploadDelbtn" style="color: #0d8ddb;text-decoration: underline;cursor: pointer;">删除</span>' +
                    '</div>' );
            });
            $("#file_list3").on("click", ".webuploadDelbtn", function () {
                var $ele = $(this);
                var id = $ele.parent().attr("class");
                var file = uploader3.getFile(id);
                uploader3.removeFile(file,true);
            });
            uploader3.on('fileDequeued', function (file) {
                $(file.id).remove();
                $('.'+file.id).remove();
                console.log("remove");
            });
            uploader3.on("uploadStart",function () {
                uploader3.options.formData.rid = $("#rid").val();
                if($("#department").val()){
                    uploader3.options.formData.dept = $("#department").val();
                }else {
                    uploader3.options.formData.dept = "";
                }
                uploader3.options.formData.rname = $("#personal").val();
                uploader3.options.formData.remark = $("#remark3").val();
            });
            uploader3.on('beforeFileQueued', function (file) {
                if($("#file_list3").html()){
                    alert("只能上传一个文件,请先删除文件");
                    return false;
                }else {
                    return true;
                }
            });
            // 文件上传过程中创建进度条实时显示。
            uploader3.on('uploadProgress', function (file, percentage) {
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
            uploader3.on( 'uploadSuccess', function( file,data, response ) {
                console.log(file)
                console.log(data)
                if(data.code === 1){
                    layer.msg(data.msg,{icon:1,time:1500,shade: 0.1});
                    $("#file_upload3").empty();
                    $("#file_per3").empty();
                    $("#file_list3").empty();
                    $("#fname3").modal('hide');
                    if(tablename == "department"){
                        table3.ajax.url("__SCRIPT__/safety_responsibility_agreemnet.php?tablename=department").load();
                    }else {
                        table3.ajax.url("__SCRIPT__/safety_responsibility_agreemnet.php?tablename=personal").load();
                    }
                }else {
                    layer.msg("抱歉，您没有此权限");
                }
            });

            // 文件上传失败，显示上传出错。
            uploader3.on( 'uploadError', function( file ) {
                layer.msg("上传失败",{icon:2,time:1500,shade: 0.1});
                $("#file_per3").empty();
            });
        }
    }

    //责任书-预览
    function showpdf3(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();
        showPdf(id,"./responsibilityPreview");
    }

    //责任书-删除
    function del3(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();
        del(id,"./responsibilityDel");
    }

    //责任书-下载
    function download3(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();
        download(id,"./responsibilityDownload");
    }

    //责任书-编辑-删除文件
    function fdelatt3(that) {
        var id = $(that).parent("div").attr("id");
        $("#"+id).remove();
    }

    //责任书-编辑
    function edit3(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();
        $.ajax({
            url: "./postResponsibility",
            type: "post",
            data: {id:id},
            dataType: "json",
            success: function (res) {
                console.log(res);
                if(res.code === 1){
                    $("#rid").val(res.data.id);
                    console.log(res.data.dept);
                    $("#department").val(res.data.dept);
                    $("#personal").val(res.data.username);
                    cname1 = res.data.name;
                    cname2 = res.data.name;
                    uploader3 = null;
                    upload3();
                    if(tablename == "department"){
                        $("#person").css("display","none");
                        $("#dept").css("display","block");
                    }else {
                        $("#person").css("display","block");
                        $("#dept").css("display","none");
                    }
                    if(res.data.path){
                        $("#file_list3").empty().append('<div style="display: inline-block;vertical-align: middle;" id="' + res.data.id + '" class="item">' +
                            '<span class="info">' + res.data.name + '</span>&nbsp' +
                            '<span onclick="fdelatt3(this)" style="color: #0d8ddb;text-decoration: underline;cursor: pointer;">删除</span>' +
                            '</div>' );
                    }
                    $("#fname3").modal('show');
                }
            }
        })
    }

    //责任书-表格
    var table3 = $('#table3').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "__SCRIPT__/safety_responsibility_agreemnet.php?tablename=department",
            "async": false
        },
        "dom": '<"mybtn btn btn-outline btn-primary"><"myl"l>frtip',
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [5],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='download3(this)' value='下载'/>";
                    html += "<input type='button' class='btn btn-primary btn-outline btn-xs' style='margin-left: 5px;' onclick='edit3(this)' value='编辑'/>" ;
                    html += "<input type='button' class='btn btn-success btn-outline btn-xs' style='margin-left: 5px;' onclick='showpdf3(this)' value='预览'/>" ;
                    html += "<input type='button' class='btn btn-danger btn-outline btn-xs' style='margin-left: 5px;' onclick='del3(this)' value='删除'/>" ;
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

    //责任书-新增
    $("#table3_wrapper .mybtn").click(function () {
        uploader3 = null;
        $("#fname3 input").val("");
        $("#fname3 select").val("");
        $("#file_list3").empty();
        if(tablename == "department"){
            $("#fname3 select").val("安全组");
            $("#person").css("display","none");
            $("#dept").css("display","block");
        }else {
            $("#person").css("display","block");
            $("#dept").css("display","none");
        }
        $("#fname3").modal('show');
        upload3();
    })

    //责任书-提交
    $("#fname3 .btn-primary").click(function () {
        if($("#file_list3").html()){
            if(!$("#rid").val()){
                uploader3.upload();
            }else {
                if(cname1 === cname2){
                    $.ajax({
                        url: "./responsibilityEdit",
                        type: "post",
                        data: {rid:$("#rid").val(),remark:$("#remark3").val(),rname:$("#personal").val(),dept:$("#department").val()},
                        datatype: "json",
                        success: function (res) {
                            if(res.code === 1){
                                layer.msg(res.msg);
                                if(tablename == "department"){
                                    table3.ajax.url("__SCRIPT__/safety_responsibility_agreemnet.php?tablename=department").load();
                                }else {
                                    table3.ajax.url("__SCRIPT__/safety_responsibility_agreemnet.php?tablename=personal").load();
                                }
                                $("#fname3").modal('hide');
                            }else {
                                layer.msg(res.msg);
                            }
                        }
                    })
                }else {
                    uploader3.upload();
                }
            }
        }else {
            alert("请选择上传文件");
        }
    })

    //责任书-tab切换
    $("#tab_li>div").click(function () {
        var index = $(this).index();
        if(index === 0){
            tablename = "department";
            $("#table3 thead tr th:nth-child(3)").text("所属部门");
            table3.ajax.url("__SCRIPT__/safety_responsibility_agreemnet.php?tablename=department").load();
        }else {
            tablename = "personal";
            $("#table3 thead tr th:nth-child(3)").text("人员姓名");
            table3.ajax.url("__SCRIPT__/safety_responsibility_agreemnet.php?tablename=personal").load();
        }
        $("#tab_li>div").css("background-color","#fff").eq(index).css("background-color","#bae2f3");
    })
</script>
</body>
</html>
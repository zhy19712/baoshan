<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:100:"C:\phpStudy\PHPTutorial\WWW\shuzi\public/../application/safety\view\institutionalizedrule\index.html";i:1517500912;s:86:"C:\phpStudy\PHPTutorial\WWW\shuzi\public/../application/safety\view\public\header.html";i:1517325921;s:86:"C:\phpStudy\PHPTutorial\WWW\shuzi\public/../application/safety\view\public\footer.html";i:1517325921;}*/ ?>
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
    .mybtn{
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
</style>
<body>
<div id="mycontent" style="width: 20%;height: 98%;display: inline-block;margin: 0 10px;background-color:#fff;overflow-x: scroll;padding-top: 20px;padding-right:10px;border-right: 1px solid #ccc;">
    <div style="text-align: center;background-color:#1ab394;line-height: 30px;color: #fff;">法律标准分类</div>
    <div id="file_per"></div>
    <div id="file_list"></div>
    <div id="tree_container" class="ztree"></div>
    <p style="display: none;"></p>
</div>
<div class="wrapper wrapper-content animated fadeInRight" style="display: inline-block;width: 78%;vertical-align: top;padding: 0;margin-top: 20px;">
    <div class="ibox float-e-margins">
        <div class="ibox-content">
            <div class="row">
                <div id="path">当前路径:制度化管理>规章制度>国家电网公司</div>
                <div id="mytable1_wrapper">
                    <table id="admin_table" width="100%" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>标准号</th>
                            <th>名称</th>
                            <th>施行日期</th>
                            <th>适用性评价</th>
                            <th>识别人</th>
                            <th>上传时间</th>
                            <th>备注</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                    </table>
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


    var admin_table = $('#admin_table').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "__SCRIPT__/safety_institutionalizedrule.php"
        },
        "dom": '<"mybtn btn btn-outline btn-primary"><"myl"l>frtip',
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [8],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='edit(this)' value='下载'/>";
                    html += "<input type='button' class='btn btn-success btn-outline btn-xs' style='margin-left: 5px;' onclick='edit(this)' value='预览'/>" ;
                    html += "<input type='button' class='btn btn-primary btn-outline btn-xs' style='margin-left: 5px;' onclick='edit(this)' value='编辑'/>" ;
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
    //组织结构
    var zTreeObj;
    var nodes = [
        {name: "国家电网公司"},
        {name: "国网新源控股有限公司"},
        {name: "安徽金寨抽水蓄能有限公司"},
        {name: "北京咨询金寨监理部"},
    ];
    var setting = {
    };
    zTreeObj = $.fn.zTree.init($("#tree_container"), setting,nodes);



</script>
</body>
</html>
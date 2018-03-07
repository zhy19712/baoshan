<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:102:"C:\phpStudy\PHPTutorial\WWW\shuzi\public/../application/safety\view\institutionalizedrecord\index.html";i:1517500912;s:86:"C:\phpStudy\PHPTutorial\WWW\shuzi\public/../application/safety\view\public\header.html";i:1517325921;s:86:"C:\phpStudy\PHPTutorial\WWW\shuzi\public/../application/safety\view\public\footer.html";i:1517325921;}*/ ?>
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
<link rel="stylesheet" href="/static/admin/css/jquery.dataTables.min.css">
<style>
    .mybtn{
        float: left;
        margin-right: 30px;
    }

</style>
<body class="animated fadeInRight" style="background-color:#fff; text-align: center">
<p style="line-height: 30px;font-weight: 700;">修订记录</p>
<div id="mytable1_wrapper" style="width: 96%;margin: 0 auto;">
    <table id="admin_table" width="100%" class="table table-striped table-bordered">
        <thead>
        <tr>
            <th><input type="checkbox">全选</th>
            <th>ID</th>
            <th>文件名称</th>
            <th>原有版本号</th>
            <th>替换版本号</th>
            <th>替换时间</th>
            <th>上传人</th>
            <th>类别</th>
            <th>操作</th>
        </tr>
        </thead>
    </table>
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
<script src="__JS__/jquery.dataTables.min.js"></script>
<script>
    var admin_table = $('#admin_table').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "__SCRIPT__/safety_institutionalizedrecord.php"
        },
        "dom": '<"mybtn btn btn-outline btn-primary"><"myl"l><"mysel">frtip',
        "columnDefs": [
            {
                "searchable": true,
                "orderable": true,
                "targets": [0],
                "render" :  function() {
                    var str = "<input type='checkbox'>";
                    return str;
                }
            },
            {
                "searchable": false,
                "orderable": false,
                "targets": [8],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='edit(this)' value='下载'/>";
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

</script>
</body>
</html>
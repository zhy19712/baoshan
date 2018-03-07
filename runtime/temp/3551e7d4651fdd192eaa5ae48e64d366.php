<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:83:"C:\phpStudy\PHPTutorial\WWW\shuzi\public/../application/safety\view\risk\index.html";i:1517500913;s:86:"C:\phpStudy\PHPTutorial\WWW\shuzi\public/../application/safety\view\public\header.html";i:1517325921;s:86:"C:\phpStudy\PHPTutorial\WWW\shuzi\public/../application/safety\view\public\footer.html";i:1517325921;}*/ ?>
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
        <li class="active"><a href="#home">京咨</a></li>
        <li><a href="#profile">京咨安</a></li>
        <li><a href="#messages">京咨工</a></li>
        <li><a href="#bj">北京院</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="home">
            <div id="table1_wrapper">
                <table id="table1" width="100%" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>来文名称</th>
                        <th>文件编号</th>
                        <th>来文日期</th>
                        <th>合同编号</th>
                        <th>来文份数</th>
                        <th>办理期限</th>
                        <th>创建人</th>
                        <th>创建日期</th>
                        <th>流程状态</th>
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
                        <th>来文名称</th>
                        <th>文件编号</th>
                        <th>来文日期</th>
                        <th>合同编号</th>
                        <th>来文份数</th>
                        <th>办理期限</th>
                        <th>创建人</th>
                        <th>创建日期</th>
                        <th>流程状态</th>
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
                        <th>来文名称</th>
                        <th>文件编号</th>
                        <th>来文日期</th>
                        <th>合同编号</th>
                        <th>来文份数</th>
                        <th>办理期限</th>
                        <th>创建人</th>
                        <th>创建日期</th>
                        <th>流程状态</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="tab-pane" id="bj">
            <div id="table4_wrapper">
                <table id="table4" width="100%" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>来文名称</th>
                        <th>文件编号</th>
                        <th>来文日期</th>
                        <th>合同编号</th>
                        <th>来文份数</th>
                        <th>办理期限</th>
                        <th>创建人</th>
                        <th>创建日期</th>
                        <th>流程状态</th>
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
    $('#myTab a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
        console.log($(this).text());
    });
//    var table1 = $('#table1').DataTable( {
//        "processing": true,
//        "serverSide": true,
//        "ajax": {
//            "url": "__SCRIPT__/safety_goal_anual.php"
//        },
//        "dom": '<"mybtn btn btn-outline btn-primary"><"myl"l>frtip',
//        "columnDefs": [
//            {
//                "searchable": false,
//                "orderable": false,
//                "targets": [10],
//                "render" :  function(data,type,row) {
//                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='download1(this)' value='下载'/>";
//                    html += "<input type='button' class='btn btn-primary btn-outline btn-xs' style='margin-left: 5px;' onclick='edit1(this)' value='编辑'/>" ;
//                    html += "<input type='button' class='btn btn-success btn-outline btn-xs' style='margin-left: 5px;' onclick='showpdf1(this)' value='预览'/>" ;
//                    html += "<input type='button' class='btn btn-danger btn-outline btn-xs' style='margin-left: 5px;' onclick='del1(this)' value='删除'/>" ;
//                    return html;
//                }
//            }
//        ],
//        "language": {
//            "lengthMenu": "每页_MENU_ 条记录",
//            "zeroRecords": "没有找到记录",
//            "info": "第 _PAGE_ 页 ( 总共 _PAGES_ 页 )",
//            "infoEmpty": "无记录",
//            "search": "搜索：",
//            "infoFiltered": "(从 _MAX_ 条记录过滤)",
//            "paginate": {
//                "previous": "上一页",
//                "next": "下一页"
//            }
//        }
//    } );
    $("div.mybtn").html('<div>新增</div>');

//    var table2 = $('#table2').DataTable( {
//        "processing": true,
//        "serverSide": true,
//        "ajax": {
//            "url": "__SCRIPT__/safety_goal_general.php",
//            "async": false
//        },
//        "dom": '<"mybtn btn btn-outline btn-primary"><"myl"l>frtip',
//        "columnDefs": [
//            {
//                "searchable": false,
//                "orderable": false,
//                "targets": [10],
//                "render" :  function(data,type,row) {
//                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='download2(this)' value='下载'/>";
//                    html += "<input type='button' class='btn btn-primary btn-outline btn-xs' style='margin-left: 5px;' onclick='edit2(this)' value='编辑'/>" ;
//                    html += "<input type='button' class='btn btn-success btn-outline btn-xs' style='margin-left: 5px;' onclick='showpdf2(this)' value='预览'/>" ;
//                    html += "<input type='button' class='btn btn-danger btn-outline btn-xs' style='margin-left: 5px;' onclick='del2(this)' value='删除'/>" ;
//                    return html;
//                }
//            }
//        ],
//        "language": {
//            "lengthMenu": "每页_MENU_ 条记录",
//            "zeroRecords": "没有找到记录",
//            "info": "第 _PAGE_ 页 ( 总共 _PAGES_ 页 )",
//            "infoEmpty": "无记录",
//            "search": "搜索：",
//            "infoFiltered": "(从 _MAX_ 条记录过滤)",
//            "paginate": {
//                "previous": "上一页",
//                "next": "下一页"
//            }
//        }
//    } );
    $("div.mybtn").html('<div>新增</div>');

//    var table3 = $('#table3').DataTable( {
//        "processing": true,
//        "serverSide": true,
//        "ajax": {
//            "url": "__SCRIPT__/safety_responsibility_agreemnet.php?tablename=department",
//            "async": false
//        },
//        "dom": '<"mybtn btn btn-outline btn-primary"><"myl"l>frtip',
//        "columnDefs": [
//            {
//                "searchable": false,
//                "orderable": false,
//                "targets": [10],
//                "render" :  function(data,type,row) {
//                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='download3(this)' value='下载'/>";
//                    html += "<input type='button' class='btn btn-primary btn-outline btn-xs' style='margin-left: 5px;' onclick='edit3(this)' value='编辑'/>" ;
//                    html += "<input type='button' class='btn btn-success btn-outline btn-xs' style='margin-left: 5px;' onclick='showpdf3(this)' value='预览'/>" ;
//                    html += "<input type='button' class='btn btn-danger btn-outline btn-xs' style='margin-left: 5px;' onclick='del3(this)' value='删除'/>" ;
//                    return html;
//                }
//            }
//        ],
//        "language": {
//            "lengthMenu": "每页_MENU_ 条记录",
//            "zeroRecords": "没有找到记录",
//            "info": "第 _PAGE_ 页 ( 总共 _PAGES_ 页 )",
//            "infoEmpty": "无记录",
//            "search": "搜索：",
//            "infoFiltered": "(从 _MAX_ 条记录过滤)",
//            "paginate": {
//                "previous": "上一页",
//                "next": "下一页"
//            }
//        }
//    } );
    $("div.mybtn").html('<div>新增</div>');
</script>
</body>
</html>
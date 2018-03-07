<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:87:"C:\phpStudy\PHPTutorial\WWW\shuzi\public/../application/quality\view\warning\index.html";i:1517325921;s:87:"C:\phpStudy\PHPTutorial\WWW\shuzi\public/../application/quality\view\public\header.html";i:1517675489;s:87:"C:\phpStudy\PHPTutorial\WWW\shuzi\public/../application/quality\view\public\footer.html";i:1516333031;}*/ ?>
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
<link rel="stylesheet" href="/static/admin/css/jquery.dataTables.min.css">
<style>
    #info{
        width: 100%;
        text-align: center;
        border-top: 1px solid #000;
        border-left: 1px solid #000;
        line-height: 30px;
    }
    #info td{
        border-bottom: 1px solid #000;
        border-right: 1px solid #000;
        width: 16%;
    }
    #info2{
        width: 100%;
        line-height: 30px;
        text-align: center;
        border-left: 1px solid #000;
    }
    #info2 td{
        border-bottom: 1px solid #000;
        border-right: 1px solid #000;
    }
    #info2 td{
        width: 16%;
    }
    .style{
        background-color: #bae2f3;
        font-weight: 700;
    }
    .myp{
        background-color: #bae2f3;
        padding: 8px 0;
        position: absolute;
        width: 100%;
    }
</style>
<body class="gray-bg animated fadeInRight" style="background-color:#fff; text-align: center">
<div class="wrapper wrapper-content animated fadeInRight" style="display: inline-block;width: 96%;vertical-align: top;padding: 0;">
    <div class="ibox float-e-margins">
        <div class="ibox-content">
            <div class="row">
                <div id="mytable1_wrapper">
                    <div style="height: 50px;">
                        <p class='myp' style='line-height:30px;font-weight: 700;text-align: center;'>质量验收预警</p>
                    </div>
                    <table id="warning_table" width="100%" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>类型</th>
                            <th>单元工程名称</th>
                            <th>桩号</th>
                            <th>高程</th>
                            <th>超期（天）</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="myModal" data-keyboard="false" data-backdrop="static" class="modal animated fadeInRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width: 60%;margin: 0 auto;margin-top: 40px;">
    <div class="row">
        <div class="col-sm-12" style="background-color:#fff;">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5></h5>
                </div>
                <div class="ibox-content">
                    <table id="info">
                        <tbody>
                        <tr>
                            <td class="style">单元工程名称</td>
                            <td colspan="2" id="name"></td>
                            <td class="style">单元工程编号</td>
                            <td colspan="2" id="sn"></td>
                        </tr>
                        <tr>
                            <td class="style">桩号</td>
                            <td id="zhuanghaoqi"></td>
                            <td id="zhuanghaozhi"></td>
                            <td class="style">高程</td>
                            <td id="gaochengqi"></td>
                            <td id="gaochengzhi"></td>
                        </tr>
                        </tbody>

                    </table>
                    <table id="info2">
                        <tbody>
                        <tr>
                            <td class="style">施工完成日期</td>
                            <td class="style">当前日期</td>
                            <td class="style">类别</td>
                            <td class="style">限定日期</td>
                            <td class="style">超期(天)</td>
                            <td class="style">验收日期</td>
                        </tr>
                        <tr>
                            <td id="wangong_date"></td>
                            <td id="currentDate"></td>
                            <td id="cate"></td>
                            <td id="limit"></td>
                            <td id="exceed"></td>
                            <td id="pingding_date"></td>
                        </tr>
                        </tbody>
                    </table>
                    <a class="btn btn-danger" data-dismiss="modal" style="margin-top: 20px;"><i class="fa fa-close"></i> 返回</a>
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
<script src="__JS__/jquery.dataTables.min.js"></script>

<script type="text/javascript">
    var warning_table = $('#warning_table').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "__SCRIPT__/warning_table.php",
            "async": false
        },
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [7],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-primary btn-outline btn-xs' style='margin-left: 5px;' onclick='detail(this)' value='查看'/>";
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

     function detail(that){
         var id = $(that).parent("td").parent("tr").children("td:first-child").text();
         $.ajax({
             url: "./index",
             type: "post",
             data: {id:id},
             dataType: "json",
             success: function (res) {
                 console.log(res);
                 if(res.code === 1){
                     $("#name").text(res.data.name);
                     $("#sn").text(res.data.sn + res.data.post_sn);
                     $("#zhuanghaoqi").text("起:" + res.data.zhuanghaoqi);
                     $("#zhuanghaozhi").text("止:" + res.data.zhuanghaozhi);
                     $("#gaochengqi").text("起:" + res.data.gaochengqi);
                     $("#gaochengzhi").text("止:" + res.data.gaochengzhi);
                     $("#wangong_date").text(res.data.wangong_date);
                     $("#currentDate").text(res.data.currentDate);
                     $("#cate").text(res.data.cate);
                     $("#limit").text(res.data.limit);
                     $("#exceed").text(res.data.exceed);
                     $("#pingding_date").text(res.data.pingding_date);
                     $("#myModal").modal();
                 }else {
                     layer.msg(res.msg);
                 }

             }
         })
     }

     $("#warning_table tbody tr td:nth-child(7)").each(function (i,n) {
        if($(n).text() === "预警中" ){
            $(n).css("color","red");
        }
    })
</script>
</body>
</html>
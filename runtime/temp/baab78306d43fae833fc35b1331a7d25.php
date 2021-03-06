<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:82:"C:\phpStudy\PHPTutorial\WWW\shuzi\public/../application/quality\view\qc\index.html";i:1520329261;s:87:"C:\phpStudy\PHPTutorial\WWW\shuzi\public/../application/quality\view\public\header.html";i:1517675489;s:87:"C:\phpStudy\PHPTutorial\WWW\shuzi\public/../application/quality\view\public\footer.html";i:1516333031;}*/ ?>
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
<style>
    #upload,#upload2,#upload3,#upload4,#upload5,#upload6,#upload7,#upload8,#upload9,#upload10,#upload11,#upload12,#upload13,#upload14,#upload15{
        position: absolute;
        right: 40px;
        margin-top: 8px;
        width: 88px;
        height: 30px;
        text-align: center;
        color: #fff;
        line-height: 30px;
        cursor: pointer;
        background-color: #00a2d4;
    }
    #mylist{
        float: right;
        font-size: 14px;
        font-weight: 700;
    }
    #upload_table_wrapper{
        padding: 0;
        padding-bottom: 3px;
    }
    #upload_table{
        margin-top: 46px;
    }
    .mytable{
        width: 100%;
        text-align: center;
        line-height: 34px;
        border-top: 1px solid #000;
        border-left: 1px solid #000;
    }
    .mytable td{
        border-right: 1px solid #000;
        border-bottom: 1px solid #000;
        padding: 0 10px;
    }
    .mytable td input{
        width: 100%;
        line-height: 20px;
        margin-bottom: 5px;
    }
    #content{
        margin: 0 auto;
        position: relative;
    }
    .mybtn{
        float: left;
        margin-right: 20px;
    }
    #qc_table td,#qc_table th{
        text-align: center;
    }
    #container{
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background-color: #fff;
    }
    #home>div{
        margin-top: 20px;
    }
    .myheader{
        height: 30px;
        line-height: 30px;
        text-align: center;
        margin-bottom: 10px;
    }
    .myheader p{
        font-weight: 700;
    }
    #save1,#save2,#mysave1{
        position: absolute;
        right: 20px;
        margin-top: 8px;
        width: 88px;
        height: 30px;
        text-align: center;
        color: #fff;
        line-height: 30px;
        margin-right: 20px;
        cursor: pointer;
        background: url("__IMG__/bg_1.png") no-repeat center center;
    }
    .exp{
        display: inline-block;
        vertical-align: middle;
        cursor: pointer;
    }
    .exp:first-child{
        color: #ff9933;
    }
    .exp>span{
        display: inline-block;
        vertical-align: middle;
        font-size: 18px;
    }
    #flow_content>div{
        display: none;
    }
    #flow_content>div:first-child{
        display: block;
    }
    .myp{
        background-color: #bae2f3;
        padding: 8px 0;
        position: absolute;
        width: 100%;
    }
    #upload_wrapper #table_wrapper{
        height: 150px;
        overflow: scroll;
        width: 100%;
    }
    #container{
        display: none;
    }
    #img_show img,#pic_container img,#reason_container img{
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
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
    .ibox-content label{
        text-align: right;
    }
    .ibox-content>.col-lg-12,.ibox-content>.col-lg-6{
        margin-top: 10px;
    }
</style>
<body class="animated fadeInRight" style="background-color:#fff; text-align: center">
<div class="wrapper wrapper-content animated fadeInRight" style="display: inline-block;width: 96%;vertical-align: top;padding: 0;">
    <div class="ibox float-e-margins">
        <div class="ibox-content">
            <div class="row">
                <div id="content">
                    <div id="qctable_wrapper">
                        <div style="height: 50px;">
                            <p class='myp' style='line-height:30px;font-weight: 700;text-align: center;'>qc管理</p>
                        </div>
                        <table id="qc_table" width="100%" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>内容(课题名称)</th>
                                <th>实施日期</th>
                                <th>负责人</th>
                                <th>状态</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                    <div id="container">
                        <button class="btn btn-primary" id="back">返回</button>
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#home">QC小组</a></li>
                            <li><a href="#profile">管理内容</a></li>
                            <li><a href="#messages">成果发布</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="home">
                                <div id="group1">
                                    <div class="myheader">
                                        <p style="position: absolute;width: 100%;">QC小组概况表</p>
                                        <span id="mysave1">保存</span>
                                    </div>
                                    <iframe name="myFrame1" style="display:none;"></iframe>
                                    <form class="form-horizontal" name="myform1" id="myform1" target="myFrame1">
                                        <input type="text" name="id" id="myform1id" style="display: none;">
                                        <table class="mytable">
                                            <tbody>
                                            <tr>
                                                <td>小组名称</td>
                                                <td colspan="3"><input type="text" id="group_name" name="group_name"></td>
                                            </tr>
                                            <tr>
                                                <td>成立时间</td>
                                                <td><input type="text" id="found_date" name="found_date"></td>
                                                <td>注册时间</td>
                                                <td><input type="text" id="register_date" name="register_date"></td>
                                            </tr>
                                            <tr>
                                                <td>课题名称</td>
                                                <td colspan="3"><input type="text" id="topic_name1" name="topic_name"></td>
                                            </tr>
                                            <tr>
                                                <td>课题类型</td>
                                                <td><input type="text" id="topic_type" name="topic_type"></td>
                                                <td>注册登记号</td>
                                                <td><input type="text" id="register_num" name="register_num"></td>
                                            </tr>
                                            <tr>
                                                <td>小组组长</td>
                                                <td><input type="text" id="group_leader" name="group_leader"></td>
                                                <td>活动时间</td>
                                                <td><input type="text" id="activity_start_date" name="activity_start_date" style="width: 46%;margin-right: 4%;"><input type="text" id="activity_end_date" name="activity_end_date" style="width: 46%;margin-left: 4%;"></td>
                                            </tr>
                                            <tr>
                                                <td>活动次数</td>
                                                <td><input type="text" id="activity_times_part1" name="activity_times_part1"></td>
                                                <td colspan="2"><input type="text" id="activity_times_part2" name="activity_times_part2"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                                <div id="group2">
                                    <div class="myheader">
                                        <p>QC小组成员分工情况表</p>
                                        <div id="grouppeople_table_wrapper">
                                            <table id="grouppeople_table" width="100%" class="table table-striped table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>序号</th>
                                                    <th>姓名</th>
                                                    <th>性别</th>
                                                    <th>学历</th>
                                                    <th>年龄</th>
                                                    <th>技术职称</th>
                                                    <th>QC小组分工</th>
                                                    <th>操作</th>
                                                </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="profile">
                                <div id="flow">
                                    <div class="exp">
                                        <span>选题</span>
                                        <img src="__IMG__/arr.png" alt="">
                                    </div>
                                    <div class="exp">
                                        <span>现状调查</span>
                                        <img src="__IMG__/arr.png" alt="">
                                    </div>
                                    <div class="exp">
                                        <span>目标确定</span>
                                        <img src="__IMG__/arr.png" alt="">
                                    </div>
                                    <div class="exp">
                                        <span>原因分析</span>
                                        <img src="__IMG__/arr.png" alt="">
                                    </div>
                                    <div class="exp">
                                        <span>要因确认</span>
                                        <img src="__IMG__/arr.png" alt="">
                                    </div>
                                    <div class="exp">
                                        <span>制定对策</span>
                                        <img src="__IMG__/arr.png" alt="">
                                    </div>
                                    <div class="exp">
                                        <span>对策实施</span>
                                        <img src="__IMG__/arr.png" alt="">
                                    </div>
                                    <div class="exp">
                                        <span>效果检查</span>
                                        <img src="__IMG__/arr.png" alt="">
                                    </div>
                                    <div class="exp">
                                        <span>巩固措施与标准化</span>
                                        <img src="__IMG__/arr.png" alt="">
                                    </div>
                                    <div class="exp">
                                        <span>总结</span>
                                    </div>
                                </div>
                                <div id="flow_content">
                                    <div id="step1">
                                        <div id="sel_content" class="myheader" style="height: 160px;">
                                            <p class="myp">选题内容</p><span id="save1">保存</span>
                                            <textarea name="content" id="content1" style="width: 100%;min-height: 80px;margin-top: 50px;"></textarea>
                                        </div>
                                        <div id="upload_wrapper" style="margin-top: 20px;">
                                            <div id="header_container">
                                                <div id="list"></div>
                                                <p class='myp' style='line-height:30px;font-weight: 700;text-align: center;'>选题理由</p>
                                                <div id="upload">上传文件</div>
                                            </div>
                                            <div id="table_wrapper">
                                                <table id="upload_table" width="100%" class="table table-striped table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>文件名称</th>
                                                        <th>上传人</th>
                                                        <th>单位/部门</th>
                                                        <th>操作</th>
                                                    </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                        <div id="uploadimg" style="margin-top: 20px;">
                                            <div id="img_header" style="height: 50px;">
                                                <div id="list2"></div>
                                                <p class='myp' style='line-height:30px;font-weight: 700;text-align: center;'>QC小组活动计划表</p>
                                                <div id="upload2">上传文件</div>
                                            </div>
                                            <div id="img_container">
                                                <img src="" alt="" style="max-height: 300px;display: block;margin: 0 auto;">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step2">
                                        <div id="inquire">
                                            <div id="inquire_header" style="height: 50px;">
                                                <div id="list3"></div>
                                                <p class='myp' style='line-height:30px;font-weight: 700;text-align: center;'>现状调查</p>
                                                <div id="upload3">上传文件</div>
                                            </div>
                                            <div id="inquire_table_wrapper">
                                                <table id="inquire_table" width="100%" class="table table-striped table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>文件名称</th>
                                                        <th>上传人</th>
                                                        <th>上传时间</th>
                                                        <th>操作</th>
                                                    </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step3">
                                        <div class="myheader" style="height: 160px;">
                                            <p class="myp">制定目标</p><span id="save2">保存</span>
                                            <textarea name="goal" id="goal" style="width: 100%;min-height: 80px;margin-top: 50px;"></textarea>
                                        </div>
                                        <div style="height: 50px;">
                                            <div id="list4"></div>
                                            <p class='myp' style='line-height:30px;font-weight: 700;text-align: center;'>目标设定对比柱状图</p>
                                            <div id="upload4">上传文件</div>
                                        </div>
                                        <div id="pic_container" style="height: 300px;">
                                            <img src="" alt="" style="max-height: 300px;display: block;">
                                        </div>
                                        <div id="target">
                                            <div style="height: 50px;">
                                                <div id="list5"></div>
                                                <p class='myp' style='line-height:30px;font-weight: 700;text-align: center;'>目标论证</p>
                                                <div id="upload5">上传文件</div>
                                            </div>
                                            <div id="target_table_wrapper">
                                                <table id="target_table" width="100%" class="table table-striped table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>文件名称</th>
                                                        <th>上传人</th>
                                                        <th>上传时间</th>
                                                        <th>操作</th>
                                                    </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step4">
                                        <div style="height: 50px;">
                                            <div id="list6"></div>
                                            <p class='myp' style='line-height:30px;font-weight: 700;text-align: center;'>原因分析图</p>
                                            <div id="upload6">上传文件</div>
                                        </div>
                                        <div id="reason_container" style="height: 600px;">
                                            <img src="" alt="" style="display: block;max-height: 600px;">
                                        </div>
                                    </div>
                                    <div id="step5">
                                        <div style="height: 50px;">
                                            <p class='myp' style='line-height:30px;font-weight: 700;text-align: center;'>要因确认表</p>
                                        </div>
                                        <div id="reason_wrapper">
                                            <table id="reason_table" width="100%" class="table table-striped table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>末端因素</th>
                                                    <th>确认标准</th>
                                                    <th>确认方法</th>
                                                    <th>确认时间</th>
                                                    <th>确认人</th>
                                                    <th>确认情况</th>
                                                    <th>论证结果</th>
                                                    <th>操作</th>
                                                </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                    <div id="step6">
                                        <div style="height: 50px;">
                                            <p class='myp' style='line-height:30px;font-weight: 700;text-align: center;'>对策表</p>
                                        </div>
                                        <div id="way_wrapper">
                                            <table id="way_table" width="100%" class="table table-striped table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>要因</th>
                                                    <th>对策</th>
                                                    <th>目标</th>
                                                    <th>措施</th>
                                                    <th>执行时间</th>
                                                    <th>负责人</th>
                                                    <th>操作</th>
                                                </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                    <div id="step7">
                                        <div id="implement">
                                            <div style="height: 50px;">
                                                <div id="list7"></div>
                                                <p class='myp' style='line-height:30px;font-weight: 700;text-align: center;'>实施</p>
                                                <div id="upload7">上传文件</div>
                                            </div>
                                            <div id="implement_table_wrapper1">
                                                <table id="implement_table1" width="100%" class="table table-striped table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>文件名称</th>
                                                        <th>上传人</th>
                                                        <th>上传时间</th>
                                                        <th>版本</th>
                                                        <th>操作</th>
                                                    </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                            <div style="height: 50px;">
                                                <div id="list8"></div>
                                                <p class='myp' style='line-height:30px;font-weight: 700;text-align: center;'>数码影像资料</p>
                                                <div id="upload8">上传文件</div>
                                            </div>
                                            <div id="implement_table_wrapper2">
                                                <table id="implement_table2" width="100%" class="table table-striped table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>文件名称</th>
                                                        <th>上传人</th>
                                                        <th>上传时间</th>
                                                        <th>版本</th>
                                                        <th>操作</th>
                                                    </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step8">
                                        <div id="check">
                                            <div style="height: 50px;">
                                                <div id="list9"></div>
                                                <p class='myp' style='line-height:30px;font-weight: 700;text-align: center;'>目标检查</p>
                                                <div id="upload9">上传文件</div>
                                            </div>
                                            <div id="tab_li">
                                                <div>文件资料</div>
                                                <div>数码影像</div>
                                            </div>
                                            <div id="tab_con">
                                                <div id="check_table_wrapper1">
                                                    <table id="check_table1" width="100%" class="table table-striped table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>文件名称</th>
                                                            <th>上传人</th>
                                                            <th>上传时间</th>
                                                            <th>版本</th>
                                                            <th>操作</th>
                                                        </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                                <div id="check_table_wrapper4">
                                                    <table id="check_table4" width="100%" class="table table-striped table-bordered">
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

                                            <div style="height: 50px;">
                                                <div id="list10"></div>
                                                <p class='myp' style='line-height:30px;font-weight: 700;text-align: center;'>经济效益</p>
                                                <div id="upload10">上传文件</div>
                                            </div>
                                            <div id="check_table_wrapper2">
                                                <table id="check_table2" width="100%" class="table table-striped table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>文件名称</th>
                                                        <th>上传人</th>
                                                        <th>上传时间</th>
                                                        <th>操作</th>
                                                    </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                            <div style="height: 50px;">
                                                <div id="list11"></div>
                                                <p class='myp' style='line-height:30px;font-weight: 700;text-align: center;'>社会效益</p>
                                                <div id="upload11">上传文件</div>
                                            </div>
                                            <div id="check_table_wrapper3">
                                                <table id="check_table3" width="100%" class="table table-striped table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>文件名称</th>
                                                        <th>上传人</th>
                                                        <th>上传时间</th>
                                                        <th>操作</th>
                                                    </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step9">
                                        <div id="standard">
                                            <div style="height: 50px;">
                                                <div id="list12"></div>
                                                <p class='myp' style='line-height:30px;font-weight: 700;text-align: center;'>巩固措施</p>
                                                <div id="upload12">上传文件</div>
                                            </div>
                                            <div id="standard_table_wrapper1">
                                                <table id="standard_table1" width="100%" class="table table-striped table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>文件名称</th>
                                                        <th>上传人</th>
                                                        <th>上传时间</th>
                                                        <th>操作</th>
                                                    </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                            <div style="height: 50px;">
                                                <div id="list13"></div>
                                                <p class='myp' style='line-height:30px;font-weight: 700;text-align: center;'>标准化</p>
                                                <div id="upload13">上传文件</div>
                                            </div>
                                            <div id="standard_table_wrapper2">
                                                <table id="standard_table2" width="100%" class="table table-striped table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>文件名称</th>
                                                        <th>上传人</th>
                                                        <th>上传时间</th>
                                                        <th>操作</th>
                                                    </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step10">
                                        <div id="summarize">
                                            <div style="height: 50px;">
                                                <div id="list14"></div>
                                                <p class='myp' style='line-height:30px;font-weight: 700;text-align: center;'>总结</p>
                                                <div id="upload14">上传文件</div>
                                            </div>
                                            <div id="summarize_table_wrapper1">
                                                <table id="summarize_table1" width="100%" class="table table-striped table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>文件名称</th>
                                                        <th>上传人</th>
                                                        <th>上传时间</th>
                                                        <th>操作</th>
                                                    </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="messages">
                                <div id="result">
                                    <div style="height: 50px;">
                                        <div id="list15"></div>
                                        <p class='myp' style='line-height:30px;font-weight: 700;text-align: center;'>成果发布情况</p>
                                        <div id="upload15">上传文件</div>
                                    </div>
                                    <div id="result_table_wrapper1">
                                        <table id="result_table1" width="100%" class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>文件名称</th>
                                                <th>上传人</th>
                                                <th>上传时间</th>
                                                <th>发布时间</th>
                                                <th>操作</th>
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="form_container" style="display: none;"></div>

<div id="myModal" data-keyboard="false" data-backdrop="static" class="modal animated fadeInRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width: 60%;margin: 0 auto;margin-top: 40px;">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5></h5>
                </div>
                <div class="ibox-content">
                    <!--新增用户信息开始-->
                    <form class="form-horizontal" name="Add" id="Add" method="post" action="<?php echo url('qcAdd'); ?>">
                        <input type="text" id="qcid" name="id" style="display: none;">
                        <div class="form-group">
                            <div class="col-lg-12 col-xs-12">
                                <label class="col-xs-3 control-label">课题名称：</label>
                                <div class="myblock col-xs-8 input-group">
                                    <input id="topic_name" type="text" class="form-control" name="topic_name" >
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-lg-12 col-xs-12">
                                <label class="col-xs-3 control-label">实施日期：</label>
                                <div class="myblock col-xs-8 input-group">
                                    <input id="implement_date" type="text" class="form-control" name="implement_date" >
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-lg-12 col-xs-12">
                                <label class="col-xs-3 control-label">负责人：</label>
                                <div class="myblock col-xs-8 input-group">
                                    <input id="owner" type="text" class="form-control" name="owner" >
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-xs-12 col-lg-12">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> 保存</button>&nbsp;&nbsp;&nbsp;
                                <a class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> 返回</a>
                            </div>
                        </div>
                    </form>
                    <!--新增用户信息结束-->
                </div>
            </div>
        </div>
    </div>
</div>

<div id="addPeople" data-keyboard="false" data-backdrop="static" class="modal animated fadeInRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width: 60%;margin: 0 auto;margin-top: 40px;">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5></h5>
                </div>
                <div class="ibox-content">
                    <!--新增用户信息开始-->
                    <form class="form-horizontal" name="memberAdd" id="memberAdd" method="post" action="<?php echo url('memberAdd'); ?>">
                        <input type="text" name="id" id="sid" style="display: none;">
                        <input type="text" name="group_id" id="pgroup_id" style="display: none;">
                        <div class="form-group">
                            <div class="col-lg-6 col-xs-12">
                                <label class="col-xs-6 col-sm-4 control-label col-sm-offset-2 col-xs-offset-0">姓名：</label>
                                <div class="myblock col-xs-6 input-group">
                                    <input id="pname" type="text" class="form-control" name="name" >
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <label class="col-xs-6 col-sm-4 control-label">性别：</label>
                                <div class="myblock col-xs-6 input-group">
                                    <select name="sex" id="psex" class="form-control" >
                                        <option value="男">男</option>
                                        <option value="女">女</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-lg-6 col-xs-12">
                                <label class="col-xs-6 col-sm-4 control-label col-sm-offset-2 col-xs-offset-0">年龄：</label>
                                <div class="myblock col-xs-6 input-group">
                                    <input id="page" type="text" class="form-control" name="age" >
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <label class="col-xs-6 col-sm-4 control-label">学历：</label>
                                <div class="myblock col-xs-6 input-group">
                                    <input id="peducation" type="text" class="form-control" name="education" >
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-lg-6 col-xs-12">
                                <label class="col-xs-6 col-sm-4 control-label col-sm-offset-2 col-xs-offset-0">技术职称：</label>
                                <div class="myblock col-xs-6 input-group">
                                    <input id="ptitle" type="text" class="form-control" name="title" >
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <label class="col-xs-6 col-sm-4 control-label">小组分工：</label>
                                <div class="myblock col-xs-6 input-group">
                                    <input id="pdivision" type="text" class="form-control" name="division" >
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-xs-12 col-lg-12">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> 保存</button>&nbsp;&nbsp;&nbsp;
                                <a class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> 返回</a>
                            </div>
                        </div>
                    </form>
                    <!--新增用户信息结束-->
                </div>
            </div>
        </div>
    </div>
</div>

<div id="reason" data-keyboard="false" data-backdrop="static" class="modal animated fadeInRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width: 60%;margin: 0 auto;margin-top: 40px;">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5></h5>
                </div>
                <div class="ibox-content">
                    <!--新增用户信息开始-->
                    <form class="form-horizontal" name="problem" id="problem" method="post" action="<?php echo url('problemAdd'); ?>">
                        <input type="text" name="id" id="rid" style="display: none;">
                        <input type="text" name="group_id" id="rgroup_id" style="display: none;">
                        <div class="form-group">
                            <div class="col-lg-6 col-xs-12">
                                <label class="col-xs-6 col-sm-4 control-label col-sm-offset-2 col-xs-offset-0">末端因素：</label>
                                <div class="myblock col-xs-6 input-group">
                                    <input type="text" class="form-control" name="problem" id="rproblem">
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <label class="col-xs-6 col-sm-4 control-label">确认标准：</label>
                                <div class="myblock col-xs-6 input-group">
                                    <input type="text" class="form-control" name="standard" id="rstandard">
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-lg-6 col-xs-12">
                                <label class="col-xs-6 col-sm-4 control-label col-sm-offset-2 col-xs-offset-0">确认方法：</label>
                                <div class="myblock col-xs-6 input-group">
                                    <input type="text" class="form-control" name="method" id="rmethod">
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <label class="col-xs-6 col-sm-4 control-label">确认时间：</label>
                                <div class="myblock col-xs-6 input-group">
                                    <input type="text" class="form-control" name="date" id="rdate">
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-lg-6 col-xs-12">
                                <label class="col-xs-6 col-sm-4 control-label col-sm-offset-2 col-xs-offset-0">确认人：</label>
                                <div class="myblock col-xs-6 input-group">
                                    <input type="text" class="form-control" name="owner" id="rowner">
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <label class="col-xs-6 col-sm-4 control-label">论证结果：</label>
                                <div class="myblock col-xs-6 input-group">
                                    <select name="result" class="form-control" id="rresult">
                                        <option value="要因">要因</option>
                                        <option value="非要因">非要因</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-lg-12 col-xs-12">
                                <label class="col-xs-3 control-label">确认情况：</label>
                                <div class="myblock col-xs-8 input-group">
                                    <textarea name="description" id="rdescription" style="width: 100%;min-height: 100px;"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> 保存</button>&nbsp;&nbsp;&nbsp;
                                <a class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> 返回</a>
                            </div>
                        </div>
                    </form>
                    <!--新增用户信息结束-->
                </div>
            </div>
        </div>
    </div>
</div>

<div id="way" data-keyboard="false" data-backdrop="static" class="modal animated fadeInRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width: 60%;margin: 0 auto;margin-top: 40px;">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5></h5>
                </div>
                <div class="ibox-content">
                    <!--新增用户信息开始-->
                    <form class="form-horizontal" name="reason1" id="reason1" method="post" action="<?php echo url('strategyAdd'); ?>">
                        <input type="text" name="id" id="wid" style="display: none;">
                        <input type="text" name="group_id" id="wgroup_id" style="display: none;">
                        <div class="form-group">
                            <div class="col-lg-6 col-xs-12">
                                <label class="col-xs-6 col-sm-4 control-label col-sm-offset-2 col-xs-offset-0">要因：</label>
                                <div class="myblock col-xs-6 input-group">
                                    <input type="text" class="form-control" name="problem" id="wproblem">
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <label class="col-xs-6 col-sm-4 control-label">对策：</label>
                                <div class="myblock col-xs-6 input-group">
                                    <input type="text" class="form-control" name="strategy" id="wstrategy">
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-lg-6 col-xs-12">
                                <label class="col-xs-6 col-sm-4 control-label col-sm-offset-2 col-xs-offset-0">目标：</label>
                                <div class="myblock col-xs-6 input-group">
                                    <input type="text" class="form-control" name="goal" id="wgoal">
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <label class="col-xs-6 col-sm-4 control-label">措施：</label>
                                <div class="myblock col-xs-6 input-group">
                                    <input type="text" class="form-control" name="method" id="wmethod">
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-lg-6 col-xs-12">
                                <label class="col-xs-6 col-sm-4 control-label col-sm-offset-2 col-xs-offset-0">执行时间：</label>
                                <div class="myblock col-xs-6 input-group">
                                    <input type="text" class="form-control" name="date" id="wdate">
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <label class="col-xs-6 col-sm-4 control-label">负责人：</label>
                                <div class="myblock col-xs-6 input-group">
                                    <input type="text" class="form-control" name="owner" id="wowner">
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> 保存</button>&nbsp;&nbsp;&nbsp;
                                <a class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> 返回</a>
                            </div>
                        </div>
                    </form>
                    <!--新增用户信息结束-->
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

<div id="fname" data-keyboard="false" data-backdrop="static" class="modal animated fadeInRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width: 60%;margin: 0 auto;margin-top: 40px;">
    <div class="row">
        <div class="col-sm-12" style="background-color:#fff;">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5></h5>
                </div>
                <div class="ibox-content">
                    <div class="col-lg-12 col-xs-12" id="revision">
                        <label class="col-xs-3 control-label">版本：</label>
                        <div class="myblock col-xs-8 input-group">
                            <input id="finame" type="text" class="form-control" name="name" >
                        </div>
                    </div>
                    <div class="col-lg-12 col-xs-12" id="publish_date">
                        <label class="col-xs-3 control-label">发布时间：</label>
                        <div class="myblock col-xs-8 input-group">
                            <input type="text" class="form-control" name="name" >
                        </div>
                    </div>
                    <div class="col-lg-12 col-xs-12">
                        <label class="col-xs-3 control-label" id="file">文件：</label>
                        <div class="myblock col-xs-8 input-group" style="text-align: left;">
                            <div id="file_per" style="display: inline-block;vertical-align: middle;"></div>
                            <div id="file_upload" style="display: inline-block;vertical-align: middle;"></div>
                            <div id="file_list" style="display: inline-block;vertical-align: middle;"></div>
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
<script>
    function showPdf(id,url) {
        $.ajax({
            url: url,
            type: "post",
            data: {id:id},
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
</script>
<script>
    var uploader;
    var path1,path2,path3,id1="",id2="",id3="";
    var tabtxt = "文件资料";
    var tablename = "wjzl";
    function myupload(uid,group_id,table_name,revision,publish_date) {
        $("#fname input").val("");
        $("#file_list").empty();
        if(revision == "bb"){
            $("#revision label").text("版本:");
            $("#revision").css("display","block");
        }else {
            $("#revision").css("display","none");
        }
        if(publish_date === "date"){
            $("#publish_date").css("display","block");
        }else {
            $("#publish_date").css("display","none");
        }

        $("#fname").modal('show');
        if(!uploader){
            uploader = WebUploader.create({

                auto: false,// 选完文件后，是否自动上传。
                swf: '/static/admin/webupload/Uploader.swf',// swf文件路径
                server: "<?php echo url('Upload/uploadQC'); ?>",// 文件接收服务端。
                chunked: false,
                fileSizeLimit: 1000 *1024 *1024,
                fileNumLimit: 1,
                formData: {"uid":"","table_name":"","group_id":"","revision":"","publish_date":""},
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
                if(revision == "bb"){
                    revision = $("#revision input").val();
                }
                if(publish_date === "date"){
                    publish_date = $("#publish_date input").val();
                }
                uploader.options.formData.id = uid;
                uploader.options.formData.table_name = table_name;
                uploader.options.formData.group_id = group_id;
                uploader.options.formData.revision = revision;
                uploader.options.formData.publish_date = publish_date;
            })
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
                    if(table_name === "xtly"){
                        upload_table.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=xtly").load();
                    }else if(table_name === "qcxz"){
                        id1 = data.id;
                        path1 = data.path.substr(1);
                        $("#img_container>img").attr("src",path1);
                    }else if(table_name === "xzdc"){
                        inquire_table.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=xzdc").load();
                    }else if(table_name === "mbsd"){
                        id2 = data.id;
                        path2 = data.path.substr(1);
                        $("#pic_container>img").attr("src",path2);
                    }else if(table_name === "mblz"){
                        target_table.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=mblz").load();
                    }else if(table_name === "yyfx"){
                        id3 = data.id;
                        path3 = data.path.substr(1);
                        $("#reason_container>img").attr("src",path3);
                    }else if(table_name === "ss"){
                        implement_table1.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=ss").load();
                    }else if(table_name === "smyxzl"){
                        implement_table2.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=smyxzl").load();
                    }else if(table_name === "wjzl"){
                        check_table1.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=wjzl").load();
                    }else if(table_name === "smyx"){
                        check_table4.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=smyx").load();
                    }else if(table_name === "jjxy"){
                        check_table2.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=jjxy").load();
                    }else if(table_name === "shxy"){
                        check_table3.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=shxy").load();
                    }else if(table_name === "ggcs"){
                        standard_table1.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=ggcs").load();
                    }else if(table_name === "bzh"){
                        standard_table2.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=bzh").load();
                    }else if(table_name === "zj"){
                        summarize_table1.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=zj").load();
                        $.ajax({
                            url: "./qcAdd",
                            type: "post",
                            data: {id:cid,status:"已完成"},
                            dataType: "json",
                            success: function (res) {
                                console.log(res);
                                if(res.code === 1){
                                    qc_table.ajax.url("__SCRIPT__/qc_group.php").load();
                                }else {
                                    layer.msg(res.msg);
                                }
                            }
                        })
                    }else if(table_name === "cgfbqk"){
                        result_table1.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name= ").load();
                        $.ajax({
                            url: "./qcAdd",
                            type: "post",
                            data: {id:cid,status:"已发布"},
                            dataType: "json",
                            success: function (res) {
                                console.log(res);
                                if(res.code === 1){
                                    qc_table.ajax.url("__SCRIPT__/qc_group.php").load();
                                }else {
                                    layer.msg(res.msg);
                                }
                            }
                        })
                    }
                    uploader = null;
                    $("#file_upload").empty();
                    $("#fname").modal('hide');
                    $("#file_per").empty();
                }else {
                    layer.msg("抱歉，您没有此权限");
                }

            });

            // 文件上传失败，显示上传出错。
            uploader.on( 'uploadError', function( file ) {
                layer.msg("上传失败",{icon:2,time:1500,shade: 0.1});
                $("#file_per").empty();
                $("#file_upload").empty();
            });
        }
    }
    $("#upload").click(function () {
        myupload("",cid,"xtly","","");
    });
    $("#upload2").click(function () {
        myupload("",cid,"qcxz","","");
    });
    $("#upload3").click(function () {
        myupload("",cid,"xzdc","","");
    });
    $("#upload4").click(function () {
        myupload("",cid,"mbsd","","");
    });
    $("#upload5").click(function () {
        myupload("",cid,"mblz","","");
    });
    $("#upload6").click(function () {
        myupload("",cid,"yyfx","","");
    });
    $("#upload7").click(function () {
        myupload("",cid,"ss","bb","");
    });
    $("#upload8").click(function () {
        myupload("",cid,"smyxzl","bb","");
    });
    $("#upload9").click(function () {
        myupload("",cid,tablename,"bb","");
    });
    $("#upload10").click(function () {
        myupload("",cid,"jjxy","","");
    });
    $("#upload11").click(function () {
        myupload("",cid,"shxy","","");
    });
    $("#upload12").click(function () {
        myupload("",cid,"ggcs","","");
    });
    $("#upload13").click(function () {
        myupload("",cid,"bzh","","");
    });
    $("#upload14").click(function () {
        myupload("",cid,"zj","","");
    });
    $("#upload15").click(function () {
        myupload("",cid,"cgfbqk","","date");
    });
    $("#fname .btn-primary").click(function () {
            uploader.upload();
    })
    //tab切换
    $('#myTab a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
        console.log($(this).text());
    });

    $("#tab_li>div").click(function () {
        var index = $(this).index();
        if(index === 1){
            tabtxt = "数码影像";
            tablename = "smyx"
        }else {
            tabtxt = "文件资料";
            tablename = "wjzl"
        }
        $("#tab_li>div").css("background-color","#fff").eq(index).css("background-color","#bae2f3");
        $("#tab_con>div").css("display","none").eq(index).css("display","block");
    })
    //日期插件
    $("#implement_date").jeDate({
        format: "YYYY-MM-DD"
    });
    $("#found_date").jeDate({
        format: "YYYY-MM-DD"
    });
    $("#register_date").jeDate({
        format: "YYYY-MM-DD"
    });
    $("#activity_start_date").jeDate({
        format: "YYYY-MM-DD"
    });
    $("#activity_end_date").jeDate({
        format: "YYYY-MM-DD"
    });
    $("#rdate").jeDate({
        format: "YYYY-MM-DD"
    });
    $("#wdate").jeDate({
        format: "YYYY-MM-DD"
    });
    $("#publish_date input").jeDate({
        format: "YYYY-MM-DD"
    });
    //QC管理
    var cid;
    function detail(that) {
        cid = $(that).parent("td").parent("tr").children("td:first-child").text();

        $.ajax({
            url: "./index",
            type: "post",
            data: {id:cid},
            dataType: "json",
            success: function (res) {
                console.log(res);
                if(res.code === 1){
                    $("#container").css("display","block");
                    $("#myform1id").val(cid);
                    $("#group_name").val(res.data.group_name);
                    $("#found_date").val(res.data.found_date);
                    $("#register_date").val(res.data.register_date);
                    $("#topic_name1").val(res.data.topic_name);
                    $("#topic_type").val(res.data.topic_type);
                    $("#register_num").val(res.data.register_num);
                    $("#group_leader").val(res.data.group_leader);
                    $("#activity_start_date").val(res.data.activity_start_date);
                    $("#activity_end_date").val(res.data.activity_end_date);
                    $("#activity_times_part1").val(res.data.activity_times_part1);
                    $("#activity_times_part2").val(res.data.activity_times_part2);
                    $("#content1").val(res.data.content);
                    $("#goal").val(res.data.goal);
                }else {
                    layer.msg(res.msg);
                }
            }
        })
        grouppeople_table.ajax.url("__SCRIPT__/qc_member.php?group_id=" + cid).load();
        upload_table.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=xtly").load();
        inquire_table.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=xzdc").load();
        target_table.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=mblz").load();
        reason_table.ajax.url("__SCRIPT__/qc_problem.php?group_id=" + cid).load();
        way_table.ajax.url("__SCRIPT__/qc_strategy.php?group_id=" + cid).load();
        implement_table1.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=ss").load();
        implement_table2.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=smyxzl").load();
        check_table1.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=wjzl").load();
        check_table4.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=smyx").load();
        check_table2.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=jjxy").load();
        check_table3.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=shxy").load();
        standard_table1.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=ggcs").load();
        standard_table2.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=bzh").load();
        summarize_table1.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=zj").load();
        result_table1.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=cgfbqk").load();
        $.ajax({
            url: "./getAttachmentInfo",
            type: "post",
            data: {group_id:cid,table_name1:"qcxz",table_name2:"mbsd",table_name3:"yyfx"},
            dataType: "json",
            success: function (res) {
                console.log(res);
                if(res.code === 1){
                    if(res[0]){
                        path1 = res[0].path.substr(1);
                        id1 = res[0].id;
                    }else {
                        path1 = ""
                    }
                    if(res[1]){
                        path2 = res[1].path.substr(1);
                        id2 = res[0].id;
                    }else {
                        path2 = ""
                    }
                    if(res[2]){
                        path3 = res[2].path.substr(1);
                        id3 = res[0].id;
                    }else{
                        path3 = ""
                    }
                    $("#img_container img").attr("src",path1);
                    $("#pic_container img").attr("src",path2);
                    $("#reason_container img").attr("src",path3);
                }else {
                    layer.msg(res.msg);
                }
            }
        })
    }
    function edit(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();

        $.ajax({
            url: "./index",
            type: "post",
            data: {id:id},
            dataType: "json",
            success: function (res) {
                console.log(res);
                if(res.code === 1){
                    $("#qcid").val(id);
                    $("#myModal h5").text("编辑");
                    $("#myModal").modal("show");
                    $("#topic_name").val(res.data.topic_name);
                    $("#implement_date").val(res.data.implement_date);
                    $("#owner").val(res.data.owner);
                }else {
                    layer.msg(res.msg);
                }
            }
        })
    }
    function del(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();
        layer.confirm('确认删除此条记录吗?', {icon: 3, title:'提示'}, function(index){
            $.ajax({
                url: "./qcDel",
                data: {'id' : id},
                type: "post",
                dataType: "json",
                success: function (res) {
                    if(res.code == 1){
                        layer.msg(res.msg,{icon:1,time:1500,shade: 0.1});
                        qc_table.ajax.url("__SCRIPT__/qc_group.php").load();
                    }else{
                        layer.msg(res.msg,{icon:0,time:1500,shade: 0.1});
                    }
                }
            })
            layer.close(index);
        })
    }
    var qc_table = $('#qc_table').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "__SCRIPT__/qc_group.php"
        },
        "dom": '<"mybtn btn btn-outline btn-primary"><"myl"l>frtip',
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [5],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='detail(this)' value='详情'/>";
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
    $("#qctable_wrapper .mybtn").click(function () {
            $("#myModal input").val("");
            $("#myModal h5").text("新增");
            $("#myModal").modal('show');
    });

    $("#back").click(function () {
        $("#container").css("display","none");
    })
    //小组成员
    function pedit(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();

        $.ajax({
            url: "./memberEdit",
            type: "post",
            data: {id:id},
            dataType: "json",
            success: function (res) {
                console.log(res);
                if(res.code === 1){
                    $("#sid").val(id);
                    $("#pgroup_id").val(cid);
                    $("#addPeople h5").text("编辑");
                    $("#addPeople").modal("show");
                    $("#pname").val(res.data.name);
                    $("#psex").val(res.data.sex);
                    $("#peducation").val(res.data.education);
                    $("#page").val(res.data.age);
                    $("#ptitle").val(res.data.title);
                    $("#pdivision").val(res.data.division);
                }else {
                    layer.msg(res.msg);
                }
            }
        })
    }
    function pdel(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();
        layer.confirm('确认删除此条记录吗?', {icon: 3, title:'提示'}, function(index){
            $.ajax({
                url: "./memberDel",
                data: {'id' : id},
                type: "post",
                dataType: "json",
                success: function (res) {
                    if(res.code == 1){
                        layer.msg(res.msg,{icon:1,time:1500,shade: 0.1});
                        grouppeople_table.ajax.url("__SCRIPT__/qc_member.php?group_id=" + cid).load();
                    }else{
                        layer.msg(res.msg,{icon:0,time:1500,shade: 0.1});
                    }
                }
            })
            layer.close(index);
        })
    }
    var grouppeople_table = $('#grouppeople_table').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "__SCRIPT__/qc_member.php?group_id=" + cid
        },
        "dom": '<"mybtn btn btn-outline btn-primary"><"myl"l>frtip',
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [7],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='pedit(this)' value='编辑'/>";
                    html += "<input type='button' class='btn btn-danger btn-outline btn-xs' style='margin-left: 5px;' onclick='pdel(this)' value='删除'/>" ;
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
    $("#group2 .mybtn").click(function () {
        $("#addPeople input").val("");
        $("#addPeople h5").text("新增");
        $("#pgroup_id").val(cid);
        $("#addPeople").modal('show');
    });

    //流程tab
    $(".exp>span").click(function () {
        var index = $(this).parent("div").index();
        $(".exp>span").css("color","#000");
        $(this).css("color","#ff9933");
        console.log(index)
        $("#flow_content>div").css("display","none").eq(index).css("display","block");
    })

    //datatable
    //文件下载
    function download(that) {
        $.ajax({
            url: "./attachmentDownload",
            success: function (res) {
                if(res.code != 1){
                    layer.msg(res.msg);
                }else {
                    $("#form_container").empty();
                    var id = $(that).parent("td").parent("tr").children("td:first-child").text();
                    var str = "";
                    str += ""
                        + "<iframe name=downloadFrame"+ id +" style='display:none;'></iframe>"
                        + "<form id=download"+ id +" action='./attachmentDownload' method='get' target=downloadFrame"+ id +">"
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
    //文件删除
    function fdel(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();
        var parent = $(that).parent("td").parent("tr").parent("tbody").parent("table").attr("id");
        layer.confirm('确认删除此条记录吗?', {icon: 3, title:'提示'}, function(index){
            $.ajax({
                url: "./attachmentDel",
                data: {'id' : id},
                type: "post",
                dataType: "json",
                success: function (res) {
                    if(res.code == 1){
                        layer.msg(res.msg,{icon:1,time:1500,shade: 0.1});
                        if(parent === "upload_table"){
                            upload_table.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=xtly").load();
                        }else if(parent === "inquire_table"){
                            inquire_table.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=xzdc").load();
                        }else if(parent === "target_table"){
                            target_table.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=mblz").load();
                        }else if(parent === "implement_table1"){
                            implement_table1.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=ss").load();
                        }else if(parent === "implement_table2"){
                            implement_table2.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=smyxzl").load();
                        }else if(parent === "check_table1"){
                            check_table1.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=wjzl").load();
                        }else if(parent === "check_table4"){
                            check_table4.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=smyx").load();
                        }else if(parent === "check_table2"){
                            check_table2.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=jjxy").load();
                        }else if(parent === "check_table3"){
                            check_table3.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=shxy").load();
                        }else if(parent === "standard_table1"){
                            standard_table1.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=ggcs").load();
                        }else if(parent === "standard_table2"){
                            standard_table2.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=bzh").load();
                        }else if(parent === "summarize_table1"){
                            summarize_table1.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=zj").load();
                        }else if(parent === "result_table1"){
                            result_table1.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=cgfbqk").load();
                        }
                    }else{
                        layer.msg(res.msg,{icon:0,time:1500,shade: 0.1});
                    }
                }
            })
            layer.close(index);
        })
    }
    //图片展示
    function imgshow(n) {
        if(n === 1){
            $("#img_show img").attr('src',path1);
        }else if(n === 2){
            $("#img_show img").attr('src',path2);
        }else if(n === 3){
            $("#img_show img").attr('src',path3);
        }
        $("#img_show").modal('show');
    }
    $("#img_container img").click(function () {
        imgshow(1);
    });
    $("#pic_container img").click(function () {
        imgshow(2);
    });
    $("#reason_container img").click(function () {
        imgshow(3);
    });
    function showpdf1(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();
        console.log($(this))
        showPdf(id,"./attachmentPreview");
    }
    var upload_table = $('#upload_table').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=xtly",
            "async": false

        },
        "dom": '',
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [4],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='download(this)' value='下载'/>";
                    html += "<input type='button' class='btn btn-success btn-outline btn-xs' style='margin-left: 5px;' onclick='showpdf1(this)' value='预览'/>" ;
                    html += "<input type='button' class='btn btn-danger btn-outline btn-xs' style='margin-left: 5px;' onclick='fdel(this)' value='删除'/>" ;
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

    var inquire_table = $('#inquire_table').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=xzdc",
            "async": false
        },
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [4],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='download(this)' value='下载'/>";
                    html += "<input type='button' class='btn btn-success btn-outline btn-xs' style='margin-left: 5px;' onclick='showpdf1(this)' value='预览'/>" ;
                    html += "<input type='button' class='btn btn-danger btn-outline btn-xs' style='margin-left: 5px;' onclick='fdel(this)' value='删除'/>" ;
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

    var target_table = $('#target_table').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=mblz",
            "async": false
        },
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [4],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='download(this)' value='下载'/>";
                    html += "<input type='button' class='btn btn-success btn-outline btn-xs' style='margin-left: 5px;' onclick='showpdf1(this)' value='预览'/>" ;
                    html += "<input type='button' class='btn btn-danger btn-outline btn-xs' style='margin-left: 5px;' onclick='fdel(this)' value='删除'/>" ;
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
    //原因分析表
    function redit(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();

        $.ajax({
            url: "./problemEdit",
            type: "post",
            data: {id:id},
            dataType: "json",
            success: function (res) {
                console.log(res);
                if(res.code === 1){
                    $("#rid").val(id);
                    $("#rgroup_id").val(cid);
                    $("#reason h5").text("编辑");
                    $("#reason").modal("show");
                    $("#rproblem").val(res.data.problem);
                    $("#rstandard").val(res.data.standard);
                    $("#rmethod").val(res.data.method);
                    $("#rdate").val(res.data.date);
                    $("#rowner").val(res.data.owner);
                    $("#rdescription").val(res.data.description);
                    $("#rresult").val(res.data.result);
                }else {
                    layer.msg(res.msg);
                }
            }
        })
    }
    function rdel(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();
        layer.confirm('确认删除此条记录吗?', {icon: 3, title:'提示'}, function(index){
            $.ajax({
                url: "./problemDel",
                data: {'id' : id},
                type: "post",
                dataType: "json",
                success: function (res) {
                    if(res.code == 1){
                        layer.msg(res.msg,{icon:1,time:1500,shade: 0.1});
                        reason_table.ajax.url("__SCRIPT__/qc_problem.php?group_id=" + cid).load();
                    }else{
                        layer.msg(res.msg,{icon:0,time:1500,shade: 0.1});
                    }
                }
            })
            layer.close(index);
        })
    }
    var reason_table = $('#reason_table').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "__SCRIPT__/qc_problem.php?group_id=" + cid
        },
        "dom": '<"mybtn btn btn-outline btn-primary"><"myl"l>frtip',
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [8],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='redit(this)' value='编辑'/>";
                    html += "<input type='button' class='btn btn-danger btn-outline btn-xs' style='margin-left: 5px;' onclick='rdel(this)' value='删除'/>" ;
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
    $("#step5 .mybtn").click(function () {
        $("#reason input").val("");
        $("#reason textarea").val("");
        $("#reason h5").text("新增");
        $("#rgroup_id").val(cid);
        $("#reason").modal('show');
    })

    //制定对策
    function wedit(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();
        $.ajax({
            url: "./strategyEdit",
            type: "post",
            data: {id:id},
            dataType: "json",
            success: function (res) {
                console.log(res);
                if(res.code === 1){
                    $("#wid").val(id);
                    $("#wgroup_id").val(cid);
                    $("#way h5").text("编辑");
                    $("#way").modal("show");
                    $("#wrproblem").val(res.data.problem);
                    $("#wstrategy").val(res.data.strategy);
                    $("#wgoal").val(res.data.goal);
                    $("#wmethod").val(res.data.method);
                    $("#wdate").val(res.data.date);
                    $("#wowner").val(res.data.owner);
                }else {
                    layer.msg(res.msg);
                }
            }
        })
    }
    function wdel(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();
        layer.confirm('确认删除此条记录吗?', {icon: 3, title:'提示'}, function(index){
            $.ajax({
                url: "./strategyDel",
                data: {'id' : id},
                type: "post",
                dataType: "json",
                success: function (res) {
                    if(res.code == 1){
                        layer.msg(res.msg,{icon:1,time:1500,shade: 0.1});
                        way_table.ajax.url("__SCRIPT__/qc_strategy.php?group_id=" + cid).load();
                    }else{
                        layer.msg(res.msg,{icon:0,time:1500,shade: 0.1});
                    }
                }
            })
            layer.close(index);
        })
    }
    var way_table = $('#way_table').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "__SCRIPT__/qc_strategy.php?group_id=" + cid
        },
        "dom": '<"mybtn btn btn-outline btn-primary"><"myl"l>frtip',
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [7],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='wedit(this)' value='编辑'/>";
                    html += "<input type='button' class='btn btn-danger btn-outline btn-xs' style='margin-left: 5px;' onclick='wdel(this)' value='删除'/>" ;
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
    $("#step6 .mybtn").click(function () {
        $("#way input").val("");
        $("#way h5").text("新增");
        $("#wgroup_id").val(cid);
        $("#way").modal('show');
    })

    var implement_table1 = $('#implement_table1').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=ss",
            "async": false
        },
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [5],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='download(this)' value='下载'/>";
                    html += "<input type='button' class='btn btn-success btn-outline btn-xs' style='margin-left: 5px;' onclick='showpdf1(this)' value='预览'/>" ;
                    html += "<input type='button' class='btn btn-danger btn-outline btn-xs' style='margin-left: 5px;' onclick='fdel(this)' value='删除'/>" ;
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

    var implement_table2 = $('#implement_table2').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=smyxzl",
            "async": false
        },
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [5],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='download(this)' value='下载'/>";
                    html += "<input type='button' class='btn btn-success btn-outline btn-xs' style='margin-left: 5px;' onclick='showpdf1(this)' value='预览'/>" ;
                    html += "<input type='button' class='btn btn-danger btn-outline btn-xs' style='margin-left: 5px;' onclick='fdel(this)' value='删除'/>" ;
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

    var check_table1 = $('#check_table1').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=wjzl",
            "async": false
        },
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [5],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='download(this)' value='下载'/>";
                    html += "<input type='button' class='btn btn-success btn-outline btn-xs' style='margin-left: 5px;' onclick='showpdf1(this)' value='预览'/>" ;
                    html += "<input type='button' class='btn btn-danger btn-outline btn-xs' style='margin-left: 5px;' onclick='fdel(this)' value='删除'/>" ;
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

    var check_table4 = $('#check_table4').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=smyx",
            "async": false
        },
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [5],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='download(this)' value='下载'/>";
                    html += "<input type='button' class='btn btn-success btn-outline btn-xs' style='margin-left: 5px;' onclick='showpdf1(this)' value='预览'/>" ;
                    html += "<input type='button' class='btn btn-danger btn-outline btn-xs' style='margin-left: 5px;' onclick='fdel(this)' value='删除'/>" ;
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

    var check_table2 = $('#check_table2').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=jjxy",
            "async": false
        },
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [4],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='download(this)' value='下载'/>";
                    html += "<input type='button' class='btn btn-success btn-outline btn-xs' style='margin-left: 5px;' onclick='showpdf1(this)' value='预览'/>" ;
                    html += "<input type='button' class='btn btn-danger btn-outline btn-xs' style='margin-left: 5px;' onclick='fdel(this)' value='删除'/>" ;
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

    var check_table3 = $('#check_table3').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=shxy",
            "async": false
        },
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [4],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='download(this)' value='下载'/>";
                    html += "<input type='button' class='btn btn-success btn-outline btn-xs' style='margin-left: 5px;' onclick='showpdf1(this)' value='预览'/>" ;
                    html += "<input type='button' class='btn btn-danger btn-outline btn-xs' style='margin-left: 5px;' onclick='fdel(this)' value='删除'/>" ;
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

    var standard_table1 = $('#standard_table1').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=ggcs",
            "async": false
        },
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [4],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='download(this)' value='下载'/>";
                    html += "<input type='button' class='btn btn-success btn-outline btn-xs' style='margin-left: 5px;' onclick='showpdf1(this)' value='预览'/>" ;
                    html += "<input type='button' class='btn btn-danger btn-outline btn-xs' style='margin-left: 5px;' onclick='fdel(this)' value='删除'/>" ;
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

    var standard_table2 = $('#standard_table2').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=bzh",
            "async": false
        },
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [4],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='download(this)' value='下载'/>";
                    html += "<input type='button' class='btn btn-success btn-outline btn-xs' style='margin-left: 5px;' onclick='showpdf1(this)' value='预览'/>" ;
                    html += "<input type='button' class='btn btn-danger btn-outline btn-xs' style='margin-left: 5px;' onclick='fdel(this)' value='删除'/>" ;
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

    var summarize_table1 = $('#summarize_table1').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=zj",
            "async": false
        },
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [4],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='download(this)' value='下载'/>";
                    html += "<input type='button' class='btn btn-success btn-outline btn-xs' style='margin-left: 5px;' onclick='showpdf1(this)' value='预览'/>" ;
                    html += "<input type='button' class='btn btn-danger btn-outline btn-xs' style='margin-left: 5px;' onclick='fdel(this)' value='删除'/>" ;
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

    var result_table1 = $('#result_table1').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=cgfbqk",
            "async": false
        },
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [5],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='download(this)' value='下载'/>";
                    html += "<input type='button' class='btn btn-success btn-outline btn-xs' style='margin-left: 5px;' onclick='showpdf1(this)' value='预览'/>" ;
                    html += "<input type='button' class='btn btn-danger btn-outline btn-xs' style='margin-left: 5px;' onclick='fdel(this)' value='删除'/>" ;
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

    //提交
    //QC管理
    $("#myModal .btn-primary").click(function () {
        $('#Add').ajaxForm({
            success: function (data) {
                if(data.code==1){
                    $("#myModal").modal('hide');
                    layer.msg(data.msg);
                    qc_table.ajax.url("__SCRIPT__/qc_group.php").load();
                }else{
                    layer.msg(data.msg, {icon: 5,time:1500,shade: 0.1});
                    return false;
                }
            },
            dataType: 'json'
        });
    })
    //QC小组
    $("#mysave1").click(function () {
        $('#myform1').ajaxSubmit({
            url: "./qcAdd",
            type: "post",
            success: function (data) {
                if(data.code==1){
                    layer.msg(data.msg);
                }else{
                    layer.msg(data.msg, {icon: 5,time:1500,shade: 0.1});
                    return false;
                }
            },
            dataType: 'json'
        });
    })
    //小组成员
    $("#addPeople .btn-primary").click(function () {
        $('#memberAdd').ajaxForm({
            success: function (data) {
                if(data.code==1){
                    $("#addPeople").modal('hide');
                    layer.msg(data.msg);
                    grouppeople_table.ajax.url("__SCRIPT__/qc_member.php?group_id=" + cid).load();
                }else{
                    layer.msg(data.msg, {icon: 5,time:1500,shade: 0.1});
        return false;
                }
            },
            dataType: 'json'
        });
    })
    //选题内容
    $("#save1").click(function () {
        var content = $("#content1").val();
        $.ajax({
            url: "./qcAdd",
            type: "post",
            data: {id:cid,content:content},
            dataType: "json",
            success: function (res) {
                console.log(res);
                layer.msg(res.msg, {time:1500,shade: 0.1});
            }
        })
    })
    //制定目标
    $("#save2").click(function () {
        var goal = $("#goal").val();
        $.ajax({
            url: "./qcAdd",
            type: "post",
            data: {id:cid,goal:goal},
            dataType: "json",
            success: function (res) {
                console.log(res);
                layer.msg(res.msg, {time:1500,shade: 0.1});
            }
        })
    })
    //要因分析
    $("#reason .btn-primary").click(function () {
        $('#problem').ajaxForm({
            success: function (data) {
                if(data.code==1){
                    $("#reason").modal('hide');
                    layer.msg(data.msg);
                    reason_table.ajax.url("__SCRIPT__/qc_problem.php?group_id=" + cid ).load();
                }else{
                    layer.msg(data.msg, {icon: 5,time:1500,shade: 0.1});
                    return false;
                }
            },
            dataType: 'json'
        });
    })
    //制定对策
    $("#way .btn-primary").click(function () {
        $('#reason1').ajaxForm({
            success: function (data) {
                if(data.code==1){
                    $("#way").modal('hide');
                    layer.msg(data.msg);
                    way_table.ajax.url("__SCRIPT__/qc_strategy.php?group_id=" + cid).load();
                }else{
                    layer.msg(data.msg, {icon: 5,time:1500,shade: 0.1});
                    return false;
                }
            },
            dataType: 'json'
        });
    })
    //实施
    $("#rev .btn-primary").click(function () {
        $('#frev').ajaxForm({
            success: function (res) {
                if(res.code === 1){
                    layer.msg(res.msg,{icon:1,time:1500,shade: 0.1});
                    $("#rev").modal('hide');
                    implement_table1.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=ss").load();
                    implement_table2.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=smyxzl").load();
                    check_table1.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=wjzl").load();
                    check_table4.ajax.url("__SCRIPT__/qc_attachment.php?group_id=" + cid + "&table_name=smyx").load();
                }else {
                    layer.msg(res.msg,{icon:2,time:1500,shade: 0.1});
                }
            },
            dataType: 'json'
        });
    })
</script>
</body>
</html>
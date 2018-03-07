<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:89:"C:\phpStudy\PHPTutorial\WWW\shuzi\public/../application/quality\view\procedure\index.html";i:1517325921;s:87:"C:\phpStudy\PHPTutorial\WWW\shuzi\public/../application/quality\view\public\header.html";i:1517675489;s:87:"C:\phpStudy\PHPTutorial\WWW\shuzi\public/../application/quality\view\public\footer.html";i:1516333031;}*/ ?>
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
<link rel="stylesheet" href="/static/admin/css/iconfont.css">
<link rel="stylesheet" href="/static/admin/css/zTreeStyle/zTreeStyle.css">
<style>
    #upload,#upload2,#upload3,#upload4,#upload5,#upload6,#upload7,#upload8,#upload9,#upload10,#upload15,#upload12,#upload13,#upload14,#upload99{
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
        height: 100%;
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
    #container,#pro_wrapper{
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
    #container,#pro_wrapper{
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
    #ssgy{
        display: none;
    }
    #standard_wrapper,#ssgy,.mydiv{
        height: 99% !important;
        margin-bottom: 1%;
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
                    <div id="standard_wrapper">
                        <div style="height: 50px;">
                            <p class='myp' style='line-height:30px;font-weight: 700;text-align: center;'>标准工艺实施计划列表</p>
                        </div>
                        <table id="standard_table" width="100%" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>名称</th>
                                <th>年度</th>
                                <th>季度</th>
                                <th>上传人</th>
                                <th>上传时间</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                    <div id="ssgy">
                        <div style="height: 50px;">
                            <p class='myp' style='line-height:30px;font-weight: 700;text-align: center;'>标准工艺列表原型设计列表</p>
                        </div>
                        <table id="ss_table" width="100%" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>标准工艺名称</th>
                                <th>内容</th>
                                <th>负责人</th>
                                <th>日期</th>
                                <th>备注</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                    <div id="pro_wrapper">
                        <button class="btn btn-primary" id="pro_back">返回</button>
                        <div style="height: 50px;">
                            <p class='myp' style='line-height:30px;font-weight: 700;text-align: center;'>xxx施工工艺</p>
                        </div>
                        <table id="pro_table" width="100%" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>工程部位</th>
                                <th>责任人</th>
                                <th>日期</th>
                                <th>备注</th>
                                <th>状态</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                    <div id="container" style="height: 100%;">
                        <button class="btn btn-primary" id="back">返回</button>
                        <div class="tab-pane" id="profile" style="height: 90%">
                            <div id="flow">
                                <div class="exp">
                                    <span>策划与准备</span>
                                    <img src="__IMG__/arr.png" alt="">
                                </div>
                                <div class="exp">
                                    <span>实施</span>
                                    <img src="__IMG__/arr.png" alt="">
                                </div>
                                <div class="exp">
                                    <span>检查</span>
                                    <img src="__IMG__/arr.png" alt="">
                                </div>
                                <div class="exp">
                                    <span>推广与宣传</span>
                                </div>
                            </div>
                            <div id="flow_content" style="height: 80%;">
                                <div id="step7">
                                    <div id="check">
                                        <div class="mydiv">
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
                                                            <th>备注</th>
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
                                        </div>
                                        <div class="mydiv">
                                            <div style="height: 50px;">
                                                <div id="list10"></div>
                                                <p class='myp' style='line-height:30px;font-weight: 700;text-align: center;'>标准化工艺示范牌</p>
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
                                                        <th>备注</th>
                                                        <th>操作</th>
                                                    </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="step8">
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
                                                    <th>备注</th>
                                                    <th>操作</th>
                                                </tr>
                                                </thead>
                                            </table>
                                        </div>
                                        <div style="height: 50px;">
                                            <p class='myp' style='line-height:30px;font-weight: 700;text-align: center;'>未实施原因分析</p>
                                            <div id="mysave1">保存</div>
                                        </div>
                                        <textarea name="" id="reason" style="min-height: 100px;width: 100%;"></textarea>
                                    </div>
                                </div>
                                <div id="step9">
                                    <div id="standard">
                                        <div style="height: 50px;">
                                            <div id="list12"></div>
                                            <p class='myp' style='line-height:30px;font-weight: 700;text-align: center;'>检查</p>
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
                                                    <th>备注</th>
                                                    <th>操作</th>
                                                </tr>
                                                </thead>
                                            </table>
                                        </div>
                                        <div style="height: 50px;">
                                            <div id="list13"></div>
                                            <p class='myp' style='line-height:30px;font-weight: 700;text-align: center;'>检查-不合格记录</p>
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
                                                    <th>备注</th>
                                                    <th>操作</th>
                                                </tr>
                                                </thead>
                                            </table>
                                        </div>
                                        <div style="height: 50px;">
                                            <div id="list99"></div>
                                            <p class='myp' style='line-height:30px;font-weight: 700;text-align: center;'>数码影像资料</p>
                                            <div id="upload99">上传文件</div>
                                        </div>
                                        <div id="standard_table_wrapper3">
                                            <table id="standard_table3" width="100%" class="table table-striped table-bordered">
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
                                </div>
                                <div id="step10">
                                    <div id="summarize">
                                        <div class="mydiv">
                                            <div style="height: 50px;">
                                                <div id="list14"></div>
                                                <p class='myp' style='line-height:30px;font-weight: 700;text-align: center;'>策划和准备</p>
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
                                                        <th>备注</th>
                                                        <th>操作</th>
                                                    </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="mydiv">
                                            <div style="height: 50px;">
                                                <div id="list15"></div>
                                                <p class='myp' style='line-height:30px;font-weight: 700;text-align: center;'>数码影像资料</p>
                                                <div id="upload15">上传文件</div>
                                            </div>
                                            <div id="summarize_table_wrapper2">
                                                <table id="summarize_table2" width="100%" class="table table-striped table-bordered">
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

<div id="standard_modal" data-keyboard="false" data-backdrop="static" class="modal animated fadeInRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width: 60%;margin: 0 auto;margin-top: 40px;">
    <div class="row">
        <div class="col-sm-12" style="background-color:#fff;">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5></h5>
                </div>
                <input type="text" name="uid" id="id1" style="display: none;" value="">
                <div class="ibox-content">
                    <div class="col-lg-12 col-xs-12">
                        <label class="col-xs-3 control-label">名称：</label>
                        <div class="myblock col-xs-8 input-group">
                            <input id="name" type="text" class="form-control" name="name" >
                        </div>
                    </div>
                    <div class="col-lg-12 col-xs-12">
                        <label class="col-xs-3 control-label">年度：</label>
                        <div class="myblock col-xs-8 input-group">
                            <input id="year" type="text" class="form-control" name="year" >
                        </div>
                    </div>
                    <div class="col-lg-12 col-xs-12">
                        <label class="col-xs-3 control-label">季度：</label>
                        <div class="myblock col-xs-8 input-group">
                            <select name="season" id="season" class="form-control" >
                                <option value="第一季度">第一季度</option>
                                <option value="第二季度">第二季度</option>
                                <option value="第三季度">第三季度</option>
                                <option value="第四季度">第四季度</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xs-12">
                        <label class="col-xs-3 control-label">文件：</label>
                        <div class="myblock col-xs-8 input-group" style="text-align: left;">
                            <div id="standard_per" style="display: inline-block;vertical-align: middle;"></div>
                            <div id="standard_upload" style="display: inline-block;vertical-align: middle;"></div>
                            <div id="standard_list" style="display: inline-block;vertical-align: middle;"></div>
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

<div id="ss_modal" data-keyboard="false" data-backdrop="static" class="modal animated fadeInRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width: 60%;margin: 0 auto;margin-top: 40px;">
    <div class="row">
        <div class="col-sm-12" style="background-color:#fff;">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5></h5>
                </div>
                <div class="ibox-content">
                    <form class="form-horizontal" name="ssAdd" id="ssAdd" method="post" action="<?php echo url('procedureListAdd'); ?>">
                        <input type="text" name="id" id="id2" style="display: none;">
                        <input type="text" name="group_id" id="group_id2" style="display: none;">
                        <div class="form-group">
                            <div class="col-lg-12 col-xs-12">
                                <label class="col-xs-3 control-label">名称：</label>
                                <div class="myblock col-xs-8 input-group">
                                    <input id="ssname" type="text" class="form-control" name="name" >
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-lg-12 col-xs-12">
                                <label class="col-xs-3 control-label">内容：</label>
                                <div class="myblock col-xs-8 input-group">
                                    <textarea name="content" id="sscontent" style="width: 100%;min-height: 100px;"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-lg-12 col-xs-12">
                                <label class="col-xs-3 control-label">备注：</label>
                                <div class="myblock col-xs-8 input-group">
                                    <textarea name="remark" id="ssremark" style="width: 100%;min-height: 100px;"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12 col-xs-12">
                                <label class="col-xs-3 control-label">责任人：</label>
                                <div class="myblock col-xs-8 input-group">
                                    <input id="ssowner" type="text" class="form-control" name="owner" placeholder="请在下方树结构选取责任人" readonly="readonly">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12 col-xs-12">
                                <label class="col-xs-3 control-label"></label>
                                <div class="myblock col-xs-8 input-group">
                                    <div id="tree_container" class="ztree"></div>
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
                </div>
            </div>
        </div>
    </div>
</div>

<div id="pro_modal" data-keyboard="false" data-backdrop="static" class="modal animated fadeInRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width: 60%;margin: 0 auto;margin-top: 40px;">
    <div class="row">
        <div class="col-sm-12" style="background-color:#fff;">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5></h5>
                </div>
                <div class="ibox-content">
                    <form class="form-horizontal" name="pro_modalAdd" id="pro_modalAdd" method="post" action="<?php echo url('procedureListSublistAdd'); ?>">
                        <input type="text" name="id" id="id3" style="display: none;">
                        <input type="text" name="group_id" id="group_id3" style="display: none;">
                        <div class="form-group">
                            <div class="col-lg-12 col-xs-12">
                                <label class="col-xs-3 control-label">工程部位：</label>
                                <div class="myblock col-xs-8 input-group">
                                    <input id="ppart" type="text" class="form-control" name="part" >
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-lg-12 col-xs-12">
                                <label class="col-xs-3 control-label">备注：</label>
                                <div class="myblock col-xs-8 input-group">
                                    <textarea name="remark" id="premark" style="width: 100%;min-height: 100px;"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-lg-12 col-xs-12">
                                <label class="col-xs-3 control-label">责任人：</label>
                                <div class="myblock col-xs-8 input-group">
                                    <input id="powner" type="text" class="form-control" name="owner" placeholder="请在下方树结构选取责任人" readonly="readonly">
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-lg-12 col-xs-12">
                                <label class="col-xs-3 control-label"></label>
                                <div class="myblock col-xs-8 input-group">
                                    <div id="tree_container2" class="ztree"></div>
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
                </div>
            </div>
        </div>
    </div>
</div>


<div id="fname" data-keyboard="false" data-backdrop="static" class="modal animated fadeInRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width: 60%;margin: 0 auto;">
    <div class="row">
        <div class="col-sm-12" style="background-color:#fff;">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5></h5>
                </div>
                <div class="ibox-content">
                    <input type="text" name="id" id="id4" style="display: none;" value="">
                    <div class="col-lg-12 col-xs-12" id="revision">
                        <label class="col-xs-3 control-label">备注：</label>
                        <div class="myblock col-xs-8 input-group">
                            <input id="fremark" type="text" class="form-control" name="remark" >
                        </div>
                    </div>
                    <div class="col-lg-12 col-xs-12">
                        <label class="col-xs-3 control-label" id="file">文件：</label>
                        <div class="myblock col-xs-8 input-group">
                            <div id="file_per" style="display: inline-block;vertical-align: middle;"></div>
                            <div id="file_upload" style="display: inline-block;vertical-align: middle;"></div>
                            <div id="file_list" style="display: inline-block;vertical-align: middle;"></div>
                        </div>
                    </div>
                    <div class="col-xs-12">
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
<script src="__JS__/plugins/slimscroll/jquery.slimscroll.min.js"></script>
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
<!--<script src="__JS__/viewer.js"></script>-->
<!--<script src="__JS__/pdf.js"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.288/pdf.min.js" type="text/javascript"></script>-->
</body>
<script type="text/javascript">
    $("#standard_wrapper").slimScroll({
        height: "50%"
    });
    $("#ssgy").slimScroll({
        height: "50%"
    });
    $(".mydiv").slimScroll({
        height: "50%"
    });
    var uploader,standard_uploader;
    var ss_table;
    var cid,cid2,cid3;
    var mytablename = "wjzl";
    var tabtxt = "文件资料";
    var tablename = "wjzl";
    function table_refresh() {
        if(mytablename === "wjzl"){
            check_table1.ajax.url("__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=wjzl").load();
        }else if(mytablename === "smyx"){
            check_table4.ajax.url("__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=smyx").load();
        }else if(mytablename === "bzhgysfp"){
            check_table2.ajax.url("__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=bzhgysfp").load();
        }else if(mytablename === "ss"){
            implement_table1.ajax.url("__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=ss").load();
        }else if(mytablename === "jc"){
            standard_table1.ajax.url("__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=jc").load();
        }else if(mytablename === "bhg"){
            standard_table2.ajax.url("__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=bhg").load();
        }else if(mytablename === "smyxzl"){
            standard_table3.ajax.url("__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=smyxzl1").load();
        }else if(mytablename === "chhzb"){
            summarize_table1.ajax.url("__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=chhzb").load();
        }else if(mytablename === "abc"){
            summarize_table2.ajax.url("__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=abc").load();
        }
    }
    function myupload() {
        $("#fname input").val("");
        $("#file_list").empty();
        $("#fname").modal('show');
        if(!uploader){
            uploader = WebUploader.create({
                auto: false,// 选完文件后，是否自动上传。
                swf: '/static/admin/webupload/Uploader.swf',// swf文件路径
                server: "<?php echo url('Upload/uploadProcedureAttachment'); ?>",// 文件接收服务端。
                chunked: false,
                fileSizeLimit: 1000 *1024 *1024,
                fileNumLimit: 1,
                formData: {"uid":"","table_name":"","group_id":"","remark":""},
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
                uploader.options.formData.uid = $("#id4").val();
                uploader.options.formData.table_name = mytablename;
                uploader.options.formData.group_id = cid3;
                uploader.options.formData.remark = $("#fremark").val();
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
            uploader.on('beforeFileQueued', function (file) {
                if($("#file_list").html()){
                    alert("只能上传一个文件,请先删除文件");
                    return false;
                }else {
                    return true;
                }
            });
            // 文件上传成功
            uploader.on( 'uploadSuccess', function( file,data, response ) {
                console.log(file)
                console.log(data)
                if(data.code === 1){
                    layer.msg(data.msg,{icon:1,time:1500,shade: 0.1});
                    table_refresh();
                    uploader = null;
                    $("#file_upload").empty();
                    $("#fname").modal('hide');
                    $("#file_per").empty();
                    if(mytablename === "ss"){
                        $.ajax({
                            url: "./procedureListSublistAdd",
                            type: "post",
                            data: {id:cid3,status:"实施"},
                            dataType: "json",
                            success: function (res) {
                                console.log(res);
                            }
                        })
                    }
                    if(mytablename === "jc"){
                        $.ajax({
                            url: "./procedureListSublistAdd",
                            type: "post",
                            data: {id:cid3,status:"检查"},
                            dataType: "json",
                            success: function (res) {
                                console.log(res);
                            }
                        })
                    }
                    if(mytablename === "chhzb"){
                        $.ajax({
                            url: "./procedureListSublistAdd",
                            type: "post",
                            data: {id:cid3,status:"完成"},
                            dataType: "json",
                            success: function (res) {
                                console.log(res);
                            }
                        })
                    }
                }else {
                    layer.msg("抱歉，您没有此权限");
                }

            });

            // 文件上传失败，显示上传出错。
            uploader.on( 'uploadError', function( file ) {
                layer.msg("上传失败",{icon:2,time:1500,shade: 0.1});
                $("#file_per").empty();
                uploader = null;
                $("#file_upload").empty();
            });
        }
    }
    $("#upload9").click(function () {
        mytablename = tablename;
        myupload();
    });
    $("#upload10").click(function () {
        mytablename = "bzhgysfp";
        myupload();
    });
    $("#upload7").click(function () {
        mytablename = "ss";
        myupload();
    });
    $("#upload12").click(function () {
        mytablename = "jc";
        myupload();
    });
    $("#upload13").click(function () {
        mytablename = "bhg";
        myupload();
    });
    $("#upload99").click(function () {
        mytablename = "smyxzl1";
        myupload();
    });
    $("#upload14").click(function () {
        mytablename = "chhzb";
        myupload();
    });

    $("#upload15").click(function () {
        mytablename = "abc";
        myupload();
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
    $("#year").jeDate({
        format: "YYYY"
    });

    //标准工艺
    var file_name1,file_name2;
    function delatt(that) {
        var id = $(that).parent("div").attr("id");
        $.ajax({
            url: "./procedureEditDel",
            type: "post",
            data: {id:id},
            datatype: "json",
            success: function (res) {
                if(res.code === 1){
                    $("#"+id).remove();
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
                    $("#standard_modal input").val("");
                    $("#id1").val(id);
                    $("#standard_list").empty();
                    $("#standard_modal h5").text("编辑");
                    if(!standard_uploader){
                        standard_uploader = WebUploader.create({

                            auto: false,// 选完文件后，是否自动上传。
                            swf: '/static/admin/webupload/Uploader.swf',// swf文件路径
                            server: "<?php echo url('Upload/uploadProcedure'); ?>",// 文件接收服务端。
                            chunked: false,
                            fileSizeLimit: 1000 *1024 *1024,
                            fileNumLimit: 1,
                            formData: {"uid":"","uname":"","year":"","season":""},
                            duplicate :true,// 重复上传图片，true为可重复false为不可重复
                            pick: {
                                multiple: false,
                                id: "#standard_upload",
                                innerHTML: "上传文件"
                            }
                        });

                        standard_uploader.on( 'fileQueued', function( file ) {
                            file_name2 = file.name;
                            $("#standard_per").append('<div id="' + file.id + '" class="item">' +
                                '</div>');
                            $("#standard_list").empty().append('<div style="display: inline-block;vertical-align: middle;" class="' + file.id + '" class="item">' +
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
                        standard_uploader.on('fileDequeued', function (file) {
                            $(file.id).remove();
                            $('.'+file.id).remove();
                            console.log("remove");
                        });
                        standard_uploader.on("uploadStart",function () {
                            standard_uploader.options.formData.uid = $("#id1").val();
                            standard_uploader.options.formData.uname = $("#name").val();
                            standard_uploader.options.formData.year = $("#year").val();
                            standard_uploader.options.formData.season = $("#season").val();
                        });
                        standard_uploader.on('beforeFileQueued', function (file) {
                            if($("#standard_list").html()){
                                alert("请先删除文件");
                                return false;
                            }else {
                                return true;
                            }
                        });
                        // 文件上传过程中创建进度条实时显示。
                        standard_uploader.on('uploadProgress', function (file, percentage) {
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
                        standard_uploader.on( 'uploadSuccess', function( file,data, response ) {
                            console.log(file)
                            console.log(data)
                            layer.msg("提交成功",{icon:1,time:1500,shade: 0.1});
                            standard_uploader = null;
                            standard_table.ajax.url("__SCRIPT__/procedure.php").load();
                            ss_table.ajax.url("__SCRIPT__/prototype_list.php").load();
                            cid = "";
                            $("#standard_modal").modal('hide');
                            $("#standard_per").empty();
                        });

                        // 文件上传失败，显示上传出错。
                        standard_uploader.on( 'uploadError', function( file ) {
                            layer.msg("上传失败",{icon:2,time:1500,shade: 0.1});
                            $("#standard_per").empty();
                            $("#standard_upload").empty();
                        });
                    }
                    $("#standard_modal").modal("show");
                    $("#name").val(res.data.name);
                    $("#year").val(res.data.year);
                    $("#season").val(res.data.season);
                    file_name1 = res.data.filename;
                    file_name2 = res.data.filename;
                    if(res.data.path){
                        $("#standard_list").append('<div style="display: inline-block;vertical-align: middle;" id="' + res.data.id + '" class="item">' +
                            '<span class="info">' + res.data.filename + '</span>&nbsp' +
                            '<span onclick="delatt(this)" style="color: #0d8ddb;text-decoration: underline;cursor: pointer;">删除</span>' +
                            '</div>' );
                    }
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
                url: "./procedureDel",
                data: {'id' : id},
                type: "post",
                dataType: "json",
                success: function (res) {
                    if(res.code == 1){
                        layer.msg(res.msg,{icon:1,time:1500,shade: 0.1});
                        standard_table.ajax.url("__SCRIPT__/procedure.php").load();
                        ss_table.ajax.url("__SCRIPT__/prototype_list.php").load();
                        cid = "";
                    }else{
                        layer.msg(res.msg,{icon:0,time:1500,shade: 0.1});
                    }
                }
            })
            layer.close(index);
        })
    }
    //文件下载
    function download(that) {
        $.ajax({
            url: "./procedureDownload",
            success: function (res) {
                if(res.code != 1){
                    layer.msg(res.msg)
                }else {
                    $("#form_container").empty();
                    var id = $(that).parent("td").parent("tr").children("td:first-child").text();
                    var str = "";
                    str += ""
                        + "<iframe name=downloadFrame"+ id +" style='display:none;'></iframe>"
                        + "<form id=download"+ id +" action='./procedureDownload' method='get' target=downloadFrame"+ id +">"
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
    function showpdf1(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();
        showPdf(id,"./procedurePreview");
    }
    var standard_table = $('#standard_table').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "__SCRIPT__/procedure.php"
        },
        "dom": '<"mybtn btn btn-outline btn-primary"><"myl"l>frtip',
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [6],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='edit(this)' value='编辑'/>";
                    html += "<input type='button' class='btn btn-primary btn-outline btn-xs' style='margin-left: 5px;' onclick='download(this)' value='下载'/>" ;
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
    $("div.mybtn").html('<div>新增</div>');
    $("#standard_wrapper .mybtn").click(function () {
        $("#standard_modal input").val("");
        $("#standard_list").empty();
        $("#standard_modal h5").text("新增");
        $("#standard_modal").modal('show');
        if(!standard_uploader){
            standard_uploader = WebUploader.create({

                auto: false,// 选完文件后，是否自动上传。
                swf: '/static/admin/webupload/Uploader.swf',// swf文件路径
                server: "<?php echo url('Upload/uploadProcedure'); ?>",// 文件接收服务端。
                chunked: false,
                fileSizeLimit: 1000 *1024 *1024,
                fileNumLimit: 1,
                formData: {"uid":"","uname":"","year":"","season":""},
                duplicate :true,// 重复上传图片，true为可重复false为不可重复
                pick: {
                    multiple: false,
                    id: "#standard_upload",
                    innerHTML: "上传文件"
                }
            });

            standard_uploader.on( 'fileQueued', function( file ) {
                file_name2 = file.name;
                $("#standard_per").append('<div id="' + file.id + '" class="item">' +
                    '</div>');
                $("#standard_list").append('<div style="display: inline-block;vertical-align: middle;" class="' + file.id + '" class="item">' +
                    '<span class="info">' + file.name + '</span>&nbsp' +
                    '<span class="webuploadDelbtn" style="color: #0d8ddb;text-decoration: underline;cursor: pointer;">删除</span>' +
                    '</div>' );
            });
            $("#standard_list").on("click", ".webuploadDelbtn", function () {
                var $ele = $(this);
                var id = $ele.parent().attr("class");
                var file = standard_uploader.getFile(id);
                standard_uploader.removeFile(file,true);
            });
            standard_uploader.on('fileDequeued', function (file) {
                $(file.id).remove();
                $('.'+file.id).remove();
                console.log("remove");
            });
            standard_uploader.on("uploadStart",function () {
                standard_uploader.options.formData.uid = $("#id1").val();
                standard_uploader.options.formData.uname = $("#name").val();
                standard_uploader.options.formData.year = $("#year").val();
                standard_uploader.options.formData.season = $("#season").val();
            })
            standard_uploader.on('beforeFileQueued', function (file) {
                if($("#standard_list").html()){
                    alert("只能上传一个文件,请先删除文件");
                    return false;
                }else {
                    return true;
                }
            });
            // 文件上传过程中创建进度条实时显示。
            standard_uploader.on('uploadProgress', function (file, percentage) {
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
            standard_uploader.on( 'uploadSuccess', function( file,data, response ) {
                console.log(file)
                console.log(data)
                layer.msg(data.msg,{icon:1,time:1500,shade: 0.1});
                standard_uploader = null;
                standard_table.ajax.url("__SCRIPT__/procedure.php").load();
                ss_table.ajax.url("__SCRIPT__/prototype_list.php").load();
                cid = "";
                $("#standard_modal").modal('hide');
                $("#standard_per").empty();
            });

            // 文件上传失败，显示上传出错。
            standard_uploader.on( 'uploadError', function( file ) {
                layer.msg("上传失败",{icon:2,time:1500,shade: 0.1});
                $("#standard_per").empty();
                $("#standard_upload").empty();
            });
        }
    });
    $("#standard_modal .btn-primary").click(function () {
        if($("#standard_list").html()){
            if(file_name1 === file_name2){
                $.ajax({
                    url: "./editProcedureNoUpload",
                    type: "post",
                    data: {uid:$("#id1").val(),uname:$("#name").val(),year:$("#year").val(),season:$("#season").val()},
                    datatype: "json",
                    success: function (res) {
                        if(res.code === 1){
                            layer.msg(res.msg,{icon:1,time:1500,shade: 0.1});
                            standard_table.ajax.url("__SCRIPT__/procedure.php").load();
                            ss_table.ajax.url("__SCRIPT__/prototype_list.php").load();
                            cid = "";
                            $("#standard_modal").modal('hide');
                        }else {
                            layer.msg(res.msg,{icon:1,time:1500,shade: 0.1});
                        }
                    }
                })
            }else {
                standard_uploader.upload();
            }
        }else {
            alert("请选择上传文件");
        }

    })
    $("#standard_modal .btn-danger").click(function () {
        standard_uploader = null;
    });
    $("#pro_back").click(function () {
        $("#pro_wrapper").css("display","none");
    })
    $("#back").click(function () {
        $("#container").css("display","none");
        pro_table.ajax.url("__SCRIPT__/procedure_list_sublist.php?group_id=" + cid2).load();
    })
    $("#standard_table").on("click","tbody tr",function () {
        console.log($(this).children("td:first-child").text())
        $("#standard_table tbody tr:nth-child(odd)").css("background-color","#f9f9f9");
        $("#standard_table tbody tr:nth-child(even)").css("background-color","#fff");
        $(this).css("background-color","#E0FFFF");
        cid = $(this).children("td:first-child").text();
        ss_table.ajax.url("__SCRIPT__/procedure_list.php?group_id=" + cid).load();
        $("#ssgy").css("display","block");
    })

    //sstable
    var zTreeObj;
    function sdetail(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();
        cid2 = id;
        pro_table.ajax.url("__SCRIPT__/procedure_list_sublist.php?group_id=" + cid2).load();
        $("#pro_wrapper").css("display","block");
    }
    function sedit(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();
        $.ajax({
            url: "./procedureListEdit",
            type: "post",
            data: {id:id},
            dataType: "json",
            success: function (res) {
                console.log(res);
                if(res.code === 1){
                    $("#id2").val(id);
                    $("#ss_modal h5").text("编辑");
                    zTreeObj.reAsyncChildNodes(null, "refresh");
                    $("#ss_modal").modal("show");
                    $("#ssname").val(res.data.name);
                    $("#sscontent").val(res.data.content);
                    $("#ssremark").val(res.data.remark);
                    $("#ssowner").val(res.data.owner);
                }else {
                    layer.msg(res.msg);
                }
            }
        })
    }
    function sdel(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();
        layer.confirm('确认删除此条记录吗?', {icon: 3, title:'提示'}, function(index){
            $.ajax({
                url: "./procedureListDel",
                data: {'id' : id},
                type: "post",
                dataType: "json",
                success: function (res) {
                    if(res.code == 1){
                        layer.msg(res.msg,{icon:1,time:1500,shade: 0.1});
                        ss_table.ajax.url("__SCRIPT__/procedure_list.php?group_id=" + cid).load();
                    }else{
                        layer.msg(res.msg,{icon:0,time:1500,shade: 0.1});
                    }
                }
            })
            layer.close(index);
        })
    }
    ss_table = $('#ss_table').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "__SCRIPT__/procedure_list.php?group_id=" + cid
        },
        "dom": '<"mybtn btn btn-outline btn-primary"><"myl"l>frtip',
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [6],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='sdetail(this)' value='详情'/>";
                    html += "<input type='button' class='btn btn-primary btn-outline btn-xs' style='margin-left: 5px;' onclick='sedit(this)' value='编辑'/>" ;
                    html += "<input type='button' class='btn btn-danger btn-outline btn-xs' style='margin-left: 5px;' onclick='sdel(this)' value='删除'/>" ;
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
    $("#ssgy .mybtn").click(function () {
        if(!cid || cid == "没有找到记录"){
            layer.msg("请选择标准工艺实施计划");
            return;
        }
        $("#ss_modal input").val("");
        $("#ss_modal textarea").val("");
        zTreeObj.reAsyncChildNodes(null, "refresh");
        $("#group_id2").val(cid);
        $("#ss_modal h5").text("新增");
        $("#ss_modal").modal('show');
    });
    function zTreeOnClick(event, treeId, treeNode) {
        console.log(treeNode);
        if(treeNode.uid){
            $("#ssowner").val(treeNode.name);
        }
    };
    var setting = {
        async: {
            enable : true,
            autoParam: ["pId"],
            type : "post",
            url : "./getOwner",
            dataType :"json"
        },
        data:{
            keep: {
                leaf : true,
                parent : true
            },
            simpleData : {
                enable:true,
                idkey: "id",
                pIdKey: "pId"
            }
        },
        callback: {
            onClick: zTreeOnClick
        }
    };
    zTreeObj = $.fn.zTree.init($("#tree_container"), setting,null);


    //protable
    function pro_detail(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();

        $.ajax({
            url: "./procedureListSublistEdit",
            type: "post",
            data: {id:id},
            dataType: "json",
            success: function (res) {
                console.log(res);
                if(res.code === 1){
                    cid3 = id;
                    check_table1.ajax.url("__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=wjzl").load();
                    check_table4.ajax.url("__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=smyx").load();
                    check_table2.ajax.url("__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=bzhgysfp").load();
                    implement_table1.ajax.url("__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=ss").load();
                    standard_table1.ajax.url("__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=jc").load();
                    standard_table2.ajax.url("__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=bhg").load();
                    standard_table3.ajax.url("__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=smyxzl1").load();
                    summarize_table1.ajax.url("__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=chhzb").load();
                    summarize_table2.ajax.url("__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=abc").load();
                    $("#container").css("display","block");
                    $("#reason").val(res.data.reason);
                }else {
                    layer.msg(res.msg);
                }
            }
        })
    }
    function pro_edit(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();
        $.ajax({
            url: "./procedureListSublistEdit",
            type: "post",
            data: {id:id},
            dataType: "json",
            success: function (res) {
                console.log(res);
                if(res.code === 1){
                    $("#id3").val(id);
                    $("#group_id3").val(cid2);
                    $("#pro_modal h5").text("编辑");
                    zTreeObj2.reAsyncChildNodes(null, "refresh");
                    $("#pro_modal").modal("show");
                    $("#ppart").val(res.data.part);
                    $("#premark").val(res.data.remark);
                    $("#powner").val(res.data.owner);
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
                url: "./procedureListSublistDel",
                data: {'id' : id},
                type: "post",
                dataType: "json",
                success: function (res) {
                    if(res.code == 1){
                        layer.msg(res.msg,{icon:1,time:1500,shade: 0.1});
                        pro_table.ajax.url("__SCRIPT__/procedure_list_sublist.php?group_id=" + cid2).load();
                    }else{
                        layer.msg(res.msg,{icon:0,time:1500,shade: 0.1});
                    }
                }
            })
            layer.close(index);
        })
    }
    var pro_table = $('#pro_table').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "__SCRIPT__/procedure_list_sublist.php?group_id=" + cid2
        },
        "dom": '<"mybtn btn btn-outline btn-primary"><"myl"l>frtip',
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [6],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='pro_detail(this)' value='详情'/>";
                    html += "<input type='button' class='btn btn-primary btn-outline btn-xs' style='margin-left: 5px;' onclick='pro_edit(this)' value='编辑'/>" ;
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
    $("#pro_wrapper .mybtn").click(function () {
        $("#pro_modal input").val("");
        $("#pro_modal textarea").val("");
        zTreeObj2.reAsyncChildNodes(null, "refresh");
        $("#group_id3").val(cid2);
        $("#pro_modal h5").text("新增");
        $("#pro_modal").modal('show');
    });
    var setting2 = {
        async: {
            enable : true,
            autoParam: ["pId"],
            type : "post",
            url : "./getOwner",
            dataType :"json"
        },
        data:{
            keep: {
                leaf : true,
                parent : true
            },
            simpleData : {
                enable:true,
                idkey: "id",
                pIdKey: "pId"
            }
        },
        callback: {
            onClick: zTreeOnClick2
        }
    };
    function zTreeOnClick2(event, treeId, treeNode) {
        console.log(treeNode);
        if(treeNode.uid){
            $("#powner").val(treeNode.name);
        }
    };
    zTreeObj2 = $.fn.zTree.init($("#tree_container2"), setting2,null);

    //流程tab
    $(".exp>span").click(function () {
        var index = $(this).parent("div").index();
        $(".exp>span").css("color","#000");
        $(this).css("color","#ff9933");
        console.log(index)
        $("#flow_content>div").css("display","none").eq(index).css("display","block");
    })

    //datatable

    //文件删除
    var file_name3,file_name4;
    function fdelatt(that) {
        var id = $(that).parent("div").attr("id");
        $.ajax({
            url: "./procedureAttachmentEditDel",
            type: "post",
            data: {id:id},
            datatype: "json",
            success: function (res) {
                if(res.code === 1){
                    $("#"+id).remove();
                }else {
                    layer.msg(res.msg);
                }
            }
        })
    }
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
                        if(parent === "check_table1"){
                            check_table1.ajax.url("__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=wjzl").load();
                        }else if(parent === "check_table4"){
                            check_table4.ajax.url("__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=smyx").load();
                        }else if(parent === "check_table2"){
                            check_table2.ajax.url("__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=bzhgysfp").load();
                        }else if(parent === "implement_table1"){
                            implement_table1.ajax.url("__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=ss").load();
                        }else if(parent === "standard_table1"){
                            standard_table1.ajax.url("__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=jc").load();
                        }else if(parent === "standard_table2"){
                            standard_table2.ajax.url("__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=bhg").load();
                        }else if(parent === "standard_table3"){
                            standard_table3.ajax.url("__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=smyxzl").load();
                        }else if(parent === "summarize_table1"){
                            summarize_table1.ajax.url("__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=chhzb").load();
                        }else if(parent === "summarize_table2"){
                            summarize_table2.ajax.url("__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=abc").load();
                        }
                    }else{
                        layer.msg(res.msg,{icon:0,time:1500,shade: 0.1});
                    }
                }
            })
            layer.close(index);
        })
    }
    function fdownload(that) {
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
                        + "<form name=download"+ id +" action='./attachmentDownload' method='get' target=downloadFrame"+ id +">"
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
    function fedit(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();
        $.ajax({
            url: "./attachmentEdit",
            type: "post",
            data: {id:id},
            dataType: "json",
            success: function (res) {
                console.log(res);
                if(res.code === 1){
                    $("#id4").val(id);
                    $("#file_list").empty();
                    $("#fname h5").text("编辑");
                    if(!uploader){
                        uploader = WebUploader.create({
                            auto: false,// 选完文件后，是否自动上传。
                            swf: '/static/admin/webupload/Uploader.swf',// swf文件路径
                            server: "<?php echo url('Upload/uploadProcedureAttachment'); ?>",// 文件接收服务端。
                            chunked: false,
                            fileSizeLimit: 1000 *1024 *1024,
                            fileNumLimit: 1,
                            formData: {"uid":"","table_name":"","group_id":"","remark":""},
                            duplicate :true,// 重复上传图片，true为可重复false为不可重复
                            pick: {
                                multiple: false,
                                id: "#file_upload",
                                innerHTML: "上传文件"
                            }
                        });

                        uploader.on( 'fileQueued', function( file ) {
                            file_name4 = file.name;
                            console.log($("#id4").val());
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
                            uploader.options.formData.uid = $("#id4").val();
                            uploader.options.formData.table_name = mytablename;
                            uploader.options.formData.group_id = cid3;
                            uploader.options.formData.remark = $("#fremark").val();
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
                        uploader.on('beforeFileQueued', function (file) {
                            if($("#file_list").html()){
                                alert("请先删除文件");
                                return false;
                            }else {
                                return true;
                            }
                        });
                        // 文件上传成功
                        uploader.on( 'uploadSuccess', function( file,data, response ) {
                            console.log(file)
                            console.log(data)
                            if(data.code === 1){
                                layer.msg(data.msg,{icon:1,time:1500,shade: 0.1});
                                table_refresh();
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
                            uploader = null;
                            $("#file_upload").empty();
                        });
                    }
                    $("#fname").modal("show");
                    $("#fremark").val(res.data.remark);
                    file_name3 = res.data.name;
                    file_name4 = res.data.name;
                    if(res.data.path){
                        $("#file_list").append('<div style="display: inline-block;vertical-align: middle;" id="' + res.data.id + '" class="item">' +
                            '<span class="info">' + res.data.name + '</span>&nbsp' +
                            '<span onclick="fdelatt(this)" style="color: #0d8ddb;text-decoration: underline;cursor: pointer;">删除</span>' +
                            '</div>' );
                    }
                }else {
                    layer.msg(res.msg);
                }
            }
        })
    }
    function unqua(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();
        var parent = $(that).parent("td").parent("tr").parent("tbody").parent("table").attr("id");
        layer.confirm('确认将此条记录设为不合格吗?', {icon: 3, title:'提示'}, function(index){
            $.ajax({
                url: "./sendBack",
                data: {'id' : id,group_id:cid3},
                type: "post",
                dataType: "json",
                success: function (res) {
                    if(res.code == 1){
                        layer.msg(res.msg,{icon:1,time:1500,shade: 0.1});
                        implement_table1.ajax.url("__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=ss").load();
                        standard_table1.ajax.url("__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=jc").load();
                        standard_table2.ajax.url("__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=bhg").load();
                    }else{
                        layer.msg(res.msg,{icon:0,time:1500,shade: 0.1});
                    }
                }
            })
            layer.close(index);
        })
    }
    function showpdf2(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();
        showPdf(id,"./attachmentPreview");
    }
    $("#fname .btn-primary").click(function () {
        if($("#file_list").html()){
            if(!$("#id4").val()){
                uploader.upload();
            }else {
                if(file_name3 === file_name4){
                    $.ajax({
                        url: "./editProcedureAttachmentNoUpload",
                        type: "post",
                        data: {uid:$("#id4").val(),remark:$("#fremark").val(),group_id:cid3,table_name:mytablename},
                        datatype: "json",
                        success: function (res) {
                            if(res.code === 1){
                                layer.msg(res.msg,{icon:1,time:1500,shade: 0.1});
                                table_refresh();
                                $("#fname").modal('hide');
                            }else {
                                layer.msg(res.msg,{icon:1,time:1500,shade: 0.1});
                            }
                        }
                    })
                }else {
                    uploader.upload();
                }
            }
        }else {
            alert("请选择上传文件");
        }
    })

    var check_table1 = $('#check_table1').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=wjzl",
            "async": false
        },
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [5],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='fdownload(this)' value='下载'/>";
                    html += "<input type='button' class='btn btn-primary btn-outline btn-xs' style='margin-left: 5px;' onclick='fedit(this)' value='编辑'/>" ;
                    html += "<input type='button' class='btn btn-success btn-outline btn-xs' style='margin-left: 5px;' onclick='showpdf2(this)' value='预览'/>" ;
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
            "url": "__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=smyx",
            "async": false
        },
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [5],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='fdownload(this)' value='下载'/>";
                    html += "<input type='button' class='btn btn-primary btn-outline btn-xs' style='margin-left: 5px;' onclick='fedit(this)' value='编辑'/>" ;
                    html += "<input type='button' class='btn btn-success btn-outline btn-xs' style='margin-left: 5px;' onclick='showpdf2(this)' value='预览'/>" ;
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
            "url": "__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=bzhgysfp",
            "async": false
        },
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [5],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='fdownload(this)' value='下载'/>";
                    html += "<input type='button' class='btn btn-primary btn-outline btn-xs' style='margin-left: 5px;' onclick='fedit(this)' value='编辑'/>" ;
                    html += "<input type='button' class='btn btn-success btn-outline btn-xs' style='margin-left: 5px;' onclick='showpdf2(this)' value='预览'/>" ;
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

    var implement_table1 = $('#implement_table1').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=ss",
            "async": false
        },
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [5],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='fdownload(this)' value='下载'/>";
                    html += "<input type='button' class='btn btn-primary btn-outline btn-xs' style='margin-left: 5px;' onclick='fedit(this)' value='编辑'/>" ;
                    html += "<input type='button' class='btn btn-success btn-outline btn-xs' style='margin-left: 5px;' onclick='showpdf2(this)' value='预览'/>" ;
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
            "url": "__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=jc",
            "async": false
        },
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [5],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='fdownload(this)' value='下载'/>";
                    html += "<input type='button' class='btn btn-primary btn-outline btn-xs' style='margin-left: 5px;' onclick='fedit(this)' value='编辑'/>" ;
                    html += "<input type='button' class='btn btn-success btn-outline btn-xs' style='margin-left: 5px;' onclick='showpdf2(this)' value='预览'/>" ;
                    html += "<input type='button' class='btn btn-danger btn-outline btn-xs' style='margin-left: 5px;' onclick='fdel(this)' value='删除'/>" ;
                    html += "<input type='button' class='btn btn-warning btn-outline btn-xs' style='margin-left: 5px;' onclick='unqua(this)' value='不合格'/>" ;
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
            "url": "__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=bhg",
            "async": false
        },
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [5],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='fdownload(this)' value='下载'/>";
                    html += "<input type='button' class='btn btn-primary btn-outline btn-xs' style='margin-left: 5px;' onclick='fedit(this)' value='编辑'/>" ;
                    html += "<input type='button' class='btn btn-success btn-outline btn-xs' style='margin-left: 5px;' onclick='showpdf2(this)' value='预览'/>" ;
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

    var standard_table3 = $('#standard_table3').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=smyxzl1",
            "async": false
        },
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [5],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='fdownload(this)' value='下载'/>";
                    html += "<input type='button' class='btn btn-primary btn-outline btn-xs' style='margin-left: 5px;' onclick='fedit(this)' value='编辑'/>" ;
                    html += "<input type='button' class='btn btn-success btn-outline btn-xs' style='margin-left: 5px;' onclick='showpdf2(this)' value='预览'/>" ;
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
            "url": "__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=chhzb",
            "async": false
        },
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [5],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='fdownload(this)' value='下载'/>";
                    html += "<input type='button' class='btn btn-primary btn-outline btn-xs' style='margin-left: 5px;' onclick='fedit(this)' value='编辑'/>" ;
                    html += "<input type='button' class='btn btn-success btn-outline btn-xs' style='margin-left: 5px;' onclick='showpdf2(this)' value='预览'/>" ;
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

    var summarize_table2 = $('#summarize_table2').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "__SCRIPT__/procedure_attachment.php?group_id=" + cid3 + "&table_name=abc",
            "async": false
        },
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [5],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='fdownload(this)' value='下载'/>";
                    html += "<input type='button' class='btn btn-primary btn-outline btn-xs' style='margin-left: 5px;' onclick='fedit(this)' value='编辑'/>" ;
                    html += "<input type='button' class='btn btn-success btn-outline btn-xs' style='margin-left: 5px;' onclick='showpdf2(this)' value='预览'/>" ;
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
    //sstable
    $("#ss_modal .btn-primary").click(function () {
        $('#ssAdd').ajaxForm({
            success: function (data) {
                if(data.code === 1){
                    $("#ss_modal").modal('hide');
                    layer.msg(data.msg);
                    ss_table.ajax.url("__SCRIPT__/procedure_list.php?group_id=" + cid).load();
                }else{
                    layer.msg(data.msg, {icon: 5,time:1500,shade: 0.1});
                    return false;
                }
            },
            dataType: 'json'
        });
    })
    //protable
    $("#pro_modal .btn-primary").click(function () {
        $('#pro_modalAdd').ajaxForm({
            success: function (data) {
                if(data.code === 1){
                    $("#pro_modal").modal('hide');
                    layer.msg(data.msg);
                    pro_table.ajax.url("__SCRIPT__/procedure_list_sublist.php?group_id=" + cid2).load();
                }else{
                    layer.msg(data.msg, {icon: 5,time:1500,shade: 0.1});
                    return false;
                }
            },
            dataType: 'json'
        });
    })
    //save
    $("#mysave1").click(function () {
        $.ajax({
            url: "./procedureListSublistAdd",
            type: "post",
            data: {id:cid3,reason:$("#reason").val()},
            dataType: "json",
            success: function (res) {
                if(res.code === 1){
                    layer.msg(data.msg);
                }else{
                    layer.msg(data.msg, {icon: 5,time:1500,shade: 0.1});
                    return false;
                }
            }
        })
    })
</script>
</html>
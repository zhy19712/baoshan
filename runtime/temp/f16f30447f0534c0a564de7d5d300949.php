<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:90:"C:\phpStudy\PHPTutorial\WWW\shuzi\public/../application/quality\view\acceptance\index.html";i:1517675489;s:87:"C:\phpStudy\PHPTutorial\WWW\shuzi\public/../application/quality\view\public\header.html";i:1517675489;s:87:"C:\phpStudy\PHPTutorial\WWW\shuzi\public/../application/quality\view\public\footer.html";i:1516333031;}*/ ?>
<link rel="stylesheet" type="text/css" href="/static/admin/webupload/webuploader.css">
<link rel="stylesheet" type="text/css" href="/static/admin/webupload/style.css">
<link rel="stylesheet" href="/static/admin/css/zTreeStyle/zTreeStyle.css">
<link rel="stylesheet" href="/static/admin/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="/static/admin/css/jedate.css">
<link rel="stylesheet" href="/static/admin/css/iconfont.css">
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
<style>
    #container form{
        display: none;
    }
    .mybtn1{
        margin-right: 30px;
        float: left;
    }
    .mybtn{
        float: left;
        width: 100px;
        line-height: 30px;
        text-align: center;
        background-color: #a8d0e1;
        font-weight: 700;
        border: 1px solid #000;
        border-bottom: none;
        margin-right: 20px;
        border-radius: 5px 5px 0 0;
    }
    #upload{
        float: right;
        width: 88px;
        height: 30px;
        text-align: center;
        color: #fff;
        line-height: 30px;
        margin-right: 20px;
        cursor: pointer;
    }
    .webuploader-pick{
        padding: 0 15px;
    }
    #mylist{
        float: right;
        font-size: 14px;
        font-weight: 700;
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
    #path{
        line-height: 30px;
        font-weight: 700;
        border-bottom: 1px solid #000;
    }
    #operate,#add{
        height: 50px;
    }
    #operate>div{
        float: right;
        margin: 10px 10px;
        cursor: pointer;
    }
    #operate>div>span,#add span{
        display: inline-block;
        width: 60px;
        height: 30px;
        background-color: #ffad5c;
        color: #fff;
        font-size: 14px;
        text-align: center;
        line-height: 30px;
    }
    #operate>div>i:first-child,#add i:first-child{
        display: inline-block;
        width: 15px;
        height: 30px;
        background-color: #ffad5c;
        border-radius: 30px 0 0 30px;
        vertical-align: top;
    }
    #operate>div>i:nth-child(3),#add i:nth-child(3){
        display: inline-block;
        width: 15px;
        height: 30px;
        background-color: #ffad5c;
        border-radius: 0 30px 30px 0;
        vertical-align: top;
    }
    #readonly table{
        width: 100%;
        border: 1px solid #000;
        line-height: 30px;
        text-align: center;
    }
    #readonly>table input{
        border: none;
        outline: none;
        width: 100%;
        text-align: center;
    }
    .border-right{
        border-right: 1px solid #000;
        font-weight: 700;
    }
    .border-bottom{
        border-bottom: 1px solid #000 !important;
    }
    .border-left{
        border-left: 1px solid #000;
    }
    #readonly .info{
        margin-top: 20px;
        border: 1px solid #000;
        font-size: 0;
        background-color: #bae2f3;
    }
    #readonly .info>span{
        display: inline-block;
        vertical-align: middle;
        text-align: center;
        min-width: 14%;
        font-size: 14px;
        line-height: 38px;
    }
    #readonly .info select{
        width: 100px;
        font-size: 14px;
    }
    .db{
        display: inline-block;
        vertical-align: middle;
        margin-left: 20px;
        font-size: 14px;
        padding-top: 6px;
    }
    .db input,.bottom input{
        line-height: 20px;
    }
    .exp{
        display: inline-block;
        vertical-align: middle;
        line-height: 34px;
        width: 86%;
        background-color: #fff;
        border-left: 1px solid #000;
    }
    .exp .top{
        width: 100%;
        font-size: 0;
    }
    .exp .top span{
        display: inline-block;
        width: 18%;
        margin: 0 1%;
        font-size: 14px;
        text-align: center;
        height: 40px;
    }
    .exp .bottom input{
        display: inline-block;
        width: 18%;
        margin: 0 1%;
        font-size: 14px;
        margin-top: 10px;
    }
    #model1 .w2 input,#model1 .w2 span,#model3 .w3 input,#model3 .w3 span{
        width: 14%;
    }
    #model3 .w2 input,#model3 .w2 span{
        width: 12%;
    }
    #model3 .sp1,#model3 .w4 .top>span{
        width: 22%;
    }
    .sp1{
        display: inline-block;
        font-size: 14px;
        text-align: center;
        margin: 0 1%;
    }
    .sp1 input{
        line-height: 20px;
        width: 100%;
    }
    #table_wrapper>table,#myModal table{
        border: none;
        border-left: 1px solid #000;
        border-right: 1px solid #000;
    }
    #myModal table:first-child{
        margin-top: 20px;
        border-top: 1px solid #000;
    }
    #table_wrapper>table td,#myModal table td{
        border-bottom: 1px solid #000;
    }
    #table_wrapper>table td:first-child,#myModal table td:first-child{
        width: 120px;
    }
    #table_wrapper>table input,#myModal table input{
        line-height: 20px;
        width: 90%;
    }
    #myModal table{
        width: 100%;
        line-height: 30px;
    }
    #zhihutable_wrapper th{
        text-align: center;
    }
    #level5{
        display: none;
    }
    #table_info{
        visibility: hidden;
    }
    #level2 table,#level3 table{
        width: 100%;
        border-top: 1px solid #000;
        border-left: 1px solid #000;
        margin-top: 20px;
        line-height: 30px;
    }
    #level2 table td,#level2 table th,#level3 table td,#level3 table th{
        border-bottom: 1px solid #000;
        border-right: 1px solid #000;
        text-align: center;
    }
    #level2 thead,#level3 thead{
        background-color: #bae2f3;
        text-align: center;
    }
    #level2 table select,#level3 table select{
        width: 100px;
    }
    .grade{
        display: inline-block;
        vertical-align: middle;
        width: 25%;
    }
    .grade input{
        line-height: 16px;
        width: 80px;
    }
    .style1{
        background-color: #bae2f3;
        font-weight: 700;
    }
    .lightbox{
        position: fixed;
        top: 0px;
        left: 0px;
        height: 100%;
        width: 100%;
        z-index: 7;
        opacity: 0.3;
        display: block;
        background-color: rgb(0, 0, 0);
    }
    .pop{
        position: absolute;
        left: 50%;
        width: 894px;
        margin-left: -447px;
        z-index: 9;
    }
    #admin_table th{
        font-size: 13px;
    }
    #admin_table td{
        font-size: 12px;
    }
</style>
<body class="gray-bg" style="background-color:#fff;">
<div id="mycontent" style="width: 20%;height: 98%;display: inline-block;margin: 0 10px;background-color:#fff;overflow-x: scroll;padding-top: 20px;padding-right:10px;border-right: 1px solid #ccc;">
    <div style="text-align: center;background-color:#1ab394;line-height: 30px;color: #fff;">工程划分</div>
    <div id="tree_container" class="ztree"></div>
    <p style="display: none;"></p>
</div>
<div id="pdf_container" style="display: none;">
    <div class="lightbox"></div>
    <div id="pop" class="pop">
        <canvas id="the-canvas"></canvas>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight" style="display: inline-block;width: 78%;vertical-align: top;padding: 0;">
    <div class="ibox float-e-margins">
        <div class="ibox-content">
            <div class="row">
                <div id="path">当前路径:</div>
                <div id="table_info">
                    <div id="level2">
                        <table>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <div id="level3">
                    <table>
                        <thead>
                        <tr>
                            <th>项次</th>
                            <th>单元工程类别</th>
                            <th>单元个数</th>
                            <th>合格个数</th>
                            <th>优良个数</th>
                            <th>优良率</th>
                            <th>分部工程质量等级</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                    <div id="level5">
                        <div id="operate">
                            <div id="revise">
                                <i></i><span>修改</span><i></i>
                            </div>
                            <div id="save">
                                <i></i><span>保存</span><i></i>
                            </div>
                        </div>
                        <div id="readonly">
                            <table>
                                <tbody>
                                <tr class="border-bottom">
                                    <td class="border-right">单元工程名称</td>
                                    <td colspan="4"><input type="text" readonly="readonly" id="input1"></td>
                                    <td class="border-right border-left">单元工程编号</td>
                                    <td colspan="4"><input type="text" readonly="readonly" id="input2"></td>
                                </tr>
                                <tr>
                                    <td class="border-right">桩号</td>
                                    <td>起:</td>
                                    <td><input type="text" readonly="readonly" id="input3"></td>
                                    <td>止:</td>
                                    <td><input type="text" readonly="readonly" id="input4"></td>
                                    <td class="border-right border-left">高程</td>
                                    <td>起:</td>
                                    <td><input type="text" readonly="readonly" id="input5"></td>
                                    <td>止:</td>
                                    <td><input type="text" readonly="readonly" id="input6"></td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="info">
                                <span style="vertical-align: top;width: 40%">主要单元工程、重要隐蔽工程及关键部位的单元工程</span>
                                <div id="ipt7_wrapper" style="background-color:#fff;display: inline-block;vertical-align:top;width: 60%;height: 38px;border-left: 1px solid #000;">
                                    <input type="text" readonly="readonly" id="input7" style="font-size: 14px;border: none;margin-top: 8px;margin-left: 30px;">
                                </div>
                            </div>
                            <div id="container">
                                <form class="form-horizontal" name="model1" id="model1">
                                    <input type="text" id="edit1" name="edit" style="display: none;">
                                    <input type="text" id="uid1" name="uid" style="display: none;">
                                    <input type="text" id="cate1" name="cate" style="display: none;">
                                    <div class="info">
                                        <span style="vertical-align: top;">验评结果</span>
                                        <div id="db_wrapper" style="background-color:#fff;display: inline-block;vertical-align:top;width: 86%;height: 38px;border-left: 1px solid #000;">
                                            <div class="db">
                                                <span>一检合格</span>
                                                <select name="pass" id="pass">
                                                    <option value="是">是</option>
                                                </select>
                                            </div>
                                            <div class="db">
                                                <span>质量等级</span>
                                                <select name="quality_level" id="quality_level">
                                                    <option value="尚未评定">尚未评定</option>
                                                    <option value="优良">优良</option>
                                                    <option value="合格">合格</option>
                                                </select>
                                            </div>
                                            <div class="db">
                                                <span>评定日期</span>
                                                <input type="text" id="evaluated_date" name="evaluated_date">
                                            </div>
                                            <div class="db">
                                                <span>评定人</span>
                                                <input type="text" id="evaluated_by" name="evaluated_by">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <span>半孔率</span>
                                        <div class="exp">
                                            <div class="top border-bottom">
                                                <span>检查孔数(个)</span>
                                                <span>平均进尺(m)</span>
                                                <span>平均残孔长度(m)</span>
                                                <span>半孔率(%)</span>
                                                <span>检查时间</span>
                                            </div>
                                            <div class="bottom">
                                                <input type="text" id="holes" name="holes" placeholder="只能输入整数">
                                                <input type="text" id="ave_size" name="ave_size" placeholder="最多保留一位小数">
                                                <input type="text" id="ave_length" name="ave_length" placeholder="最多保留一位小数">
                                                <input type="text" id="half_percentage" name="half_percentage">
                                                <input type="text" id="holes_test_date" name="holes_test_date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <span>不平整度</span>
                                        <div class="exp w2">
                                            <div class="top border-bottom">
                                                <span>检查断面(个)</span>
                                                <span>检查点数(个)</span>
                                                <span>最大值(cm)</span>
                                                <span>最小值(cm)</span>
                                                <span>平均值(cm)</span>
                                                <span>检查时间</span>
                                            </div>
                                            <div class="bottom">
                                                <input type="text" name="sections" id="sections">
                                                <input type="text" name="points" id="points">
                                                <input type="text" name="max" id="max">
                                                <input type="text" name="min" id="min">
                                                <input type="text" name="ave" id="ave">
                                                <input type="text" name="sections_test_date" id="sections_test_date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <span>轮廓体型(超挖)</span>
                                        <div class="exp w2">
                                            <div class="top border-bottom">
                                                <span>检查断面(个)</span>
                                                <span>检查点数(个)</span>
                                                <span>最大超挖(cm)</span>
                                                <span>最小超挖(cm)</span>
                                                <span>平均超挖(cm)</span>
                                                <span>合格率(%)</span>
                                            </div>
                                            <div class="bottom">
                                                <input type="text" name="sections_overbreak" id="sections_overbreak">
                                                <input type="text" name="points_overbreak" id="points_overbreak">
                                                <input type="text" name="max_overbreak" id="max_overbreak">
                                                <input type="text" name="min_overbreak" id="min_overbreak">
                                                <input type="text" name="ave_overbreak" id="ave_overbreak">
                                                <input type="text" name="pass_overbreak" id="pass_overbreak">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info" style="margin-top: 0;border-top: none;">
                                        <span>轮廓体型(欠挖)</span>
                                        <div class="exp w2">
                                            <div class="top border-bottom">
                                                <span>检查断面(个)</span>
                                                <span>检查点数(个)</span>
                                                <span>最大欠挖(cm)</span>
                                                <span>最小欠挖(cm)</span>
                                                <span>平均欠挖(cm)</span>
                                                <span>合格率(%)</span>
                                            </div>
                                            <div class="bottom">
                                                <input type="text" name="sections_underbreak" id="sections_underbreak">
                                                <input type="text" name="points_underbreak" id="points_underbreak">
                                                <input type="text" name="max_underbreak" id="max_underbreak">
                                                <input type="text" name="min_underbreak" id="min_underbreak">
                                                <input type="text" name="ave_underbreak" id="ave_underbreak">
                                                <input type="text" name="pass_underbreak" id="pass_underbreak">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <form class="form-horizontal" name="model2" id="model2">
                                    <input type="text" id="edit2" name="edit" style="display: none;">
                                    <input type="text" id="uid2" name="uid" style="display: none;">
                                    <input type="text" id="cate2" name="cate" style="display: none;">
                                    <div class="info">
                                        <span style="vertical-align: top;">验评结果</span>
                                        <div style="background-color:#fff;display: inline-block;vertical-align:top;width: 86%;height: 38px;border-left: 1px solid #000;">
                                            <div class="db">
                                                <span>一检合格</span>
                                                <select name="pass" id="pass2">
                                                    <option value="是">是</option>
                                                </select>
                                            </div>
                                            <div class="db">
                                                <span>质量等级</span>
                                                <select name="quality_level" id="quality_level2">
                                                    <option value="尚未评定">尚未评定</option>
                                                    <option value="优良">优良</option>
                                                    <option value="合格">合格</option>
                                                </select>
                                            </div>
                                            <div class="db">
                                                <span>评定日期</span>
                                                <input type="text" id="evaluated_date2" name="evaluated_date">
                                            </div>
                                            <div class="db">
                                                <span>评定人</span>
                                                <input type="text" id="evaluated_by2" name="evaluated_by">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="table_wrapper">
                                        <table style="margin-top: 20px;border-top: 1px solid #000;border-right: 1px solid #000;">
                                            <tbody>
                                            <tr>
                                                <td style="background-color:#bae2f3;border-right: 1px solid #000;">喷砼检测</td>
                                                <td colspan="7"></td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2" style="border-right: 1px solid #000;font-weight: 700;">厚度检测<br><span style="font-weight: 400;">(联合检测)</span></td>
                                                <td>支护面积(m²)</td>
                                                <td>设计厚度(cm)</td>
                                                <td>检测点数(个)</td>
                                                <td>最大值(cm)</td>
                                                <td>最小值(cm)</td>
                                                <td style="border-right: 1px solid #000;">平均值(cm)</td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="area" id="area2"></td>
                                                <td><input type="text" name="thickness" id="thickness2"></td>
                                                <td><input type="text" name="points" id="points2"></td>
                                                <td><input type="text" name="max" id="max2"></td>
                                                <td><input type="text" name="min" id="min2"></td>
                                                <td style="border-right: 1px solid #000;"><input type="text" name="ave" id="ave2"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <table>
                                            <tr>
                                                <td rowspan="2" style="border-right: 1px solid #000;font-weight: 700;">强度检测<br><span style="font-weight: 400;">(施工单位自检)</span></td>
                                                <td>施工数量(个)</td>
                                                <td>施工单位自检根数(个)</td>
                                                <td>检测比例(%)</td>
                                                <td>合格根数(个)</td>
                                                <td>锚杆长度最大值(m)</td>
                                                <td>锚杆长度最小值(m)</td>
                                                <td>注浆密实度最大值(m)</td>
                                                <td>注浆密实度最小值(m)</td>
                                                <td>合格率(%)</td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="quantity_self" id="quantity_self2"></td>
                                                <td><input type="text" name="num_self" id="num_self2"></td>
                                                <td><input type="text" name="ratio_self" id="ratio_self2"></td>
                                                <td><input type="text" name="pass_self" id="pass_self2"></td>
                                                <td><input type="text" name="anchor_max_self" id="anchor_max_self2"></td>
                                                <td><input type="text" name="anchor_min_self" id="anchor_min_self2"></td>
                                                <td><input type="text" name="casting_max_self" id="casting_max_self2"></td>
                                                <td><input type="text" name="casting_min_self" id="casting_min_self2"></td>
                                                <td><input type="text" name="pass_rate_self" id="pass_rate_self2"></td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2" style="border-right: 1px solid #000;font-weight: 700;">强度检测<br><span style="font-weight: 400;">(监理单位自检)</span></td>
                                                <td>施工数量(个)</td>
                                                <td>施工单位自检根数(个)</td>
                                                <td>检测比例(%)</td>
                                                <td>合格根数(个)</td>
                                                <td>锚杆长度最大值(m)</td>
                                                <td>锚杆长度最小值(m)</td>
                                                <td>注浆密实度最大值(m)</td>
                                                <td>注浆密实度最小值(m)</td>
                                                <td>合格率(%)</td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="quantity_inspection" id="quantity_inspection2"></td>
                                                <td><input type="text" name="num_inspection" id="num_inspection2"></td>
                                                <td><input type="text" name="ratio_inspection" id="ratio_inspection2"></td>
                                                <td><input type="text" name="pass_inspection" id="pass_inspection2"></td>
                                                <td><input type="text" name="anchor_max_inspection" id="anchor_max_inspection2"></td>
                                                <td><input type="text" name="anchor_min_inspection" id="anchor_min_inspection2"></td>
                                                <td><input type="text" name="casting_max_inspection" id="casting_max_inspection2"></td>
                                                <td><input type="text" name="casting_min_inspection" id="casting_min_inspection2"></td>
                                                <td><input type="text" name="pass_rate_inspection" id="pass_rate_inspection2"></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div id="zhihutable_wrapper" style="margin-top: 20px;">
                                        <table id="zhihu_table" width="100%" class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>规格</th>
                                                <th>操作</th>
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>


                                </form>
                                <form class="form-horizontal" name="model3" id="model3">
                                    <input type="text" id="edit3" name="edit" style="display: none;">
                                    <input type="text" id="uid3" name="uid" style="display: none;">
                                    <input type="text" id="cate3" name="cate" style="display: none;">
                                    <div class="info">
                                        <span style="vertical-align: top;">验评结果</span>
                                        <div style="background-color:#fff;display: inline-block;vertical-align:top;width: 86%;height: 38px;border-left: 1px solid #000;">
                                            <div class="db">
                                                <span>一检合格</span>
                                                <select name="pass" id="pass3">
                                                    <option value="是">是</option>
                                                </select>
                                            </div>
                                            <div class="db">
                                                <span>质量等级</span>
                                                <select name="quality_level" id="quality_level3">
                                                    <option value="尚未评定">尚未评定</option>
                                                    <option value="优良">优良</option>
                                                    <option value="合格">合格</option>
                                                </select>
                                            </div>
                                            <div class="db">
                                                <span>评定日期</span>
                                                <input type="text" id="evaluated_date3" name="evaluated_date">
                                            </div>
                                            <div class="db">
                                                <span>评定人</span>
                                                <input type="text" id="evaluated_by3" name="evaluated_by">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <span>抗压强度检测<br>(施工单位自检)</span>
                                        <div class="exp w2">
                                            <div class="top border-bottom">
                                                <span>设计指标</span>
                                                <span>方量(m³)</span>
                                                <span>施工单位自检组数(个)</span>
                                                <span>最大值(Mpa)</span>
                                                <span>最小值(Mpa)</span>
                                                <span>平均值(Mpa)</span>
                                                <span>合格率(%)</span>
                                            </div>
                                            <div class="bottom">
                                                <input type="text" name="requirement_self" id="requirement_self">
                                                <input type="text" name="volume_self" id="volume_self">
                                                <input type="text" name="num_self" id="num_self">
                                                <input type="text" name="max_self" id="max_self">
                                                <input type="text" name="min_self" id="min_self">
                                                <input type="text" name="ave_self" id="ave_self">
                                                <input type="text" name="pass_self" id="pass_self">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info" style="margin-top: 0;border-top: none;">
                                        <span>抗压强度检测<br>(监理单位自检)</span>
                                        <div class="exp w2">
                                            <div class="top border-bottom">
                                                <span>设计指标</span>
                                                <span>方量(m³)</span>
                                                <span>监理单位自检组数(个)</span>
                                                <span>最大值(Mpa)</span>
                                                <span>最小值(Mpa)</span>
                                                <span>平均值(Mpa)</span>
                                                <span>合格率(%)</span>
                                            </div>
                                            <div class="bottom">
                                                <input type="text" name="requirement_inspection" id="requirement_inspection">
                                                <input type="text" name="volume_inspection" id="volume_inspection">
                                                <input type="text" name="num_inspection" id="num_inspection">
                                                <input type="text" name="max_inspection" id="max_inspection">
                                                <input type="text" name="min_inspection" id="min_inspection">
                                                <input type="text" name="ave_inspection" id="ave_inspection">
                                                <input type="text" name="pass_inspection" id="pass_inspection">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <span>混凝土形体偏差检测<br>(联合检测)</span>
                                        <div class="exp w4">
                                            <div class="top border-bottom">
                                                <span>偏差方向</span>
                                                <span>测点数(个)</span>
                                                <span>偏差范围(mm)</span>
                                                <span>合格率(%)</span>
                                            </div>
                                            <div class="top border-bottom">
                                                <div class="sp1">平面</div>
                                                <div class="sp1"><input type="text" name="points_flat" id="points_flat"></div>
                                                <div class="sp1"><input type="text" name="deviation_min_flat" id="deviation_min_flat" style="width: 40%;"><span>-</span><input type="text" name="deviation_max_flat" id="deviation_max_flat" style="width: 40%;"></div>
                                                <div class="sp1"><input type="text" name="pass_flat" id="pass_flat"></div>
                                            </div>
                                            <div class="top">
                                                <div class="sp1">竖向</div>
                                                <div class="sp1"><input type="text" name="points_vertical" id="points_vertical"></div>
                                                <div class="sp1"><input type="text" name="deviation_min_vertical" id="deviation_min_vertical" style="width: 40%;"><span>-</span><input type="text" name="deviation_max_vertical" id="deviation_max_vertical" style="width: 40%;"></div>
                                                <div class="sp1"><input type="text" name="pass_vertical" id="pass_vertical"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info" style="">
                                        <span>混凝土平整度检测<br>(联合检测)</span>
                                        <div class="exp w3">
                                            <div class="top border-bottom">
                                                <span>设计/规范允许偏差值(mm)</span>
                                                <span>检查点数(个)</span>
                                                <span>最大值(mm)</span>
                                                <span>最小值(mm)</span>
                                                <span>平均值(mm)</span>
                                                <span>合格率(%)</span>
                                            </div>
                                            <div class="bottom">
                                                <input type="text" name="allowable_deviation" id="allowable_deviation">
                                                <input type="text" name="points_union" id="points_union">
                                                <input type="text" name="max_union" id="max_union">
                                                <input type="text" name="min_union" id="min_union">
                                                <input type="text" name="ave_union" id="ave_union">
                                                <input type="text" name="pass_union" id="pass_union">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="mytable1_wrapper" style="margin-top: 20px;">
                        <table id="admin_table" width="100%" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>文件名称</th>
                                <th>上传人</th>
                                <th>单位/部门</th>
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
</div>

<div id="myModal" data-keyboard="false" data-backdrop="static" class="modal animated fadeInRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width: 80%;margin: 0 auto;margin-top: 40px;">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>新增</h5>
                </div>
                <div class="ibox-content">
                    <!--新增用户信息开始-->
                    <iframe name="myFrame" style="display:none;"></iframe>
                    <form class="form-horizontal" name="projectAdd" id="projectAdd" target="myFrame">
                        <input type="text" id="edit4" name="edit" style="display: none;">
                        <input type="text" id="uid4" name="uid" style="display: none;">
                        <input type="text" id="cate4" name="cate" style="display: none;">
                        <div class="form-group" style="text-align: center;">
                            <table>
                                <tbody>
                                <tr>
                                    <td style="background-color:#bae2f3;border-right: 1px solid #000;">锚杆检测</td>
                                    <td>规格</td>
                                    <td colspan="2"><input type="text" name="standard" id="standard_m"></td>
                                    <td colspan="6"></td>
                                </tr>
                                <tr>
                                    <td rowspan="2" style="border-right: 1px solid #000;font-weight: 700;">无损检测<br><span style="font-weight: 400;">(施工单位自检)</span></td>
                                    <td>施工数量(个)</td>
                                    <td>施工单位自检根数(个)</td>
                                    <td>检测比例(%)</td>
                                    <td>合格根数(个)</td>
                                    <td>锚杆长度最大值(m)</td>
                                    <td>锚杆长度最小值(m)</td>
                                    <td>注浆密实度最大值(%)</td>
                                    <td>注浆密实度最小值(%)</td>
                                    <td>合格率(%)</td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="quantity_self" id="quantity_self_m"></td>
                                    <td><input type="text" name="num_self" id="num_self_m"></td>
                                    <td><input type="text" name="ratio_self" id="ratio_self_m"></td>
                                    <td><input type="text" name="pass_self" id="pass_self_m"></td>
                                    <td><input type="text" name="anchor_max_self" id="anchor_max_self_m"></td>
                                    <td><input type="text" name="anchor_min_self" id="anchor_min_self_m"></td>
                                    <td><input type="text" name="casting_max_self" id="casting_max_self_m"></td>
                                    <td><input type="text" name="casting_min_self" id="casting_min_self_m"></td>
                                    <td><input type="text" name="pass_rate_self" id="pass_rate_self_m"></td>
                                </tr>
                                <tr>
                                    <td rowspan="2" style="border-right: 1px solid #000;font-weight: 700;">无损检测<br><span style="font-weight: 400;">(监理单位抽检)</span></td>
                                    <td>施工数量(个)</td>
                                    <td>施工单位自检根数(个)</td>
                                    <td>检测比例(%)</td>
                                    <td>合格根数(个)</td>
                                    <td>锚杆长度最大值(m)</td>
                                    <td>锚杆长度最小值(m)</td>
                                    <td>注浆密实度最大值(%)</td>
                                    <td>注浆密实度最小值(%)</td>
                                    <td>合格率(%)</td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="quantity_inspection" id="quantity_inspection_m"></td>
                                    <td><input type="text" name="num_inspection" id="num_inspection_m"></td>
                                    <td><input type="text" name="ratio_inspection" id="ratio_inspection_m"></td>
                                    <td><input type="text" name="pass_inspection" id="pass_inspection_m"></td>
                                    <td><input type="text" name="anchor_max_inspection" id="anchor_max_inspection_m"></td>
                                    <td><input type="text" name="anchor_min_inspection" id="anchor_min_inspection_m"></td>
                                    <td><input type="text" name="casting_max_inspection" id="casting_max_inspection_m"></td>
                                    <td><input type="text" name="casting_min_inspection" id="casting_min_inspection_m"></td>
                                    <td><input type="text" name="pass_rate_inspection" id="pass_rate_inspection_m"></td>
                                </tr>
                                </tbody>
                            </table>
                            <table>
                                <tr>
                                    <td rowspan="2" style="border-right: 1px solid #000;font-weight: 700;">拉拔力检测<br><span style="font-weight: 400;">(施工单位自检)</span></td>
                                    <td>设计拉拔力值(KN)</td>
                                    <td>施工单位自检根数(个)</td>
                                    <td>合格根数(个)</td>
                                    <td>最大值(KN)</td>
                                    <td>最小值(KN)</td>
                                    <td>平均值(KN)</td>
                                    <td>合格率(%)</td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="pull_self" id="pull_self_m"></td>
                                    <td><input type="text" name="test_num_self" id="test_num_self_m"></td>
                                    <td><input type="text" name="pass_num_self" id="pass_num_self_m"></td>
                                    <td><input type="text" name="pull_max_self" id="pull_max_self_m"></td>
                                    <td><input type="text" name="pull_min_self" id="pull_min_self_m"></td>
                                    <td><input type="text" name="pull_ave_self" id="pull_ave_self_m"></td>
                                    <td><input type="text" name="pull_pass_self" id="pull_pass_self_m"></td>
                                </tr>
                                <tr>
                                    <td rowspan="2" style="border-right: 1px solid #000;font-weight: 700;">拉拔力检测<br><span style="font-weight: 400;">(监理单位抽检)</span></td>
                                    <td>设计拉拔力值(KN)</td>
                                    <td>监理单位自检根数(个)</td>
                                    <td>合格根数(个)</td>
                                    <td>最大值(KN)</td>
                                    <td>最小值(KN)</td>
                                    <td>平均值(KN)</td>
                                    <td>合格率(%)</td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="pull_inspection" id="pull_inspection_m"></td>
                                    <td><input type="text" name="test_num_inspection" id="test_num_inspection_m"></td>
                                    <td><input type="text" name="pass_num_inspection" id="pass_num_inspection_m"></td>
                                    <td><input type="text" name="pull_max_inspection" id="pull_max_inspection_m"></td>
                                    <td><input type="text" name="pull_min_inspection" id="pull_min_inspection_m"></td>
                                    <td><input type="text" name="pull_ave_inspection" id="pull_ave_inspection_m"></td>
                                    <td><input type="text" name="pull_pass_inspection" id="pull_pass_inspection_m"></td>
                                </tr>
                            </table>
                            <table>
                                <tr>
                                    <td rowspan="2" style="border-right: 1px solid #000;font-weight: 700;">砂浆强度<br><span style="font-weight: 400;">(施工单位抽检)</span></td>
                                    <td>设计等级</td>
                                    <td>施工单位自检根数(个)</td>
                                    <td>最大值(Mpa)</td>
                                    <td>最小值(Mpa)</td>
                                    <td>平均值(Mpa)</td>
                                    <td>合格率(%)</td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="level_self" id="level_self_m"></td>
                                    <td><input type="text" name="mortar_num_self" id="mortar_num_self_m"></td>
                                    <td><input type="text" name="mortar_max_self" id="mortar_max_self_m"></td>
                                    <td><input type="text" name="mortar_min_self" id="mortar_min_self_m"></td>
                                    <td><input type="text" name="mortar_ave_self" id="mortar_ave_self_m"></td>
                                    <td><input type="text" name="mortar_pass_self" id="mortar_pass_self_m"></td>
                                </tr>
                                <tr>
                                    <td rowspan="2" style="border-right: 1px solid #000;font-weight: 700;">砂浆强度<br><span style="font-weight: 400;">(监理单位抽检)</span></td>
                                    <td>设计等级</td>
                                    <td>监理单位自检根数(个)</td>
                                    <td>最大值(Mpa)</td>
                                    <td>最小值(Mpa)</td>
                                    <td>平均值(Mpa)</td>
                                    <td>合格率(%)</td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="level_inspection" id="level_inspection_m"></td>
                                    <td><input type="text" name="mortar_num_inspection" id="mortar_num_inspection_m"></td>
                                    <td><input type="text" name="mortar_max_inspection" id="mortar_max_inspection_m"></td>
                                    <td><input type="text" name="mortar_min_inspection" id="mortar_min_inspection_m"></td>
                                    <td><input type="text" name="mortar_ave_inspection" id="mortar_ave_inspection_m"></td>
                                    <td><input type="text" name="mortar_pass_inspection" id="mortar_pass_inspection_m"></td>
                                </tr>
                            </table>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-offset-6">
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
<div id="form_container" style="display: none;"></div>

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
<script src="__JS__/pdf.js"></script>
<script src="__JS__/mypdf.js"></script>
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
<script type="text/javascript">
    //日期插件
    $("#evaluated_date").jeDate({
        format: "YYYY-MM-DD"
    });
    $("#holes_test_date").jeDate({
        format: "YYYY-MM-DD"
    });
    $("#sections_test_date").jeDate({
        format: "YYYY-MM-DD"
    });
    $("#evaluated_date2").jeDate({
        format: "YYYY-MM-DD"
    });
    $("#evaluated_date3").jeDate({
        format: "YYYY-MM-DD"
    });
    var mytree_node;
    function zedit(that) {
        var uid = mytree_node.uid;
        console.log(uid);
        $.ajax({
            url: "./fetchData",
            type: "post",
            data: {uid:uid,cate:cate},
            dataType: "json",
            success: function (res) {
                console.log(res);
                if(res.code == 1){
                    var kind = $(that).val();
                    if(kind == "查看"){
                        $("#myModal .btn-primary").css("display","none");
                    }else if(kind == "编辑"){
                        $("#myModal .btn-primary").css("display","inline-block");
                    }
                    $("#myModal h5").text("编辑");
                    $("#uid4").val(uid);
                    $("#cate4").val("锚杆");
                    var cate = encodeURI(encodeURI("锚杆"));
                    var data = res.maoganData;
                    $("#standard_m").val(data.standard);
                    $("#quantity_self_m").val(data.quantity_self);
                    $("#num_self_m").val(data.num_self);
                    $("#ratio_self_m").val(data.ratio_self);
                    $("#pass_self_m").val(data.pass_self);
                    $("#anchor_max_self_m").val(data.anchor_max_self);
                    $("#anchor_min_self_m").val(data.anchor_min_self);
                    $("#casting_max_self_m").val(data.casting_max_self);
                    $("#casting_min_self_m").val(data.casting_min_self);
                    $("#pass_rate_self_m").val(data.pass_rate_self);
                    $("#quantity_inspection_m").val(data.quantity_inspection);
                    $("#num_inspection_m").val(data.num_inspection);
                    $("#ratio_inspection_m").val(data.ratio_inspection);
                    $("#pass_inspection_m").val(data.pass_inspection);
                    $("#anchor_max_inspection_m").val(data.anchor_max_inspection);
                    $("#anchor_min_inspection_m").val(data.anchor_min_inspection);
                    $("#casting_max_inspection_m").val(data.casting_max_inspection);
                    $("#casting_min_inspection_m").val(data.casting_min_inspection);
                    $("#pass_rate_inspection_m").val(data.pass_rate_inspection);
                    $("#pull_self_m").val(data.pull_self);
                    $("#test_num_self_m").val(data.test_num_self);
                    $("#pass_num_self_m").val(data.pass_num_self);
                    $("#pull_max_self_m").val(data.pull_max_self);
                    $("#pull_min_self_m").val(data.pull_min_self);
                    $("#pull_ave_self_m").val(data.pull_ave_self);
                    $("#pull_pass_self_m").val(data.pull_pass_self);
                    $("#pull_inspection_m").val(data.pull_inspection);
                    $("#test_num_inspection_m").val(data.test_num_inspection);
                    $("#pass_num_inspection_m").val(data.pass_num_inspection);
                    $("#pull_max_inspection_m").val(data.pull_max_inspection);
                    $("#pull_min_inspection_m").val(data.pull_min_inspection);
                    $("#pull_ave_inspection_m").val(data.pull_ave_inspection);
                    $("#pull_pass_inspection_m").val(data.pull_pass_inspection);
                    $("#level_self_m").val(data.level_self);
                    $("#mortar_num_self_m").val(data.mortar_num_self);
                    $("#mortar_max_self_m").val(data.mortar_max_self);
                    $("#mortar_min_self_m").val(data.mortar_min_self);
                    $("#mortar_ave_self_m").val(data.mortar_ave_self);
                    $("#mortar_pass_self_m").val(data.mortar_pass_self);
                    $("#level_inspection_m").val(data.level_inspection);
                    $("#mortar_num_inspection_m").val(data.mortar_num_inspection);
                    $("#mortar_max_inspection_m").val(data.mortar_max_inspection);
                    $("#mortar_min_inspection_m").val(data.mortar_min_inspection);
                    $("#mortar_ave_inspection_m").val(data.mortar_ave_inspection);
                    $("#mortar_pass_inspection_m").val(data.mortar_pass_inspection);
                    $("#myModal").modal('show');
                }else {
                    layer.msg(res.msg);
                }
            }
        })
    }
    function zdel(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();
        layer.confirm('确认删除此条记录吗?', {icon: 3, title:'提示'}, function(index){
            $.ajax({
                url: "./maoganDel",
                data: {'id' : id},
                type: "get",
                dataType: "json",
                success: function (res) {
                    if(res.code == 1){
                        layer.msg(res.msg,{icon:1,time:1500,shade: 0.1});
                        zhihu_table.ajax.url("__SCRIPT__/maogan_table.php").load();
                    }else{
                        layer.msg(res.msg,{icon:0,time:1500,shade: 0.1});
                    }
                }
            })
            layer.close(index);
        })
    }
    function showpdf1(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();
        showPdf(id,"./attachmentPreview");
    }

    var zhihu_table = $('#zhihu_table').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "__SCRIPT__/maogan_table.php"
        },
        "dom": '<"mybtn1 btn btn-outline btn-primary"><"myl"l>frtip',
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [2],
                "render" :  function(data,type,row) {
                    var html = "<input type='button' class='btn btn-info btn-outline btn-xs' style='margin-left: 5px;' onclick='zedit(this)' value='查看'/>";
                    html += "<input type='button' class='btn btn-primary btn-outline btn-xs' style='margin-left: 5px;' onclick='zedit(this)' value='编辑'/>" ;
                    html += "<input type='button' class='btn btn-success btn-outline btn-xs' style='margin-left: 5px;' onclick='showpdf1(this)' value='预览'/>" ;
                    html += "<input type='button' class='btn btn-danger btn-outline btn-xs' style='margin-left: 5px;' onclick='zdel(this)' value='删除'/>" ;
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
    $("div.mybtn1").html('<div>新增</div>');
    $("div.mybtn1").click(function () {
        $("#myModal input").val("");
        $("#cate4").val("锚杆");
        $("#uid4").val(mytree_node.uid);
        $("#myModal h5").text("新增");
        $("#myModal").modal('show');
    })


    function del(that) {
        var id = $(that).parent("td").parent("tr").children("td:first-child").text();
        layer.confirm('确认删除此条记录吗?', {icon: 3, title:'提示'}, function(index){
            $.ajax({
                url: "./attachmentDel",
                data: {'id' : id},
                type: "post",
                dataType: "json",
                success: function (res) {
                    if(res.code == 1){
                        layer.msg(res.msg,{icon:1,time:1500,shade: 0.1});
                        if(mytree_node.id){
                            admin_table.ajax.url("__SCRIPT__/project_attachment_table.php?id=" + mytree_node.id + "&pid=" + mytree_node.pId).load();
                        }else {
                            admin_table.ajax.url("__SCRIPT__/project_attachment_table.php?id=" + mytree_node.uid + "&pid=" + mytree_node.pId).load();
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
    var admin_table = $('#admin_table').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "__SCRIPT__/project_attachment_table.php",
            "async": false
        },
        "dom": '<"mybtn">lf<"ipt"><"#upload"><"#mylist">rtip',
        "columnDefs": [
            {
                "searchable": false,
                "orderable": false,
                "targets": [5],
                "render" :  function(data,type,row) {
                    var html = "";
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
    $("div.mybtn").html('<div>验收资料</div>');
    $("div.ipt").html('<input type="hidden" id="data_photo" name="portrait" >');
    $("div#upload").html('<div>上传文件</div>');
    $("div#mylist").html('<div></div>');

    var idlist;
    //上传图片,初始化WebUploader
    var uploader = WebUploader.create({

        auto: true,// 选完文件后，是否自动上传。
        swf: '/static/admin/webupload/Uploader.swf',// swf文件路径
        server: "<?php echo url('Upload/uploadfile'); ?>",// 文件接收服务端。
        chunked: true,
        fileSizeLimit: 1000 *1024 *1024,
        formData: {"uid":"","pid":""},
        duplicate :true,// 重复上传图片，true为可重复false为不可重复
        pick: '#upload',// 选择文件的按钮。可选。

    });
    uploader.on("uploadStart",function () {
        if(mytree_node.id){
            uploader.options.formData.uid = mytree_node.id;
        }else {
            uploader.options.formData.uid = mytree_node.uid;
        }
        uploader.options.formData.pid = mytree_node.pId;
    });

    // 文件上传成功
    uploader.on( 'uploadSuccess', function( file,data, response ) {
        console.log(file);
        if(data.code === 1){
            if(mytree_node.id){
                admin_table.ajax.url("__SCRIPT__/project_attachment_table.php?id=" + mytree_node.id + "&pid=" + mytree_node.pId).load();
            }else {
                admin_table.ajax.url("__SCRIPT__/project_attachment_table.php?id=" + mytree_node.uid + "&pid=" + mytree_node.pId).load();
            }
            layer.msg(data.msg);
        }else {
            layer.msg("抱歉，您没有此权限");
        }
    });

    // 文件上传失败，显示上传出错。
    uploader.on( 'uploadError', function( file ) {
        layer.msg("上传失败",{icon:2,time:1500,shade: 0.1});
    });
    //编辑用户
    function edit(that) {
        var uid = $(that).parent("td").parent("tr").children("td:first-child").text();

        $.ajax({
            url: "./projectEdit",
            type: "post",
            data: {id:uid},
            dataType: "json",
            success: function (res) {
                console.log(res);
                if(res.code == 1){
                    var kind = $(that).val();
                    if(kind == "查看"){
                        $("#myModal .btn-primary").css("display","none");
                    }else if(kind == "编辑"){
                        $("#myModal .btn-primary").css("display","inline-block");
                    }
                    $("#myModal h5").text("编辑单元工程");
                    $("#id").val(uid);
                    var data = res.data;
                    $("#project_name").val(data.project_name);
                    $("#new1").val(data.project_sn);
                    $("#new2").val(data.post_sn);
                    $("#main_project").val(data.main_project);
                    $("#kind").val(data.kind);
                    $("#kaigong_date").val(data.kaigong_date);
                    $("#wangong_date").val(data.wangong_date);
                    $("#quantities").val(data.quantities);
                    $("#pingding_date").val(data.pingding_date);
                    $("#zhuanghaoqi").val(data.zhuanghaoqi);
                    $("#zhuanghaozhi").val(data.zhuanghaozhi);
                    $("#gaochengqi").val(data.gaochengqi);
                    $("#gaochengzhi").val(data.gaochengzhi);
                    $("#myModal").modal('show');
                }else {
                    layer.msg(res.msg);
                }
            }
        })
    }

    //组织结构
    var zTreeObj;

    function change1(that) {
        var val = $(that).val();
        var id = mytree_node.id;
        console.log(val,id);
        $.ajax({
            url: "./level3Quality",
            type: "post",
            data: {id:id,accident:val},
            dataType: "json",
            success: function (res) {
                if(res.code === 1){
                    $("#accident").text(res.level);
                }else{
                    layer.msg(res.msg);
                }
            }
        })
    }
    function change2(that) {
        var val = $(that).val();
        var id = mytree_node.id;
        $.ajax({
            url: "./changePrimary",
            type: "post",
            data: {id:id,primary:val}
        })
    }
    function change3(that) {
        var val = $(that).val();
        var id = mytree_node.id;
        $.ajax({
            url: "./level2Quality",
            type: "post",
            data: {id:id,accident:val},
            dataType: "json",
            success: function (res) {
                if(res.code === 1){
                    $("#accdient2").text(res.level);
                }else{
                    layer.msg(res.msg);
                }

            }
        })
    }
    function count(that) {
        var val1 = $(that).siblings("#g1").children("input").val();
        var val2 = $(that).siblings("#g2").children("input").val();
        var result = Math.floor(val2/val1*1000)/10;
        console.log(result)
        $(that).siblings("#g3").children("input").val(result);
        $.ajax({
            url: "./level2Quality",
            type: "post",
            data: {id:mytree_node.id,score_design:val1,score_actual:val2,score:result},
            dataType: "json",
            success: function (res) {
                if(res.code === 1){
                    $("#accdient2").text(res.level);
                }else{
                    layer.msg(res.msg);
                }
            }
        })
    }

    //点击获取节点名称
    function zTreeOnClick(event, treeId, treeNode) {
        console.log(treeNode);
        $("#table_info").css("visibility","visible");
        mytree_node = treeNode;
        $("#groupname").val(treeNode.name);
        $("#mycontent>p").text(treeNode.name);
        $("#groupid").val(treeNode.id);
        var cate = encodeURI(encodeURI(treeNode.cate));
        $("#level2").css("display","none");
        $("#level3").css("display","none");
        $("#level5").css("display","none");
        if(treeNode.level == 4){
            var groupid = treeNode.uid;
            $("#level5").css("display","block");
            $.ajax({
                url: "./fetchData",
                type: "post",
                data: {uid:groupid,cate:cate},
                dataType: "json",
                success: function (res) {
                    console.log(res);
                    if(res.code == 1){
                        var data = res.projectData;
                        $("#input1").val(data.name);
                        $("#input2").val(data.sn + data.post_sn);
                        $("#input3").val(data.zhuanghaoqi);
                        $("#input4").val(data.zhuanghaozhi);
                        $("#input5").val(data.gaochengqi);
                        $("#input6").val(data.gaochengzhi);
                        $("#input7").val(data.primary);
                        $("#container form").css("display","none");
                        if(data.cate == "开挖"){
                            $("#uid1").val(groupid);
                            $("#cate1").val(data.cate);
                            $("#model1").css("display","block");
                            if(res.kaiwaData){
                                var kdata = res.kaiwaData;
                                $("#edit1").val("edit");
                                $("#pass").val(kdata.pass);
                                $("#quality_level").val(kdata.quality_level);
                                $("#evaluated_date").val(kdata.evaluated_date);
                                $("#evaluated_by").val(kdata.evaluated_by);
                                $("#holes").val(kdata.holes);
                                $("#ave_size").val(kdata.ave_size);
                                $("#ave_length").val(kdata.ave_length);
                                $("#half_percentage").val(kdata.half_percentage);
                                $("#holes_test_date").val(kdata.holes_test_date);
                                $("#sections").val(kdata.sections);
                                $("#points").val(kdata.points);
                                $("#max").val(kdata.max);
                                $("#min").val(kdata.min);
                                $("#ave").val(kdata.ave);
                                $("#sections_test_date").val(kdata.sections_test_date);
                                $("#sections_overbreak").val(kdata.sections_overbreak);
                                $("#points_overbreak").val(kdata.points_overbreak);
                                $("#max_overbreak").val(kdata.max_overbreak);
                                $("#min_overbreak").val(kdata.min_overbreak);
                                $("#ave_overbreak").val(kdata.ave_overbreak);
                                $("#pass_overbreak").val(kdata.pass_overbreak);
                                $("#sections_underbreak").val(kdata.sections_underbreak);
                                $("#points_underbreak").val(kdata.points_underbreak);
                                $("#max_underbreak").val(kdata.max_underbreak);
                                $("#min_underbreak").val(kdata.min_underbreak);
                                $("#ave_underbreak").val(kdata.ave_underbreak);
                                $("#pass_underbreak").val(kdata.pass_underbreak);
                            }else {
                                $("#edit1").val("");
                            }
                        }else if(data.cate == "支护"){
                            $("#uid2").val(groupid);
                            $("#uid4").val(groupid);
                            $("#cate2").val(data.cate);
                            $("#model2").css("display","block");
                            if(res.zhihuData){
                                var kdata = res.zhihuData;
                                $("#edit2").val("edit");
                                $("#pass2").val(kdata.pass);
                                $("#quality_level2").val(kdata.quality_level);
                                $("#evaluated_date2").val(kdata.evaluated_date);
                                $("#evaluated_by2").val(kdata.evaluated_by);
                                $("#area2").val(kdata.area);
                                $("#thickness2").val(kdata.thickness);
                                $("#points2").val(kdata.points);
                                $("#max2").val(kdata.max);
                                $("#min2").val(kdata.min);
                                $("#ave2").val(kdata.ave);
                                $("#points2").val(kdata.points);
                                $("#max2").val(kdata.max);
                                $("#min2").val(kdata.min);
                                $("#ave2").val(kdata.ave);
                                $("#quantity_self2").val(kdata.quantity_self);
                                $("#num_self2").val(kdata.num_self);
                                $("#ratio_self2").val(kdata.ratio_self);
                                $("#pass_self2").val(kdata.pass_self);
                                $("#anchor_max_self2").val(kdata.anchor_max_self);
                                $("#anchor_min_self2").val(kdata.anchor_min_self);
                                $("#casting_max_self2").val(kdata.casting_max_self);
                                $("#casting_min_self2").val(kdata.casting_min_self);
                                $("#pass_rate_self2").val(kdata.pass_rate_self);
                                $("#quantity_inspection2").val(kdata.quantity_inspection);
                                $("#num_inspection2").val(kdata.num_inspection);
                                $("#ratio_inspection2").val(kdata.ratio_inspection);
                                $("#pass_inspection2").val(kdata.pass_inspection);
                                $("#anchor_max_inspection2").val(kdata.anchor_max_inspection);
                                $("#anchor_min_inspection2").val(kdata.anchor_min_inspection);
                                $("#casting_max_inspection2").val(kdata.casting_max_inspection);
                                $("#casting_min_inspection2").val(kdata.casting_min_inspection);
                                $("#pass_rate_inspection2").val(kdata.pass_rate_inspection);
                            }else {
                                $("#edit2").val("");
                            }
                        }else if(data.cate == "混凝土"){
                            $("#uid3").val(groupid);
                            $("#cate3").val(data.cate);
                            $("#model3").css("display","block");
                            if(res.hunningtuData){
                                var kdata = res.hunningtuData;
                                $("#edit3").val("edit");
                                $("#pass3").val(kdata.pass);
                                $("#quality_level3").val(kdata.quality_level);
                                $("#evaluated_date3").val(kdata.evaluated_date);
                                $("#evaluated_by3").val(kdata.evaluated_by);
                                $("#requirement_self").val(kdata.requirement_self);
                                $("#volume_self").val(kdata.volume_self);
                                $("#num_self").val(kdata.num_self);
                                $("#max_self").val(kdata.max_self);
                                $("#min_self").val(kdata.min_self);
                                $("#ave_self").val(kdata.ave_self);
                                $("#pass_self").val(kdata.pass_self);
                                $("#requirement_inspection").val(kdata.requirement_inspection);
                                $("#volume_inspection").val(kdata.volume_inspection);
                                $("#num_inspection").val(kdata.num_inspection);
                                $("#max_inspection").val(kdata.max_inspection);
                                $("#min_inspection").val(kdata.min_inspection);
                                $("#ave_inspection").val(kdata.ave_inspection);
                                $("#pass_inspection").val(kdata.pass_inspection);
                                $("#points_flat").val(kdata.points_flat);
                                $("#deviation_min_flat").val(kdata.deviation_min_flat);
                                $("#deviation_max_flat").val(kdata.deviation_max_flat);
                                $("#pass_flat").val(kdata.pass_flat);
                                $("#points_vertical").val(kdata.points_vertical);
                                $("#deviation_min_vertical").val(kdata.deviation_min_vertical);
                                $("#deviation_max_vertical").val(kdata.deviation_max_vertical);
                                $("#pass_vertical").val(kdata.pass_vertical);
                                $("#allowable_deviation").val(kdata.allowable_deviation);
                                $("#points_union").val(kdata.points_union);
                                $("#max_union").val(kdata.max_union);
                                $("#min_union").val(kdata.min_union);
                                $("#ave_union").val(kdata.ave_union);
                                $("#pass_union").val(kdata.pass_union);
                            }else {
                                $("#edit3").val("");
                            }
                        }
                    }else {
                        layer.msg(res.msg);
                    }
                }
            });
            //获取路径
            $.ajax({
                url: "./getParents",
                type: "post",
                data: {uid:groupid},
                dataType: "json",
                success: function (res) {
                    idlist = res.idList;
                    $("#path").text("当前路径:" + res.path)
                }
            })
        }else if(treeNode.level == 2){
            $.ajax({
                url: "./level3Quality",
                type: "post",
                data: {id:treeNode.id},
                dataType: "json",
                success: function (res) {
                    if(res.code === 1){
                        $("#level3 tbody").empty();
                        console.log(res);
                        var len = res.column3.length;
                        $.each(res.column3,function (i,n) {
                            if(i < len - 2){
                                if(i === 0){
                                    var str = "";
                                    str += "<tr>"
                                        +  "<td>"+ (i+1) +"</td>"
                                        +  "<td>"+ res.column1[i] +"</td>"
                                        +  "<td>"+ res.column2[i] +"</td>"
                                        +  "<td>"+ res.column3[i] +"</td>"
                                        +  "<td>"+ res.column4[i] +"</td>"
                                        +  "<td>"+ res.column5[i] +"</td>"
                                        +  "<td style='font-weight: 700;font-size: 25px;' id='accident' rowspan="+ (len+1) +">"+ res.level +"</td>"
                                        +  "</tr>"
                                }else {
                                    var str = "";
                                    str += "<tr>"
                                        +  "<td>"+ (i+1) +"</td>"
                                        +  "<td>"+ res.column1[i] +"</td>"
                                        +  "<td>"+ res.column2[i] +"</td>"
                                        +  "<td>"+ res.column3[i] +"</td>"
                                        +  "<td>"+ res.column4[i] +"</td>"
                                        +  "<td>"+ res.column5[i] +"</td>"
                                        +  "</tr>"
                                }
                                $("#level3 tbody").append(str);
                            }else if(i === len - 2){
                                var str = "";
                                str += ""
                                    +  "<tr>"
                                    +  "<td colspan=\"2\">合计</td>"
                                    +  "<td>"+ res.column2[i] +"</td>"
                                    +  "<td>"+ res.column3[i] +"</td>"
                                    +  "<td>"+ res.column4[i] +"</td>"
                                    +  "<td>"+ res.column5[i] +"</td>"
                                    +  "</tr>"
                                $("#level3 tbody").append(str);
                            }else if(i === len - 1){
                                var str = "";
                                str += ""
                                    +  "<tr>"
                                    +  "<td colspan=\"2\">主要单元工程、重要隐藏工程及关键部位单元工程</td>"
                                    +  "<td>"+ res.column2[i] +"</td>"
                                    +  "<td>"+ res.column3[i] +"</td>"
                                    +  "<td>"+ res.column4[i] +"</td>"
                                    +  "<td>"+ res.column5[i] +"</td>"
                                    +  "</tr>"
                                $("#level3 tbody").append(str);
                            }
                        })
                        var str1 = "";
                        str1 += "<tr>"
                            +  "<td colspan=\"6\">"
                            +  "<span>是否发生质量事故</span>"
                            +  "<select onchange='change1(this)' id=\"sel1\" value=''>"
                            +  "<option value=\"是\">是</option>"
                            +  "<option value=\"否\">否</option>"
                            +  "</select>"
                            +  "</td>"
                            +  "</tr>"
                        $("#level3 tbody").append(str1);
                        var str2 = "";
                        str2 += "<tr>"
                            +  "<td colspan=\"2\" style=\"background-color: #bae2f3;font-weight: 700;\">主要分部工程</td>"
                            +  "<td colspan=\"5\">"
                            +  "<select onchange='change2(this)' id=\"sel2\" value=''>"
                            +  "<option value=\"是\">是</option>"
                            +  "<option value=\"否\">否</option>"
                            +  "</select>"
                            +  "</td>"
                            +  "</tr>"

                        $("#level3 tbody").append(str2);

                        $("#sel1").val(res.accident);
                        $("#sel2").val(res.primary);
                    }else {
                        layer.msg(res.msg);
                    }
                }
            });
            //获取路径
            $.ajax({
                url: "./getParents",
                type: "post",
                data: {id:treeNode.id},
                dataType: "json",
                success: function (res) {
                    console.log(res)
                    if(res.code === 1){
                        idlist = res.idList;
                        $("#path").text("当前路径:" + res.path);
                    }else {
                        layer.msg(res.msg);
                    }
                }
            });
            $("#level3").css("display","block");
        }else if(treeNode.level == 1){
            $.ajax({
                url: "./level2Quality",
                type: "post",
                data: {id:treeNode.id},
                dataType: "json",
                success: function (res) {
                    if(res.code === 1){
                        $("#level2 tbody").empty();
                        console.log(res);
                        var str = "";
                        str += ""
                            +  "<tr>"
                            +  "<td></td>"
                            +  "<td class='style1'>分部个数</td>"
                            +  "<td class='style1'>合格个数</td>"
                            +  "<td class='style1'>优良个数</td>"
                            +  "<td class='style1'>优良率</td>"
                            +  "</tr>"
                        $("#level2 tbody").append(str);
                        $.each(res.column1,function (i,n) {
                            var txt = "合计";
                            if(i === 1){
                                txt = "主要分部工程"
                            }
                            var str = "";
                            str += ""
                                +  "<tr>"
                                +  "<td>"+ txt +"</td>"
                                +  "<td>"+ res.column1[i] +"</td>"
                                +  "<td>"+ res.column2[i] +"</td>"
                                +  "<td>"+ res.column3[i] +"</td>"
                                +  "<td>"+ res.column4[i] +"</td>"
                                +  "</tr>"
                            $("#level2 tbody").append(str);
                        });
                        var str1 = "";
                        str1 += "<tr>"
                            +  "<td colspan=\"5\">"
                            +  "<span>是否发生质量事故</span>"
                            +  "<select onchange='change3(this)' id=\"sel3\" value=''>"
                            +  "<option value=\"是\">是</option>"
                            +  "<option value=\"否\">否</option>"
                            +  "</select>"
                            +  "</td>"
                            +  "</tr>"
                        $("#level2 tbody").append(str1);

                        var lstr = "";
                        lstr += "<tr>"
                            +  "<td colspan='2'>工程外观质量</td>"
                            +  "<td colspan='3'>"
                            +  "<div class='grade' id='g1'>"
                            +  "应得<input type='number'>分"
                            +  "</div>"
                            +  "<div class='grade' id='g2'>"
                            +  "实得<input type='number'>分"
                            +  "</div>"
                            +  "<button style='line-height: 16px;' onclick='count(this)'>开始计算</button>"
                            +  "<div class='grade' id='g3'>"
                            +  "得分率<input type='' readonly='readonly'>"
                            +  "</div>"
                            +  "</td>"
                            +  "</tr>"

                        $("#level2 tbody").append(lstr);

                        var len = res.name.length;

                        var str3 = "";
                        str3 += ""
                            +  "<tr>"
                            +  "<td class='style1'>项次</td>"
                            +  "<td class='style1'>分部工程名称</td>"
                            +  "<td class='style1'>质量等级</td>"
                            +  "<td class='style1' colspan='2'>单位工程质量等级</td>"
                            +  "</tr>"
                        $("#level2 tbody").append(str3);

                        $.each(res.name,function (i,n) {
                            if(i === 0){
                                var str = "";
                                str += "<tr>"
                                    +  "<td>"+ (i+1) +"</td>"
                                    +  "<td>"+ res.name[i] +"</td>"
                                    +  "<td>"+ res.quality[i] +"</td>"
                                    +  "<td style='font-weight: 700;font-size: 25px;' id='accdient2' colspan='2' rowspan="+ len +">"+ res.level +"</td>"
                                    +  "</tr>"
                            }else {
                                var str = "";
                                str += "<tr>"
                                    +  "<td>"+ (i+1) +"</td>"
                                    +  "<td>"+ res.name[i] +"</td>"
                                    +  "<td>"+ res.quality[i] +"</td>"
                                    +  "</tr>"
                            }
                            $("#level2 tbody").append(str);
                        })
                        $(".grade:first-child input").val(res.score[0]);
                        $(".grade:nth-child(2) input").val(res.score[1]);
                        $(".grade:nth-child(4) input").val(res.score[2]);
                        $("#sel3").val(res.accident);
                    }else {
                        layer.msg(res.msg);
                    }
                }
            });
            //获取路径
            $.ajax({
                url: "./getParents",
                type: "post",
                data: {id:treeNode.id},
                dataType: "json",
                success: function (res) {
                    console.log(res)
                    if(res.code === 1){
                        idlist = res.idList;
                        $("#path").text("当前路径:" + res.path);
                    }else {
                        layer.msg(res.msg);
                    }
                }
            });
            $("#level2").css("display","block");
        }else{
            //获取路径
            $.ajax({
                url: "./getParents",
                type: "post",
                data: {id:treeNode.id},
                dataType: "json",
                success: function (res) {
                    console.log(res)
                    if(res.code === 1){
                        idlist = res.idList;
                        $("#path").text("当前路径:" + res.path)
                    }else {
                        layer.msg(res.msg);
                    }
                }
            });
        }
        if(mytree_node.id){
            admin_table.ajax.url("__SCRIPT__/project_attachment_table.php?id=" + mytree_node.id + "&pid=" + mytree_node.pId).load();
        }else {
            admin_table.ajax.url("__SCRIPT__/project_attachment_table.php?id=" + mytree_node.uid + "&pid=" + mytree_node.pId).load();
        }
        // console.log(treeNode.name)
        // var kk = treeNode.name;
        // $.ajax({
        //     url: "__SCRIPT__/project_attachment_table.php",
        //     data: {uname:123},
        //     dataType: "json",
        //     success: function (res) {
        //         console.log(res);
        //     }
        // })
    };
    var setting = {
        async: {
            enable : true,
            autoParam: ["pId"],
            type : "post",
            url : "./index",
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


</script>
<script type="text/javascript">
    function newobj(str,val) {
        this.str = str;
        this.val = val;
    }
    function intnumber(arr) {
        var reg = /^([0-9]+(\.[0-9]+)|\d+)$/;
        var alt = "";
        $.each(arr,function (i,n) {
            if(n.val != ""){
                if(!reg.test(n.val)){
                    alt += n.str + ","
                }
            }
        })
        if(alt){
            alert(alt + "只能为非负整数");
            return false;
        }else {
            return true;
        }
    }
    function floatnumber(arr) {
        var reg = /^([0-9]+(\.[0-9]+)|\d+)$/;
        var alt = "";
        $.each(arr,function (i,n) {
            if(n.val != ""){
                if(!reg.test(n.val)){
                    alt += n.str + ","
                }
            }
        })
        if(alt){
            alert(alt + "只能为保留一位小数");
            return false;
        }else {
            return true;
        }
    }
    $("#save").click(function () {
        $.each($("form"),function (i,n) {
            if($(n).css("display") === "block"){
                if($(n).attr("id") === "model1"){
                    if(!$("#evaluated_date").val()){
                        alert("评定日期不能为空");
                        return;
                    }
                    if(!$("#evaluated_by").val()){
                        alert("评定人不能为空");
                        return;
                    }
                    var arr1 = [];
                    arr1.push(new newobj("检查孔数",$("#holes").val()),
                        new newobj("检查断面",$("#sections").val()),
                        new newobj("检查点数",$("#points").val()),
                        new newobj("检查断面(超挖)",$("#sections_overbreak").val()),
                        new newobj("检查点数(超挖)",$("#points").val()),
                        new newobj("检查断面(欠挖)",$("#sections_underbreak").val()),
                        new newobj("检查点数(欠挖)",$("#points_underbreak").val())
                    );
                    var arr2 = [];
                    arr2.push(new newobj("平均进尺",$("#ave_size").val()),
                        new newobj("平均残孔长度",$("#ave_length").val()),
                        new newobj("最大值",$("#max").val()),
                        new newobj("最小值",$("#min").val()),
                        new newobj("平均值",$("#ave").val()),
                        new newobj("最大超挖",$("#max_overbreak").val()),
                        new newobj("最小超挖",$("#min_overbreak").val()),
                        new newobj("平均超挖",$("#ave_overbreak").val()),
                        new newobj("合格率(超挖)",$("#pass_overbreak").val()),
                        new newobj("最大欠挖",$("#max_underbreak").val()),
                        new newobj("最小欠挖",$("#min_underbreak").val()),
                        new newobj("平均欠挖",$("#ave_underbreak").val()),
                        new newobj("合格率(欠挖)",$("#pass_underbreak").val())
                    );
                    var test1 = intnumber(arr1);
                    var test2 = floatnumber(arr2);
                    if(test1 && test2){
                        $('#model1').ajaxSubmit({
                            url: "./dataAdd",
                            type: "post",
                            success: complete1,
                            dataType: 'json'
                        });
                    }
                }else if($(n).attr("id") === "model2"){
                    if(!$("#evaluated_date2").val()){
                        alert("评定日期不能为空");
                        return;
                    }
                    if(!$("#evaluated_by2").val()){
                        alert("评定人不能为空");
                        return;
                    }
                    var arr1 = [];
                    arr1.push(new newobj("设计厚度",$("#thickness2").val()),
                        new newobj("检测点数",$("#points2").val()),
                        new newobj("施工数量(施工)",$("#quantity_self2").val()),
                        new newobj("施工自检根数(施工)",$("#num_self2").val()),
                        new newobj("合格根数(施工)",$("#pass_self2").val()),
                        new newobj("施工数量(监理)",$("#quantity_inspection2").val()),
                        new newobj("施工自检根数(监理)",$("#num_inspection2").val()),
                        new newobj("合格根数(监理)",$("#pass_self2").val())
                    );
                    var arr2 = [];
                    arr2.push(new newobj("支护面积",$("#area").val()),
                        new newobj("最大值",$("#max2").val()),
                        new newobj("最小值",$("#min2").val()),
                        new newobj("平均值",$("#ave2").val()),
                        new newobj("方量",$("#max_overbreak2").val()),
                        new newobj("最大值（施工锚杆长度）",$("#anchor_max_self2").val()),
                        new newobj("最小值（施工锚杆长度）",$("#anchor_min_self2").val()),
                        new newobj("最大值（施工注浆密实度）",$("#casting_max_self2").val()),
                        new newobj("最小值（施工注浆密实度）",$("#casting_min_self2").val()),
                        new newobj("最大值（监理锚杆长度）",$("#anchor_max_inspection2").val()),
                        new newobj("最小值（监理锚杆长度）",$("#anchor_min_inspection2").val()),
                        new newobj("最大值（监理注浆密实度）",$("#casting_max_inspection2").val()),
                        new newobj("最小值（监理注浆密实度）",$("#casting_min_inspection2").val())
                    );
                    var test1 = intnumber(arr1);
                    var test2 = floatnumber(arr2);
                    if(test1 && test2){
                        $('#model2').ajaxSubmit({
                            url: "./dataAdd",
                            type: "post",
                            success: complete1,
                            dataType: 'json'
                        });
                    }
                }else if($(n).attr("id") === "model3"){
                    if(!$("#evaluated_date3").val()){
                        alert("评定日期不能为空");
                        return;
                    }
                    if(!$("#evaluated_by3").val()){
                        alert("评定人不能为空");
                        return;
                    }
                    var arr1 = [];
                    arr1.push(new newobj("施工单位自检组数",$("#num_self").val()),
                        new newobj("监理单位自检组数",$("#num_inspection").val()),
                        new newobj("测点数(平面)",$("#points_flat").val()),
                        new newobj("测点数(竖面)",$("#points_vertical").val()),
                        new newobj("检查点数(联合检测)",$("#points_union").val())
                    );
                    var arr2 = [];
                    arr2.push(new newobj("方量(施工)",$("#volume_self").val()),
                        new newobj("最大值(施工)",$("#max_self").val()),
                        new newobj("最小值(施工)",$("#min_self").val()),
                        new newobj("平均值(施工)",$("#ave_self").val()),
                        new newobj("合格率(施工)",$("#pass_self").val()),
                        new newobj("方量(监理)",$("#volume_inspection").val()),
                        new newobj("最大值(监理)",$("#max_inspection").val()),
                        new newobj("最小值(监理)",$("#min_inspection").val()),
                        new newobj("平均值(监理)",$("#ave_inspection").val()),
                        new newobj("合格率(监理)",$("#pass_inspection").val()),
                        new newobj("合格率(联合检测平面)",$("#pass_flat").val()),
                        new newobj("合格率(联合检测竖面)",$("#pass_vertical").val()),
                        new newobj("最大值(联合)",$("#max_union").val()),
                        new newobj("最小值(联合)",$("#min_union").val()),
                        new newobj("平均值(联合)",$("#ave_union").val()),
                        new newobj("合格率(联合)",$("#pass_union").val())
                    );
                    var test1 = intnumber(arr1);
                    var test2 = floatnumber(arr2);
                    if(test1 && test2){
                        $('#model3').ajaxSubmit({
                            url: "./dataAdd",
                            type: "post",
                            success: complete1,
                            dataType: 'json'
                        });
                    }
                }
            }
        })
    })
    function complete1(data){
        if(data.code==1){
            layer.msg("保存成功");
            $("#edit1").val("edit");
            $("#edit1").val("edit");
            $("#edit1").val("edit");
        }else{
            layer.msg(data.msg, {icon: 5,time:1500,shade: 0.1});
            return false;
        }
    }
    $("#myModal .btn-primary").click(function () {
        var arr1 = [];
        arr1.push(new newobj("施工数量(施工无损检测)",$("#quantity_self_m").val()),
            new newobj("施工单位自检根数(施工无损检测)",$("#num_self_m").val()),
            new newobj("合格根数(施工无损检测)",$("#pass_self_m").val()),
            new newobj("施工数量(监理无损检测)",$("#quantity_inspection_m").val()),
            new newobj("监理单位抽检根数(监理无损检测)",$("#num_inspection_m").val()),
            new newobj("合格根数(监理无损检测)",$("#pass_inspection_m").val()),
            new newobj("设计拉拔力值(施工拉拔力检测)",$("#pull_self_m").val()),
            new newobj("施工单位自检根数(施工拉拔力检测)",$("#test_num_self_m").val()),
            new newobj("合格根数(施工拉拔力检测)",$("#pass_num_self_m").val()),
            new newobj("设计拉拔力值(监理拉拔力检测)",$("#pull_inspection_m").val()),
            new newobj("监理单位自检根数(监理拉拔力检测)",$("#test_num_inspection_m").val()),
            new newobj("合格根数(监理拉拔力检测)",$("#pass_num_inspection_m").val()),
            new newobj("施工单位检测组数(施工)",$("#mortar_num_self_m").val()),
            new newobj("施工单位检测组数(监理)",$("#mortar_num_inspection_m").val())
        );
        var arr2 = [];
        arr2.push(new newobj("锚杆长度最大值(施工)",$("#anchor_max_self_m").val()),
            new newobj("锚杆长度最小值(施工)",$("#anchor_min_self_m").val()),
            new newobj("注浆密实度最大值(施工)",$("#casting_max_self_m").val()),
            new newobj("注浆密实度最小值(施工)",$("#casting_min_self_m").val()),
            new newobj("锚杆长度最大值(监理)",$("#anchor_max_inspection_m").val()),
            new newobj("锚杆长度最小值(监理)",$("#anchor_min_inspection_m").val()),
            new newobj("注浆密实度最大值(监理)",$("#casting_max_inspection_m").val()),
            new newobj("注浆密实度最小值(监理)",$("#casting_min_inspection_m").val()),
            new newobj("最大值(施工拉拔力检测)",$("#pull_max_self_m").val()),
            new newobj("最小值(施工拉拔力检测)",$("#pull_min_self_m").val()),
            new newobj("平均值(施工拉拔力检测)",$("#pull_ave_self_m").val()),
            new newobj("最大值(监理拉拔力检测)",$("#pull_max_inspection_m").val()),
            new newobj("最小值(监理拉拔力检测)",$("#pull_min_inspection_m").val()),
            new newobj("平均值(监理拉拔力检测)",$("#pull_ave_inspection_m").val()),
            new newobj("最大值(施工砂浆强度)",$("#mortar_max_self_m").val()),
            new newobj("最小值(施工砂浆强度)",$("#mortar_min_self_m").val()),
            new newobj("平均值(施工砂浆强度)",$("#mortar_ave_self_m").val()),
            new newobj("最大值(监理砂浆强度)",$("#mortar_max_inspection_m").val()),
            new newobj("最小值(监理砂浆强度)",$("#mortar_min_inspection_m").val()),
            new newobj("平均值(监理砂浆强度)",$("#mortar_ave_inspection_m").val())
        );
        var test1 = intnumber(arr1);
        var test2 = floatnumber(arr2);
        if(test1 && test2){
            $('#projectAdd').ajaxSubmit({
                url: "./dataAdd",
                type: "post",
                success: complete,
                dataType: 'json'
            });
        }
    })
    function complete(data){
        if(data.code==1){
            layer.msg("保存成功");
            $("#myModal").modal('hide');
            zhihu_table.ajax.url("__SCRIPT__/maogan_table.php").load();
            return false;
        }else{
            layer.msg(data.msg, {icon: 5,time:1500,shade: 0.1});
            return false;
        }
    }

</script>
</body>
</html>
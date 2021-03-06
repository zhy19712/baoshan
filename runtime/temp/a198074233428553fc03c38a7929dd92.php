<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:82:"C:\phpStudy\PHPTutorial\WWW\shuzi\public/../application/admin\view\user\index.html";i:1517325921;s:85:"C:\phpStudy\PHPTutorial\WWW\shuzi\public/../application/admin\view\public\header.html";i:1516803117;s:85:"C:\phpStudy\PHPTutorial\WWW\shuzi\public/../application/admin\view\public\footer.html";i:1512649436;}*/ ?>
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
    .dataTables_wrapper{
        margin-top: 20px !important;
    }
    .mybtn{
        margin-top: -5px !important;
    }
    </style>
</head>
<link rel="stylesheet" type="text/css" href="/static/admin/webupload/webuploader.css">
<link rel="stylesheet" type="text/css" href="/static/admin/webupload/style.css">
<link rel="stylesheet" href="/static/admin/css/zTreeStyle/zTreeStyle.css">
<link rel="stylesheet" href="/static/admin/css/jquery.dataTables.min.css">
<style>
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
</style>
<body class="gray-bg" style="background-color:#fff;">
<div id="mycontent" style="width: 20%;height: 98%;display: inline-block;margin: 0 10px;background-color:#fff;overflow-x: scroll;padding-top: 20px;padding-right:10px;border-right: 1px solid #ccc;">
    <div style="text-align: center;background-color:#1ab394;line-height: 30px;color: #fff;">组织机构</div>
    <div id="tree_container" class="ztree"></div>
    <p style="display: none;"></p>
</div>
<div class="wrapper wrapper-content animated fadeInRight" style="display: inline-block;width: 78%;vertical-align: top;padding: 0;">
    <div class="ibox float-e-margins">
        <div class="ibox-content">
            <div class="row">
                <div id="mytable1_wrapper">
                    <table id="admin_table" width="100%" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>用户名称</th>
                                <th>头像</th>
                                <!--<th>用户角色</th>-->
                                <th>部门</th>
                                <th>手机号</th>
                                <th>岗位</th>
                                <th>真实姓名</th>
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

<div id="myModal" class="modal animated fadeInRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width: 60%;margin: 0 auto;">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>添加用户</h5>
                </div>
                <div class="ibox-content">
                    <!--新增用户信息开始-->
                    <form class="form-horizontal" name="userAdd" id="userAdd" method="post" action="<?php echo url('userAdd'); ?>">
                        <input type="text" name="id" id="id"  value=""  style="display: none;">
                        <input type="text" id="groupid" name="groupid" value="" style="display: none;">
                        <input type="text" id="groupname" name="groupname" value="" style="display: none;">
                        <div class="form-group">
                            <div class="col-lg-6 col-xs-12">
                                <label class="col-xs-4 control-label">姓名：</label>
                                <div class="myblock col-xs-6 input-group">
                                    <input id="real_name" type="text" class="form-control" name="real_name" >
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <label class="col-xs-4 control-label">性别：</label>
                                <div class="myblock col-xs-6 input-group">
                                    <input id="sex" type="text" class="form-control" name="sex" >
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-lg-6 col-xs-12">
                                <label class="col-xs-4 control-label">登录账号：</label>
                                <div class="myblock col-xs-6 input-group">
                                    <input id="username" type="text" class="form-control" name="username" >
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <label class="col-xs-4 control-label">登录密码：</label>
                                <div class="myblock col-xs-6 input-group">
                                    <input id="password" type="text" class="form-control" name="password" >
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-lg-6 col-xs-12">
                                <label class="col-xs-4 control-label">手机号码：</label>
                                <div class="myblock col-xs-6 input-group">
                                    <input id="mobile" type="text" class="form-control" name="mobile" >
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <label class="col-xs-4 control-label">办公电话：</label>
                                <div class="myblock col-xs-6 input-group">
                                    <input id="tele" type="text" class="form-control" name="tele" >
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-lg-6 col-xs-12">
                                <label class="col-xs-4 control-label">所在部门：</label>
                                <div class="myblock col-xs-6 input-group">
                                    <!--<input id="dept" type="text" class="form-control" name="dept" >-->
                                    <select name="dept" id="dept" class="form-control" >
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <label class="col-xs-4 control-label">职位：</label>
                                <div class="myblock col-xs-6 input-group">
                                    <input id="position" type="text" class="form-control" name="position" >
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-lg-6 col-xs-12">
                                <label class="col-xs-4 control-label">电子邮箱：</label>
                                <div class="myblock col-xs-6 input-group">
                                    <input id="email" type="text" class="form-control" name="email" >
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <label class="col-xs-4 control-label">微信账号：</label>
                                <div class="myblock col-xs-6 input-group">
                                    <input id="wechat" type="text" class="form-control" name="wechat" >
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-lg-12 col-xs-12">
                                <label class="col-xs-2 control-label">备注：</label>
                                <div class="myblock col-xs-8 input-group">
                                    <textarea name="remark" id="remark" class="form-control" style="min-height: 150px;"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-xs-2 control-label">头像：</label>
                            <div class="input-group col-xs-8">
                                <input type="hidden" id="data_photo" name="portrait" >
                                <div id="fileList" class="uploader-list" style="float:right"></div>
                                <div id="imgPicker" style="float:left">选择头像</div>
                                <img id="img_data" class="img-circle" height="80px" width="80px" style="float:left;margin-left: 50px;margin-top: -10px;" src="/static/admin/images/head_default.gif"/>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-xs-2 control-label">状&nbsp;态：</label>
                            <div class="col-xs-8">
                                <div class="radio myclass">
                                    <input id="open" type="radio" name='status' value="1"/>开启&nbsp;&nbsp;
                                    <input id="close" type="radio" name='status' value="0" />关闭
                                </div>
                            </div>
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
<script type="text/javascript">
    var groupid;
    var $list = $('#fileList');
    //上传图片,初始化WebUploader
    var uploader = WebUploader.create({

        auto: true,// 选完文件后，是否自动上传。
        swf: '/static/admin/webupload/Uploader.swf',// swf文件路径
        server: "<?php echo url('Upload/uploadface'); ?>",// 文件接收服务端。
        duplicate :true,// 重复上传图片，true为可重复false为不可重复
        pick: '#imgPicker',// 选择文件的按钮。可选。

        accept: {
            title: 'Images',
            extensions: 'gif,jpg,jpeg,bmp,png',
            mimeTypes: 'image/jpg,image/jpeg,image/png'
        },

        'onUploadSuccess': function(file, data, response) {
            $("#data_photo").val(data._raw);
            $("#img_data").attr('src', '/uploads/face/' + data._raw).show();
        }
    });

    uploader.on( 'fileQueued', function( file ) {
        $list.html( '<div id="' + file.id + '" class="item">' +
            '<h4 class="info">' + file.name + '</h4>' +
            '<p class="state">正在上传...</p>' +
            '</div>' );
    });

    // 文件上传成功
    uploader.on( 'uploadSuccess', function( file ) {
        $( '#'+file.id ).find('p.state').text('上传成功！');
    });

    // 文件上传失败，显示上传出错。
    uploader.on( 'uploadError', function( file ) {
        $( '#'+file.id ).find('p.state').text('上传出错!');
    });

    //提交
    $(function(){
        $('#userAdd').ajaxForm({
            beforeSubmit: checkForm,
            success: complete,
            dataType: 'json'
        });

        function checkForm(){
            if( '' == $.trim($('#username').val())){
                layer.msg('请输入用户名',{icon:2,time:1500,shade: 0.1}, function(index){
                    layer.close(index);
                });
                return false;
            }
            var txt1 = $("#myModal h5").text();
            if(txt1.search(/编辑用户/) < 0){
                if( '' == $.trim($('#password').val())){
                    layer.msg('请输入登录密码',{icon:2,time:1500,shade: 0.1}, function(index){
                        layer.close(index);
                    });
                    return false;
                }
            }

            if( '' == $.trim($('#real_name').val())){
                layer.msg('请输入真实姓名',{icon:2,time:1500,shade: 0.1}, function(index){
                    layer.close(index);
                });
                return false;
            }
        }


        function complete(data){
            console.log($("#action").val())
            console.log(data);
            if(data.code==1){
                $("#myModal").modal('hide');
                layer.msg("保存成功");
                admin_table.ajax.url("__SCRIPT__/test.php?groupid=" + groupid).load();
            }else{
                layer.msg(data.msg, {icon: 5,time:1500,shade: 0.1});
                return false;
            }
        }

    });



    //IOS开关样式配置
    var elem = document.querySelector('.js-switch');
    var switchery = new Switchery(elem, {
        color: '#1AB394'
    });
    var config = {
        '.chosen-select': {},
    }
    for (var selector in config) {
        $(selector).chosen(config[selector]);
    }
</script>
<script src="__JS__/jquery.ztree.all.js"></script>
<script src="__JS__/jquery.dataTables.min.js"></script>

<script type="text/javascript">
    $(".myclass input").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",});
    var mytree_node;

    var admin_table = $('#admin_table').DataTable( {
    "processing": true,
    "serverSide": true,
    "ajax": {
        "url": "__SCRIPT__/test.php"
    },
    "dom": '<"mybtn btn btn-outline btn-primary"><"myl"l>frtip',
    "columnDefs": [
        {
            "searchable": false,
            "orderable": false,
            "targets": [2],
            "render" :  function(data,type,row) {
                if(data){
                    var html = "<img style='width: 30px;height: 30px;border-radius: 50%;' src=__PHOTO__/"+ data +">";
                }else {
                    var html = "<img style='width: 30px;height: 30px;border-radius: 50%;' src=/static/admin/images/head_default.gif>";
                }
                return html;
            }
        },
        {
            "searchable": false,
            "orderable": false,
            "targets": [7],
            "render" :  function(data,type,row) {
                if(data == 1){
                    var html = "<input type='button' class='btn btn-primary btn-outline btn-xs' style='margin-left: 5px;' onclick='myuser_state(this);' value='开启'/>";
                }else {
                    var html = "<input type='button' class='btn btn-danger btn-outline btn-xs' style='margin-left: 5px;' onclick='myuser_state(this);' value='禁用'/>";
                }

                return html;
            }
        },
        {
            "searchable": false,
            "orderable": false,
            "targets": [8],
            "render" :  function(data,type,row) {
                var html = "<input type='button' class='btn btn-primary btn-outline btn-xs' style='margin-left: 5px;' onclick='edit(this)' value='编辑'/>";
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
$("div.mybtn").html('<div>添加用户</div>');
$("div.mybtn").click(function () {
    if(!$("#mycontent>p").text() || mytree_node.children){
        console.log(mytree_node)
        layer.msg("请选择组织机构");
    }else {
        var dept_name = $("#mycontent>p").text();
        $("#myModal h5").text(dept_name + "-添加用户");
        $("#myModal input").val("");
        $("#myModal textarea").val("");
        $('#fileList').empty();
        $('#open').val("1").iCheck('check');
        $('#close').val("0").iCheck('uncheck');
        var str = "<option value="+ dept_name +">"+ dept_name +"</option>"
        $("#dept").empty().append(str).val(dept_name);
        $("#groupname").val(dept_name);
        $("#groupid").val(mytree_node.id);
        $("#img_data").attr("src","/static/admin/images/head_default.gif");
        $("#myModal").modal('show');
    }
})
//编辑用户
function edit(that) {
    var uid = $(that).parent("td").parent("tr").children("td:first-child").text();
    $.ajax({
        url: "./userEdit",
        type: "post",
        data: {uid:uid},
        dataType: "json",
        success: function (res) {
            console.log(res);
            if(res.msg == "success"){
                var data = res.data;
                $('#fileList').empty();
                $("#id").val(uid);
                $("#groupname").val(data.groupname);
                $("#groupid").val(data.groupid);
                $("#real_name").val(data.real_name);
                $("#sex").val(data.sex);
                $("#username").val(data.username);
                $("#mobile").val(data.mobile);
                $("#tele").val(data.tele);
                $("#position").val(data.position);
                $("#email").val(data.email);
                $("#wechat").val(data.wechat);
                $("#remark").val(data.remark);
                $("#myModal h5").text(data.dept + "-编辑用户");
                if(data.status == 1){
                    $('#open').iCheck('check');
                    $('#close').iCheck('uncheck');
                }else {
                    $('#open').iCheck('uncheck');
                    $('#close').iCheck('check');
                }
                if(data.portrait){
                    $("#img_data").attr("src","__PHOTO__/" + data.portrait);
                }else {
                    $("#img_data").attr("src","/static/admin/images/head_default.gif");
                }
                $("#dept").empty();
                var group = JSON.parse(res.group);
                console.log(group)
                $.each(group,function (i,n) {
                    var str = "<option value="+ n.name +">"+ n.name +"</option>";
                    $("#dept").append(str);
                });
                $("#dept").val(data.dept);
                $("#dept").on("change",function () {
                    var val1 = $(this).val();
                    $.each(group,function (i,n) {
                        if(n.name == val1){
                            $("#groupid").val(n.id);
                        }
                    })
                })

                $("#myModal").modal('show');
            }else {
                layer.msg(res.msg);
            }
        }
    })
}
function userEdit(id){
    location.href = './userEdit/id/'+id+'.html';
}

//删除用户
function myconfirm(id,url) {
    layer.confirm('确认删除此条记录吗?', {icon: 3, title:'提示'}, function(index){
        $.ajax({
            url: url,
            async: false,
            data: {'id' : id},
            type: "get",
            dataType: "json",
            success: function (res) {
                if(res.code == 1){
                    layer.msg(res.msg,{icon:1,time:1500,shade: 0.1});
                    admin_table.ajax.url("__SCRIPT__/test.php?groupid=" + groupid).load();
                }else{
                    layer.msg(res.msg,{icon:0,time:1500,shade: 0.1});
                }
            }
        })
        layer.close(index);
    })
}
function del(that) {
    var uid = $(that).parent("td").parent("tr").children("td:first-child").text();
        myconfirm(uid,'<?php echo url("userDel"); ?>');
}
//状态开启禁用
function mystatus(id,url,that){
    $.post(url,{id:id},function(data){
        if(data.code==1){
            $(that).removeClass("btn-primary btn-outline").addClass("btn-danger btn-outline").val("禁用");
            layer.msg(data.msg,{icon:2,time:1500,shade: 0.1,});
            return false;
        }else{
            $(that).removeClass("btn-danger btn-outline").addClass("btn-primary btn-outline").val("开启");
            layer.msg(data.msg,{icon:1,time:1500,shade: 0.1,});
            return false;
        }
    });
    return false;
}
function myuser_state(that) {
    var uid = $(that).parent("td").parent("tr").children("td:first-child").text();
    mystatus(uid,'<?php echo url("user_state"); ?>',that);
}
//组织结构
    var zTreeObj;
    //点击获取节点名称
    function zTreeOnClick(event, treeId, treeNode) {
  //      console.log(treeNode);
        $.ajax({
            url:"./test",    //请求的url地址
            dataType:"json",   //返回格式为json
            async:true,//请求是否异步，默认为异步，这也是ajax重要特性
            type:"GET",   //请求方式
            success:function(req){
                console.log(req);
            }
        });
        mytree_node = treeNode;
        $("#groupname").val(treeNode.name);
        $("#mycontent>p").text(treeNode.name);
        $("#groupid").val(treeNode.id);
        groupid = treeNode.id;
        admin_table.ajax.url("__SCRIPT__/test.php?groupid=" + groupid).load();

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
        },
        edit: {
            drag : {
                isMove : false,
                prev : false,
                next : false,
                inner : false
            },
            enable : false,
            editNameSelectAll: true,
            showRemoveBtn: true,
            removeTitle: "删除节点",
            showRenameBtn: true,
            renameTitle: "编辑节点名称",
            showAddBtn: true,
            addTitle: "添加节点"
        }
    };
    zTreeObj = $.fn.zTree.init($("#tree_container"), setting,null);



</script>
</body>
</html>
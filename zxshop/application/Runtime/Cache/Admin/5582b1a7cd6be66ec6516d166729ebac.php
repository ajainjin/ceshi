<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>
            发布商品
        </title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="format-detection" content="telephone=no">
        <link rel="stylesheet" href="/zxshop/public/css/x-admin.css" media="all">
        <link rel="stylesheet" href="/zxshop/public/css/index.css" media="all">
        <script type="text/javascript" src="/zxshop/public/js/index.js"></script>
        <script type="text/javascript" src="/zxshop/public/js/jquery.min.js"></script>
    </head>
    
    <body>
    	<div style="width:1120px;height:550px">
    	
    	<form class="layui-form">
        <div style="width:600px;height:550px;border:1;float:left;margin-right:10px">
            <div style="margin-left:200px">
               <div class="layui-form-item" style="margin-top:30px">
                    <label for="username" class="layui-form-label">
                        <span class="x-red">*</span>商品名称
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="username" name="username" required="" lay-verify="required" value="<?php echo ($re["mname"]); ?>" 
                        autocomplete="off" class="layui-input">
                    </div>
                   
                </div>
               <div class="layui-form-item">
                    <label for="username" class="layui-form-label">
                        <span class="x-red">*</span>所属分类
                    </label>
                    <div class="layui-input-inline">
                        <select name="fid">
                            <option value="0">顶级分类</option>
                            <option value="新闻">新闻</option>
                            <option value="新闻子类1">--新闻子类1</option>
                            <option value="新闻子类2">--新闻子类2</option>
                            <option value="产品">产品</option>
                            <option value="产品子类1">--产品子类1</option>
                            <option value="产品子类2">--产品子类2</option>
                        </select>
                    </div>
                   
                </div>
                <div class="layui-form-item">
                    <label for="username" class="layui-form-label">
                        <span class="x-red">*</span>商品描述
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="username" name="username" required="" lay-verify="required" value="<?php echo ($re["mname"]); ?>" 
                        autocomplete="off" class="layui-input">
                    </div>
                   
                </div>
                <div class="layui-form-item">
                    <label for="username" class="layui-form-label">
                        <span class="x-red">*</span>手机版本
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="username" name="username" required="" lay-verify="required" value="<?php echo ($re["mname"]); ?>" 
                        autocomplete="off" class="layui-input">
                    </div>
                   
                </div>
                <div class="layui-form-item">
                    <label for="username" class="layui-form-label">
                        <span class="x-red">*</span>颜色
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="username" name="username" required="" lay-verify="required" value="<?php echo ($re["mname"]); ?>" 
                        autocomplete="off" class="layui-input">
                    </div>
                   
                </div>
                <div class="layui-form-item">
                    <label for="username" class="layui-form-label">
                        <span class="x-red">*</span>制式
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="username" name="username" required="" lay-verify="required" value="<?php echo ($re["mname"]); ?>" 
                        autocomplete="off" class="layui-input">
                    </div>
                   
                </div>
                <div class="layui-form-item">
                    <label for="username" class="layui-form-label">
                        <span class="x-red">*</span>价格
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="username" name="username" required="" lay-verify="required" value="<?php echo ($re["mname"]); ?>" 
                        autocomplete="off" class="layui-input">
                    </div>
                   
                </div>
                <div class="layui-form-item">
                    <label for="username" class="layui-form-label">
                        <span class="x-red">*</span>库存
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="username" name="username" required="" lay-verify="required" value="<?php echo ($re["mname"]); ?>" 
                        autocomplete="off" class="layui-input">
                    </div>
                   
                </div>
                
                
                <div style ="margin-left:110px">
                <button  class="layui-btn"  lay-filter="add" lay-submit="">
                        发布
                  </button>
                </div>
             </div>
        </div>
        
        <div style="width:500px;height:500px;border:1;float:left;margin-left:10px">
        	<div style="margin-top:30px">
               <div class="layui-form-item">
                    <label for="link" class="layui-form-label">
                        <span class="x-red">*</span>产品图
                    </label>
                    <div class="layui-input-inline">
                      <div style="position:relative;">
                      	
                        <input  type="file" id="link" name="link" class="layui-input" onchange='PreviewImage(this)' style="opacity:0" multiple="multiple"/>
                        <div style="width:100px;height:30px;border:1px solid #ccc;position:absolute;top:3px;left:3px;z-index:-9999">
                        <div style="padding-left:12px;padding-top:5px">
                        <i class="layui-icon">&#xe62f;</i><span>&nbsp;图片上传</span>
                        </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div style="margin-left:53px"><p>预览图</p></div>
                    <div id="preview" class="img-cont"></div>
                </div>
        </div>
        
        </form>
        </div>
        <script src="/zxshop/public/lib/layui/layui.js" charset="utf-8"></script>
        <script src="/zxshop/public/js/x-layui.js" charset="utf-8"></script>
        <script>
            layui.use(['form','layer'], function(){
                $ = layui.jquery;
              var form = layui.form()
              ,layer = layui.layer;
            
              //自定义验证规则
              form.verify({
                nikename: function(value){
                  if(value.length < 5){
                    return '昵称至少得5个字符啊';
                  }
                }
                ,pass: [/(.+){6,12}$/, '密码必须6到12位']
                ,repass: function(value){
                    if($('#L_pass').val()!=$('#L_repass').val()){
                        return '两次密码不一致';
                    }
                }
              });

              
              
            //监听提交  
              form.on('submit(add)', function(data){  
               layer.msg("123");
                /* $.ajax({
                	type:'get',
                	url:'/zxshop/admin.php/Admin/add',
                	data:$("form").serialize(),
                	success:function(msg){
                		//layer.alert(msg);
                		if(msg=="OK"){
                			layer.confirm('添加成功',{btn:['继续添加','取消']}
                			,function(){
                			location.reload(); 
                			}
                			,function(){
                			var index = parent.layer.getFrameIndex(window.name);
                            //关闭当前iframe
                            parent.layer.close(index);	
                            parent.location.reload(); 
                			});
                		}
                	}
                }); */
                return false;  
              });  
              
              
            });
        </script>
              
    </body>

</html>
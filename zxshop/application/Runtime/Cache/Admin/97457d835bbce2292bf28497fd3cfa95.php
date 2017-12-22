<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>
            后台登录
        </title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="format-detection" content="telephone=no">
        <link rel="stylesheet" href="/zxshop/public/css/x-admin.css" media="all">
    </head>
    
    <body style="background-color: #393D49">
        <div class="x-box">
            <div class="x-top">
                <i class="layui-icon x-login-close">
                    &#x1007;
                </i>
                <ul class="x-login-right">
                    <li style="background-color: #F1C85F;" color="#F1C85F">
                    </li>
                    <li style="background-color: #EA569A;" color="#EA569A">
                    </li>
                    <li style="background-color: #393D49;" color="#393D49">
                    </li>
                </ul>
            </div>
            <div class="x-mid">
                <div class="x-avtar">
                    <img src="/zxshop/public/images/logo.png" alt="">
                </div>
                <div class="input">
                    <form class="layui-form">
                        <div class="layui-form-item x-login-box">
                            <label for="username" class="layui-form-label">
                                <i class="layui-icon">&#xe612;</i>
                            </label>
                            
                            <div class="layui-input-inline">
                                <input type="text" id="username" name="username"
                                autocomplete="off" placeholder="username" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item x-login-box">
                            <label for="pass" class="layui-form-label">
                                <i class="layui-icon">&#xe628;</i>
                            </label>
                            <div class="layui-input-inline">
                                <input type="password" id="pass" name="pass" 
                                autocomplete="off" placeholder="******" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item" id="loginbtn">
                            <botton  class="layui-btn" type="button" value="" onclick="return verify()"  style="padding-top:15px">登 录</botton>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="/zxshop/public/lib/layui/layui.js" charset="utf-8">
        </script>
        <!-- 更改背景色 -->
        <script>
            layui.use(['form'],
            function() {
                $ = layui.jquery;
                var form = layui.form(),
                layer = layui.layer;

                $('.x-login-right li').click(function(event) {
                    color = $(this).attr('color');
                    $('body').css('background-color', color);
                });

            });
        </script>
        <script type="text/javascript" src="/zxshop/public/js/jquery.min.js"></script>
        <script>
        	function verify(){
        		if($("#username").val()==""||$("#pass").val()==""){
        			layer.msg('用户名密码不能为空');
        			return false;
        		}else{
        		$.ajax({
        			type:"POST",
        			url:"/zxshop/admin.php/Login/login",
        			data:{username:$("#username").val(),password:$("#pass").val()},
        			success:function(html){
        						if(html!=""){
        						layer.alert(html);	
        						}else{
        							window.location.href="/zxshop/admin.php/Index/index";
        						}
        				
        			}
        			
        		});
        		}
        	}
        </script>
    </body>

</html>
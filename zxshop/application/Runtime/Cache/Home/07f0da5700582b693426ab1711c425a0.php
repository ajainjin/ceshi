<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>会员登录</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<script src="/zxshop/public/js/hm.js"></script><script src="/zxshop/public/js/hm.js"></script><script src="/zxshop/public/js/compatible.js"></script>
<link href="/zxshop/public/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="/zxshop/public/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/zxshop/public/js/jquery.cookie.js" type="text/javascript" charset="utf-8"></script>
<script src="/zxshop/public/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
<!--site header common-->

<link rel="stylesheet" href="/zxshop/public/css/theme.css">
<link rel="stylesheet" href="/zxshop/public/css/public.css">
<link rel="stylesheet" href="/zxshop/public/css/shop.css">
<link rel="stylesheet" href="/zxshop/public/css/act.css">
<script src="/zxshop/public/js/public.js"></script>
</head>
<body class="login-in-body">
<header>
    <div class="containers">
        <nav class="navbar navbar-inverse">
          
          <ul class="nav navbar-nav top-tools navbar-right right-navbar">
                 <li class="is-unlogin"><a href="/zxshop/index.php/Index/index.html">商城首页</a></li>
              <li class="is-unlogin" style="margin-right:100px"><a href="/zxshop/index.php/Regist/index.html">立即注册</a></li>  
          </ul>
        </nav>
    </div>
</header>

<div class="container main-container">
    <div class="passport-login-container clearfix" style="padding-bottom:0px">
    <div class="guanggao-block">
        <img src="/zxshop/public/images/gg.png" alt="">
    </div>
    <div class="panel panel-default login-panel">
      <div class="panel-heading clearfix">
          欢迎登录
      </div>
      <div class="panel-body">
          <form id="member_login_form" class="form-horizontal" action="/zxshop/index.php/Login/login.html" method="post">
              
              
                            <div class="form-group">
                  <div class="col-md-10">
                    <input name="uname" style="display:none" disabled="disabled">
                    <input type="text" required="true" autocomplete="off" name="username" class="form-control" id="input_uname" placeholder="昵称/手机号/邮箱">
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-md-10">
                      <input name="password" style="display:none" disabled="disabled">
                    <input type="password" required="true" name="password" class="form-control" id="input_password" placeholder="密码">
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-md-10" style="margin-bottom: 0;">
                    <input name="vcode" style="display:none" disabled="disabled">
                    
                    <input type="text" required="true" name="vcode" class="form-control" id="input_password" placeholder="验证码">
                   
                    <div class="col-md-5">
                        <img src="/zxshop/index.php/Login/verify" alt="验证码" style="width:90px;height:35px" id="verify1">
                        
                    </div>
                    
                  </div>
                  &nbsp;<span style="color:red;font-size:18px" id="span"><b></b></span>
                  <button type="button" class="btn btn-link btn-sm" onclick="change()">更换验证码</button>
              </div>
              <!-- 刷新验证码 -->
              <script>
              function change(){
              	var img = document.getElementById("verify1");
              	img.src = "/zxshop/index.php/Login/verify/"+Math.random();
              }
              </script>
               
              <div class="form-group">
                  <div class="col-md-10">
                    <button type="submit" data-loading-text="正在登录..." class="btn btn-danger login-btn">登录</button>
                  </div>
              </div>
             
                            <div class="panel-footer">
                    <div class="fengexian">
                      <img src="/zxshop/public/images/fgx.png" alt="">
                      <span class="other-login">其他方式登录</span>
                      <img src="/zxshop/public/images/fgx.png" alt="">
                    </div>
                    <ul class="list-inline oauth-login-list">
                                              <li><a class="btn btn-xs btn-default btn-wechat" href="#">
                          <img src="/zxshop/public/images/wechat.png" alt=""><!-- 微信信任登录 --></a></li>
                                              <li><a class="btn btn-xs btn-default btn-weibo" href="#">
                          <img src="/zxshop/public/images/weibo.png" alt=""><!-- 新浪微博(weibo)信任登录 --></a></li>
                                              <li><a class="btn btn-xs btn-default btn-qq" href="#">
                          <img src="/zxshop/public/images/qq.png" alt=""><!-- QQ信任登录 --></a></li>
                    </ul>
              </div>
                            <div class="form-group">
                  <!-- <div class="col-md-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" class="autologin-checkbox"> 自动登录
                      </label>
                    </div>
                  </div> -->
                  <div class="col-md-10 text-center">
                                          <a class="register-now" href="/zxshop/index.php/Regist/index.html">立即注册</a>
                                        <a href="https://www.myzte.com/passport-reset_password.html">忘记密码?</a>
                  </div>
              </div>
          </form>
      </div>
    </div>
</div>
</div>

 
<div class="footer">
	<div class="footer-inner">
		<div class="footer-top">
			<ul class="list-unstyled clearfix">
				<li class="pull-left">
					<img src="/zxshop/public/images/7.png" alt="">
					<span>7天退货保障</span>
				</li>
				<li class="pull-left">
					<img src="/zxshop/public/images/30.png" alt="">
					<span>15天换货承诺</span>
				</li>
				<li class="pull-left">
					<img src="/zxshop/public/images/mian.png" alt="">
					<span>150元起全场免运费</span>
				</li>
				<li class="pull-left">
					<img src="/zxshop/public/images/position.png" alt="">
					<span>全国售后服务点</span>
				</li>
			</ul>
		</div>
		<div class="footer-center">
			<div class="footer-plus">
				<div class="help-center">
					<ul class="list-unstyled clearfix"><li class="help-title"><a href="javascript:;">关注我们</a></li><li class="help-list"><ul><li><a href="https://www.myzte.com/help-14.html">中兴社区</a></li><li><a href="https://www.myzte.com/help-13.html">官方微信</a></li><li><a href="https://www.myzte.com/help-12.html">新浪微博</a></li></ul></li></ul>
					<ul class="list-unstyled clearfix"><li class="help-title"><a href="javascript:;">帮助中心</a></li><li class="help-list"><ul><li><a href="https://www.myzte.com/help-11.html">支付方式</a></li><li><a href="https://www.myzte.com/help-10.html">购物指南</a></li><li><a href="https://www.myzte.com/help-9.html">配送指南</a></li></ul></li></ul>
					<ul class="list-unstyled clearfix"><li class="help-title"><a href="javascript:;">售后服务</a></li><li class="help-list"><ul><li><a href="https://www.myzte.com/help-8.html">退换货流程</a></li><li><a href="https://www.myzte.com/help-7.html">售后网点</a></li><li><a href="https://www.myzte.com/help-6.html">退换货政策</a></li><li><a href="https://www.myzte.com/help-5.html">保修政策</a></li></ul></li></ul>
					<ul class="list-unstyled clearfix"><li class="help-title"><a href="javascript:;">关于商城</a></li><li class="help-list"><ul><li><a href="https://www.myzte.com/help-4.html">联系我们</a></li><li><a href="https://www.myzte.com/help-3.html">商城简介</a></li><li><a href="https://www.myzte.com/help-2.html">礼品团购</a></li></ul></li></ul>
				</div>
                <div class="call-block">
					<div class="tell">
						<div class="kefu">
						<img src="/zxshop/public/images/kefu.png" alt="">
					    <a href="#" target="_Blank">在线客服</a> 
                        </div>
						<div class="explain">周一到周日 8:30 - 20:30 (全年无休)</div>
					</div>
				</div>
				
			</div>
		</div>
		<div class="footer-bottom">
			<ul class="list-unstyled clearfix">
				<li><a href="#" target="_blank">中兴社区</a></li>
				<li><a href="#" target="_blank">中兴通讯</a></li>
				<li><a href="#" target="_blank">汇天地</a></li>
				<li><a href="#" target="_blank">中兴云服务</a></li>
				<li><a href="#" target="_blank">中兴手机</a></li>
			</ul>
			<div class="copy-right" style="text-align: center;">
			<a href="#" target="_blank">服务协议</a> | ©2014 - 2017 深圳市中兴智谷科技有限公司版权所有，并保留所有权利  
			</div>
            <div class="copy-right" style="text-align: center;">
				增值电信业务经营许可证：粤B2-20160352 | ICP备案证书号 : <a href="#" target="_blank">粤ICP备16018970号 </a>
			</div>
		</div>
	</div>
</div>

 

      
    






</body></html>
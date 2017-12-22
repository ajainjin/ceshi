<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>会员注册</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<script src="/zxshop/public/js/hm.js"></script><script src="/zxshop/public/js/hm.js"></script><script src="/zxshop/public/js/compatible.js"></script>
<link href="/zxshop/public/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="/zxshop/public/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/zxshop/public/js/jquery.cookie.js" type="text/javascript" charset="utf-8"></script>
<script src="/zxshop/public/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>

<link rel="stylesheet" href="/zxshop/public/css/theme.css">
<link rel="stylesheet" href="/zxshop/public/css/public.css">
<link rel="stylesheet" href="/zxshop/public/css/shop.css">
<link rel="stylesheet" href="/zxshop/public/css/act.css">
<script src="/zxshop/public/js/public.js"></script>
</head>
<body class="signup-in-body">

<script src="/zxshop/public/js/hm.js"></script><script src="/zxshop/public/js/compatible.js"></script>
 <link href="/zxshop/public/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="/zxshop/public/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/zxshop/public/js/jquery.cookie.js" type="text/javascript" charset="utf-8"></script>
<script src="/zxshop/public/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
<!--site header common-->

    <link rel="stylesheet" href="/zxshop/public/css/theme.css">
    <link rel="stylesheet" href="/zxshop/public/css/style.css">
    <link rel="stylesheet" href="/zxshop/public/css/public.css">
	<link rel="stylesheet" href="/zxshop/public/css/shop.css">
	<link rel="stylesheet" href="/zxshop/public/css/member.css">
	<link rel="stylesheet" href="/zxshop/public/css/aftersales.css">
     <script src="/zxshop/public/js/public.js"></script>
    <!-- 轮播图js代码 -->
     <script>
        (function(win){
            win.Sale = {};
            //倒计时
            win.Sale.countdown = function (intDiff,show_scope,callback){
                if(!show_scope)return;
                var self = this;
                self.timer = setInterval((function(){
                    var day=0,
                        hour=0,
                        minute=0,
                        second=0;//时间默认值
                    if(intDiff > 0){
                        day = Math.floor(intDiff / (60 * 60 * 24));
                        hour = Math.floor(intDiff / (60 * 60)) - (day * 24);
                        minute = Math.floor(intDiff / 60) - (day * 24 * 60) - (hour * 60);
                        second = Math.floor(intDiff) - (day * 24 * 60 * 60) - (hour * 60 * 60) - (minute * 60);
                    }
                    if (day <= 9) day = '0' + day;
                    if (hour <= 9) hour = '0' + hour;
                    if (minute <= 9) minute = '0' + minute;
                    if (second <= 9) second = '0' + second;
                    show_scope.find('.day').html(day);
                    show_scope.find('.hours').html(hour);
                    show_scope.find('.minutes').html(minute);
                    show_scope.find('.seconds').html(second);
                    if(day == 0 && hour == 0 && minute == 0 && second == 0){
                       clearInterval(self.timer);
                       if( typeof(callback) == 'function'){
                           callback();
                       }
                    }
                    intDiff--;
                    return arguments.callee;
                })(), 1000);
            };
        })(window);
    </script>
</head>

    <header>
    <div class="containers">
        <nav class="navbar navbar-inverse">
          
          <ul class="nav navbar-nav top-tools navbar-right right-navbar">
              
              <!-- 需要判断是否登录 -->
              <?php if(!$_SESSION['userMsg']): ?><li class="is-unlogin"><a href="/zxshop/index.php/Login/index">登录</a></li>
              <li class="is-unlogin"><a href="/zxshop/index.php/Regist/index">注册</a></li>
              <?php else: ?>
              <li class="is-login">
                  <a id="member_menu" href="#">欢迎你，<span><?php echo ($_SESSION['userMsg']['username']); ?></span></a>
                
              </li>
              <li><a href="/zxshop/index.php/Member/index">会员中心</a></li>
                   <!-- <li><a href="#">我的优惠券</a></li> -->
                   <li><a href="/zxshop/index.php/ShopCar/index">我的购物车</a></li>
				   <li><a href="/zxshop/index.php/GoodsList/index">我的订单</a></li>
                   <li><a href="/zxshop/index.php/Login/loginout">退出登录</a></li><?php endif; ?>
			  <li class="shop-cart no-border">
				<a href="/zxshop/index.php/ShopCar/index" class="shopcart-logo">
					<img src="/zxshop/public/images/shopcart.png" alt="">&nbsp;购物车
					<span class="shopcart-number cart-count hidden"></span>
				</a>
				<div class="shopcart-null cart-content">
					<div class="remind">
						购物车中还没有商品,快快选购吧!
						<img src="/zxshop/public/images/smile.png" alt="">
					</div>
				</div>
				
			 </li>
          </ul>
        </nav>
    </div>
</header>

<div class="classify-block">
    <div class="classify">
	    <div class="logo">
			<a href="/zxshop/index.php/Index/index"><img src="/zxshop/public/images/zx-logo.png" alt=""></a>
		</div>
        <ul class="list-unstyled all-goods-type clearfix">
            <li class="pull-left">
                <a href="/zxshop/index.php/Index/index">首页</a>
            </li>
           <li class="pull-left crceate-fl"><a href="/zxshop/index.php/AllGoods/index">所有商品</a></li>
            
            
           <li class="pull-left create-fl" id="cate-qyjp">
            
  <a href="/zxshop/index.php/TPhone/index" id="tj">天机系列</a>
<div class="fenlei-detail-block">
  <div class="fenlei-detail">
    <ul class="list-unstyled fenlei-two clearfix">
      <li class="pull-left">
        <a href="https://www.myzte.com/6902176008580.html" target="_blank">
        <div class="goods-img" style="border-left: none;">
            <img src="/zxshop/public/images/d3f465b4d2e1.jpg" alt="">
        </div>
        <div class="goods-data">
            <div class="goods-name-block">
                <span>天机7 MAX</span>
            </div>
            <div class="goods-pri-block">
                 <span class="new-pri">￥<strong>3299.0</strong></span>
              
            </div>
        </div>
    </a>
</li>
<li class="pull-left">
    <a href="https://www.myzte.com/item-2071.html" target="_blank">
        <div class="goods-img">
            <img src="/zxshop/public/images/f61206bc58f7.jpg" alt="">
        </div>
        <div class="goods-data">
            <div class="goods-name-block">
                <span>天机7</span>
            </div>
            <div class="goods-pri-block">
                 <span class="new-pri">￥<strong>3099.0</strong></span>
              
            </div>
        </div>
    </a>
</li>
<li class="pull-left">
    <a href="https://www.myzte.com/item-2138.html" target="_blank">
        <div class="goods-img">
            <img src="/zxshop/public/images/bcbcd1af205e.jpg" alt="">
        </div>
        <div class="goods-data">
            <div class="goods-name-block">
                <span>天机7 郎朗签名版</span>
            </div>
            <div class="goods-pri-block">
                 <span class="new-pri">￥<strong>4099.0</strong></span>
              
            </div>
        </div>
    </a>
</li>
    </ul>
  </div>
</div>
              
            </li>
      
            
        
            
            <li class="pull-left create-fl" id="cate-jxpj">
                <a href="/zxshop/index.php/BSeries/index">BLADE系列</a>
                <div class="fenlei-detail-block" style="display: none; height: 228px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                    <div class="fenlei-detail">
                        <ul class="list-unstyled fenlei-two clearfix">
                            <li class="pull-left">
    <a href="https://www.myzte.com/v8.html" target="_blank">
        <div class="goods-img" style="border-left: none;">
            <img src="/zxshop/public/images/20bc054eacec.jpg" alt="">
        </div>
        <div class="goods-data">
            <div class="goods-name-block">
                <span>Blade V8</span>
            </div>
            <div class="goods-pri-block">
                 <span class="new-pri">￥<strong>1499.0</strong></span>
              
            </div>
        </div>
    </a>
</li>
<li class="pull-left">
    <a href="https://www.myzte.com/6902176009532.html" target="_blank">
        <div class="goods-img">
            <img src="/zxshop/public/images/5277f8139b99.jpg" alt="">
        </div>
        <div class="goods-data">
            <div class="goods-name-block">
                <span>Blade A2 Plus</span>
            </div>
            <div class="goods-pri-block">
                 <span class="new-pri">￥<strong>849.0</strong></span>
              
            </div>
        </div>
    </a>
</li>
<li class="pull-left">
    <a href="https://www.myzte.com/6902176003141.html" target="_blank">
        <div class="goods-img">
            <img src="/zxshop/public/images/76f2dfde13d3.jpg" alt="">
        </div>
        <div class="goods-data">
            <div class="goods-name-block">
                <span>Blade A2</span>
            </div>
            <div class="goods-pri-block">
                 <span class="new-pri">￥<strong>629.0</strong></span>
              
            </div>
        </div>
    </a>
</li>
<li class="pull-left">
    <a href="https://www.myzte.com/690217601038.html" target="_blank">
        <div class="goods-img">
            <img src="/zxshop/public/images/c99e4cd1fde3.jpg" alt="">
        </div>
        <div class="goods-data">
            <div class="goods-name-block">
                <span>Blade A2 高配</span>
            </div>
            <div class="goods-pri-block">
                 <span class="new-pri">￥<strong>779.0</strong></span>
              
            </div>
        </div>
    </a>
</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="pull-left crceate-fl"><a href="/zxshop/index.php/Spro2/index">微投SPRO2</a></li>
            <li class="pull-left crceate-fl"><a href="/zxshop/index.php/Comm/index">中兴社区</a></li>
        </ul>
        
		<div class="search">
			<div class="search-icon">
			<form action="/zxshop/index.php/Search/index" method="post" name="search">
				   <div class="input-block">
					   <input type="text" id="input_keyword" placeholder="天机7" name="keyword">
					   
				   </div>
				  
				   <div class="button-block">
				   
					   <button type="submit"><img src="/zxshop/public/images/Search.png" alt="" ></button>
				   
				   </div>
				   </form>
			</div>
		</div>
		 
    </div>
</div>





<div class="container main-container">
    <div class="passport-signup-container clearfix" style="padding-bottom:0px">
    <div class="guanggao-block">
        <img src="/zxshop/public/images/gg.png" alt="">
    </div>
    <div class="panel panel-default signup-panel">
      <div class="panel-heading clearfix">
          欢迎注册
      </div>
      <div class="panel-body">
      
      
          <form id="member_signup_form" class="form-horizontal" action="/zxshop/index.php/Regist/check_verify.html" method="post">
              
              <div class="form-group">
                  <div class="col-md-10">
                    <input type="text" required="true" autocomplete="off" name="login_name" class="form-control" id="input_login_name" placeholder="昵称/手机号/邮箱">
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-md-10">
                    <input type="password" required="true" name="login_password" class="form-control" id="input_login_password" placeholder="登录密码">
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-md-10">
                    <input type="password" required="true" name="psw_confirm" class="form-control" id="input_psw_confirm" placeholder="再次输入登录密码">
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-md-10">
                    <input type="text" required="true" name="vcode" class="form-control" id="input_vcode" placeholder="验证码">
                    <div class="local-vcode col-md-5" style="margin-right:2px">
                        <img src="/zxshop/index.php/Regist/verify" alt="验证码" style="width:90px;height:35px" id="img-verify">
                    </div>
                    
                  </div>
                 &nbsp;<span style="color:red;font-size:18px" id="span"><b></b></span>
                  
                  <button type="button" class="btn btn-link btn-sm vcode-change" onclick="change()">更换验证码</button>
                  
                  <!-- 刷新验证码 -->
                  <script>
                  function change(){
                  var img = document.getElementById("img-verify");
                  img.src = "/zxshop/index.php/Regist/verify/"+Math.random();
                  }
                  </script>
                  
                  
              </div>
              
              <div class="form-group reg-btn">
                  <div class="col-md-10">
                    <button type="submit"  class="btn btn-warning signup-btn">
<img src="/zxshop/public/images/trackingdata" width="0" height="0" border="0">
立即注册</button>

                  </div>
              </div>
              <div class="col-md-12 text-center">
                已有帐号?&nbsp;&nbsp;&nbsp;
              <a class="login-now" href="/zxshop/index.php/Login/index.html">立即登录</a>&nbsp;&nbsp;&nbsp;
              <a class="is-unlogin" href="/zxshop/index.php/Login/index.html">不登录了先逛逛再说</a>
              </div>
          </form>
      </div>

    </div>

</div>
<script>
$(function(){
	
	//var reg="[ `~!@#$%^&*()+=|{}':;',\\[\\].<>》《/?~！@#￥%……&*（）——+|{}【】‘；：”“’。，、？]";验证用户名
	$("#input_login_name").ready(function(){
		if($(this).val()==""){
			$("#span").html("用户名不能为空");
			$(".signup-btn").attr("disabled","disabled");
		}else if($(this).val().match("[ `~!@#$%^&*()+=|{}':;',\\[\\].<>》《/?~！@#￥%……&*（）——+|{}【】‘；：”“’。，、？]")){            //正则匹配用户名不能为非法字符或空
			$("#span").html("用户名不合法");
			$(".signup-btn").attr("disabled","disabled");
			//window.alert('11111111');	
		}else if($(this).val().replace(/[\u0391-\uFFE5]/g,"aaa").length>15){
			$("#span").html("用户名过长");
			$(".signup-btn").attr("disabled","disabled");
		}else{
			
			$.ajax({
				type:"get",
				url:"/zxshop/index.php/Regist/check",
				data:"username="+$(this).val(),
				success:function(msg){
					$("#span").html(msg);
				}
			});
		
			
		}
		
		
	});
	
	
	
	//验证密码
	$("#input_login_password").blur(function(){
		if($(this).val()==""){
			$("#span").html("密码不能为空");
			$(".signup-btn").attr("disabled","disabled");
		}else{
			$("#span").html("");
			
		}
	});
	//再次输入密码
	$("#input_psw_confirm").blur(function(){
		if($(this).val()==""){
			$("#span").html("两次密码不一致");
		}else if($(this).val()!=$("#input_login_password").val()){
			$("#span").html("两次密码不一致");
		}else{
			$("#span").html("");
			$(".signup-btn").attr("disabled",false);
		}
	});
	
	
})

</script> 
<!-- <script type="text/javascript">
var flag = false;
$(function(){  
	 $('#member_signup_form').submit(function(){  
	 if(!flag){  
	 $('.vcode-change').before('<span style="color:red;font-size:18px" id="span"><b></b></span>');  
	 }  
	 if($('[name=login-name]').val() == ''){  
	 flag = true;  
	 $('#span').html('用户名不能为空');  
	  
	 return false;  
	 }  
	 
	 if($('[name=login-password]').val() == ''){  
	 flag = true;  
	 $('#span').html('密码不能为空');  
	  
	 return false;  
	 }  
	 if($('[name=login-password]').val() != $('[name=psw_confirm]').val()){  
	 flag = true;  
	 $('#span').html('两次密码不一致');  
	  
	 return false;  
	 }  
	 return true;  
	 })  
	 })  

</script> -->



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
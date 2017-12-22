<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>会员中心</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Content-Disposition" content="attachment;">
<script src="/zxshop/public/js/hm.js"></script><script src="/zxshop/public/js/hm.js"></script><script src="/zxshop/public/js/compatible.js"></script>
<link href="/zxshop/public/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="/zxshop/public/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/zxshop/public/js/jquery.cookie.js" type="text/javascript" charset="utf-8"></script>
<script src="/zxshop/public/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
<!--site header common-->

<link rel="stylesheet" href="/zxshop/public/css/theme.css">
<link rel="stylesheet" href="/zxshop/public/css/public.css">
<link rel="stylesheet" href="/zxshop/public/css/member.css">
<link rel="stylesheet" href="/zxshop/public/css/aftersales.css">
<link rel="stylesheet" href="/zxshop/public/css/fenye.css">
<link rel="stylesheet" href="/zxshop/public/css/bootstrap-datetimepicker.min.css">
<script src="/zxshop/public/js/bootstrap-datetimepicker.js"></script>
<script src="/zxshop/public/js/bootstrap-datetimepicker.zh-CN.js"></script>
<script src="/zxshop/public/js/jquery.form.js"></script>
<script src="/zxshop/public/js/jquery.fenye.js"></script>
<script src="/zxshop/public/js/public.js"></script>
<script src="/zxshop/public/js/clipboard.min.js"></script>
</head>
<body class="member-body">
	
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
              <?php if(!$_SESSION['userMsg']): ?><li class="is-unlogin"><a href="/zxshop/index.php/Login/index.html">登录</a></li>
              <li class="is-unlogin"><a href="/zxshop/index.php/Regist/index.html">注册</a></li>
              <?php else: ?>
              <li class="is-login">
                  <a id="member_menu" href="#">欢迎你，<span><?php echo ($_SESSION['userMsg']['username']); ?></span></a>
                
              </li>
              <li><a href="/zxshop/index.php/Member/index.html">会员中心</a></li>
                   <!-- <li><a href="#">我的优惠券</a></li> -->
                   <li><a href="/zxshop/index.php/ShopCar/index.html">我的购物车</a></li>
				   <li><a href="/zxshop/index.php/GoodsList/index.html">我的订单</a></li>
                   <li><a href="/zxshop/index.php/Login/loginout">退出登录</a></li><?php endif; ?>
			  <li class="shop-cart no-border">
				<a href="/zxshop/index.php/ShopCar/index.html" class="shopcart-logo">
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
			<a href="/zxshop/index.php/Index/index.html"><img src="/zxshop/public/images/zx-logo.png" alt=""></a>
		</div>
        <ul class="list-unstyled all-goods-type clearfix">
            <li class="pull-left">
                <a href="/zxshop/index.php/Index/index.html">首页</a>
            </li>
           <li class="pull-left crceate-fl"><a href="/zxshop/index.php/AllGoods/index.html">所有商品</a></li>
            
            
           <li class="pull-left create-fl" id="cate-qyjp">
            
  <a href="/zxshop/index.php/TPhone/index.html" id="tj">天机系列</a>
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
                <a href="/zxshop/index.php/BSeries/index.html">BLADE系列</a>
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
            <li class="pull-left crceate-fl"><a href="/zxshop/index.php/Spro2/index.html">微投SPRO2</a></li>
            <li class="pull-left crceate-fl"><a href="/zxshop/index.php/Comm/index.html">中兴社区</a></li>
        </ul>
        
		<div class="search">
			<div class="search-icon">
			<form action="/zxshop/index.php/Search/index.html" method="post" name="search">
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








<script type="text/javascript">
    $(document).ready(function(){
        $('.all-categories').add('.all-categories-detail').on({
            mouseover:function(){
                $('.all-categories-detail').show();
            },
            mouseout:function(){
                $('.all-categories-detail').hide();
            }
        });
        $('.fenlei-two li:nth-child(6n+1)').find('.goods-img').css('border-left','none');
    });
</script>
<script>
    $(function(){
        $(".is-login").hover(function() {
            $(".dropdown-menu").css('display', 'inline-block');
        }, function() {
            $(".dropdown-menu").css('display', 'none');
        });
    })
</script>

<div class="container main-container">
	<div class="w1230">
    	<div class="my-main">
  <ol class="breadcrumb">
    <li><a href="https://www.myzte.com/index.html">首页</a></li>
    <li><a href="https://www.myzte.com/my.html">个人中心</a></li>
    <li class="active">我的个人中心</li>
  </ol>
  <div class="row">
      <div class="col-xs-2 my-sidenav">
          <dl class="my-menu">
                                  <dt>
                        订单中心                    </dt>
                    <dd>
                        <ul class="nav nav-pills nav-stacked">
                                                           <li data-myaction="orders" class="mm-site_member-orders">
                                   <a href="https://www.myzte.com/my-orders.html">
                                                                      <span>我的订单</span>
                                   </a>
                               </li>
                                                           <li data-myaction="showOrders" class="mm-site_member-showOrders">
                                   <a href="https://www.myzte.com/my-showOrders-s4.html">
                                                                      <span>评价晒单</span>
                                   </a>
                               </li>
                                                           <li data-myaction="index" class="mm-site_member-index">
                                   <a href="https://www.myzte.com/recycling.html">
                                                                      <span>我的回收单</span>
                                   </a>
                               </li>
                                                           <li data-myaction="index" class="mm-site_member-index">
                                   <a href="https://www.myzte.com/vaservices.html">
                                                                      <span>我的增值服务</span>
                                   </a>
                               </li>
                                                           <li data-myaction="index" class="mm-site_member-index">
                                   <a href="https://www.myzte.com/mysale.html">
                                                                      <span>我的预约</span>
                                   </a>
                               </li>
                                                    </ul>
                    </dd>
                                  <dt>
                        个人中心                    </dt>
                    <dd>
                        <ul class="nav nav-pills nav-stacked">
                                                           <li data-myaction="index" class="mm-site_member-index">
                                   <a href="https://www.myzte.com/my.html">
                                                                      <span>我的个人中心</span>
                                   </a>
                               </li>
                                                           <li data-myaction="favorite" class="mm-site_member-favorite">
                                   <a href="https://www.myzte.com/my-favorite.html">
                                                                      <span>喜欢的商品</span>
                                   </a>
                               </li>
                                                           <li data-myaction="coupon" class="mm-site_member-coupon">
                                   <a href="https://www.myzte.com/my-coupon.html">
                                                                      <span>优惠劵</span>
                                   </a>
                               </li>
                                                           <li data-myaction="exchange_coupon" class="mm-site_exchange-exchange_coupon">
                                   <a target="_blank" href="https://www.myzte.com/integralexchange-exchange_coupon.html">
                                                                      <span>积分兑换优惠券</span>
                                   </a>
                               </li>
                                                           <li data-myaction="receiver" class="mm-site_member-receiver">
                                   <a href="https://www.myzte.com/my-receiver.html">
                                                                      <span>收货地址</span>
                                   </a>
                               </li>
                                                           <li data-myaction="consult" class="mm-site_member-consult">
                                   <a href="https://www.myzte.com/my-consult.html">
                                                                      <span>我的咨询</span>
                                   </a>
                               </li>
                                                           <li data-myaction="message" class="mm-site_member-message">
                                   <a href="https://www.myzte.com/my-message.html">
                                                                      <span>消息通知</span>
                                   </a>
                               </li>
                                                    </ul>
                    </dd>
                                  <dt>
                        售后                    </dt>
                    <dd>
                        <ul class="nav nav-pills nav-stacked">
                                                           <li data-myaction="newrequest" class="mm-site_member-newrequest">
                                   <a href="https://www.myzte.com/aftersales-newrequest.html">
                                                                      <span>售后申请</span>
                                   </a>
                               </li>
                                                           <li data-myaction="request" class="mm-site_member-request">
                                   <a href="https://www.myzte.com/aftersales-request.html">
                                                                      <span>处理列表</span>
                                   </a>
                               </li>
                                                    </ul>
                    </dd>
                                  <dt>
                        账户管理                    </dt>
                    <dd>
                        <ul class="nav nav-pills nav-stacked">
                                                           <li data-myaction="setting" class="mm-site_member-setting">
                                   <a href="https://www.myzte.com/my-setting.html">
                                                                      <span>个人信息</span>
                                   </a>
                               </li>
                                                           <li data-myaction="securitycenter" class="mm-site_member-securitycenter">
                                   <a href="https://www.myzte.com/my-securitycenter.html">
                                                                      <span>安全中心</span>
                                   </a>
                               </li>
                                                    </ul>
                    </dd>
                                  <dt>
                        预存款                    </dt>
                    <dd>
                        <ul class="nav nav-pills nav-stacked">
                                                           <li data-myaction="index" class="mm-site_member-index">
                                   <a href="https://www.myzte.com/ubalance.html">
                                                                      <span>我的账户</span>
                                   </a>
                               </li>
                                                    </ul>
                    </dd>
                                  <dt>
                        增票资质                    </dt>
                    <dd>
                        <ul class="nav nav-pills nav-stacked">
                                                           <li data-myaction="index" class="mm-site_member-index">
                                   <a href="https://www.myzte.com/invoice.html">
                                                                      <span>增票资质</span>
                                   </a>
                               </li>
                                                    </ul>
                    </dd>
                        </dl>
      </div>
      <div class="col-xs-10 my-page" style="min-height: 1040px;">
          <div class="alert mcenter-header">
    <div class="m-baseinfo row">
        <div class="col-xs-1 head-img">
            <a href="https://www.myzte.com/my-avatar.html">
                <img width="50" height="50" class="img-circle" src="/zxshop/public/images/100" alt="qq_21327头像">
            </a>
        </div>
        <div class="col-xs-6 info-other">
            <ul class="list-inline pull-left">
                <li>
                    <h4>
                        <a class="info-username" href="https://www.myzte.com/my-setting.html">qq_21327</a>
                        <span class="btn-group">
                                                        <a class="btn btn-xs btn-default hide" href="https://www.myzte.com/my-set_pam_uname.html">设置昵称</a>
                                                    </span>
                    </h4>
                </li>
                <li><span class="label label-warning">注册会员</span></li>
                <li class="edit-info"><button class="btn btn-link" onclick="update()">修改个人信息 &gt;</button></li>

            </ul>
				<script>
					function update(){
						window.alert("<div style='width:20px;height:10px;background:#666'><p>哇哇</p></div>");
					}
				</script>
            <ul class="list-inline pull-right">
                                <li class="hide">账户余额<p><span class="text-danger">0</span>元</p></li>
                                <li>
                    <a href="https://www.myzte.com/my-integral.html">
                    积分<p>0</p>
                    </a>
                </li>
                                <li class="border-none">经验值<p>0</p></li>
                                <!--                     <li>预存款：
                        <a href="/ubalance.html">
                            0                        </a>
                    </li>
                 -->
            </ul>
        </div>
        <!--  -->
    </div>
</div>
<div class="row m-os-count">
    <h5>我的订单</h5>
    <!-- <div class="col-xs-4 col-1">
        <a href="/my-orders.html" class="btn  btn-block btn-link">全部订单</a>
    </div> -->
    <div class="col-xs-2 col-2">
        <a href="https://www.myzte.com/my-orders-s1.html" class="btn  btn-block btn-link">
            待付款
                    </a>
    </div>
    <div class="col-xs-2 col-3">
        <a href="https://www.myzte.com/my-orders-s2.html" class="btn  btn-block btn-link">待发货
                    </a>
    </div>
    <div class="col-xs-2 col-4">
        <a href="https://www.myzte.com/my-orders-s3.html" class="btn  btn-block btn-link">待收货
                    </a>
    </div>
    <div class="col-xs-2 col-5">
        <a href="https://www.myzte.com/my-showCancel-s4.html" class="btn btn-large btn-block btn-link">已关闭
                    </a>
    </div>
</div>

<div class="panel panel-default gv-history">
    <div class="panel-heading clearfix">
        <h3 class="panel-title pull-left">最近浏览商品</h3>
    </div>
  <div class="panel-body">
      <div class="glist-container">
          <div class="row goods-list gl-default">
                                  <div class="col-xs-3 fav-item contentlist">
                        <div class="goods-item">
                            <div class="gi-image-wrapper">
                                <a href="https://www.myzte.com/v8.html">
                                    <img src="/zxshop/public/images/20bc054eacec.jpg" alt="ZTE中兴 Blade V8 绝代双“焦”-仿生双摄+3D拍照">
                                </a>
                            </div>
                            <div class="caption">
                                <h3 class="g-name"><a href="https://www.myzte.com/v8.html">ZTE中兴 Blade V8 绝代双“焦”-仿生双摄+3D拍照</a></h3>
                                <ul class="list-inline">
                                    <li class="price-1 text-danger"><small>￥</small>1499.0</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                                  <div class="col-xs-3 fav-item contentlist">
                        <div class="goods-item">
                            <div class="gi-image-wrapper">
                                <a href="https://www.myzte.com/6902176008580.html">
                                    <img src="/zxshop/public/images/d3f465b4d2e1.jpg" alt="ZTE中兴 天机7 MAX(全网通)">
                                </a>
                            </div>
                            <div class="caption">
                                <h3 class="g-name"><a href="https://www.myzte.com/6902176008580.html">ZTE中兴 天机7 MAX(全网通)</a></h3>
                                <ul class="list-inline">
                                    <li class="price-1 text-danger"><small>￥</small>3299.0</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                                  <div class="col-xs-3 fav-item contentlist">
                        <div class="goods-item">
                            <div class="gi-image-wrapper">
                                <a href="https://www.myzte.com/6934933095359.html">
                                    <img src="/zxshop/public/images/df0b6d4c6f25.jpg" alt="ZTE中兴 Spro 2 智能微投 小有所投，大于所想">
                                </a>
                            </div>
                            <div class="caption">
                                <h3 class="g-name"><a href="https://www.myzte.com/6934933095359.html">ZTE中兴 Spro 2 智能微投 小有所投，大于所想</a></h3>
                                <ul class="list-inline">
                                    <li class="price-1 text-danger"><small>￥</small>3699.0</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                        </div>
      </div>
  </div>
</div>

<div class="fenye-outer">
    <div id="historydiv" class="clearfix"><div id="pagefirst" class="pagefirst"><a href="javascript:void(0)">首页</a></div><div id="pagepre" class="pagepre"><a href="javascript:void(0)">上一页</a></div><div class="pagenavigate pagenavigateon" style="display: block;"><a href="javascript:void(0)">1</a></div><div id="pagenext" class="pagenext" style="display: none;"><a href="javascript:void(0)">下一页</a></div><div id="pagelast" class="pagelast" style="display: none;"><a href="javascript:void(0)">尾页</a></div></div>
</div>


      </div>
  </div>
</div>

</div>
</div>

<div class="toolbar">
  
   <a href="https://www.myzte.com/my.html###" class="toolbar-item toolbar-item-weixin">

   <span class="toolbar-layer"></span>
   </a>
   <a href="http://v1.live800.com/live800/chatClient/chatbox.jsp?companyID=437521&amp;configID=41175&amp;jid=9108176411" class="toolbar-item toolbar-item-feedback" target="_Blank"> 
    </a>
   <a href="javascript:scroll(0,0)" id="top" class="toolbar-item toolbar-item-top"></a>
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

 

      
    







</body>
</html>
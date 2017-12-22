<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>订单确认</title>

<script src="/zxshop/public/js/hm.js"></script><script src="/zxshop/public/js/hm.js"></script><script src="/zxshop/public/js/compatible.js"></script>
 <link href="/zxshop/public/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="/zxshop/public/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/zxshop/public/js/jquery.cookie.js" type="text/javascript" charset="utf-8"></script>
<script src="/zxshop/public/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
<!--site header common-->

    <link rel="stylesheet" href="/zxshop/public/css/theme.css">
    <link rel="stylesheet" href="/zxshop/public/css/style.css">
    <link rel="stylesheet" href="/zxshop/public/css/public.css">
	<link rel="stylesheet" href="/zxshop/public/css/shop.css">
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
                   <li><a href="#">我的优惠券</a></li>
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
				   <div class="input-block">
					   <input type="text" id="input_keyword" placeholder="天机7">
					   <div class="fast-search">
						   <ul class="list-unstyled clearfix">
							   <ul>
        <li><a href="javascript:void(0)" data-action="/list.html?" onclick="location=$(this).attr(&#39;data-action&#39;)+&#39;keyword=&#39;+&#39;&#39;"></a></li>
    </ul>						   </ul>
					   </div>
				   </div>
				   <div class="button-block">
					   <button type="button" data-action="/list.html?" onclick="location=$(this).attr(&#39;data-action&#39;)+&#39;keyword=&#39;+$(&#39;#input_keyword&#39;).val()"><img src="/zxshop/public/images/Search.png" alt=""></button>
				   </div>
			</div>
		</div>
    </div>
</div>






<body class="checkout-html checkout-payment-body">




<div class="container main-container">
     <div class="inner-container"> 
    <ol class="breadcrumb">
      <li><img src="/zxshop/public/images/nav-3.png" alt=""></li>
    </ol>
    <div class="order-block">
                    <div class="order-create-block">
                <div class="success-img">
                    <img src="/zxshop/public/images/success.png" alt="">
                </div>
                <div class="alert alert-success order-create-success">
                    订单已成功提交！
                </div>
            </div>
        
        <div class="checkout-container">
            <div class="order-id">
                感谢您在中兴商城购物!您的订单编号为:2423485558623            </div>
            <div class="order-tixing">
                请及时支付订单,未付款订单在12小时后将自动取消。
            </div>
            <div class="order-payment">
                您选择的支付方式为: 微信支付 <br>
                您的应付款金额为: <span class="order-price" data-bind="total/order_total">&nbsp;&nbsp;&nbsp;￥1399.0</span>
            </div>
            <div class="order-pay clearfix">
                <a target="_blank" href="https://www.myzte.com/checkout-dopayment-2423485558623.html" class="pay-now">马上去支付</a>
                <a data-toggle="modal" data-target="#pappchange_modal" type="button" class="btn-new-maddr">换一种支付方式</a>
            </div>
           <!--  <div class="row">
               <div class="col-xs-7">
                   <div  class="panel panel-default">
                       <div class="panel-heading clearfix">
                           <h3 class="panel-title">订单概要</h3>
                       </div>
                       <ul class="list-group">
                           <li class="list-group-item">
                               订单号：<strong>2423485558623</strong>
                           </li>
                           <li class="list-group-item">
                               创建时间：<strong>2017-06-01 23:48</strong>
                           </li>
                           <li class="list-group-item">
                               订单包含商品数：<strong>1</strong>
                           </li>
                           <li class="list-group-item">
                               收货人：<strong>玛丽</strong>
                           </li>
                           <li class="list-group-item">
                               收货人地区：<strong>安徽省 安庆市 枞阳县</strong>
                           </li>
                           <li class="list-group-item">
                               收货人地址：<strong>同福街1号</strong>
                           </li>
                                                      <li class="list-group-item">
                               收货人手机：<strong>15377895677</strong>
                           </li>
                                                  </ul>
                   </div>
               </div>
               <div class="col-xs-5">
                   <div class="panel panel-default">
                       <div class="panel-heading clearfix">
                           <h3 class="panel-title pull-left">在线支付方式</h3>
                                                      <button data-toggle="modal" data-target="#pappchange_modal" type="button"  class="btn btn-default btn-xs pull-right btn-new-maddr">更换支付方式</button>
                                                  </div>
                       <div class="list-group">
                           <div class="list-group-item">
           
                                   <h4>微信支付</h4>
                                   <p class="list-group-item-text">
                                       微信支付                                   </p>
           
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="checkout-footer panel panel-default">
               <div class="row">
                   <div class="col-xs-7">
                                          </div>
                   <div class="col-xs-5 text-right">
                           <span class="order-total">订单应付总额：
                               <span class="text-danger"><small>￥</small><strong data-bind="total/order_total">1399.0</strong></span>
                           <span>
                                                      &nbsp;&nbsp;&nbsp;&nbsp;
                           <a target="_blank" href="/checkout-dopayment-2423485558623.html" class="btn btn-danger btn-lg">付款</a>
                                              </div>
               </div>
           </div> -->
        <!-- checkout-container end -->
        </div>
    </div>    


    <div class="modal" id="pappchange_modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title">更多支付方式</h4>
          </div>
          <div class="modal-body">
                                <a href="https://www.myzte.com/checkout-payment-2423485558623-0-chinapay.html" class="list-group-item">
                      <h3>ChinaPay银联支付</h3>
                      <p>
                          ChinaPay银联支付                      </p>
                  </a>
                                <a href="https://www.myzte.com/checkout-payment-2423485558623-0-alipay.html" class="list-group-item">
                      <h3>支付宝支付</h3>
                      <p>
                          支付宝支付                      </p>
                  </a>
                        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            <button type="button" class="btn btn-primary">保存</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
</div>



</body>





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
					    <a href="http://v1.live800.com/live800/chatClient/chatbox.jsp?companyID=437521&amp;configID=41175&amp;jid=9108176411" target="_Blank">在线客服</a> 
                        </div>
						<div class="explain">周一到周日 8:30 - 20:30 (全年无休)</div>
					</div>
				</div>
				
			</div>
		</div>
		<div class="footer-bottom">
			<ul class="list-unstyled clearfix">
				<li><a href="http://www.myzte.cn/" target="_blank">中兴社区</a></li>
				<li><a href="http://www.zte.com.cn/" target="_blank">中兴通讯</a></li>
				<li><a href="http://apps.ztems.com/" target="_blank">汇天地</a></li>
				<li><a href="http://cloud.ztedevices.com/zcloud/index.html" target="_blank">中兴云服务</a></li>
				<li><a href="http://www.ztedevice.com.cn/" target="_blank">中兴手机</a></li>
			</ul>
			<div class="copy-right" style="text-align: center;">
			<a href="https://www.myzte.com/help-20.html" target="_blank">服务协议</a> | ©2014 - 2017 深圳市中兴智谷科技有限公司版权所有，并保留所有权利  
			</div>
            <div class="copy-right" style="text-align: center;">
				增值电信业务经营许可证：粤B2-20160352 | ICP备案证书号 : <a href="http://www.miitbeian.gov.cn/" target="_blank">粤ICP备16018970号 </a>
			</div>
		</div>
	</div>
</div>

 

      
    






</body></html>
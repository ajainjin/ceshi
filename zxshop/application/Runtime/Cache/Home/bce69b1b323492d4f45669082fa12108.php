<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0031)https://www.myzte.com/cart.html -->
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>我的购物车</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<script src="/zxshop/public/js/hm.js"></script><script src="/zxshop/public/js/hm.js"></script><script src="/zxshop/public/js/compatible.js"></script>
<link href="/zxshop/public/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="/zxshop/public/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/zxshop/public/js/jquery.cookie.js" type="text/javascript" charset="utf-8"></script>
<script src="/zxshop/public/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>


<link rel="stylesheet" href="/zxshop/public/css/theme.css">
<link rel="stylesheet" href="/zxshop/public/css/public.css">
<link rel="stylesheet" href="/zxshop/public/css/shop.css">
<script src="/zxshop/public/js/public.js"></script>
</head>
<body class="cart-html cart-body">
<header>
    <div class="containers">
        <nav class="navbar navbar-inverse">
          
          <ul class="nav navbar-nav top-tools navbar-right right-navbar">
         <?php if($_SESSION['userMsg']): ?><li class="is-login">
                  <a id="member_menu" href="/zxshop/index.php/Mycenter/index.html">欢迎你，<span><?php echo ($_SESSION['userMsg']['username']); ?></span></a>
               </li>
                   <li><a href="/zxshop/index.php/Mycenter/index.html">会员中心</a></li>
                   <!-- <li><a href="https://www.myzte.com/my-coupon.html">我的优惠券</a></li> -->
                   <li><a href="/zxshop/index.php/ShopCar/index.html">我的购物车</a></li>
				   <li><a href="/zxshop/index.php/Mylist/index.html">我的订单</a></li>
                   <li><a href="/zxshop/index.php/Login/loginout.html">退出登录</a></li>
                 
              <?php else: ?>
              <li class="is-unlogin"><a href="/zxshop/index.php/Login/index.html">登录</a></li>
              <li class="is-unlogin"><a href="/zxshop/index.php/Regist/index.html">注册</a></li><?php endif; ?>
			  <li class="shop-cart no-border">
				<a href="/zxshop/index.php/ShopCar/index.html" class="shopcart-logo">
					<img src="/zxshop/public/images/shopcart.png" alt="">&nbsp;购物车
					<span class="shopcart-number cart-count">1</span>
				</a>
				
				<div class="shopcart-full cart-content">
					<ul class="list-unstyled">
					</ul>
				</div>
			 </li>
          </ul>
        </nav>
    </div>
</header>







    <div class="container main-container">
        
<ol class="breadcrumb">
  <li><img src="/zxshop/public/images/nav-1.png" alt=""></li>
</ol>
<div class="cart-container">
<?php if(!$_SESSION['userMsg']): ?><div class="alert alert-warning">
    <i class="glyphicon glyphicon-warning-sign"></i>    您当前未登录，登录后享受会员专属折扣及优惠促销，更可长久保存购物车数据
        <a href="/zxshop/index.php/Login/index.html" class="btn btn-xs btn-danger">立即登录</a>
    </div><?php endif; ?>
        <div class="row cart-header">
        <div class="col-xs-1 c-ch-check">
            <label class="control-label">
                <input type="checkbox" data-checkall=".cart-body input:checkbox[data-ident]"> 全选
            </label>
        </div>
        <div class="col-xs-5 c-ch-title">商品名称</div>
        <div class="col-xs-1 c-ch-price">成交价</div>
        <div class="col-xs-2 c-ch-quantity">数量</div>
        <div class="col-xs-1 c-ch-amount">小计</div>
        <div class="col-xs-2 c-ch-opt">操作</div>
    </div>
    <div class="cart-body">
                <!-- cart-item begin  -->
        <div class="row goods_2141 cart-item enabled" data-object="goods">
            <div class="col-xs-1 c-ci-check">
                <label class="control-label">
                    <input type="checkbox" data-ident="goods_2141" name="ident[]" value="goods_2141" checked="true">&nbsp;&nbsp;&nbsp;&nbsp;
                </label>
            </div>
            <div class="col-xs-5 c-ci-title">
                <div class="row">
                      <div class="col-xs-3">
                        <a href="https://www.myzte.com/v8.html">
                            <img class="img-thumbnail" src="/zxshop/public/images/20bc054eacec.jpg" alt="ZTE中兴 Blade V8-炫闪银/全网通/4GB+64GB">
                        </a>
                      </div>
                      <div class="col-xs-9">
                        <h5><a href="https://www.myzte.com/v8.html">ZTE中兴 Blade V8</a></h5>
                        <p class="spec-info">
                            炫闪银/全网通/4GB+64GB                        </p>
                        <p class="warning text-warning hide">
                            <i class="glyphicon glyphicon-warning-sign"></i>&nbsp;
                            <span data-bind="warning"></span>
                        </p>
                        <ul class="list-unstyled promotion-list plist-goods">
                                                    </ul>
                      </div>
                </div>
            </div>
            <div class="col-xs-1 c-ci-price">￥<span data-bind="item/product/buy_price">1499.0</span></div>
            <div class="col-xs-2 c-ci-quantity">
                <div class="product-quantity input-group input-group-sm" data-minibuy="">
                    <div class="spinner-buttons input-group-btn">
                        <button type="button" class="btn btn-default">
                        -
                        </button>
                    </div>
                    <input type="text" data-ident="goods_2141" class="spinner-input form-control" value="1" data-now="1">
                    <div class="spinner-buttons input-group-btn">
                        <button type="button" class="btn btn-default">
                        +
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-xs-1 c-ci-amount">
                <strong>￥<span data-bind="amount">1499.0</span></strong>
            </div>
            <div class="col-xs-2 c-ci-opt">
                <ul class="list-unstyled">
                    <li><a href="javascript:;" data-remove=".cart-body input:text[data-ident=&#39;goods_2141&#39;]" class="btn btn-link btn-xs">删除</a></li>
                                    </ul>
            </div>
        </div>
        
    </div>
    <div class="row cart-footer">
        <div class="col-xs-1 c-cf-check">
            <label class="control-label">
                <input type="checkbox" data-checkall=".cart-body input:checkbox[data-ident]"> 全选
            </label>
        </div>
        <div class="col-xs-4 c-cf-opt">
            <a href="javascript:;" data-remove=".cart-body input:checkbox:checked" class="btn btn-link btn-xs">删除选中的商品</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <!--  -->
        </div>

        <div class="col-xs-5 c-cf-amount text-right clearfix">
            <ul class="list-unstyled jiesuan-message">
                <li>
                    已选择<span data-bind="goods_count">1</span>件商品,合计 (<span class="shipping-tip">包邮</span>)：
                    <small class="text-danger">￥</small><span class="text-danger" data-bind="finally_cart_amount">1499.0</span>
                </li>
                            </ul>
            <ul class="list-unstyled promotion-list plist-order">
                                    <li data-ruleid="133">
                                                <span class="label label-danger">包邮</span>
                        满150免邮                    </li>
                            </ul>
            
        </div>
        <div class="col-xs-2 c-cf-opt go-jiesuan">
        <?php if($_SESSION['userMsg']): ?><a href="/zxshop/index.php/Account/index.html" class="checkout-btn btn btn-lg btn-danger ">去结算</a>
        <?php elseif(!$_SESSION['userMsg']): ?>
        <a href="/zxshop/index.php/Login/index.html" class="checkout-btn btn btn-lg btn-danger ">去结算</a><?php endif; ?>
        </div>
    </div>
</div>


<div class="tuijian-block" style="display:none;">
    <div class="tuijian-title">
        <span>你可能感兴趣的商品</span>
    </div>
    <div class="tuijian-goods-block">
        <ul class="list-unstyled clearfix">
            <li class="pull-left">
                <div class="g-img">
                    <img src="/zxshop/public/images/image2.png" alt="">
                </div>
                <div class="g-name">
                    <a href="https://www.myzte.com/cart.html"><span>Spro2只能微投 小有所成</span></a>
                </div>
                <div class="g-pri">
                    <span>￥340.00</span>
                </div>
            </li>
            <li class="pull-left">
                <div class="g-img">
                    <img src="/zxshop/public/images/image2.png" alt="">
                </div>
                <div class="g-name">
                    <a href="https://www.myzte.com/cart.html"><span>Spro2只能微投 小有所成</span></a>
                </div>
                <div class="g-pri">
                    <span>￥340.00</span>
                </div>
            </li>
            <li class="pull-left">
                <div class="g-img">
                    <img src="/zxshop/public/images/image2.png" alt="">
                </div>
                <div class="g-name">
                    <a href="https://www.myzte.com/cart.html"><span>Spro2只能微投 小有所成</span></a>
                </div>
                <div class="g-pri">
                    <span>￥340.00</span>
                </div>
            </li>
            <li class="pull-left">
                <div class="g-img">
                    <img src="/zxshop/public/images/image2.png" alt="">
                </div>
                <div class="g-name">
                    <a href="https://www.myzte.com/cart.html"><span>Spro2只能微投 小有所成</span></a>
                </div>
                <div class="g-pri">
                    <span>￥340.00</span>
                </div>
            </li>
            <li class="pull-left">
                <div class="g-img">
                    <img src="/zxshop/public/images/image2.png" alt="">
                </div>
                <div class="g-name">
                    <a href="https://www.myzte.com/cart.html"><span>Spro2只能微投 小有所成</span></a>
                </div>
                <div class="g-pri">
                    <span>￥340.00</span>
                </div>
            </li>
        </ul>
    </div>
</div>



<script charset="utf-8">

/**
复选框勾选
 */
(function(){


    //checkbox选择框交互
    var Model_checkbox={
        data:{
            total:null,
            child:[]
        },
        fn:function(){
            var that=this;
            $('.cart-container input:checkbox[data-checkall]').prop('checked',that.data.total);
            $('.cart-body input:checkbox[data-ident]').each(function(k,v){
                $(this).prop('checked',that.data.child[k]);
            })
        },
        get_total:function(){
            this.data.total=true;
            for(var i=0;i<this.data.child.length;i++){
                if(this.data.child[i]===false){
                    this.data.total=false;
                    break;
                }
            }
        },
        init:function(){
            var that=this;
            $('.cart-body input:checkbox[data-ident]').each(function(k,v){
                that.data.child[k]=$(this).prop('checked');
            });
            that.get_total();
            that.fn();
        }
    };
    Model_checkbox.init();

    //全选
    $('.cart-container').on('change','input:checkbox[data-checkall]',function(e){
        var target_el = this;
        var status = $(this).prop('checked'),params = [];
        Model_checkbox.data.total=status;
        for(var i=0;i<Model_checkbox.data.child.length;i++){
            Model_checkbox.data.child[i]=status;
        }
        Model_checkbox.fn();
        $.each($('.cart-body input:checkbox'),function(i,c){
            params.push(c.value);
        });
        $.getJSON(status?cart_enabled_action:cart_disabled_action,{ident:params},function(re){
            if(re.error){
                _alert(re.error,target_el);
            }
            if(re.success && re.data){
                _update(re.data);
                check_plist();
            }
        });
    });
    //单选
    $('.cart-body').on('change','input:checkbox[data-ident]',function(e,ignore_request){
        var target_el = this;
        var status = $(target_el).prop('checked');
        var idx=$(target_el).parents('.cart-item').index();
        Model_checkbox.data.child[idx]=status;
        Model_checkbox.get_total();
        Model_checkbox.fn();
        if(ignore_request) return;
        $.getJSON(status?cart_enabled_action:cart_disabled_action,{ident:[$(this).val()]},function(re){
            if(re.error){
                _alert(re.error,target_el);
            }
            if(re.success && re.data){
                _update(re.data);
                check_plist();
            }
        });
    });
   
    
    check_plist();
    
})();
</script>

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
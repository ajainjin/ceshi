<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0035)https://www.myzte.com/checkout.html -->
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>订单确认</title>
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
<script src="/zxshop/public/js/public.js"></script>
</head>
<body class="checkout-html checkout-index-body">
<header>
    <div class="containers">
        <nav class="navbar navbar-inverse">
          <ul class="nav navbar-nav left-navbar clearfix">
			<li class=""><a href="https://www.myzte.com/zx-campus.html">中兴校园</a></li>
			 <!-- <li><a href="/">活动列表</a></li> -->
			<li class=""><a class="no-border" href="https://www.myzte.com/appdownload.html">手机版</a></li>
          </ul>
          <ul class="nav navbar-nav top-tools navbar-right right-navbar">
              <li class="is-login">
                  <a id="member_menu" href="https://www.myzte.com/my.html">欢迎你，<strong class="uname">qq_21327</strong><span class="caret"></span></a>
                 <ul class="dropdown-menu">
                   <li><a href="https://www.myzte.com/my.html">会员中心</a></li>
                   <li><a href="https://www.myzte.com/my-coupon.html">我的优惠券</a></li>
                   <li><a href="https://www.myzte.com/cart.html">我的购物车</a></li>
				   <li><a href="https://www.myzte.com/my-orders.html">我的订单</a></li>
                   <li><a href="https://www.myzte.com/passport-logout.html">退出登录</a></li>
                 </ul>
              </li>
              <li class="is-unlogin hidden"><a href="https://www.myzte.com/passport-login.html">登录</a></li>
              <li class="is-unlogin hidden"><a href="https://www.myzte.com/passport-signup.html">注册</a></li>
			  <li class="zter hidden"><a href="https://www.myzte.com/my-zte.html">员工内购</a></li>
              <!-- <li class=""><a class="no-border" href="http://old.myzte.com">旧版入口</a></li> -->
			  <li class="shop-cart no-border hide">
				<a href="https://www.myzte.com/cart.html" class="shopcart-logo">
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
<div class="classify-block hide">
    <div class="classify">
	    <div class="logo">
			<a href="https://www.myzte.com/index.html"><img src="/zxshop/public/images/zx-logo.png" alt=""></a>
		</div>
        <ul class="list-unstyled all-goods-type clearfix">
            <li class="pull-left">
                <a href="https://www.myzte.com/index.html">首页</a>
            </li>
           <li class="pull-left crceate-fl"><a href="https://www.myzte.com/list.html">所有商品</a></li>
            <li class="pull-left create-fl" id="cate-qyjp">
                <a href="https://www.myzte.com/list.html">天机系列</a>
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
                <a href="https://www.myzte.com/list.html">BLADE系列</a>
                <div class="fenlei-detail-block">
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
                 <span class="new-pri">￥<strong>899.0</strong></span>
              
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
                 <span class="new-pri">￥<strong>649.0</strong></span>
              
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
                 <span class="new-pri">￥<strong>799.0</strong></span>
              
            </div>
        </div>
    </a>
</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="pull-left crceate-fl"><a href="https://www.myzte.com/6934933095359.html">微投SPRO2</a></li>
            <li class="pull-left crceate-fl"><a href="http://www.myzte.cn/">中兴社区</a></li>
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
<script>
    $(function(){
        $("#input_keyword").focus(function(){
            $(this).addClass('search-focus');
            $(document).keydown(function(event){
                if(event.keyCode==13){
                    if($(".search-focus").val()){
                        window.location.href=window.location.protocol+'//'+window.location.host+'/list.html?'+'keyword='+$('#input_keyword').val();
                    }
                }
            });
        });
        $("#input_keyword").blur(function(){
            $(this).removeClass('search-focus');
        });
    });
</script>
<script type="text/template" id="minicart_item_tpl">
    <li class="clearfix shopcart-goods-li">
        <div class="shopcart-goods-image">
            <img src="{image_url}" alt="">
        </div>
        <div class="shopcart-goods-name">
            <p>{name}<br>{spec_info}</p>
        </div>
        <div class="shopcart-goods-price">
            <div class="goods-handle">
                <span class="goods-price">￥{buy_price}</span>
            </div>
            <div class="delate-goods">
                <a href="{remove_url}" class="delate-goods cart-remove">删除</a>
            </div>
        </div>
    </li>
</script>
<script charset="utf-8">
    $(function(){
        /**
         * 模板填充工具
         */
        var substitute = function(str, obj) {
            return str.replace(/\\?\{([^{}]+)\}/g, function(match, name) {
                if (match.charAt(0) == '\\') return match.slice(1);
                return (obj[name] != undefined) ? obj[name] : '';
            });
        };
        /**
         * 登录\注册切换
         */
         if($.cookie('UNAME') && $.cookie('MEMBER_IDENT')){
            $('.top-tools .is-unlogin').addClass('hidden');
            $('.top-tools .is-login').removeClass('hidden');
            $('.top-tools .is-login .uname').text($.cookie('UNAME'));
            if('6' == $.cookie('MEMBER_LEVEL_ID')){
                $('.top-tools .zter').removeClass('hidden');
            }
        }
        /**
        * 迷你购物车
        */
        //购物车数量加载
        var cart_count=null;
        var cart_count_get=false;
        $.ajaxSetup ({
             cache: false //关闭AJAX缓存
         });
        $.get('https://www.myzte.com/index.php/openapi/cart/count')
        .done(function(re){
            if(re.data && re.data.count>0){
                $('.cart-count').removeClass('hidden').text(re.data.count);
                cart_count=re.data.count;
                $('.shop-cart').find('.shopcart-null').remove();
            }else{
                $('.shop-cart').find('.shopcart-full').remove();
            }
        })
        .fail(function(){
            $('.shop-cart').find('.shopcart-full').remove();
        })
        .always(function(){
            cart_count_get=true;
        })
        //购物车项
        var cart_load_twice=0;
        $('.shop-cart').on('mouseenter',function(e){
            if(cart_count_get){
                if(cart_count != null){
                    if(cart_load_twice===0){
                        cart_load_twice=1;

                        $.ajax({
                            url:'https://www.myzte.com/index.php/openapi/cart/preview',
                            dataType:'json',
                            cache:false
                        })
                        .done(function(re){
                            if(re.data && re.data.length){
                                var item_html ='',item_html_tpl = $('#minicart_item_tpl').html();
                                $.each(re.data,function(idx,item){
                                    item_html+=substitute(item_html_tpl,item);
                                });

                                $('.shopcart-full').show().find('ul').html(item_html);
                                $('.shop-cart').find('.shopcart-logo').addClass('active');
                            }
                        });
                    }else{
                        $(this).find('.shopcart-logo').addClass('active');
                        $('.cart-content').show();
                    }
                }else{
                    $(this).find('.shopcart-logo').addClass('active');
                    $('.cart-content').show();
                }
            }
        });
        $('.shop-cart').on('mouseleave',function(){
            $('.cart-content').hide();
            $(this).find('.shopcart-logo').removeClass('active');
        });
        //购物车快速删除
        $('.shop-cart').on('click','.cart-remove',function(e){
            var cr_btn = $(this);
            $.get(cr_btn.attr('href'));
            cr_btn.parents('.shopcart-goods-li').remove();
            if($('.shop-cart').find('.shopcart-full ul li.shopcart-goods-li').length===0){
                $('.shop-cart').find('.shopcart-full').remove();
            }
            return false;
        });
    });
</script>

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
    //获取地址栏参数
    $(function(){
        var urlParam= decodeURIComponent(window.location.search);
        if (urlParam.indexOf('?keyword=') != -1) {

            if (urlParam.indexOf('&') == -1) {
                var loc = urlParam.substring(urlParam.indexOf('=') + 1);

            }else{
                var end = urlParam.indexOf('&');
                var loc = urlParam.substring(urlParam.indexOf('=') + 1, end);
            }
            if (loc != '') {
                $(".fast-search").addClass('hide');
                $("#input_keyword").val(loc);
            }else{
                $(".fast-search").removeClass('hide');
            }
        };
    })
</script>

<div class="container main-container">
     <div class="inner-container">
    <ol class="breadcrumb">
      <li><img src="/zxshop/public/images/nav-2.png" alt=""></li>
    </ol>
    <form action="https://www.myzte.com/order-create.html" class="checkout-container">
    <input type="hidden" name="cart_md5" value="adff0b89ecdf19b657df3b26227a3e44">
    <input type="hidden" value="true" id="need_invoice" name="need_invoice">
    <input type="hidden" name="balance">
        <input type="hidden" name="invoice_id" value="">
        <!-- checkout-container begin -->
    <div data-flowindex="0" class="panel panel-warning checkout-maddr clearfix">
        <div class="panel-heading clearfix">
            <h3 class="panel-title pull-left">收货人信息</h3>
        </div>
        <ul class="list-group clearfix">
            <!-- <div data-toggle="modal" data-target="#member_addr_edit_modal" type="button"  class="btn-new-maddr">
               <div class="add-block">
                   <div class="add-img"><img src="./zxshop/public/themes/pc/zhongxing/images/add_address.png?v0c8d" alt=""></div>
                   <div class="add-address">立即新增收货人信息</div>
               </div>
           </div> -->
            
             <div data-toggle="modal" data-target="#member_addr_edit_modal" type="button" class="btn-new-maddr">
                <div class="add-block">
                    <div class="add-img"><img src="/zxshop/public/images/add_address.png" alt=""></div>
                    <div class="add-address">新增收货地址</div>
                </div>
            </div>
        </ul>
        <!-- <div class="panel-body">
            <button data-toggle="modal" data-target="#member_addr_edit_modal" type="button" class="btn btn-warning btn-block"></button>
        </div> -->
    </div>
    <div class="row checkout-block">
        <div class="col-xs-12">
            <div data-flowindex="1" class="panel panel-default checkout-dlytype">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title">配送方式</h3>
                </div>
                <ul class="list-group">
                                            <li class="list-group-item  clearfix">
                            <input type="radio" checked="" name="dlytype_id" value="1" class="hide">
                            <h6 class="mt-h"><span class="dlytype-name">顺丰速运</span></h6>
                            <h6>送的是放心,到的是安全</h6>
                            <!--                             <i  data-toggle="popover" class="glyphicon glyphicon-question-sign"></i>
                            <p class="hide">
                                送的是放心,到的是安全                            </p>
                             -->
                        </li>
                                    </ul>
            </div>
            <div class="peisong-time clearfix">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title">配送时间</h3>
                </div>
                <div class="peisong-time-block active">
                    <label for="anyTime">
                    <input type="radio" name="psTime" class="hide" value="anytime" id="anyTime" checked="">
                    <span class="time">任何时间送货</span>
                    <span class="explain">周一至周日皆可送货上门</span>
                    </label>
                </div>
                <div class="peisong-time-block">
                    <label for="workDay">
                    <input type="radio" name="psTime" class="hide" value="workday" id="workDay">
                    <span class="time">工作日送货</span>
                    <span class="explain">周一至周五送货上门</span>
                </label>
                </div>
                <div class="peisong-time-block">
                    <label for="festivalDay">
                    <input type="radio" name="psTime" class="hide" value="holiday" id="festivalDay">
                    <span class="time">节假日送货</span>
                    <span class="explain">周六日及节假日送货上门</span>
                </label>
                </div>
            </div>
            <div data-flowindex="2" class="panel panel-default checkout-payment">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title">支付方式</h3>
                </div>
                <ul class="list-group pay-style">
                                            <li class="list-group-item  clearfix">
                            <input type="radio" class="hide" name="payapp_id" value="wxpay">
                            <img src="/zxshop/public/images/wxpay.png" alt="">
                            <span class="payapp-name">微信支付</span>
                                                        <i data-toggle="popover" class="glyphicon glyphicon-question-sign" data-original-title="" title=""></i>
                            <p class="hide">
                                微信支付                            </p>
                                                    </li>
                                            <li class="list-group-item  clearfix">
                            <input type="radio" class="hide" name="payapp_id" value="chinapay">
                            <img src="/zxshop/public/images/chinapay.png" alt="">
                            <span class="payapp-name">ChinaPay银联支付</span>
                                                        <i data-toggle="popover" class="glyphicon glyphicon-question-sign" data-original-title="" title=""></i>
                            <p class="hide">
                                ChinaPay银联支付                            </p>
                                                    </li>
                                            <li class="list-group-item  clearfix">
                            <input type="radio" class="hide" name="payapp_id" value="alipay">
                            <img src="/zxshop/public/images/alipay.png" alt="">
                            <span class="payapp-name">支付宝支付</span>
                                                        <i data-toggle="popover" class="glyphicon glyphicon-question-sign" data-original-title="" title=""></i>
                            <p class="hide">
                                支付宝支付                            </p>
                                                    </li>
                                    </ul>
            </div>
			
           <script type="text/javascript">
                //hrpay支付方式不提供发票——页面首次加载判断
                $(function(){
                    $(".pay-style li").each(function(index){
                        if($(this).find("input").attr("value") == 'hrpay' && $(this).find("input").prop("checked") == true){
                            $(".no-invoice").addClass("active");
                            $("#need_invoice_block").removeClass("active");
                            $("#VAT_invoice_block").removeClass("active");
                            $('#need_invoice').val(false);
                            $(".invoice-select").hide();
                            return false;
                        }
                    });
                });
            </script>

            <!-- 发票信息 -->
            <div class="invoice-select clearfix">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title">发票信息</h3>
                </div>
                <div class="invoice-select-block active" id="need_invoice_block">
                    <label for="commonInvoice">
                        <input type="radio" id="commonInvoice" name="invoice" class="hide" value="commonInvoice">
                        <span class="title">普通发票
                            <span class="edit" data-toggle="modal" data-target="#invoiceModal">修改</span>
                        </span>
                        <span class="explain clearfix">
                            <div class="fp-title">
                                抬头:
                            </div>
                            <span>
                                个人
                            </span>
                        </span>
                    </label>
                </div>
                <div class="invoice-select-block" id="VAT_invoice_block">
                    <label for="VATInvoice">
                        <input type="radio" id="VATInvoice" name="invoice" class="hide" value="VATInvoice">
                        <span class="title">增值税发票
                            <a href="https://www.myzte.com/invoice-add.html" class="edit-invoice">编辑</a>
                            <span class="choose" data-toggle="modal" data-target="#VAT_invoice">选择</span>
                        </span>
                        <span class="explain clearfix">
                            <div class="fp-title">
                                单位:
                            </div>
                            <span class="VATInvoice-title">
                                请选择
                            </span>
                        </span>
                    </label>
                </div>
                <div class="invoice-select-block no-invoice">
                    <label for="noInvoice">
                        <input type="radio" id="noInvoice" name="invoice" class="hide" value="noInvoice">
                        <span class="title">其他</span>
                        <span class="explain">不开具发票或需开增票</span>
                    </label>
                </div>
                <!--普通发票模态框-->
                <div class="modal fade" id="invoiceModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel">填写发票抬头</h4>
                      </div>
                      <div class="modal-body">
                        <div class="panel panel-default checkout-invoice">
                            <div class="panel-body">
                                <div class="form-group" data-showextends="#need_invoice|change|checked">
                                    <label for="invoice_title">发票抬头</label>
                                                                            <input type="text" name="invoice_title" id="invoice_title" placeholder="请输入公司全称\个人" class="form-control input-sm" value="个人">
                                        
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal" id="save_invoice">保存</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!--增值税发票模态框-->
                <div class="modal fade" id="VAT_invoice" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel">增值税发票</h4>
                      </div>
                      <div class="modal-body">
                          <ul class="list-group invoice-list">
                                                          <div class="text-center">您还未添加增值税发票，去会员中心添加吧!</div>
                                                      </ul>
                      </div>
                      <div class="modal-footer">
                                                  <a href="https://www.myzte.com/invoice-add.html" class="btn btn-link a-btn" target="_blank">前往会员中心添加&gt;&gt;</a>
                                              </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 shopping-list">
            <div class="panel panel-default checkout-cart">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title pull-left">购物清单</h3>
                                        <a href="https://www.myzte.com/cart.html" class="pull-right">返回购物车修改</a>
                                    </div>
                <div class="table-title">
                    <ul class="list-unstyled clearfix">
                        <li class="pull-left gname">商品名称</li>
                        <li class="pull-left gpri">成交价</li>
                        <li class="pull-left gnum">数量</li>
                        <li class="pull-left gzongjia">小计</li>
                    </ul>
                </div>
              <ul class="list-group">
                                    <li class="list-group-item ">
                      <div class="row">
                          <div class="col-xs-2">
                              <a href="https://www.myzte.com/v8.html">
                                  <img class="img-thumbnail" src="/zxshop/public/images/20bc054eacec.jpg" alt="ZTE中兴 Blade V8-炫闪银/全网通/4GB+64GB">
                              </a>
                          </div>
                          <div class="col-xs-10 clearfix">
                              <div class="goods-name">
                                  <a class="text-muted" href="https://www.myzte.com/v8.html">ZTE中兴 Blade V8                                      <small>
                                          炫闪银/全网通/4GB+64GB                                      </small>
                                  </a><br>
                                                                </div>
                              <strong class="text-danger c-i-price">
                                  ￥<span class="c-i-prices">1499.0</span>
                              </strong>
                              <span class="text-muted c-i-amount gnumber">1</span>
                              <span class="gprice">¥1499.00</span>
                          </div>
                      </div>
                  </li>
                                </ul>
            </div>
        </div>
    </div>
        
        
                <div class="checkout-total clearfix">
            <div class="row">
                <div class="col-xs-7">
                    <div class="ly-title"><span>留言</span></div>
                    
                    <textarea name="memo" rows="5" cols="30" placeholder="订单备注" style="display:block;"></textarea>
                    <div>
                    </div>
                </div>
                <div class="col-xs-5">
                    <ul class="list-unstyled">
                        
                        <li class="clearfix">
                            <div class="pull-left">1件商品，总商品金额：</div>
                            <div class="pull-right">￥<span data-bind="total/cart_amount">1499.0</span></div>
                        </li>
                    
                       

                    
                      

                    
                        <li class="clearfix">
                            <div class="pull-left">运费：</div>
                            <div class="pull-right">￥<span data-bind="total/cost_freight">0.0</span></div>
                        </li>
                        
                        <li class="clearfix">
                            <div class="pull-left">应付总额：</div>
                            <div class="pull-right">￥<strong class="order-price" data-bind="total/order_total">1499.0</strong></div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="checkout-footer panel panel-default">
            <div class="row">
                <div class="col-xs-12 text-right clearfix">
                    <!-- 订单创建form -->
                    <div class="pull-right settle-accounts">
                        <span class="order-total">应付总额：
                            <span class="text-danger"><small>￥</small><strong class="order-price" data-bind="total/order_total">1499.0</strong></span>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="submit" class="btn btn-danger btn-lg order-submit-buttom" id="order_submit">提交订单</button>
                    </span></span></div>
                    
                    <ul class="list-unstyled promotion-list pull-right promotion" id="promotion-list">
                                                <li class="text-left promotions-item">
                                <span class="label label-danger">包邮</span>
                                免运费                            </li>
                                            </ul>
                </div>
            </div>
        </div>
    <!-- checkout-container end -->
    </form>


    <form class="modal" id="member_addr_edit_modal" action="https://www.myzte.com/my-quick_maddr-save.html" aria-hidden="true" style="display: none;">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title">收货人信息<span>新增</span></h4>
          </div>
          <div class="modal-body">
              <div class="form-horizontal">
                  <div class="form-group">
                    <label for="maddr_name" class="col-sm-2 control-label">姓名<em class="text-danger">*</em></label>
                    <div class="col-sm-5">
                      <input type="text" required="true" name="maddr[name]" class="form-control" id="maddr_name" placeholder="收货人姓名">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="maddr_mobile" class="col-sm-2 control-label">手机<em class="text-danger">*</em></label>
                    <div class="col-sm-5">
                      <input type="text" required="true" name="maddr[mobile]" class="form-control" id="maddr_mobile" placeholder="手机号码">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="maddr_area" class="col-sm-2 control-label">收货地区<em class="text-danger">*</em></label>
                    <div class="col-sm-10">
                      <div class="input-group  region" id="maddr_region">
<input name="maddr[area]" data-v="" package="mainland" type="hidden" value="">
<select data-level-index="0" class="form-control input-xsmall" style="visibility: visible;"><option value="_NULL_">请选择</option><option value="3267" data-level-index="0">安徽省</option><option value="3389" data-level-index="1">北京市</option><option value="3407" data-level-index="2">福建省</option><option value="3502" data-level-index="3">甘肃省</option><option value="3517" data-level-index="4">海南省</option><option value="3605" data-level-index="5">广东省</option><option value="3748" data-level-index="6">广西壮族自治区</option><option value="3824" data-level-index="7">河南省</option><option value="3874" data-level-index="8">贵州省</option><option value="3993" data-level-index="9">河北省</option><option value="4345" data-level-index="10">黑龙江省</option><option value="4484" data-level-index="11">湖北省</option><option value="4601" data-level-index="12">湖南省</option><option value="4738" data-level-index="13">吉林省</option><option value="4806" data-level-index="14">江苏省</option><option value="4919" data-level-index="15">江西省</option><option value="5031" data-level-index="16">辽宁省</option><option value="5141" data-level-index="17">内蒙古自治区</option><option value="5254" data-level-index="18">宁夏回族自治区</option><option value="5282" data-level-index="19">青海省</option><option value="5333" data-level-index="20">山东省</option><option value="5489" data-level-index="21">山西省</option><option value="5613" data-level-index="22">陕西省</option><option value="5729" data-level-index="23">上海市</option><option value="5747" data-level-index="24">四川省</option><option value="5948" data-level-index="25">天津市</option><option value="5964" data-level-index="26">西藏自治区</option><option value="6044" data-level-index="27">新疆维吾尔自治区</option><option value="6157" data-level-index="28">云南省</option><option value="6303" data-level-index="29">浙江省</option><option value="6403" data-level-index="30">重庆市</option></select>
<select data-level-index="1" class="form-control input-xsmall" style="visibility:hidden"></select>
<select data-level-index="2" class="form-control input-xsmall" style="visibility:hidden"></select>
</div>

<script>

!function(){


    var region_js_path ='https://cdn.myzte.com/public/javascripts/';
    var region_data_path ='/data/misc/';
    var callback = '';
    
    var _region_init = function(region_panel_id,region_data,callback){
        region_sel.init(region_panel_id,region_data, callback);//REGION_DATA FROM SCRIPT
    }
    function region_init(){
        if( typeof(region_sel)!='undefined'){
            return _region_init($('#maddr_region'), REGION_DATA,callback);
        }else{
            $.ajax({
                url:region_js_path+'region_sel.js?v0c8d',
                dataType:'script',
                complete:function(){
                    _region_init($('#maddr_region'), REGION_DATA,callback);
                }
            });
        }
    }
    if(typeof(REGION_DATA)=='undefined'){
        $.ajax({
            url:region_data_path + 'region_data.js?v0c8d',
            dataType:'script',
            complete:function(){
                region_init();
            }
        });
    }else{
        region_init();
    }
}();


</script>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="maddr_addr" class="col-sm-2 control-label">收货地址<em class="text-danger">*</em></label>
                    <div class="col-sm-10">
                        <input type="text" required="true" name="maddr[addr]" class="form-control" id="maddr_addr" placeholder="只需填写街道\门牌号码(勿需再填写省市区县)">
                    </div>
                  </div>
                  <!-- <hr> -->
                  <div class="form-group hide">
                    <label for="maddr_zip" class="col-sm-2 control-label">邮编</label>
                    <div class="col-sm-3">
                        <input type="text" name="maddr[zip]" class="form-control input-sm" id="maddr_zip" placeholder="邮政编码">
                    </div>
                  </div>
                  <div class="form-group hide">
                    <label for="maddr_tel" class="col-sm-2 control-label">固话</label>
                    <div class="col-sm-5">
                        <input type="text" name="maddr[tel]" class="form-control input-sm" id="maddr_tel" placeholder="固定电话">
                    </div>
                  </div>
                  <div class="form-group hide">
                    <label for="maddr_tel" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-5">
                        <input type="email" name="maddr[email]" class="form-control input-sm" id="maddr_tel" placeholder="填写此项可接收订单状态通知">
                    </div>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
              <div class="form-group">
                  <div class="col-sm-5 col-sm-offset-2 text-left">
                      <label class="control-label"><input type="checkbox" name="maddr[is_default]" value="true"> 默认收货地址</label>
                  </div>
                  <div class="col-sm-5">
                      <button type="reset" class="btn btn-default" data-dismiss="modal">关闭</button>
                      <button type="submit" class="btn btn-primary">保存</button>
                  </div>
              </div>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </form><!-- /.modal -->
</div>
<!--错误提示-->
<div class="modal fade" id="question_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body question-content">
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>

<script charset="utf-8">
/**
 * 订单确认页操作JS闭包
 * 以下脚本用于订单确认页,收货地址、配送、及支付方式的确认操作
 * @author vmcshop.com
 * @version 1.150601
 */
$(function () {
    var _popover_options = {
        container:'body',
        html:true,
        placement:'right',
        trigger:'hover',
        delay:300,
        content:function(){
            return $(this).next().html()
        }
    };
    $('[data-toggle="tooltip"]').tooltip({delay:300});
    $('[data-toggle="popover"]').popover(_popover_options);


    

    //显示依赖
    $.each($('[data-showextends]'),function(i,el){
        var extend = $(el).attr('data-showextends'),extend = extend.split('|');
        $(extend[0]).on(extend[1],function(e){
            $(el)[$(extend[0]).is(':'+extend[2])?'show':'hide']();
        });
    });
    $('input[name=invoce_title]').on('keydown',function(e){
        return e.keyCode!=13;
    });


    //收货地址编辑窗体设置
    $('#member_addr_edit_modal').on('show.bs.modal',function(){
        /**
         * @see javascripts/region_sel.js
         */
        region_sel.tryselected($('#maddr_region'));

    });
    $('#member_addr_edit_modal').on('hide.bs.modal',function(){
        //重置
        this.reset();
        $(this).find('input.tmp-hidden').remove();
        $(this).find('.modal-title span').text('新增');
        $(this).removeData('list-item');
        /**
         * @see javascripts/region_sel.js
         */
         region_sel.unselected($('#maddr_region'),'0');
    });
    //收货地址编辑提交
    $('#member_addr_edit_modal').on('submit',function(e){
        e.stopPropagation();
        var list_item = $(this).data('list-item');
        $.post($(this).prop('action'),$(this).serialize(),function(re){
                if(re.data){
                    if(list_item){ //编辑保存
                        if(re.data['is_default'] == 'true'){
                            return location.reload();//编辑\保存一个默认地址后刷新页面
                        }
                        $.each(list_item.find('[data-bind]'),function(i,el){
                            el = $(el);
                            el.text(re.data[el.attr('data-bind')]);
                        });
                    }else{ //新增
                        return location.reload();//新增地址成功后刷新页面
                    }
                }
                if (re.error) {
                    alert(re.error);
                    return;
                };
                $('#member_addr_edit_modal').modal('hide');
        },'json');

        return false;
    });


    //设置默认收货地址
    $('.checkout-maddr').on('click','.btn-default-maddr',function(e){
        e.stopPropagation();
        var this_btn = $(this),
        addr_id = this_btn.attr('data-addrid'),
        el_address = this_btn.closest('.list-group-item').find('address'),
        label_default = this_btn.closest('.list-group').find('.label-default');
        if(this_btn.hasClass('hide'))return;
        this_btn.closest('.list-group').find('.btn-default-maddr.hide').removeClass('hide');
        if(!label_default.length){
           label_default = $('<div class="label label-default">默认地址</div>');
        }
        $.getJSON('/my-quick_maddr-set_default-__addr_id__}.html'.replace('__addr_id__',addr_id),function(re){
            el_address.append(label_default);
            this_btn.addClass('hide');
        });
        return false;
    });
    //删除收货地址
    $('.checkout-maddr').on('click','.btn-delete-maddr',function(e){
        e.stopPropagation();
        if(!confirm('确认删除？'))return false;
        var this_btn = $(this),
        addr_id = this_btn.attr('data-addrid'),
        el_group_item = this_btn.closest('.list-group-item');
        $.getJSON('/my-quick_maddr-delete-__addr_id__}.html'.replace('__addr_id__',addr_id),function(re){
            el_group_item.fadeOut(200,function(){
                $(this).remove();
                if(!$('.checkout-maddr .list-group-item').length){
                    location.reload();//删除了所有地址后，刷新页
                }
            });
        });
        return false;
    });
    //编辑收货地址
    $('.checkout-maddr').on('click','.btn-edit-maddr',function(e){
        e.stopPropagation();
        var this_btn = $(this),
        addr_id = this_btn.attr('data-addrid'),
        el_group_item = this_btn.closest('.list-group-item');
        $('#member_addr_edit_modal').find('.modal-title span').text('编辑');
        $.getJSON('/my-quick_maddr-edit-__addr_id__}.html'.replace('__addr_id__',addr_id),function(re){
            if(!re||!re.data){
                return alert('编辑失败!请到会员中心编辑!');
            }
            $.each(re.data,function(k,v){
                var look_ipt = $('#member_addr_edit_modal input[name="maddr['+k+']"]');
                if(look_ipt.length){
                    if(look_ipt.is(':checkbox')){
                        look_ipt.prop('checked',v == look_ipt.val());
                    }else{
                        look_ipt.val(v);
                    }
                }else{
                    $('#member_addr_edit_modal').append($('<input type="hidden" class="tmp-hidden remove-on-modal-close" name="maddr['+k+']" value="'+v+'">'));
                }
                $('#member_addr_edit_modal').data('list-item',el_group_item);
                $('#member_addr_edit_modal').modal('show');
            });
        });
        return false;
    });

    //最新价格填充
    var _fill_price = function(scope,obj){
            $.each($(scope).find('[data-bind]'),function(i,el){
                var path = $(el).attr('data-bind'),v=eval('obj["'+path.replace(/\//g,'"]["')+'"]');
                $(el).text(v);
            });
    }

    //订单确认流程对应面板
    var flow_path = ['.checkout-maddr','.checkout-dlytype','.checkout-payment'];
    var _check = function(flowindex){
        $.post("/checkout-check.html",$('form.checkout-container').serialize(),function(re){
            if(!re||!re.data)return;
            _fill_price($('.checkout-total,.checkout-footer'),re.data);
            if(!flowindex)return;//仅总价价格更新操作
            var update_panels = $(flow_path.slice(parseInt(flowindex)+1).join(','));
            $.each(update_panels,function(idx,panel){
                panel = $(panel);
                var list_group = panel.find('.list-group');
                if(panel.hasClass('checkout-dlytype')){
                    list_group.empty();
                    $.each(re.data.dlytypes,function(i,d){

                        var item = '<li class="list-group-item clearfix">';
                            item+= '<input type="radio" class="hide" name="dlytype_id" value="'+d.dt_id+'">'+'<h6 class="mt-h">'+d.dt_name+'</h6>'+'<h6>'+d.detail+'</h6>'+'</li>';
                            item = $(item);
                        list_group.append(item);
                        if(d.detail){
                            /*item.append('<i data-toggle="popover" class="glyphicon glyphicon-question-sign" ></i>');
                            item.append('<p class="hide">'+d.detail+'</p>');*/
                            //item.find('[data-toggle="popover"]').popover(_popover_options);
                        }
                        if(d.selected == 'true'){
                            item.find('input:radio').prop('checked',true);
                            item.addClass('active');
                        }
                    });
                }
                if(panel.hasClass('checkout-payment')){
                    list_group.empty();
                    $.each(re.data.paymentapps,function(i,d){
                        var item = '<li class="list-group-item clearfix">';
                            item+= '<input type="radio" class="hide" name="payapp_id" value="'+d.app_id+'">'+'<img src="./zxshop/public/themes/pc/zhongxing/images/pay/'+d.app_id+'.png?v0c8d">'+'<span class="payapp-name">'+d.display_name+'</span></li>';
                            item = $(item);
                        list_group.append(item);
                        if(d.description){
                            item.append('<i data-toggle="popover" class="glyphicon glyphicon-question-sign" ></i>');
                            item.append('<p class="hide">'+d.description+'</p>');
                            item.find('[data-toggle="popover"]').popover(_popover_options);
                        }
                        if(d.selected == 'true'){
                            item.find('input:radio').prop('checked',true);
                            item.addClass('active');
							
                            //hrpay支付方式不提供发票
                            if(item.find('input:radio').attr("value") == 'hrpay'){
                                $('#need_invoice').val(false);
                                $(".invoice-select").hide();
                            }else{
                                $('#need_invoice').val(true);
                                $(".invoice-select").show();
                            }
                        }
                    });
                }
            });
            //_memo_tip();
        },'json');
    }

    $('.btn-list-more').on('click',function(e){
        e.stopPropagation();
        $(this).hide();
        $('.checkout-maddr .list-group-item-more').removeClass('hide');
    });

    $(flow_path.join(',')).on('click','.list-group-item',function(e){
        $(this).find('input:radio').prop('checked',true);
        var current_flow = $(this).closest('.panel')
        current_flow.find('.list-group-item').removeClass('active');
        $(this).addClass('active');
		
        //hrpay支付方式不提供发票
        if($(this).find('input:radio').attr("value") == 'hrpay'){
            $('#need_invoice').val(false);
            $(".invoice-select").hide();
        }else{
            $('#need_invoice').val(true);
            $(".invoice-select").show();            
        }
		
        _check(current_flow.attr('data-flowindex'));
    });
    //促销数量显示
    function promotions_number(){
        var coupon_number = $('.promotion').children('.promotions-item').length;
        $('.slide-up-block span').text(coupon_number);
    }
    promotions_number();

    //使用优惠券
    $('.my-coupon .coupon-submit').on('click',function(e){

        var coupon_input =$(this).parent('.input-group-btn').prev('input'); //$('#coupon_input'),
            coupon_code = $.trim(coupon_input.val()),
            btn = $(this);
        if(!!!coupon_code)return;
        btn.prop('disabled',true);
        $.post("/cart-use_coupon.html",{'coupon':coupon_code},function(re){
            btn.prop('disabled',false);
            if(!re){ //没有成功返回最新购物车md5,统统���失败的优惠券使用
                re = {error:'优惠券使用失败'};
            }
            if(re.error){
                //使用优惠券错误提示
                $('.question-content').html(re.error);
                $('#question_modal').modal('show');

                coupon_input.closest('.input-group')
                .addClass('has-error');
                coupon_input.prop('placeholder',re.error).val('').on('focus',function(e){
                    $(this).prop('placeholder',$(this).attr('data-placeholder')).closest('.input-group').removeClass('has-error');
                    $(this).off('focus',arguments.callee);
                });
                return;
            }
            $('.checkout-container input[name="cart_md5"]').val(re.data.new_cart_md5);//重新赋值购物车认证串

            $('.my-coupon-used').empty();
            $('.my-coupon li').removeClass('disabled');
            var plist_order = re.data['promotions']&&re.data['promotions']['order']?re.data['promotions']['order']:false,lis = '';
            if(plist_order){
                var coupon_list ='';
                $.each(plist_order,function(i,p){
                    if (p.rule_type != 'coupon') {
                        lis += '<li class="text-left promotions-item"><span class="label label-danger">'+p.tag+'</span>'+p.solution+(p.save>0?('<em>,已省'+p.save+'</em>'):'')+'</li>';
                    }else{
                        coupon_list += '<li data-coupon="'+p.coupon_code+'" class="input-li"><a href="javascript:;"><div class="coupon-name">'+p.name+'</div></a><small>&nbsp;&nbsp;'+p.desc+'</small><a href="javascript:;" class="delate">删除</a></li>';
                        lis += '<li class="text-left promotions-item"><span class="label label-danger">'+p.tag+'</span>'+p.solution+(p.save>0?('<em>,已省'+p.save+'</em>'):'')+'</li>';
                    }

                    $('.my-coupon li[data-coupon="'+p.coupon_code+'"]').addClass('disabled');//如果可选优惠券存在，则进行禁用
                    //$('.my-coupon li[data-coupon="'+p.coupon_code+'"]').append(lis);
                });
                $('#promotion-list').empty();
                if (re.data['promotions']&&re.data['promotions']['promotions_order_nums']) {
                    $('.slide-up-block span').text(re.data['promotions']['promotions_order_nums']);
                }else{
                    $('.slide-up-block span').text(0);
                }
                $('#promotion-list').append(lis);
                $('.input-coupon-list').html(coupon_list);

                $('.my-coupon-used [data-toggle="tooltip"]').tooltip({delay:300});//TIP INIT
                _check();//重新check订单,仅影响价格
            }

        },'json')
    });
    $('#coupon_input').on('keydown',function(e){
        if(e.keyCode == 13){
            $('.my-coupon .coupon-submit').trigger('click');
            return false;
        }
    });
    //选择优惠券
    $('.my-coupon li[data-coupon]').on('click','.coupon-name',function(e){
        if($(this).parent('a').parent('li').hasClass('disabled'))return;
        $(this).parent('a').parent('li').parent('ul').next('.input-group').find('input').val($(this).parent('a').parent('li').attr('data-coupon'));
        $('.my-coupon .coupon-submit').trigger('click',[e]);
    });
    //删除优惠券
    $('.my-coupon').on('click','.delate',function(e){
        var coupon_code = $(this).parent('li[data-coupon]').attr('data-coupon'
            );
        var obj_ident = 'coupon_' + coupon_code;
        var li = $(this).closest('.input-li');
        var pro_lis = '';
        //var li = $(this).closest('li');
        /*var obj_ident = $(this).attr('data-couponident'),coupon_code = $(this).attr('data-coupon'),li = $(this).closest('li');*/
        if(!obj_ident)return;
        $.post("/cart-remove_coupon.html",{'obj_ident':obj_ident},function(re){
            if(!re||!re.data||!re.data.new_cart_md5)return;
            $('.checkout-container input[name="cart_md5"]').val(re.data.new_cart_md5);//重新赋值购物车认证串
            _check();//重新check订单,仅影响价格
            li.fadeOut('fast',function(){
                $(this).removeClass('disabled');
            });//从界面删除优惠券

            

            $('.my-coupon li[data-coupon="'+coupon_code+'"]').removeClass('disabled');//如果可选优惠券存在，则解除禁用
            $('.input-coupon-list').find('li[data-coupon="'+coupon_code+'"]').remove();
            if (re.data['promotions'] && re.data['promotions']['order']) {
                $.each(re.data['promotions']['order'],function(index,item){
                    pro_lis += '<li class="text-left promotions-item"><span class="label label-danger">'+item.tag+'</span>'+item.solution+(item.save>0?('<em>,已省'+item.save+'</em>'):'')+'</li>';
                });
                $('#promotion-list').empty();
                $('.slide-up-block span').text(re.data['promotions']['order'].length);
                $('#promotion-list').append(pro_lis);
            }else{
                $('#promotion-list').empty();
                $('.slide-up-block span').text(0);
            }



        },'json');
    });
    //提交订单动作
    $('form.checkout-container').on('submit',function(e){
        e.stopPropagation();
        $('#order_submit').attr('disabled',true);

        var form = $(this);
        $.post(form.prop('action'),form.serialize(),function(re){
            if(re.error){
                alert(re.error);
                $('#order_submit').attr('disabled',false);
            }
            if(re.success){
                if(re.redirect){
                    location = re.redirect;
                }else{
                    alert(re.success);
                }
            }
        },'json');
        return false;
    });

    //商品小计
        $('.shopping-list .list-group-item').each(function(){
            var ci_price =new Number($(this).find('.c-i-prices').text());
                ci_amount = new Number($(this).find('.c-i-amount').text());
                price_total = (ci_price*ci_amount).toFixed(2);
            $(this).find('.gprice').text("¥" +price_total);
        });

});
</script>
<script>
    $(".classify-block,.shop-cart").addClass('hide');

    $(document.body).addClass('checkout-index-body');
    $(function(){
        $(".peisong-time-block").click(function(event) {
            $(".peisong-time-block").removeClass('active');
            $(this).addClass('active');
        });
        //选择发票
        $(".invoice-select-block").click(function(event) {
            $(".invoice-select-block").removeClass('active');
            $(this).addClass('active');
            if($('#need_invoice_block').hasClass('active')){
                $('#need_invoice').attr("checked",true);
            }else{
                $('#need_invoice').attr("checked",false);
            }
        });
        //修改发票抬头
        $('#save_invoice').on('click',function(){
            var title_val = $('#invoice_title').val();
            if(title_val!=''){
                $('#need_invoice_block .explain span').text(title_val);
            }else{
                $('#need_invoice_block .explain span').text('个人');
            }
        })
    });
</script>

<script>
    var key ='';
    $(function(){
        use_bean = {
            data:{
                exchange:Number('1'),
                bean_num:Number('0'),
                mobile_verify:Number('500'),
                order_price:Number($(".order-price").html()),
                is_mobile_verify:'1'
            },
            get_value:function(){
                return $("#inputNumber3").val();
            },
            show_input:function(){
                var _this = this;
                if (_this.data["bean_num"] == 0) {
                    $(".use-bean-block,.use-money-block,.pay-block,.confirm-use").addClass('hide');
                };
            },
            bean_num:function(){
                _this = this;
                $(".bena-number").html(_this.data["bean_num"]);
            },
            bean_to_money:function(){
                var _this=this;
                $("#inputNumber3").change(function(event) {
                    _this.max_bean_number();
                    var num = _this.get_value() / _this.data["exchange"];
                    $(".money").html("-￥" + num);
                    _this.identifying_code();
                }).keyup(function(event) {
                    _this.max_bean_number();
                    var num =  _this.get_value() / _this.data["exchange"];
                    $(".money").html("-￥" + num);
                    _this.identifying_code();
                });
            },
            max_bean_number:function(){
                var _this = this;
                if (_this.get_value() > _this.data["bean_num"]) {
                    $("#inputNumber3").val(_this.data["bean_num"]);
                };
            },
            start:function(){
                this.bean_to_money();
                this.bean_num();
                this.show_input();
                this.get_identifying_code();
                this.order_pay();
            },
            count_down:function settime(val,time){
                    var time;
                    if(time == 0){
                        val.removeAttr('disabled');
                        val.val("获取验证码");
                        time = 60;
                        return;
                    }else{
                        val.attr("disabled",true);
                        val.val("(" + time + "秒" +")后重新发送");
                        time--;
                    }
                    setTimeout(function(){
                        settime(val,time);
                    },1000);

            },
            get_identifying_code:function(){
                var _this = this;
                $(".get-code").click(function(event) {
                    var btn = $(this);
                    if(btn.hasClass('disabled'))return;
                    btn.attr('disabled'); //调试时候注释，上线时候开启
                    $.post('/password-send_vcode_sms.html',{mobile:$('#mobile_input').val()},function(re){
                        if(re && re.error){
                            btn.removeClass('disabled');
                            alert(re.error);
                        }
                        if(re && re.success){
                            _this.count_down(btn,60);
                        }
                    },'json');
                });
            },
            order_pay:function(){
                var _this = this
                $(".confirm-use").on('click', 'a', function(event) {
                    event.preventDefault();
                    var money = $(".money").html();
                    var result = money.substr(2);
                    var use_bean_number = _this.get_value();
                    if(result > _this.data["order_price"]){
                        alert("超出最大限额");
                    }else{
                        $.post('/password-check_password.html',{vcode:$('#inputCode').val(),password:$('#inputPassword3').val(),money:_this.get_value() / _this.data["exchange"]},function(re){
                            if(re && re.error){
                                alert(re.error);
                            }
                            if(re && re.success){
                                key = re.success;
                                $(".bean-detail").html(result);
                                $(".order-price").html((_this.data["order_price"] - result).toFixed(2));
                                $(".bena-number").html((_this.data["bean_num"] - use_bean_number).toFixed(2));
                                $(".beans").removeClass('hide');
                                $("input[name=balance]").val(result);
                                $(".use_ubalance_block").removeClass('hide');
                                $(".verify_ubalance").hide();
                                $("#use_ubalance").text(result);

                            }
                        },'json');
                    }
                });
            },
            identifying_code:function(){
                var money = $(".money").html();
                var result = money.substr(2);
                if (result > this.data['mobile_verify'] && this.data['is_mobile_verify'] == 1) {
                    $(".code-toggle").removeClass('hide');
                    $(".confirm-use").removeClass('col-xs-offset-3');
                }else{
                    $(".code-toggle").addClass('hide');
                    $(".confirm-use").addClass('col-xs-offset-3');
                }

            }
        }
        use_bean.start();
    })
</script>

 <script>
     var exchange_radio =Number('1'),
             bean_num = Number('0')
     $('.delete_ubalance').on('click' ,function(){
         $.post('/password-cancel.html' ,{'key':key} ,function(re){
            if(re.success){
                $('.use-coupon').trigger('click');
                $(".use_ubalance_block").addClass('hide');
                $(".verify_ubalance").show();
                var result=Number($("#use_ubalance").text()) ;
                var order_total = Number($(".checkout-total .order-price").text());
                $(".order-price").html( (order_total+ result).toFixed(2) );
                $(".bena-number").html(bean_num.toFixed(2));
                $(".beans").addClass('hide');
                $(".bean-detail").html(0);
                $("input[name=balance]").val(0);
            }else{
                alert('操作失败');
            }
         },'json');
     });
 </script>
 <script>
    $(function(){
        $('#leave_message').change(function(event) {
            $('textarea').show('slow');
        });
    })
 </script>


<script>
    $('.invoice-list').on('click' ,'li' ,function(){
        $('.invoice-list li').removeClass('current');
        $(this).addClass('current');
    });
    $('#select_invoice').on('click' ,function(){
        var invoice_id = $('.invoice-list').find('li.current').attr('data-id');
        if(invoice_id && invoice_id!=undefined){
            $('input[name=invoice_id]').val(Number(invoice_id));
        }
    });
    //无需发票时，请清除该值

    //是否需要发票
    $('.no-invoice').click(function(event) {
        $('#need_invoice').val(false);
    });
    $('#VAT_invoice_block').on('click', function(event) {

        var is_VAT = $('.invoice-list .list-group-item').hasClass('isChoose');
        if (is_VAT) {
            $('#need_invoice').val(true);
        }else{
            $('#need_invoice').val(false);
        }
    });

    $('#need_invoice_block').click(function(event) {
        $('#need_invoice').val(true);
    });
    $('.save-btn').click(function(event) {
        var title = $('.invoice-list .current').html();
        var is_VAT = $('.invoice-list .list-group-item').hasClass('current');
        if (is_VAT) {
            $('#need_invoice').val(true);
        }else{
            $('#need_invoice').val(false);
        }
        $('.current').addClass('isChoose');
        $('.VATInvoice-title').html(title);
    });
    $('.order-submit-buttom').click(function(event) {
        if($('#VAT_invoice_block').hasClass('active') && $('#need_invoice').val() == 'false'){
            alert('请选择增值税发票!');
            return false;
        };
    });
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
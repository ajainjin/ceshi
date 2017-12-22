<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>商城首页</title>
   

   

   
   	<script type="text/javascript" src="/zxshop/public/js/jquery.min.js"></script>
     <script type="text/javascript" src="/zxshop/public/js/unslider.min.js"></script>
    <body class="index-body">
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
        <a href="#" target="_blank">
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
    <a href="#" target="_blank">
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
    <a href="#" target="_blank">
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
    <a href="#" target="_blank">
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
    <a href="#" target="_blank">
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
    <a href="#" target="_blank">
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
    <a href="#" target="_blank">
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




        <div class="page-index">
           
           
           
           
           
           
           
            
            <!-- 轮播图 -->
           


<!--  begin -->

<script src="/zxshop/public/js/jquery.min.js"></script>

<script src="/zxshop/public/js/unslider.min.js"></script>

<style>

html, body { font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;}

ul, ol { padding: 0;}



.banner { position: relative; overflow: auto; text-align: center;}

.banner li { list-style: none; }

.banner ul li { float: left; }

</style>



<style>

#b06 { width: 640px;}

#b06 .dots { position: absolute; left: 0; right: 0; bottom: 20px;}

#b06 .dots li 

{ 

	display: inline-block; 

	width: 10px; 

	height: 10px; 

	margin: 0 4px; 

	text-indent: -999em; 

	border: 2px solid #fff; 

	border-radius: 6px; 

	cursor: pointer; 

	opacity: .4; 

	-webkit-transition: background .5s, opacity .5s; 

	-moz-transition: background .5s, opacity .5s; 

	transition: background .5s, opacity .5s;

}

#b06 .dots li.active 

{

	background: #fff;

	opacity: 1;

}

#b06 .arrow { position: absolute; top: 200px;}

#b06 #al { left: 15px;}

#b06 #ar { right: 15px;}

</style>



<div class="banner" id="b06">

    <ul>
<?php if(is_array($banner)): foreach($banner as $key=>$v): ?><li><a href="<?php echo ($v["blink"]); ?>"><img class="sliderimg" src="/zxshop/public/images/banner/<?php echo ($v["bimage"]); ?>" alt="" width="100%"></a></li><?php endforeach; endif; ?>
    </ul>

    <a href="javascript:void(0);" class="unslider-arrow06 prev"><img class="arrow" id="al" src="/zxshop/public/images/arrowl.png" alt="prev" width="20" height="35" style="margin-left:100px"></a>

    <a href="javascript:void(0);" class="unslider-arrow06 next"><img class="arrow" id="ar" src="/zxshop/public/images/arrowr.png" alt="next" width="20" height="37" style="margin-right:100px"></a>

</div>



<script>

function imgReload()

{

	var imgHeight = 0;

	var wtmp = $("body").width();

	$("#b06 ul li").each(function(){

        $(this).css({width:wtmp + "px"});

    });

	$(".sliderimg").each(function(){

		$(this).css({width:wtmp + "px"});

		imgHeight = $(this).height();

	});

}



$(window).resize(function(){imgReload();});



$(document).ready(function(e) {

	imgReload();

    var unslider06 = $('#b06').unslider({

		dots: true,

		fluid: true

	}),

	data06 = unslider06.data('unslider');

	

	$('.unslider-arrow06').click(function() {

        var fn = this.className.split(' ')[1];

        data06[fn]();

    });

});

</script>

<!--  end -->






            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
           
            <div class="zx-block">
                <div class="zx-goods-block">
                    <div class="zx-title-block">
                        <div class="zx-title-name">
                            <span>今日抢购</span><span class="zx-title-name-span">最新折扣单品</span>
                        </div>
                    </div>
                    <div class="zx-goods">
                        <ul class="list-unstyled clearfix qg-ul">
                            <li class="pull-left qg-list">
                                <div class="qg-block">
    <a href="https://www.myzte.com/6902176008580.html" target="_blank"><img src="/zxshop/public/images/1cb0a8233557.jpg" alt=""></a>
</div>
<div class="left-time-item">		
    <span id="hour_show"><s id="h"></s>12</span>
	<span class="span-fh">:</span>
	<span id="minute_show"><s></s>12</span>
	<span class="span-fh">:</span>
	<span id="second_show"><s></s>30</span>
</div>
                            </li> 
							<li class="pull-left qg-list">
                                <div class="qg-block">
    <a href="https://www.myzte.com/6934933095359.html" target="_blank"><img src="/zxshop/public/images/7578f1cffd2f.jpg" alt=""></a>
</div>
<div class="right-time-item">		
	<span id="hour_show2"><s id="h"></s>12</span>
	<span class="span-fh">:</span>
	<span id="minute_show2"><s></s>12</span>
	<span class="span-fh">:</span>
	<span id="second_show2"><s></s>30</span>
</div>
                            </li>
                        </ul>
                        <div class="zx-ad-banner hide">
                            <a href="https://www.myzte.com/item-867.html" target="_blank"><img src="/zxshop/public/images/bannerA.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
			 
            

            <div class="zx-block">
                <div class="zx-goods-block">
                    <div class="zx-title-block">
                        <div class="zx-title-name">
                            <span>手机专区</span><span class="zx-title-name-span">中兴精品手机</span>
                        </div>
                    </div>
                    <div class="zx-goods">
                        <ul class="list-unstyled clearfix">
                            <li class="pull-left">
                                <div class="mobile-banner">
    <a href="https://www.myzte.com/v8.html" target="_blank"><img src="/zxshop/public/images/f6243e08e49c.jpg" alt=""></a>
</div>
                            </li>
                                <li class="pull-left">
        <div class="sale-block">
            <a href="https://www.myzte.com/item-2071.html" target="_blank">
                <div class="sale-goods-img">
                    <img src="/zxshop/public/images/f61206bc58f7.jpg" alt="">
					                </div>
                <div class="sale-goods-miaoshu">
                    <div class="sale-goods-name">
                        <h6>天机7 A2017(全网通)</h6>
                    </div>
                    <div class="sale-goods-ad">
                        <h6></h6>
                    </div>
                    <div class="sale-goods-pri">
                        <span class="new-pri">￥<strong>3099.0</strong></span>
                                        </div>
                </div>
            </a>
        </div>
    </li>
    <li class="pull-left">
        <div class="sale-block">
            <a href="https://www.myzte.com/6902176008580.html" target="_blank">
                <div class="sale-goods-img">
                    <img src="/zxshop/public/images/d3f465b4d2e1.jpg" alt="">
					                          
						  <div class="tips tips-blue">                             
							<span>热卖</span>                          
						  </div>                          
						                  </div>
                <div class="sale-goods-miaoshu">
                    <div class="sale-goods-name">
                        <h6>天机7 MAX(全网通)</h6>
                    </div>
                    <div class="sale-goods-ad">
                        <h6></h6>
                    </div>
                    <div class="sale-goods-pri">
                        <span class="new-pri">￥<strong>3299.0</strong></span>
                                        </div>
                </div>
            </a>
        </div>
    </li>
    <li class="pull-left">
        <div class="sale-block">
            <a href="https://www.myzte.com/6902176009532.html" target="_blank">
                <div class="sale-goods-img">
                    <img src="/zxshop/public/images/fe8d3d405ec3.jpg" alt="">
					                </div>
                <div class="sale-goods-miaoshu">
                    <div class="sale-goods-name">
                        <h6>Blade A2 Plus 全网通</h6>
                    </div>
                    <div class="sale-goods-ad">
                        <h6></h6>
                    </div>
                    <div class="sale-goods-pri">
                        <span class="new-pri">￥<strong>849.0</strong></span>
                                        <span class="old-pri">￥899.0</span>
                                        </div>
                </div>
            </a>
        </div>
    </li>
    <li class="pull-left">
        <div class="sale-block">
            <a href="https://www.myzte.com/6902176003141.html" target="_blank">
                <div class="sale-goods-img">
                    <img src="/zxshop/public/images/751e0fed81a6.jpg" alt="">
					                </div>
                <div class="sale-goods-miaoshu">
                    <div class="sale-goods-name">
                        <h6>Blade A2 国民指纹手机</h6>
                    </div>
                    <div class="sale-goods-ad">
                        <h6></h6>
                    </div>
                    <div class="sale-goods-pri">
                        <span class="new-pri">￥<strong>629.0</strong></span>
                                        <span class="old-pri">￥699.0</span>
                                        </div>
                </div>
            </a>
        </div>
    </li>
    <li class="pull-left">
        <div class="sale-block">
            <a href="https://www.myzte.com/6902176002823.html" target="_blank">
                <div class="sale-goods-img">
                    <img src="/zxshop/public/images/beadfccccd51.jpg" alt="">
					                </div>
                <div class="sale-goods-miaoshu">
                    <div class="sale-goods-name">
                        <h6>ZTE中兴 V7 MAX</h6>
                    </div>
                    <div class="sale-goods-ad">
                        <h6></h6>
                    </div>
                    <div class="sale-goods-pri">
                        <span class="new-pri">￥<strong>1799.0</strong></span>
                                        </div>
                </div>
            </a>
        </div>
    </li>
    <li class="pull-left">
        <div class="sale-block">
            <a href="#" target="_blank">
                <div class="sale-goods-img">
                    <img src="/zxshop/public/images/0924119cae73.jpg" alt="">
					                </div>
                <div class="sale-goods-miaoshu">
                    <div class="sale-goods-name">
                        <h6>ZTE中兴 A910</h6>
                    </div>
                    <div class="sale-goods-ad">
                        <h6></h6>
                    </div>
                    <div class="sale-goods-pri">
                        <span class="new-pri">￥<strong>1299.0</strong></span>
                                        </div>
                </div>
            </a>
        </div>
    </li>
                        </ul>
                        <div class="zx-ad-banner hide">
                            <a href="#" target="_blank"><img src="/zxshop/public/images/bannerA.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="zx-block">
                <div class="zx-goods-block">
                    <div class="zx-title-block">
                        <div class="zx-title-name">
                            <span>配件专区</span><span class="zx-title-name-span">精品手机配件</span>
                        </div>
                        <div class="zx-more">
                            <ul class="list-unstyled clearfix">
                                <li class="zx-more-fenlei active" id="tab1">
                                    <a href="javascript:void(0)">耳机</a>
                                </li>
                                <li class="zx-more-fenlei" id="tab2">
                                    <a href="#">充电宝</a>
                                </li>
                                <li class="zx-more-fenlei" id="tab3">
                                    <a href="#">壳膜套</a>
                                </li>
                            </ul>
                            <a href="/zxshop/index.php/AllGoods/index">
                                <span>更多</span>
                                <img src="/zxshop/public/images/look-all.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="zx-goods">
					      
                        <ul class="list-unstyled clearfix content" id="content1">
                            <li class="pull-left">
                                <div class="mobile-banner">
    <a href="#" target="_blank"><img src="/zxshop/public/images/5ca675c83289.jpg" alt=""></a>
</div>
                            </li>
                                <li class="pull-left">
        <div class="sale-block">
            <a href="#" target="_blank">
                <div class="sale-goods-img">
                    <img src="/zxshop/public/images/24ad35c0e51d.jpg" alt="">
                                     </div>
                <div class="sale-goods-miaoshu">
                    <div class="sale-goods-name">
                        <h6>D1智能手表</h6>
                    </div>
                    <div class="sale-goods-ad">
                        <h6></h6>
                    </div>
                    <div class="sale-goods-pri">
                       <span class="new-pri">￥<strong>899.0</strong></span>
                                        </div>
                </div>
            </a>
        </div>
    </li>
    <li class="pull-left">
        <div class="sale-block">
            <a href="#" target="_blank">
                <div class="sale-goods-img">
                    <img src="/zxshop/public/images/6cdc9defc2b5.jpg" alt="">
                                     </div>
                <div class="sale-goods-miaoshu">
                    <div class="sale-goods-name">
                        <h6>智能心率手环</h6>
                    </div>
                    <div class="sale-goods-ad">
                        <h6></h6>
                    </div>
                    <div class="sale-goods-pri">
                       <span class="new-pri">￥<strong>299.0</strong></span>
                                        </div>
                </div>
            </a>
        </div>
    </li>
    <li class="pull-left">
        <div class="sale-block">
            <a href="#" target="_blank">
                <div class="sale-goods-img">
                    <img src="/zxshop/public/images/aefa339bd5b3.jpg" alt="">
                                     </div>
                <div class="sale-goods-miaoshu">
                    <div class="sale-goods-name">
                        <h6> 蘑菇蓝牙音箱</h6>
                    </div>
                    <div class="sale-goods-ad">
                        <h6></h6>
                    </div>
                    <div class="sale-goods-pri">
                       <span class="new-pri">￥<strong>49.0</strong></span>
                                        </div>
                </div>
            </a>
        </div>
    </li>
    <li class="pull-left">
        <div class="sale-block">
            <a href="#" target="_blank">
                <div class="sale-goods-img">
                    <img src="/zxshop/public/images/e49ded580c8a.jpg" alt="">
                                     </div>
                <div class="sale-goods-miaoshu">
                    <div class="sale-goods-name">
                        <h6>小球音箱 S201</h6>
                    </div>
                    <div class="sale-goods-ad">
                        <h6></h6>
                    </div>
                    <div class="sale-goods-pri">
                       <span class="new-pri">￥<strong>49.0</strong></span>
                                        </div>
                </div>
            </a>
        </div>
    </li>
    <li class="pull-left">
        <div class="sale-block">
            <a href="#" target="_blank">
                <div class="sale-goods-img">
                    <img src="/zxshop/public/images/1c7f7132ef7b.jpg" alt="">
                                     </div>
                <div class="sale-goods-miaoshu">
                    <div class="sale-goods-name">
                        <h6>竹韵耳机 SOH3506</h6>
                    </div>
                    <div class="sale-goods-ad">
                        <h6></h6>
                    </div>
                    <div class="sale-goods-pri">
                       <span class="new-pri">￥<strong>79.0</strong></span>
                                        </div>
                </div>
            </a>
        </div>
    </li>
    <li class="pull-left">
        <div class="sale-block">
            <a href="#" target="_blank">
                <div class="sale-goods-img">
                    <img src="/zxshop/public/images/3732b2aa466b.jpg" alt="">
                                     </div>
                <div class="sale-goods-miaoshu">
                    <div class="sale-goods-name">
                        <h6>10000mAh移动电源 P100 </h6>
                    </div>
                    <div class="sale-goods-ad">
                        <h6></h6>
                    </div>
                    <div class="sale-goods-pri">
                       <span class="new-pri">￥<strong>79.0</strong></span>
                                        </div>
                </div>
            </a>
        </div>
    </li>
                        </ul>
                        
                        <ul class="list-unstyled clearfix content" id="content2" style="display:none;">
                            <li class="pull-left">
                                                            </li>
                                <li class="pull-left">
        <div class="sale-block">
            <a href="#" target="_blank">
                <div class="sale-goods-img">
                    <img src="/zxshop/public/images/ab6b1cc6f4e0.jpg" alt="">
                                     </div>
                <div class="sale-goods-miaoshu">
                    <div class="sale-goods-name">
                        <h6>10000mAh移动电源 P100</h6>
                    </div>
                    <div class="sale-goods-ad">
                        <h6></h6>
                    </div>
                    <div class="sale-goods-pri">
                       <span class="new-pri">￥<strong>79.0</strong></span>
                                        </div>
                </div>
            </a>
        </div>
    </li>
    <li class="pull-left">
        <div class="sale-block">
            <a href="https://www.myzte.com/item-1594.html" target="_blank">
                <div class="sale-goods-img">
                    <img src="/zxshop/public/images/17821aa773c2.jpg" alt="">
                                     </div>
                <div class="sale-goods-miaoshu">
                    <div class="sale-goods-name">
                        <h6>5000mAh移动电源 P60 </h6>
                    </div>
                    <div class="sale-goods-ad">
                        <h6></h6>
                    </div>
                    <div class="sale-goods-pri">
                       <span class="new-pri">￥<strong>99.0</strong></span>
                                        </div>
                </div>
            </a>
        </div>
    </li>
    <li class="pull-left">
        <div class="sale-block">
            <a href="https://www.myzte.com/item-2104.html" target="_blank">
                <div class="sale-goods-img">
                    <img src="/zxshop/public/images/3361858f73c7.jpg" alt="">
                                     </div>
                <div class="sale-goods-miaoshu">
                    <div class="sale-goods-name">
                        <h6>5000mAh移动电源 P42</h6>
                    </div>
                    <div class="sale-goods-ad">
                        <h6></h6>
                    </div>
                    <div class="sale-goods-pri">
                       <span class="new-pri">￥<strong>59.0</strong></span>
                                        </div>
                </div>
            </a>
        </div>
    </li>
    <li class="pull-left">
        <div class="sale-block">
            <a href="https://www.myzte.com/item-1940.html" target="_blank">
                <div class="sale-goods-img">
                    <img src="/zxshop/public/images/1e38f0caa072.jpg" alt="">
                                     </div>
                <div class="sale-goods-miaoshu">
                    <div class="sale-goods-name">
                        <h6>2550mAh 卡片式移动电源 </h6>
                    </div>
                    <div class="sale-goods-ad">
                        <h6></h6>
                    </div>
                    <div class="sale-goods-pri">
                       <span class="new-pri">￥<strong>34.9</strong></span>
                                        </div>
                </div>
            </a>
        </div>
    </li>
                        </ul>
                        
                        <ul class="list-unstyled clearfix content" id="content3" style="display:none;">
                                <li class="pull-left">
        <div class="sale-block">
            <a href="https://www.myzte.com/item-1980.html" target="_blank">
                <div class="sale-goods-img">
                    <img src="/zxshop/public/images/0441bc42b3d1.jpg" alt="">
                                     </div>
                <div class="sale-goods-miaoshu">
                    <div class="sale-goods-name">
                        <h6>天机 7 TPU果冻套</h6>
                    </div>
                    <div class="sale-goods-ad">
                        <h6></h6>
                    </div>
                    <div class="sale-goods-pri">
                       <span class="new-pri">￥<strong>29.0</strong></span>
                                        </div>
                </div>
            </a>
        </div>
    </li>
    <li class="pull-left">
        <div class="sale-block">
            <a href="https://www.myzte.com/item-1995.html" target="_blank">
                <div class="sale-goods-img">
                    <img src="/zxshop/public/images/addc28ada55b.jpg" alt="">
                                     </div>
                <div class="sale-goods-miaoshu">
                    <div class="sale-goods-name">
                        <h6>Blade A2 屏幕保护膜</h6>
                    </div>
                    <div class="sale-goods-ad">
                        <h6></h6>
                    </div>
                    <div class="sale-goods-pri">
                       <span class="new-pri">￥<strong>15.0</strong></span>
                                        </div>
                </div>
            </a>
        </div>
    </li>
    <li class="pull-left">
        <div class="sale-block">
            <a href="https://www.myzte.com/item-1931.html" target="_blank">
                <div class="sale-goods-img">
                    <img src="/zxshop/public/images/3580c5df8469.jpg" alt="">
                                     </div>
                <div class="sale-goods-miaoshu">
                    <div class="sale-goods-name">
                        <h6>A910 TPU果冻套</h6>
                    </div>
                    <div class="sale-goods-ad">
                        <h6></h6>
                    </div>
                    <div class="sale-goods-pri">
                       <span class="new-pri">￥<strong>29.0</strong></span>
                                        </div>
                </div>
            </a>
        </div>
    </li>
    <li class="pull-left">
        <div class="sale-block">
            <a href="https://www.myzte.com/item-1987.html" target="_blank">
                <div class="sale-goods-img">
                    <img src="/zxshop/public/images/904a95898493.jpg" alt="">
                                     </div>
                <div class="sale-goods-miaoshu">
                    <div class="sale-goods-name">
                        <h6>Blade A2 TPU保护套</h6>
                    </div>
                    <div class="sale-goods-ad">
                        <h6></h6>
                    </div>
                    <div class="sale-goods-pri">
                       <span class="new-pri">￥<strong>29.0</strong></span>
                                        </div>
                </div>
            </a>
        </div>
    </li>
                        </ul>
                        <div class="zx-ad-banner hide">
                            <a href="https://www.myzte.com/list.html"><img src="/zxshop/public/images/bannerA.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="zx-block">
                <div class="zx-goods-block">
                    <div class="zx-title-block">
                        <div class="zx-title-name">
                            <span>智能硬件</span><span class="zx-title-name-span">上网必备</span>
                        </div>
                    </div>
                    <div class="zx-goods">
                        <ul class="list-unstyled clearfix content" id="content1">
                                <li class="pull-left">
        <div class="sale-block">
            <a href="https://www.myzte.com/item-2148.html" target="_blank">
                <div class="sale-goods-img">
                    <img src="/zxshop/public/images/644e192cba59.jpg" alt="">
                                     </div>
                <div class="sale-goods-miaoshu">
                    <div class="sale-goods-name">
                        <h6>Spro 2 智能微投 （LTE版）</h6>
                    </div>
                    <div class="sale-goods-ad">
                        <h6></h6>
                    </div>
                    <div class="sale-goods-pri">
                      <span class="new-pri">￥<strong>4699.0</strong></span>
                                        </div>
                </div>
            </a>
        </div>
    </li>
    <li class="pull-left">
        <div class="sale-block">
            <a href="https://www.myzte.com/6934933095359.html" target="_blank">
                <div class="sale-goods-img">
                    <img src="/zxshop/public/images/c8a9c2c7d0a1.jpg" alt="">
                                     </div>
                <div class="sale-goods-miaoshu">
                    <div class="sale-goods-name">
                        <h6>Spro 2 智能微投 （WIFI版）</h6>
                    </div>
                    <div class="sale-goods-ad">
                        <h6></h6>
                    </div>
                    <div class="sale-goods-pri">
                      <span class="new-pri">￥<strong>3699.0</strong></span>
                                        </div>
                </div>
            </a>
        </div>
    </li>
    <li class="pull-left">
        <div class="sale-block">
            <a href="https://www.myzte.com/item-1735.html" target="_blank">
                <div class="sale-goods-img">
                    <img src="/zxshop/public/images/667cc82342b6.jpg" alt="">
                                     </div>
                <div class="sale-goods-miaoshu">
                    <div class="sale-goods-name">
                        <h6>Spro2 智能微投蓝牙遥控器</h6>
                    </div>
                    <div class="sale-goods-ad">
                        <h6></h6>
                    </div>
                    <div class="sale-goods-pri">
                      <span class="new-pri">￥<strong>69.0</strong></span>
                                        </div>
                </div>
            </a>
        </div>
    </li>
    <li class="pull-left">
        <div class="sale-block">
            <a href="https://www.myzte.com/item-1708.html" target="_blank">
                <div class="sale-goods-img">
                    <img src="/zxshop/public/images/9c158028f174.jpg" alt="">
                                     </div>
                <div class="sale-goods-miaoshu">
                    <div class="sale-goods-name">
                        <h6>Spro2 智能微投 微投包</h6>
                    </div>
                    <div class="sale-goods-ad">
                        <h6></h6>
                    </div>
                    <div class="sale-goods-pri">
                      <span class="new-pri">￥<strong>59.0</strong></span>
                                        </div>
                </div>
            </a>
        </div>
    </li>
                        </ul>
                    </div>
                    <div class="zx-ad-banner">
                            <a href="https://www.myzte.com/v8.html" target="_blank"><img src="/zxshop/public/images/cdf5d6e5708c.jpg" alt=""></a>
                        </div>
                </div>
            </div>

        </div>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $('.all-categories-detail').css("display","block");
            $('.all-categories').add('.all-categories-detail').on("mouseover mouseout",function(){
                $('.all-categories-detail').show();
            });
        });
    </script>
    <script type="text/javascript">
        (function(){
            //首页分类楼层商品切换选项卡
            var switch_tab = function(target_this,par_sec,index){
                par_sec.find('.zx-more-fenlei').removeClass('active');
                target_this.addClass('active');
                par_sec.find('.content').css("display","none");
                par_sec.find('#content'+index).css("display","block");
            }
            $('.zx-more-fenlei').on("mouseover",function(){
                var target_this = $(this);
                var index = this.id.replace('tab','');
                var par_sec = target_this.parents('.zx-block');
                switch_tab(target_this,par_sec,index);
            });

        })();
    </script>
	

    
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
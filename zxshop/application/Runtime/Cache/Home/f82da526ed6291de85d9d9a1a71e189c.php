<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>全部分类</title>
<meta content="手机_智能终端_耳机 / 音箱_数据线 / 电源适配器_保护套 / 后盖 / 贴膜_移动电源/存储卡_服务及周边,ZTE中兴_ZTE B760H" name="keywords">
<meta content="全部分类,ZTE中兴_ZTE B760H" name="description">
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
<body class="general-body">
<header>
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



</header>

<div class="container main-container">
    <!--普通商品列表页 grid-->
<div class="glist-container">
        <div class="panel panel-default gfilter">
      <div class="panel-body" style="height:56px">
          
      </div>
    </div>
        <div class="goods-list" style="margin-bottom:100px">
        <div class="panel panel-default panel-inner">
          <div class="panel-heading">
                  <div class="form-inline clearfix" role="search">
                      <div class="btn-group order-btn btn-sm" role="group" aria-label="...">
                        <a class="paixu" href="javascript:;">
                              排序 :
                          </a>
                          <a class="btn-danger" href="https://www.myzte.com/list.html?">
                              默认
                          </a>
                          <a class="btn-default" href="https://www.myzte.com/list.html?orderby=uptime-desc">
                              新品
                          </a>
                                                    <a class="btn-default" href="https://www.myzte.com/list.html?orderby=price-desc">价格</a>
                                                    <a class="btn-default" href="https://www.myzte.com/list.html?orderby=buy_count-desc">
                              销量
                          </a>
                          <a class="no-border btn-default" href="https://www.myzte.com/list.html?orderby=comment_count-desc">
                              评论
                          </a>
                         
                      
                  </div>
            </div>
        </div>

        
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      <div class="row goods-list gl-default">
        
        
        
                          
              
              
              
              
                            <div class="col-xs-3 gl-cx3">
                <div class="thumbnail goods-item">
                                            <div class="tips tips-blue">
                           <span>热卖</span>
                        </div>
                                            <div class="gi-image-wrapper">
                        <a href="https://www.myzte.com/6902176008580.html">
                            <img src="/zxshop/public/images/d3f465b4d2e1.jpg" alt="ZTE中兴 天机7 MAX(全网通)">
                        </a>
                    </div>
                  <div class="caption">
                    <h3 class="g-name">
                        <a href="https://www.myzte.com/6902176008580.html">ZTE中兴 天机7 MAX(全网通)</a>
                    </h3>
                    <ul class="list-inline">
                      <!-- <li class="price-1 text-danger">¥3299.0</li>  -->
                                            <li class="price-1 text-danger">¥3299.0</li>
                                          </ul>
                    <!-- <h3 class="pinglun-number hide">
                    3205人好评
                                            </h3> -->
                  </div>
                </div>
              </div>
              
                            <div class="col-xs-3 gl-cx3">
                <div class="thumbnail goods-item">
                                        <div class="gi-image-wrapper">
                        <a href="https://www.myzte.com/item-2071.html">
                            <img src="/zxshop/public/images/603032519f2a.jpg" alt="ZTE中兴 天机7 A2017(全网通)">
                        </a>
                    </div>
                  <div class="caption">
                    <h3 class="g-name">
                        <a href="https://www.myzte.com/item-2071.html">ZTE中兴 天机7 A2017(全网通)</a>
                    </h3>
                    <ul class="list-inline">
                      <!-- <li class="price-1 text-danger">¥3099.0</li>  -->
                                            <li class="price-1 text-danger">¥3099.0</li>
                                          </ul>
                    <!-- <h3 class="pinglun-number hide">
                    1189人好评
                                            </h3> -->
                  </div>
                </div>
              </div>
                            
                            
                            
                            
                            
                            
                            
                            
                            <div class="col-xs-3 gl-cx3">
                <div class="thumbnail goods-item">
                                        <div class="gi-image-wrapper">
                        <a href="https://www.myzte.com/item-2138.html">
                            <img src="/zxshop/public/images/bcbcd1af205e.jpg" alt="ZTE中兴 天机7 A2017 顶配版 (全网通)">
                        </a>
                    </div>
                  <div class="caption">
                    <h3 class="g-name">
                        <a href="https://www.myzte.com/item-2138.html">ZTE中兴 天机7 A2017 顶配版 (全网通)</a>
                    </h3>
                    <ul class="list-inline">
                      <!-- <li class="price-1 text-danger">¥4099.0</li>  -->
                                            <li class="price-1 text-danger">¥4099.0</li>
                                          </ul>
                    <!-- <h3 class="pinglun-number hide">
                                                    暂无评价
                                                </h3> -->
                  </div>
                </div>
              </div>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                      </div>
          <h5 class="text-danger">抱歉,没有找到您搜索的相关商品！</h5>
          <p><b>建议: </b>适当缩短您的关键词或修改关键词后重新搜索。</p>
          <p class="recommand-search">
            <b>搜索推荐:</b>
            <a href="javascript:void(0)" data-action="/list.html?" onclick="location=$(this).attr(&#39;data-action&#39;)+&#39;keyword=&#39;+&#39;智能手表&#39;">智能手表</a>
            <a href="javascript:void(0)" data-action="/list.html?" onclick="location=$(this).attr(&#39;data-action&#39;)+&#39;keyword=&#39;+&#39;天机&#39;">天机</a>
            <a href="javascript:void(0)" data-action="/list.html?" onclick="location=$(this).attr(&#39;data-action&#39;)+&#39;keyword=&#39;+&#39;智能微投&#39;">智能微投</a>
            <a href="javascript:void(0)" data-action="/list.html?" onclick="location=$(this).attr(&#39;data-action&#39;)+&#39;keyword=&#39;+&#39;耳机&#39;">耳机</a>
            <a href="javascript:void(0)" data-action="/list.html?" onclick="location=$(this).attr(&#39;data-action&#39;)+&#39;keyword=&#39;+&#39;平板&#39;">平板</a>
        </p></div>
    </div>
</div>
<script>
  $(document.body).addClass('general-body');
  $(".col-xs-3:nth-child(4n)").css('margin-right', '0');
  $(function(){
    var item_len = $('.goods-item').length;
    if(item_len==0){
      $('.blanklist-msg').css("display","block");
    }

    //列表／grid形式切换
    $('.btn-list').on('click', function() {
      var url = window.location.href;
      var params = 'tpl_type=list';
      if(url.indexOf('?')>0){
        var href = url + '&' + params;
        window.location.href=href;
      }else{
        var href = url + '?' + params;
        window.location.href=href;
      }
    });

  });
</script>
</div>
<div><div class="footer">
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

 

      
    



</div>

</body></html>
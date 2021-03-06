<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            后台管理中心
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
    <body>
        <div class="layui-layout layui-layout-admin">
            <div class="layui-header header header-demo">
                <div class="layui-main">
                    <p class="logo">
                        后台管理中心
                    </p>
                    <ul class="layui-nav" lay-filter="">
                      <li class="layui-nav-item">
                        <a href="javascript:;"><?php echo ($username); ?></a>
                        <dl class="layui-nav-child"> <!-- 二级菜单 -->
                          <dd><a href="">个人信息</a></dd>
                          <dd><a href="">切换帐号</a></dd>
                          <dd><a href="/zxshop/admin.php/Login/loginout">退出</a></dd>
                        </dl>
                      </li>
                      
                      <li class="layui-nav-item x-index"><a href="/zxshop" target="_blank">前台首页</a></li>
                    </ul>
                </div>
            </div>
            <div class="layui-side layui-bg-black x-side">
                <div class="layui-side-scroll">
                    <ul class="layui-nav layui-nav-tree site-demo-nav" lay-filter="side">
                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe607;</i><cite>评论管理</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <dd class="">
                                        <a href="javascript:;" _href="/zxshop/public/html/question-list.html">
                                            <cite>评论列表</cite>
                                        </a>
                                    </dd>
                                </dd>
                                <!-- <dd class="">
                                    <dd class="">
                                        <a href="javascript:;" _href="/zxshop/public/html/question-del.html">
                                            <cite>删除问题</cite>
                                        </a>
                                    </dd>
                                </dd> -->
                            </dl>
                        </li>
                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe62d;</i><cite>商品管理</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <dd class="">
                                        <a href="javascript:;" _href="/zxshop/admin.php/Goods/goods_list">
                                            <cite>产品列表</cite>
                                        </a>
                                    </dd>
                                </dd>
                                <dd class="">
                                    <dd class="">
                                        <a href="javascript:;" _href="/zxshop/admin.php/Goods/goods_edit">
                                            <cite>产品发布</cite>
                                        </a>
                                    </dd>
                                </dd>
                                <dd class="">
                                    <dd class="">
                                        <a href="javascript:;" _href="/zxshop/admin.php/Goods/goods_cate">
                                            <cite>产品分类</cite>
                                        </a>
                                    </dd>
                                </dd>
                                <!-- <dd class="">
                                    <dd class="">
                                        <a href="javascript:;" _href="/zxshop/public/html/welcome.html">
                                            <cite>类型属性（待开发）</cite>
                                        </a>
                                    </dd>
                                </dd> -->
                                <!-- <dd class="">
                                    <dd class="">
                                        <a href="javascript:;" _href="/zxshop/public/html/category.html">
                                            <cite>产品分类</cite>
                                        </a>
                                    </dd>
                                </dd> -->
                            </dl>
                        </li>
                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe634;</i><cite>轮播管理</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <dd class="">
                                        <a href="javascript:;" _href="/zxshop/admin.php/Banner/banner_list">
                                            <cite>轮播列表</cite>
                                        </a>
                                    </dd>
                                </dd>
                            </dl>
                        </li>
                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe642;</i><cite>订单管理</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <dd class="">
                                        <a href="javascript:;" _href="/zxshop/public/html/welcome.html">
                                            <cite>订单列表</cite>
                                        </a>
                                    </dd>
                                </dd>
                            </dl>
                        </li>
                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe630;</i><cite>分类管理</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <a href="javascript:;" _href="/zxshop/public/html/category.html">
                                        <cite>分类列表</cite>
                                    </a>
                                </dd>
                            </dl>
                        </li>
                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe606;</i><cite>评论管理</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <a href="javascript:;" _href="/zxshop/public/html/comment-list.html">
                                        <cite>评论列表</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="/zxshop/public/html/feedback-list.html">
                                        <cite>意见反馈</cite>
                                    </a>
                                </dd>
                            </dl>
                        </li>
                        <!-- <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe612;</i><cite>会员管理</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <a href="javascript:;" _href="/zxshop/public/html/member-list.html">
                                        <cite>会员列表</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="/zxshop/public/html/member-del.html">
                                        <cite>删除会员</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="/zxshop/public/html/member-level.html">
                                        <cite>等级管理</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="/zxshop/public/html/member-kiss.html">
                                        <cite>积分管理</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="/zxshop/public/html/member-view.html">
                                        <cite>浏览记录</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="/zxshop/public/html/member-view.html">
                                        <cite>分享记录</cite>
                                    </a>
                                </dd>
                            </dl>
                        </li> -->
                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe613;</i><cite>成员管理</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <a href="javascript:;" _href="/zxshop/admin.php/Admin/admin_list">
                                        <cite>管理员列表</cite>
                                    </a>
                                </dd>
                                 <dd class="">
                                    <a href="javascript:;" _href="/zxshop/admin.php/Admin/admin_role">
                                        <cite>会员列表</cite>
                                    </a>
                                </dd>
                                <!--
                                <dd class="">
                                    <a href="javascript:;" _href="/zxshop/admin.php/Admin/admin_cate">
                                        <cite>权限分类</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="/zxshop/admin.php/Admin/admin_rule">
                                        <cite>权限管理</cite>
                                    </a>
                                </dd> -->
                            </dl>
                        </li>
                        <!-- <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe629;</i><cite>系统统计</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <a href="javascript:;" _href="/zxshop/public/html/echarts1.html">
                                        <cite>拆线图</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="/zxshop/public/html/echarts2.html">
                                        <cite>柱状图</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="/zxshop/public/html/echarts3.html">
                                        <cite>地图</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="/zxshop/public/html/echarts4.html">
                                        <cite>饼图</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="/zxshop/public/html/echarts5.html">
                                        <cite>雷达图</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="/zxshop/public/html/echarts6.html">
                                        <cite>k线图</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="/zxshop/public/html/echarts7.html">
                                        <cite>热力图</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="/zxshop/public/html/echarts8.html">
                                        <cite>仪表图</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="http://echarts.baidu.com/examples.html" target="_blank" _href="/zxshop/public/html/welcome.html">
                                        <cite>更多案例</cite>
                                    </a>
                                </dd>
                            </dl>
                        </li> -->
                        <li class="layui-nav-item">
                            <a class="javascript:;" href="javascript:;">
                                <i class="layui-icon" style="top: 3px;">&#xe614;</i><cite>系统设置</cite>
                            </a>
                            <dl class="layui-nav-child">
                                <dd class="">
                                    <a href="javascript:;" _href="/zxshop/public/html/sys-set.html">
                                        <cite>系统设置</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="/zxshop/public/html/sys-data.html">
                                        <cite>数字字典</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="/zxshop/public/html/sys-shield.html">
                                        <cite>屏蔽词</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="/zxshop/public/html/sys-log.html">
                                        <cite>系统日志</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="/zxshop/public/html/sys-link.html">
                                        <cite>友情链接</cite>
                                    </a>
                                </dd>
                                <dd class="">
                                    <a href="javascript:;" _href="/zxshop/public/html/sys-qq.html">
                                        <cite>第三方登录</cite>
                                    </a>
                                </dd>
                            </dl>
                        </li>
                        <li class="layui-nav-item" style="height: 30px; text-align: center">
                        </li>
                    </ul>
                </div>

            </div>
            <div class="layui-tab layui-tab-card site-demo-title x-main" lay-filter="x-tab" lay-allowclose="true">
                <div class="x-slide_left"></div>
                <ul class="layui-tab-title">
                    <li class="layui-this">
                        我的桌面
                        <i class="layui-icon layui-unselect layui-tab-close">ဆ</i>
                    </li>
                </ul>
                <div class="layui-tab-content site-demo site-demo-body">
                    <div class="layui-tab-item layui-show">
                        <iframe frameborder="0" src="/zxshop/admin.php/Index/welcome" class="x-iframe"></iframe>
                    </div>
                </div>
            </div>
            <div class="site-mobile-shade">
            </div>
        </div>
        <script src="/zxshop/public/lib/layui/layui.js" charset="utf-8"></script>
        <script src="/zxshop/public/js/x-admin.js"></script>
        <script>
        var _hmt = _hmt || [];
        (function() {
          var hm = document.createElement("script");
          hm.src = "/zxshop/public/js/hm.js?b393d153aeb26b46e9431fabaf0f6190";
          var s = document.getElementsByTagName("script")[0]; 
          s.parentNode.insertBefore(hm, s);
        })();
        </script>
    </body>
</html>
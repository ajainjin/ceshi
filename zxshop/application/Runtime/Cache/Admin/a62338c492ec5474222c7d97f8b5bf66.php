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
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="format-detection" content="telephone=no">
        <link rel="stylesheet" href="/zxshop/public/css/x-admin.css" media="all">
    </head>
    <body>
        <div class="x-nav">
            <span class="layui-breadcrumb">
              <a><cite>首页</cite></a>
              <a><cite>商品管理</cite></a>
              <a><cite>产品列表</cite></a>
            </span>
            <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"  href="javascript:location.replace(location.href);" title="刷新"><i class="layui-icon" style="line-height:30px">ဂ</i></a>
        </div>
        <div class="x-body">
            <form class="layui-form x-center" action="" style="width:80%">
                <div class="layui-form-pane" style="margin-top: 5px;padding-left:600px;">
                  <div class="layui-form-item">
                       
                    <div class="layui-input-inline">
                      <input type="text" name="username"  placeholder="请输入商品名称或商品ID" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-input-inline" style="width:80px">
                        <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
                    </div>
                    
                  </div>
                </div> 
            </form>
            <xblock>
            
          
            
            
           
           
           
            <span class="x-right" style="line-height:40px">共有数据：<?php echo ($count); ?> 条</span></xblock>
            <table class="layui-table">
                <thead>
                    <tr>
                        
                        <th>
                            ID
                        </th>
                        <th>
                            商品名称
                        </th>
                        <th>
                            商品描述
                        </th>
                        <th>
                            手机版本
                        </th>
                        <th>
                            颜色
                        </th>
                        <th>
                            制式
                        </th>
                        <th>
                          价格       
                        </th>
                         <th>
                          图片预览       
                        </th>
                         <th>
                          库存       
                        </th>
                         <th>
                          上架时间      
                        </th>
                        <th>
                          状态      
                        </th>
                        
                        <th>
                            操作
                        </th>
                        
                    </tr>
                </thead>
                <tbody>
                
                    <tr>
                        
                        <td class="gid">
                          0
                        </td>
                        <td>
                            1
                        </td>
                        <td >
                            3
                        </td>
                        <td >
                            4
                        </td>
                        
                        
                        <td >
                            5
                        </td>
                        
                        <td >
                           6
                        </td>
                       
                           <td >
                            7
                        </td>
                        
                        
                        <td>
                           8
                        </td>
                        <td>
                           9
                        </td>
                         <td>
                           10
                        </td>
                        
                        
                        
                        <td class="td-status">
                        
                            <span class="layui-btn layui-btn-normal layui-btn-mini">
                                热卖中
                            </span>
                           
                            
                        </td>
                        
                        
                        <td class="td-manage">
                        
                        
                        
                     		
                            <a style="text-decoration:none" onclick="goods_stop(this,<?php echo ($v["gid"]); ?>)" href="javascript:;" title="下架">
                                <i class="layui-icon">&#xe601;</i>
                            </a>
                            <a title="编辑" href="javascript:;" onclick="goods_edit(this,<?php echo ($v["gid"]); ?>)"  class="ml-5" style="text-decoration:none">
                                <i class="layui-icon">&#xe642;</i>
                            </a>
                            <a title="删除" href="javascript:;" onclick="goods_del(this,<?php echo ($v["gid"]); ?>)" style="text-decoration:none">
                                <i class="layui-icon">&#xe640;</i>
                            </a>
                            
                       
                            
                        </td>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                       
                        
                    </tr>
                    
                    
                    
                </tbody>
            </table>

            <div id="page" align="center"></div>
        </div>
        <script src="/zxshop/public/lib/layui/layui.js" charset="utf-8"></script>
        <script src="/zxshop/public/js/x-layui.js" charset="utf-8"></script>
        <script>
        	
            layui.use(['laydate','element','laypage','layer'], function(){
              $ = layui.jquery;//jquery
              laydate = layui.laydate;//日期插件
              element = layui.element();//面包导航
              laypage = layui.laypage;//分页
              layer = layui.layer;//弹出层

              //以上模块根据需要引入

              laypage({
                cont: 'page'
                ,pages: 10
                ,first: 1
                ,last: 10
                ,prev: '<em class="layui-icon">&#xe603;</em>'
                ,next: '<em class="layui-icon">&#xe602;</em>'
              }); 
             
            });

            
            

             /*停用*/
            function admin_stop(obj,id){
            	
            	//var a = $(".mid"+id).text();
            	//window.alert(a);
                layer.confirm('确认要下架吗？',function(){
                    //发异步把用户状态进行更改
                  $.ajax({
                    	type:"get",
                    	url:"/zxshop/admin.php/Index/stop",
                    	data:{isstop:'1',mid:id},
                    	success:function(msg){
                    		//layer.alert(msg);
                    		 if(msg=="下架成功"){
                    			$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="admin_start(this,<?php echo ($v["mid"]); ?>)" href="javascript:;" title="上架"><i class="layui-icon">&#xe62f;</i></a>');
                                $(obj).parents("tr").find(".td-status").html('<span class="layui-btn layui-btn-disabled layui-btn-mini">已下架</span>');
                                $(obj).remove();
                                layer.msg('已下架!',{icon: 5,time:1000});
                              
                    		}  
                    	}
                    });
                	
                    
                });
            }

            /*上架*/
            
            function goods_start(obj,id){
            	
            	//var a = $(".mid"+id).text();
            	//window.alert(a);
            	//return false;
                layer.confirm('确认要上架吗？',function(){  
                    //发异步把用户状态进行更改
                    $.ajax({
                    	type:"get",
                    	url:"/zxshop/admin.php/Index/start",
                    	data:{'isstop':0,'mid':id},
                    	success:function(msg){
                    		//layer.alert(msg);
                    		
                    		 if(msg=='上架成功'){
                    			$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="admin_stop(this,<?php echo ($v["mid"]); ?>)" href="javascript:;" title="下架"><i class="layui-icon">&#xe601;</i></a>');
                                $(obj).parents("tr").find(".td-status").html('<span class="layui-btn layui-btn-normal layui-btn-mini">热卖中</span>');
                                $(obj).remove();
                                layer.msg(msg,{icon: 6,time:1000});
                              
                    		    }
                    	    }
                    	});
                   
                });
            }
            //编辑
            
            function goods_edit(mid){
            	//alert(mid);
            	//return false;
            	layer.open({
            		  type: 2,
            		  title: '编辑',
            		  shadeClose: true,
            		  shade: 0.8,
            		  area: ['800px', '540px'],
            		  content: '/zxshop/admin.php/Admin/admin_edit/mid/'+mid //iframe的url
            		}); 
            }
            
            
            /*删除*/
            function goods_del(obj,id){
            	//var a = id;
            	//alert(a);
                layer.confirm('确认要删除吗？',function(index){
                    //发异步删除数据
                    $.ajax({
                    	type:'get',
                    	url:'/zxshop/admin.php/Admin/del',
                    	data:{mid:id},
                    	success:function(msg){
                    		//alert(msg);
                    		if(msg=="OK"){
                    			$(obj).parents("tr").remove();
                                layer.msg('已删除!',{icon:1,time:1000});
                    		}
                    	}
                    });
                    
                    
                });
            }
            </script>
           
    </body>
</html>
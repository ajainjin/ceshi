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
              <a><cite>成员管理</cite></a>
              <a><cite>管理员列表</cite></a>
            </span>
            <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"  href="javascript:location.replace(location.href);" title="刷新"><i class="layui-icon" style="line-height:30px">ဂ</i></a>
        </div>
        <div class="x-body">
            <form class="layui-form x-center"  style="width:80%">
                <div class="layui-form-pane" style="margin-top: 5px;padding-left:600px;">
                  <!-- <div class="layui-form-item">
                       
                    <div class="layui-input-inline">
                      <input type="text" name="username"  placeholder="请输入登录名" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-input-inline" style="width:80px">
                        <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
                    </div>
                    
                  </div> -->
                </div> 
            </form>
            <xblock>
            
          
            
            <?php if($_SESSION['admin']['username']=='root'): ?><!-- <button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon">&#xe640;</i>批量删除</button> -->
            <button class="layui-btn" onclick="admin_add('添加用户','/zxshop/admin.php/Admin/admin_add','600','500')"><i class="layui-icon">&#xe608;</i>添加用户</button><?php endif; ?>
           
           
           
            <span class="x-right" style="line-height:40px">共有数据:<span id="count"><?php echo ($count); ?></span> 条</span></xblock>
            <table class="layui-table">
                <thead>
                    <tr>
                        
                        <th>
                            ID
                        </th>
                        <th>
                            登录名
                        </th>
                        <th>
                            手机
                        </th>
                        <th>
                            邮箱
                        </th>
                        <th>
                            角色
                        </th>
                        <th>
                            加入时间
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
                <?php if(is_array($admininfo)): foreach($admininfo as $key=>$v): ?><tr>
                        
                        <td class="mid<?php echo ($v["mid"]); ?>">
                           <?php echo ($v["mid"]); ?>
                        </td>
                        <td>
                            <?php echo ($v["mname"]); ?>
                        </td>
                        <td >
                            <?php echo ($v["mnum"]); ?>
                        </td>
                        <td >
                            <?php echo ($v["memail"]); ?>
                        </td>
                        
                        <?php if($v["limits"] == 0): ?><!-- 判断用户管理权限开始 -->
                        <td >
                            超级管理员
                        </td>
                     <?php elseif($v["limits"] == 1): ?>   
                        <td >
                            高级管理员
                        </td>
                        <?php else: ?>
                           <td >
                            普通管理员
                        </td><?php endif; ?><!-- 判断用户管理权限结束 -->
                        
                        <td>
                           <?php echo ($v["dateandtime"]); ?>
                        </td>
                        
                        <?php if($v["isstop"] == 0): ?><!-- 判断账号状态是否启用开始 -->
                        
                        <td class="td-status">
                        
                            <span class="layui-btn layui-btn-normal layui-btn-mini">
                                已启用
                            </span>
                           
                            
                        </td>
                        
                        
                        <td class="td-manage">
                        
                        <?php if($_SESSION['admin']['username']=='root'): if($v["limits"] > 0): ?><a style="text-decoration:none" onclick="admin_stop(this,<?php echo ($v["mid"]); ?>)" href="javascript:;" title="停用">
                                <i class="layui-icon">&#xe601;</i>
                            </a>
                            <a title="编辑" href="javascript:;" onclick="admin_edit(<?php echo ($v["mid"]); ?>)" class="ml-5" style="text-decoration:none">
                                <i class="layui-icon">&#xe642;</i>
                            </a>
                            <a title="删除" href="javascript:;" onclick="admin_del(this,<?php echo ($v["mid"]); ?>)" style="text-decoration:none">
                                <i class="layui-icon">&#xe640;</i>
                            </a><?php endif; endif; ?> 
                       
                            
                        </td>
                        
                        <?php elseif($v["isstop"] == 1): ?>
                        
                        <td class="td-status">
                        <span class="layui-btn layui-btn-disabled layui-btn-mini">已停用</span>
                        </td>
                        
                        <td class="td-manage">
                        
                         
                        <?php if($_SESSION['admin']['username']=='root'): ?><a style="text-decoration:none" onClick="admin_start(this,<?php echo ($v["mid"]); ?>)" href="javascript:;" title="启用"><i class="layui-icon">&#xe62f;</i></a>
                         <a title="编辑" href="javascript:;" onclick="admin_edit(<?php echo ($v["mid"]); ?>)" class="ml-5" style="text-decoration:none">
                                <i class="layui-icon">&#xe642;</i>
                            </a>
                            <a title="删除" href="javascript:;" onclick="admin_del(this,<?php echo ($v["mid"]); ?>)" style="text-decoration:none">
                                <i class="layui-icon">&#xe640;</i>
                            </a><?php endif; ?>
                            
                        </td><?php endif; ?><!-- 判断账号状态是否启用结束 -->
                        
                       
                        
                    </tr><?php endforeach; endif; ?>
                    
                </tbody>
            </table>
			<div style="width:1125px;height:100px;align:center;margin-top:50px;position:absolute;top:250px"><table align="center" border="0" ><tr align="center"><td colspan="8"><?php echo ($str); ?></td></tr></table></div>
            <div id="page" align="center"></div>
        </div>
        <script src="/zxshop/public/lib/layui/layui.js" charset="utf-8"></script>
        <script src="/zxshop/public/js/x-layui.js" charset="utf-8"></script>
        <script>
        	
            layui.use(['laydate','element','laypage','layer'], function(){
              $ = layui.jquery;//jquery
              laydate = layui.laydate;//日期插件
              lement = layui.element();//面包导航
              laypage = layui.laypage;//分页
              layer = layui.layer;//弹出层

              //以上模块根据需要引入

             /*  laypage({
                cont: 'page'
                ,pages: 10
                ,first: 1
                ,last: 10
                ,prev: '<em class="layui-icon">&#xe603;</em>'
                ,next: '<em class="layui-icon">&#xe602;</em>'
              }); 
              
            }); */

        
            
             /*添加*/
            function admin_add(title,url,w,h){
                x_admin_show(title,url,w,h);
            }

             /*停用*/
            function admin_stop(obj,id){
            	
            	//var a = $(".mid"+id).text();
            	//window.alert(a);
                layer.confirm('确认要停用吗？',function(){
                    //发异步把用户状态进行更改
                  $.ajax({
                    	type:"get",
                    	url:"/zxshop/admin.php/Index/stop",
                    	data:{isstop:'1',mid:id},
                    	success:function(msg){
                    		//layer.alert(msg);
                    		 if(msg=="停用成功"){
                    			$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="admin_start(this,'+id+')" href="javascript:;" title="启用"><i class="layui-icon">&#xe62f;</i></a>');
                                $(obj).parents("tr").find(".td-status").html('<span class="layui-btn layui-btn-disabled layui-btn-mini">已停用</span>');
                                $(obj).remove();
                                layer.msg('已停用!',{icon: 5,time:1000});
                                /* location.reload(); */
                    		}  
                    	}
                    });
                	
                    
                });
            }

            /*启用*/
            
            function admin_start(obj,id){
            	
            	//var a = $(".mid"+id).text();
            	//window.alert(a);
            	//return false;
                layer.confirm('确认要启用吗？',function(){  
                    //发异步把用户状态进行更改
                    $.ajax({
                    	type:"get",
                    	url:"/zxshop/admin.php/Index/start",
                    	data:{'isstop':0,'mid':id},
                    	success:function(msg){
                    		//layer.alert(msg);
                    		
                    		 if(msg=='启用成功'){
                    			$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="admin_stop(this,'+id+')" href="javascript:;" title="停用"><i class="layui-icon">&#xe601;</i></a>');
                                $(obj).parents("tr").find(".td-status").html('<span class="layui-btn layui-btn-normal layui-btn-mini">已启用</span>');
                                $(obj).remove();
                                layer.msg('已启用!',{icon: 6,time:1000});
                               /* location.reload(); */
                    		    }
                    	    }
                    	});
                   
                });
            }
            //编辑
            
            function admin_edit(mid){
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
            function admin_del(obj,id){
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
                                var count = $("#count").html();//获取数量值
                                $("#count").html(count-1);//删除时数量值减一
                    		}
                    	}
                    });
                    
                    
                });
            }
            </script>
            
    </body>
</html>
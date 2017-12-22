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
        <div class="x-body">
            <blockquote class="layui-elem-quote">
                <span style="font-size:30px;padding-left:450px">welcome!</span>
            </blockquote>
            <!-- <p>登录次数：18 </p>
            <p>上次登录IP：222.35.131.79.1  上次登录时间： 2017-01-01 11:19:55</p> -->
            <fieldset class="layui-elem-field layui-field-title site-title">
              <legend><a name="default">信息统计</a></legend>
            </fieldset>
            
            <table class="layui-table">
                <thead>
                    <tr>
                        <th colspan="2" scope="col">系统信息</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th width="30%">Web服务器</th>
                        <td><span id="lbServerName"><?php echo ($sysos); ?></span></td>
                    </tr>
                    <tr>
                        <td>PHP版本</td>
                        <td><?php echo ($sysversion); ?></td>
                    </tr>
                   
                    <tr>
                        <td>MySQL版本 </td>
                        <td><?php echo ($mysqlinfo); ?></td>
                    </tr>
                    <tr>
                        <td>GD库版本 </td>
                        <td><?php echo ($gdinfo); ?></td>
                    </tr>
                    <tr>
                        <td>FreeType </td>
                        <td><?php echo ($freetype); ?></td>
                    </tr>
                    <tr>
                        <td>远程文件获取 </td>
                        <td><?php echo ($allowurl); ?></td>
                    </tr>
                    <tr>
                        <td>最大上传限制 </td>
                        <td><?php echo ($max_upload); ?></td>
                    </tr>
                    <tr>
                        <td>最大执行时间 </td>
                        <td><?php echo ($max_ex_time); ?></td>
                    </tr>
                    <tr>
                        <td>服务器时间 </td>
                        <td><?php echo ($systemtime); ?></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
        <script src="/zxshop/public/lib/layui/layui.js" charset="utf-8"></script>
        <script src="/zxshop/public/js/x-admin.js"></script>
        
    </body>
</html>
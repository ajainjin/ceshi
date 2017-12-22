<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends BaseController {
    public function index(){
    	
    	$username = $_SESSION['admin']['username'];
    	$re = M("manager")->where("mname='{$username}'")->find();
    	
    	
    	
    	
    	
    	
    	
    	$this->assign("username",$username);
    	 $this->display();
    }
    public function welcome(){
    	 
    	
    	$sysos = $_SERVER["SERVER_SOFTWARE"];      //获取服务器标识的字串
    	$sysversion = PHP_VERSION;                   //获取PHP服务器版本
    	//以下两条代码连接MySQL数据库并获取MySQL数据库版本信息
    	$link = mysqli_connect("localhost", "root", "qiujin","zxshop");
    	$mysqlinfo = mysqli_get_server_info($link);
    	//从服务器中获取GD库的信息
    	if(function_exists("gd_info")){
    		$gd = gd_info();
    		$gdinfo = $gd['GD Version'];
    	}else {
    		$gdinfo = "未知";
    	}
    	//从GD库中查看是否支持FreeType字体
    	$freetype = $gd["FreeType Support"] ? "支持" : "不支持";
    	//从PHP配置文件中获得是否可以远程文件获取
    	$allowurl= ini_get("allow_url_fopen") ? "支持" : "不支持";
    	//从PHP配置文件中获得最大上传限制
    	$max_upload = ini_get("file_uploads") ? ini_get("upload_max_filesize") : "Disabled";
    	//从PHP配置文件中获得脚本的最大执行时间
    	$max_ex_time= ini_get("max_execution_time")."秒";
    	//以下两条获取服务器时间，中国大陆采用的是东八区的时间,设置时区写成Etc/GMT-8
    	date_default_timezone_set("Etc/GMT-8");
    	$systemtime = date("Y-m-d H:i:s",time());
    	$this->assign("sysos",$sysos);
    	$this->assign("sysversion",$sysversion);
    	$this->assign("mysqlinfo",$mysqlinfo);
    	$this->assign("gdinfo",$gdinfo);
    	$this->assign("freetype",$freetype);
    	$this->assign("allowurl",$allowurl);
    	$this->assign("max_upload",$max_upload);
    	$this->assign("max_ex_time",$max_ex_time);
    	$this->assign("systemtime",$systemtime);
    	$this->display("welcome");
    }
    
    //停用账户
    public function stop(){
    	$isstop = $_GET['isstop'];
    	$mid = $_GET['mid'];
    	$re = M("manager")->where("mid=$mid")->setField('isstop',$isstop);  	//echo $mid;
    	 if($re){
    		echo"停用成功";
    	}else{
    		echo "";
    	}
    	
    }
    //启用账户 
    public function start(){
    	$isstop = $_GET['isstop'];
    	$mid = $_GET['mid'];
    	//echo $isstop;
    	$re = M("manager")->where("mid=$mid")->setField('isstop',$isstop);
    	//var_dump($re);
    	 if($re>0){
    		echo "启用成功";
    	}else{
    		echo "";
    	}
    	
    }
}
<?php
namespace Home\Controller;
use Think\Controller;
use Think\Verify;

class LoginController extends Controller {

	public function index(){

		$_SESSION['url'] =  $_SERVER['HTTP_REFERER'];
		$this->display();
	}
	//生成验证码
public function verify(){
	
		$config=array(
				'fontSize'=>30,
				'length'=>4,
				'useNoise'=>false,
				'codeSet'=>'0123456789'
				); 
				
		
		$verify = new Verify($config);
		
		$verify->entry();
	
	}
	
	public function login(){
		//从数据库查询用户信息
		
		//接受用户提交的信息
		$username = $_POST['username'];
		$password = $_POST['password'];
		$vcode = $_POST['vcode'];
		//print_r($_POST);
		
		$url = explode("/", $_SESSION['url']);
		
		//验证码验证
		$verify = new Verify();
	
		if($verify->check($vcode)){
			
 			$re = M("userinfo")->where("username='{$username}' and password='{$password}'")->find();
		    //print_r($re);

		    if($re){
		    	$_SESSION['userMsg'] = $re;
		    	
		    	//echo "登录成功";重定向到上一页
		    	$this->redirect("__APP__/$url[5]/$url[6]");
		    }else{
		    	echo "用户名密码有误";
		    }
			
		}else{
			//echo '验证码有误';
			$this->redirect("__APP__/Login/index");
		}
		
		
	}
	
	public function loginout(){
		unset($_SESSION['userMsg']);
		$this->redirect("__APP__/Login/index");
	}
}

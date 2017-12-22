<?php
namespace Home\Controller;

use Think\Verify;

use Think\Controller;

class RegistController extends Controller {

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
	//校验验证码
	public function check_verify(){
		
		$code = $_POST['vcode'];
		//print_r($code);
		
		//print_r($_POST);
		
		//print_r($_SESSION);
		//print_r($_SESSION);
		$verify = new Verify();
		$result = $verify->check($code);
		
		$url = explode("/", $_SESSION['url']);
		
		//var_dump($_SESSION['url']);
		//print_r($url);
		//echo __APP__.'/'.$c.'/'.$m;
		//exit;
		/* print_r($url);
		echo $url[5];
		echo $url[6];
		echo $url[5].'/'.$url[6];
		echo "__APP__/".$url[5].'/'.$url[6]; */
		 if($result){
		
			//print_r($_POST['login_name']);
			//将用户信息写入数据库
			$data['username'] = $_POST['login_name'];
			$data['password'] = $_POST['login_password'];
			//print_r($data);
			$re = M("userinfo")->data($data)->add();
			//var_dump($re);
			
			if($re){
				
				//注册成功存储用户信息
			$_SESSION["userMsg"]=$data;
			
			//完成后返回上一页并且刷新页面
			//echo "<script> window.history.go(-3);</script>";
			if($_SESSION['url']!=""){
				$this->redirect("__APP__/$url[5]/$url[6]");
			}else{
				$this->redirect("__APP__/Index/index");
			}
			}
			
		}else{
			//echo "<script>document.getElementById('#span').innerHTML='验证码有误'</script>";
			//返回注册页面
			$this->redirect("__APP__/Regist/index");
		} 
	}
	//用户名验证是否重复
	public function check(){
		$name=$_GET['username'];
		
		
		$model = M("userinfo");
		
		$userInfo = $model->where("username='{$name}'")->find();
		if($userInfo){
			echo "用户名已存在";
		}else{
			echo "";
		}
	}
	

	
}
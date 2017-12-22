<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
	public function index(){
		
		$this->display();
	}
	/* 验证登录用户名密码是否正确 */
	public function login(){
		//print_r($_POST);
		$username = $_POST["username"];
		$pass = $_POST['password'];
		//从数据库查询用户信息
		$re = M("manager")->where("mname  = '{$username}' and mpassword = '{$pass}' and isstop=0")->find();
		//var_dump($re);
		   if($re){
		   	$_SESSION['admin']=$_POST;
		   	echo "";
		}else{
			echo "用户名密码错误";
		} 
		
	}
	
	//退出登录
	public function loginout(){
		unset($_SESSION['admin']);
		$this->redirect("__APP__/Login/index");
		
	}
}
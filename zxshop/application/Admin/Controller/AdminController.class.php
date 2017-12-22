<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends BaseController {
	public function admin_add(){
		
		
		$this->display("admin_add");
	}
	//向数据库添加用户
	public function add(){
		
		switch ($_GET['role']){
			case "超级管理员":
				$limit=0;
				break;
			case "高级管理员":
				$limit = 1;
				break;
			case "普通管理员":
				$limit = 2;
				break;
		}
		
		$data = array(
				'mname'=>$_GET['username'],
				'mpassword'=>$_GET['pass'],
				'limits'=>$limit,
				'mnum'=>$_GET['phone'],
				'memail'=>$_GET['email'],
				);
		$re = M("manager")->add($data);
		//print_r($data);
		if($re){
		 	echo "OK";
		 }else{
		 	echo "0";
		 }
		
		//print_r($data);
		 
	}
	/* 从数据库删除数据 */
	public function del(){
		//print_r($_GET);
		 $re = M("manager")->where($_GET)->delete();
		
		if($re){
			echo "OK";
		}else{
			echo "0";
		}
		
	}

	public function admin_list(){

		$currentPage = isset($_GET['p'])?$_GET['p']:1;

		$pageSize = 2;
		$list =M('manager')->select();//所有记录
	    $offset = ($currentPage-1)*$pageSize;//每页的起始值=（当前页-1）*，每页显示记录数
	    $totalRow = count($list);//总记录数
		$totalPage = ceil($totalRow/$pageSize);//总页数


		$admininfo = M("manager")->limit($offset,$pageSize)->select();
		$count = count($admininfo);
		$n = $totalPage;
	    for ($i=1;$i<=$n;$i++)
	    {
	    	if($i!=$currentPage){
	    	$str.='<a class="layui-btn layui-btn-primary layui-btn-small" href="'.__APP__.'/Admin/admin_list/p/'.$i.'">'.$i.'</a>';
	    	}else{
	    		$str.='<a class="layui-btn layui-btn-small" href="'.__APP__.'/Admin/admin_list/p/'.$i.'">'.$i.'</a>';
	    	}
	    }
		$str = '<a class="layui-btn layui-btn-small" href="'.__APP__.'/Admin/admin_list/p/'.($currentPage-1>0?$currentPage-1:1).'">上一页</a>'.$str.'<a class="layui-btn layui-btn-small" href="'.__APP__.'/Admin/admin_list/p/'.($currentPage+1>$n?$n:$currentPage+1).'">下一页</a>';
		$this->assign("str",$str);
		$this->assign("admininfo",$admininfo);
		$this->assign("count",$count);
		$this->display("admin_list");
	}
	
    public function admin_cate(){


		$this->display("admin_cate");
	}
	
	public function admin_edit($mid){
		
		$re = M("manager")->where("mid={$mid}")->find();
		//print_r($re);
		$this->assign("re",$re);
		
		$this->display("admin_edit");
	}
	//在数据库中修改记录
	public function edit_add(){
		//print_r($_GET);
		switch ($_GET['role']){
			case "超级管理员":
				$limit=0;
				break;
			case "高级管理员":
				$limit = 1;
				break;
			case "普通管理员":
				$limit = 2;
				break;
		}
		$mid = $_GET['mid'];
		$data = array(
				'mname'=>$_GET['username'],
				'mpassword'=>$_GET['pass'],
				'limits'=>$limit,
				'mnum'=>$_GET['phone'],
				'memail'=>$_GET['email'],
				);
		$re = M("manager")->where("mid={$mid}")->save($data);
		//var_dump($re);
		if($re)
		{
			echo "修改成功";
		}else{
			echo "修改失败";
		}
	}
	public function admin_rule(){
	

		$this->display("admin_rule");
	}
}
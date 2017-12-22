<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
	
    public function index(){
    	$banner = M('banner')->where('isshow=0')->select();
    	
    	$this->assign("banner",$banner);
    	$this->display();	
    }
}
<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller {
	public function _initialize(){
		if(!$_SESSION['admin']){
			$this->redirect("Login/index");
		}
	}
}
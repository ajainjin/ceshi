<?php
namespace Home\Controller;
use Think\Controller;
class SearchController extends Controller {
	public function index(){
		include_once 'library/sphinx/sphinxapi.php';
		
		$keyword = $_POST['keyword'];
		//print_r($keyword);
		$sc = new \SphinxClient();//实例化类
		$sc->SetServer("localhost",9312);//指定服务信息
		$sc->SetConnectTimeout(10);//设置连接的超时时间
		$sc->SetMaxQueryTime(30);//设置最大的查询时间
		$sc->SetArrayResult(true);//设置sphinx返回结果的类型
		$sc->SetMatchMode(SPH_MATCH_ANY);//设置切词方式
		
		$result = $sc->Query($keyword,"*");//查询索引文件，返回主键值
		$str = "";//存储所有主键值
		if(isset($result["matches"]))
		{
			//遍历数组，获得所有主键值
			foreach ($result["matches"] as $v)
			{
				$str .= "{$v["id"]},";
			}
			$str = rtrim($str,",");
		}
		//print_r($str);
		
		
		if($str != "")
		{
			
			$rs = M('userinfo')->where("uid in ({$str})")->select();//应该从商品表中查询
			
			//print_r($rs);
			
		}; 
		$this->assign("rs",$rs);
		$this->display();
	}
	
	
	
}
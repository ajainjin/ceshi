<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;
class BannerController extends BaseController {
	public function banner_add()
	{

		
		$this->display("banner_add");
	}
	//轮播图上传,后台处理上传文件，并且存储到数据库 
	public function upload()
	{
		
		$config = array(    
				'maxSize'      =>    3145728,
				'rootPath'      => './',
				'savePath'     =>    'public/images/banner/',
				'saveName'   =>    array('uniqid',''), 
				'autoSub'      =>false,   
				'exts'            =>    array('jpg', 'gif', 'png', 'jpeg'),
				);
		$upload = new Upload($config);
	    $info   =   $upload->upload();
	    if(!$info) {// 上传错误提示错误信息        
		   $this->error($upload->getError());    
	    }else{// 上传成功        
		    //上传成功，写入数据库
	    	$data['bimage']=$info['link']['savename'];
	    	$data['blink']=$_POST['link'];
	    	$data['bdescribe']=$_POST['desc'];
	    	//print_r($data);
	    	$model = M("banner")->add($data);
	    	if($model){
	    		echo "OK";
	    	}else{
	    		echo "0";
	    	}
	    } 
	    
		//print_r($_FILES);
		//print_r($_POST);	
	}
	//删除banner图
	public function del()
	{
		$bid = $_GET['bid'];
		//从数据库查询文件名
		$filename = M('banner')->where("bid={$bid}")->find();
		
		
		$re = M('banner')->where("bid=$bid")->delete();
		//删除文件夹里面的图片
		
		$r = unlink("public/images/banner/".$filename['bimage']);
		
		 if($re&&$r)
		{
			echo "OK";
			
		}else{
			echo "";
		}
		
		  
	}
	public function banner_list()
	{
	
		$re = M("banner")->select();
		$count = count($re);
		
		$this->assign("re",$re);
		$this->assign("count",$count);
		$this->display("banner_list");
	}
	
	
	public function banner_edit($bid)
	{
	
		$re = M("banner")->where("bid={$bid}")->find();
		
		//print_r($re);
		$this->assign("re",$re);
		$this->display("banner_edit");
	}
	public function edit_add()
	{
		//print_r($_GET);
		$bid = $_GET['bid'];
		$data['blink'] = $_GET['link'];
		$data['bdescribe'] = $_GET['desc'];
		$re = M('banner')->where("bid={$bid}")->save($data);
		if($re)
		{
			echo "修改成功!";
		}else{
			echo "修改失败!";
		}
		
	}
	public function stop()
	{
		
		/* $bid = $_GET['bid'];
		$isshow = $_GET['isshow']; */
		$re = M('banner')->save($_GET);
		//var_dump($re);
		if($re)
		{
			echo "隐藏";
		}
	}
	
	public function start()
	{
		$re = M('banner')->save($_GET);
		if($re)
		{
			echo "显示";
		}
	}
	
	public function delAll()
	{
		//print_r($_GET);
		foreach ($_GET as $k=>$v)
		{
			foreach ($v as $vv)
			{
				$str .=$vv.',';
			}
		}
		$bid = rtrim($str,','); 
		//echo $bid;
		if($bid!=""){
		$re = M('banner')->delete("$bid");
		}
		if($re)
		{
			echo "删除成功";
		}
	}
}
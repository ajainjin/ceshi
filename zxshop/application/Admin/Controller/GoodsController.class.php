<?php
namespace Admin\Controller;

use Think\Controller;

class GoodsController extends BaseController
{
    public function goods_list()
    {

        $this->display();
    }


    public function goods_cate()
    {

        //$data = M('goodstype')->order('sort')->select();

        /*  function getTree($items)
         {
         $tree = array();
         //第一步，将所有的分类id作为数组key,并创建children单元
         foreach($items as $item){
             $tree[$item['tid']] = $item;
             $tree[$item['tid']]['son'] = array();
         }
         //第二步，利用引用，将每个分类添加到父类children数组中，这样一次遍历即可形成树形结构。
         foreach ($tree as $key=>$value) {
             if ($value['pid'] != 0) {
                 $tree[$value['pid']]['son'][] = &$tree[$key];
             }
         }
         return $tree;
         }
        // print_r($tree);
     function getRes($tree)
     {
         foreach ($tree as $key=>$val)
         {
             if($val['pid']==0){
             echo $val['tname'].'<br/>';
             }else{
             echo '&emsp;|--'.$val['tname'].'<br/>';
             }
             if(isset($val['son']))
             {
                 getRes($val['son']);
             }
         }
     }
    $tree =  getTree($items);
    $re = getRes($tree); */
        /**
         * @param  $pid 分类的父id
         * @param  $spac 子分类的缩进
         * @param  $result 最终返回数组
         *
         * @return 最终返回数组|array
         */
        function getTree($pid = 0, $spac = 0, &$result = array())
        {
            $data = M('goodstype')->order('sort')->select();
            $spac += 4;
            foreach ($data as $k => $v) {
                if ($v['pid'] == $pid) {
                    if ($pid != 0) {
                        $v['tname'] = str_repeat('&nbsp;', $spac) . '|--' . $v['tname'];
                    }
                    $result[] = $v;
                    getTree($v['tid'], $spac, $result);
                }
            }
            return $result;
        }

        $re = getTree();
        //print_r(getTree());
        $this->assign("re", $re);
        $this->display();
    }


    public function goods_edit()
    {
        $this->display();
    }

    public function addType()
    {
        //print_r($_GET);
        $re = M('goodstype')->add($_GET);
        if ($re) {
            echo "OK";
        }


    }

    //单个删除
    public function cate_del()
    {
        //echo 'OK';
        $tid = $_GET['tid'];
        //echo $tid;
        $data = M('goodstype')->where("tid={$tid}")->select();
        print_r($data);

    }
}
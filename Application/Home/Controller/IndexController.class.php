<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	//格式化输出
    public function index(){
    	$m = M('about');
		$data = $m->where(1)->select();
		dump($data);
		 dump($data[0]);
         $this->display();
    }


}





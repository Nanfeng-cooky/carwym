<?php
//前台列表页控制器
class ListController extends BaseController{
	public function indexAction(){
		//获取筛选的条件
		$size = isset($_GET['size']) ? $_GET['size'] : 'all';
		$brand = isset($_GET['brand']) ? $_GET['brand'] : 'all';
		$style = isset($_GET['style']) ? $_GET['style'] : 'all';
		$material = isset($_GET['material']) ? $_GET['material'] : 'all';

		$this->smarty->display('list.html',"$size|$brand|$style|$material");
	}
}
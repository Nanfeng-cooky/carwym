<?php
//前台商品控制器
class GoodsController extends BaseController{
	public function indexAction(){
		$goods_id = $_GET['goods_id'] + 0;

		if (!$this->smarty->isCached('goods.html',$goods_id)) {
			$goodsModel = new GoodsModel('goods');
			$goods = $goodsModel->selectByPk($goods_id);
			// 分配数据
			$this->smarty->assign('goods',$goods);
		}
		
		// 载入模板文件
		$this->smarty->display('goods.html',$goods_id);
	}
}
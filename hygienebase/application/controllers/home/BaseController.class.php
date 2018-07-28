<?php
//前台基础控制器
class BaseController extends Controller {

	//构造方法
	public function __construct(){
		// 引入smarty类
		include APP_PATH . "third_party/smarty/Smarty.class.php";
		// 实例化smarty对象
		$this->smarty = new Smarty();
		// 设置相关属性
		$this->smarty->template_dir = CUR_VIEW_PATH . "templates";
		$this->smarty->compile_dir = CUR_VIEW_PATH . "templates_c";
		//开启缓存
		$this->smarty->caching = true;
		//设置缓存目录
		$this->smarty->cache_dir =  CUR_VIEW_PATH . "cache";
		//设置有效期
		$this->smarty->cache_lifetime = 60;
		//开启smarty调试模式
		// $this->smarty->debugging = true;

		if (!$this->smarty->isCached('index.html')) {
			//获取所有的分类
			$categoryModel = new CategoryModel('category');
			$cats = $categoryModel->frontCats();
			$this->smarty->assign('cats',$cats);
		}
		

		$this->smarty->assign('index',false); //默认不是首页
	}
}
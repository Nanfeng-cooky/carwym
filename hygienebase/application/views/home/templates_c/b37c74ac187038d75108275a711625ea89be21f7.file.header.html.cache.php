<?php /* Smarty version Smarty-3.1.16, created on 2015-10-08 10:51:09
         compiled from "D:\amp\www\shopcz\application\views\home\templates\header.html" */ ?>
<?php /*%%SmartyHeaderCode:173975615da1d5415c9-93170190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b37c74ac187038d75108275a711625ea89be21f7' => 
    array (
      0 => 'D:\\amp\\www\\shopcz\\application\\views\\home\\templates\\header.html',
      1 => 1444209866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173975615da1d5415c9-93170190',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'index' => 0,
    'cats' => 0,
    'k' => 0,
    'v' => 0,
    'v1' => 0,
    'v2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5615da1d817f76_30506857',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5615da1d817f76_30506857')) {function content_5615da1d817f76_30506857($_smarty_tpl) {?><div class="shop_hd">
	<!-- Header TopNav -->
	<div class="shop_hd_topNav">
		<div class="shop_hd_topNav_all">
			<!-- Header TopNav Left -->
			<div class="shop_hd_topNav_all_left">
				<p>您好，欢迎来到<b><a href="/">ShopCZ商城</a></b>[<a href="">登录</a>][<a href="">注册</a>]</p>
			</div>
			<!-- Header TopNav Left End -->

			<!-- Header TopNav Right -->
			<div class="shop_hd_topNav_all_right">
				<ul class="topNav_quick_menu">

					<li>
						<div class="topNav_menu">
							<a href="#" class="topNavHover">我的商城<i></i></a>
							<div class="topNav_menu_bd" style="display:none;" >
					            <ul>
					              <li><a title="已买到的商品" target="_top" href="#">已买到的商品</a></li>
					              <li><a title="个人主页" target="_top" href="#">个人主页</a></li>
					              <li><a title="我的好友" target="_top" href="#">我的好友</a></li>
					            </ul>
					        </div>
						</div>
					</li>
                                            <li>
						<div class="topNav_menu">
							<a href="#" class="topNavHover">卖家中心<i></i></a>
							<div class="topNav_menu_bd" style="display:none;">
					            <ul>
					              <li><a title="已售出的商品" target="_top" href="#">已售出的商品</a></li>
					              <li><a title="销售中的商品" target="_top" href="#">销售中的商品</a></li>
					            </ul>
					        </div>
						</div>
					</li>

					<li>
						<div class="topNav_menu">
							<a href="#" class="topNavHover">购物车<b>0</b>种商品<i></i></a>
							<div class="topNav_menu_bd" style="display:none;">
								<!--
					            <ul>
					              <li><a title="已售出的商品" target="_top" href="#">已售出的商品</a></li>
					              <li><a title="销售中的商品" target="_top" href="#">销售中的商品</a></li>
					            </ul>
					        	-->
					            <p>还没有商品，赶快去挑选！</p>
					        </div>
						</div>
					</li>

					<li>
						<div class="topNav_menu">
							<a href="#" class="topNavHover">我的收藏<i></i></a>
							<div class="topNav_menu_bd" style="display:none;">
					            <ul>
					              <li><a title="收藏的商品" target="_top" href="#">收藏的商品</a></li>
					              <li><a title="收藏的店铺" target="_top" href="#">收藏的店铺</a></li>
					            </ul>
					        </div>
						</div>
					</li>

					<li>
						<div class="topNav_menu">
							<a href="#">站内消息</a>
						</div>
					</li>

				</ul>
			</div>
			<!-- Header TopNav Right End -->
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
	<!-- Header TopNav End -->

	<!-- TopHeader Center -->
	<div class="shop_hd_header">
		<div class="shop_hd_header_logo"><h1 class="logo"><a href="/"><img src="public/images/logo.png" alt="ShopCZ" /></a><span>ShopCZ</span></h1></div>
		<div class="shop_hd_header_search">
                        <ul class="shop_hd_header_search_tab">
		        <li id="search" class="current">商品</li>
		        <li id="shop_search">店铺</li>
		    </ul>
                        <div class="clear"></div>
		    <div class="search_form">
		    	<form method="post" action="index.php">
		    		<div class="search_formstyle">
		    			<input type="text" class="search_form_text" name="search_content" value="搜索其实很简单！" />
		    			<input type="submit" class="search_form_sub" name="secrch_submit" value="" title="搜索" />
		    		</div>
		    	</form>
		    </div>
                        <div class="clear"></div>
		    <div class="search_tag">
		    	<a href="">李宁</a>
		    	<a href="">耐克</a>
		    	<a href="">Kappa</a>
		    	<a href="">双肩包</a>
		    	<a href="">手提包</a>
		    </div>

		</div>
	</div>
	<div class="clear"></div>
	<!-- TopHeader Center End -->

	<!-- Header Menu -->
	<div class="shop_hd_menu">
		<!-- 所有商品菜单 -->
                    
		<div class="shop_hd_menu_all_category <?php if ($_smarty_tpl->tpl_vars['index']->value) {?>shop_hd_menu_hover<?php }?>"
		<?php if (!$_smarty_tpl->tpl_vars['index']->value) {?>id="shop_hd_menu_all_category"<?php }?>
		><!-- 首页去掉 id="shop_hd_menu_all_category" 加上clsss shop_hd_menu_hover -->
			<div class="shop_hd_menu_all_category_title"><h2 title="所有商品分类"><a href="javascript:void(0);">所有商品分类</a></h2><i></i></div>
			<div id="shop_hd_menu_all_category_hd" class="shop_hd_menu_all_category_hd">
				<ul class="shop_hd_menu_all_category_hd_menu clearfix">
					<!-- 单个菜单项 -->
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['k']->value<8) {?>
		<li id="cat_1" class="">
			<h3><a href="" title="男女服装"><?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>
</a></h3>
			<div id="cat_1_menu" class="cat_menu clearfix" style="">
				<?php  $_smarty_tpl->tpl_vars['v1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->key => $_smarty_tpl->tpl_vars['v1']->value) {
$_smarty_tpl->tpl_vars['v1']->_loop = true;
?>
				<dl class="clearfix">
					<dt><a href=""><?php echo $_smarty_tpl->tpl_vars['v1']->value['cat_name'];?>
</a></dt>
					<dd>
						<?php  $_smarty_tpl->tpl_vars['v2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v1']->value['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v2']->key => $_smarty_tpl->tpl_vars['v2']->value) {
$_smarty_tpl->tpl_vars['v2']->_loop = true;
?>
						<a href=""><?php echo $_smarty_tpl->tpl_vars['v2']->value['cat_name'];?>
</a>
						<?php } ?> 
					</dd>
				</dl> 
				<?php } ?>                                                 
			</div>
		</li>
		<?php }?>
		<?php } ?>
					<!-- 单个菜单项 End -->

				<li class="more"><a href="">查看更多分类</a></li>
				</ul>
			</div>
		</div>
		<!-- 所有商品菜单 END -->

		<!-- 普通导航菜单 -->
		<ul class="shop_hd_menu_nav">
			<li class="current_link"><a href=""><span>首页</span></a></li>
			<li class="link"><a href=""><span>团购</span></a></li>
			<li class="link"><a href=""><span>品牌</span></a></li>
			<li class="link"><a href=""><span>优惠卷</span></a></li>
			<li class="link"><a href=""><span>积分中心</span></a></li>
			<li class="link"><a href=""><span>运动专场</span></a></li>
			<li class="link"><a href=""><span>微商城</span></a></li>
		</ul>
		<!-- 普通导航菜单 End -->
	</div>
	<!-- Header Menu End -->



</div><?php }} ?>

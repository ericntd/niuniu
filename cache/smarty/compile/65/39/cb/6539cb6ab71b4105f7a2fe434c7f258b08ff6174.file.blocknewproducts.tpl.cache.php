<?php /* Smarty version Smarty-3.1.14, created on 2013-10-13 11:58:18
         compiled from "/var/www/html/niuniu/themes/fashionbird/modules/blocknewproducts/blocknewproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:780513732525a1a5aad1a07-35837130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6539cb6ab71b4105f7a2fe434c7f258b08ff6174' => 
    array (
      0 => '/var/www/html/niuniu/themes/fashionbird/modules/blocknewproducts/blocknewproducts.tpl',
      1 => 1373170726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '780513732525a1a5aad1a07-35837130',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_products' => 0,
    'newproduct' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525a1a5ab7d447_78623101',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525a1a5ab7d447_78623101')) {function content_525a1a5ab7d447_78623101($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/html/niuniu/tools/smarty/plugins/modifier.escape.php';
?>

<!-- MODULE Block new products -->
<section id="new-products_block_right" class="block products_block column_box">
	<h4 class="title_block"><span><?php echo smartyTranslate(array('s'=>'New products','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</span> <span class="column_icon_toggle"></span></h4>
	<div class="block_content toggle_content">
	<?php if ($_smarty_tpl->tpl_vars['new_products']->value!==false){?>
		<ul class="products">
		<?php  $_smarty_tpl->tpl_vars['newproduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newproduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['new_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['newproduct']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['newproduct']->iteration=0;
 $_smarty_tpl->tpl_vars['newproduct']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['newproduct']->key => $_smarty_tpl->tpl_vars['newproduct']->value){
$_smarty_tpl->tpl_vars['newproduct']->_loop = true;
 $_smarty_tpl->tpl_vars['newproduct']->iteration++;
 $_smarty_tpl->tpl_vars['newproduct']->index++;
 $_smarty_tpl->tpl_vars['newproduct']->first = $_smarty_tpl->tpl_vars['newproduct']->index === 0;
 $_smarty_tpl->tpl_vars['newproduct']->last = $_smarty_tpl->tpl_vars['newproduct']->iteration === $_smarty_tpl->tpl_vars['newproduct']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['newproduct']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['newproduct']->last;
?>
        	<li class="shop_box clearfix <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']){?>last_item<?php }else{ ?>item<?php }?>">
     
                	<a class="products_block_img" href="<?php echo $_smarty_tpl->tpl_vars['newproduct']->value['link'];?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['newproduct']->value['legend'], 'html', 'UTF-8');?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['newproduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['newproduct']->value['id_image'],'medium_default');?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['newproduct']->value['legend'], 'html', 'UTF-8');?>
" /></a>
         
                <div >
            	<h5 class="s_title_block">
					<a class="product_link" href="<?php echo $_smarty_tpl->tpl_vars['newproduct']->value['link'];?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['newproduct']->value['name'], 'html', 'UTF-8');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['newproduct']->value['name']),22,'...');?>
</a>
            	</h5>
				<?php if ($_smarty_tpl->tpl_vars['newproduct']->value['description_short']){?>
            		<p class="product_desc"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['newproduct']->value['description_short']),60,'...');?>
</p>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['newproduct']->value['link'];?>
" class="more_lnk"><?php echo smartyTranslate(array('s'=>'Read more','mod'=>'blocknewproducts'),$_smarty_tpl);?>
<i class="icon-caret-right"></i></a>
            	<?php }?>
                </div>
            </li>
		<?php } ?>
		</ul>
		<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('new-products');?>
" title="<?php echo smartyTranslate(array('s'=>'All new products','mod'=>'blocknewproducts'),$_smarty_tpl);?>
" class="button_large"><?php echo smartyTranslate(array('s'=>'All new products','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</a>
	<?php }else{ ?>
		<p>&raquo; <?php echo smartyTranslate(array('s'=>'Do not allow new products at this time.','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</p>
	<?php }?>
	</div>
</section>
<!-- /MODULE Block new products --><?php }} ?>
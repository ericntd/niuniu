<?php /* Smarty version Smarty-3.1.14, created on 2013-10-13 11:58:18
         compiled from "/var/www/html/niuniu/themes/fashionbird/modules/blocknewsletter/blocknewsletter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:891845723525a1a5a9f4879-32689312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0416f9e1a9318412db7e30be8e67b8bf24cbe351' => 
    array (
      0 => '/var/www/html/niuniu/themes/fashionbird/modules/blocknewsletter/blocknewsletter.tpl',
      1 => 1373170726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '891845723525a1a5a9f4879-32689312',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
    'nw_error' => 0,
    'link' => 0,
    'value' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525a1a5aa6a857_86082445',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525a1a5aa6a857_86082445')) {function content_525a1a5aa6a857_86082445($_smarty_tpl) {?>

<!-- Block Newsletter module-->
<section id="newsletter_block_left"  class="block products_block column_box">
	<h4><span><?php echo smartyTranslate(array('s'=>'Newsletter','mod'=>'blocknewsletter'),$_smarty_tpl);?>
</span><span class="column_icon_toggle"></span></h4>
	<div class="block_content toggle_content">
	<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)&&$_smarty_tpl->tpl_vars['msg']->value){?>
		<p class="<?php if ($_smarty_tpl->tpl_vars['nw_error']->value){?>warning_inline<?php }else{ ?>success_inline<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
	<?php }?>
		<form action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index');?>
" method="post">
			<p>
				
				<input type="email" name="email" size="18" 
					value="<?php if (isset($_smarty_tpl->tpl_vars['value']->value)&&$_smarty_tpl->tpl_vars['value']->value){?><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'Your email address','mod'=>'blocknewsletter'),$_smarty_tpl);?>
<?php }?>" 
					onfocus="javascript:if(this.value=='<?php echo smartyTranslate(array('s'=>'Your email address','mod'=>'blocknewsletter','js'=>1),$_smarty_tpl);?>
')this.value='';" 
					onblur="javascript:if(this.value=='')this.value='<?php echo smartyTranslate(array('s'=>'Your email address','mod'=>'blocknewsletter','js'=>1),$_smarty_tpl);?>
';" 
					class="inputNew" />
				<!--<select name="action">
					<option value="0"<?php if (isset($_smarty_tpl->tpl_vars['action']->value)&&$_smarty_tpl->tpl_vars['action']->value==0){?> selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Subscribe','mod'=>'blocknewsletter'),$_smarty_tpl);?>
</option>
					<option value="1"<?php if (isset($_smarty_tpl->tpl_vars['action']->value)&&$_smarty_tpl->tpl_vars['action']->value==1){?> selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Unsubscribe','mod'=>'blocknewsletter'),$_smarty_tpl);?>
</option>
				</select>-->
					<input type="submit" value="ok" class="button_form" name="submitNewsletter" />
				<input type="hidden" name="action" value="0" />
			</p>
		</form>
	</div>
</section>

<!-- /Block Newsletter module-->
<?php }} ?>
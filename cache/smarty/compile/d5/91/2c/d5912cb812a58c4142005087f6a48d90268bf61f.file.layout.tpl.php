<?php /* Smarty version Smarty-3.1.14, created on 2013-10-13 11:58:10
         compiled from "/var/www/html/niuniu/admin1/themes/default/template/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1197595805525a1a5247fd79-37111312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5912cb812a58c4142005087f6a48d90268bf61f' => 
    array (
      0 => '/var/www/html/niuniu/admin1/themes/default/template/layout.tpl',
      1 => 1377677662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1197595805525a1a5247fd79-37111312',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conf' => 0,
    'errors' => 0,
    'disableDefaultErrorOutPut' => 0,
    'error' => 0,
    'informations' => 0,
    'info' => 0,
    'confirmations' => 0,
    'warnings' => 0,
    'warning' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525a1a52566906_29071374',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525a1a52566906_29071374')) {function content_525a1a52566906_29071374($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if (isset($_smarty_tpl->tpl_vars['conf']->value)){?>
	<div class="conf">
		<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

	</div>
<?php }?>
<?php if (count($_smarty_tpl->tpl_vars['errors']->value)&&(!isset($_smarty_tpl->tpl_vars['disableDefaultErrorOutPut']->value)||$_smarty_tpl->tpl_vars['disableDefaultErrorOutPut']->value==false)){?>
	<div class="error">
		<span style="float:right">
			<a id="hideError" href="#"><img alt="X" src="../img/admin/close.png" /></a>
		</span>
		
		<?php if (count($_smarty_tpl->tpl_vars['errors']->value)==1){?>
			<?php echo reset($_smarty_tpl->tpl_vars['errors']->value);?>

		<?php }else{ ?>
			<?php echo smartyTranslate(array('s'=>'%d errors','sprintf'=>count($_smarty_tpl->tpl_vars['errors']->value)),$_smarty_tpl);?>

			<br/>
			<ol>
				<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
					<li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
				<?php } ?>
			</ol>
		<?php }?>
	</div>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['informations']->value)&&count($_smarty_tpl->tpl_vars['informations']->value)&&$_smarty_tpl->tpl_vars['informations']->value){?>
	<div class="hint clear" style="display:block;">
		<span id="see_more_infos">
			<b><a href="#" style="color:#00529B;" onclick="$('#see_more_infos').hide(); $('#infos_block').show();return false;"><?php echo smartyTranslate(array('s'=>'Click here to see more informations'),$_smarty_tpl);?>
</a></b>
		</span>
		<div id="infos_block" style="display:none;">
			<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['informations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
				<?php echo $_smarty_tpl->tpl_vars['info']->value;?>
<br />
			<?php } ?>
		</div>
	</div><br />
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['confirmations']->value)&&count($_smarty_tpl->tpl_vars['confirmations']->value)&&$_smarty_tpl->tpl_vars['confirmations']->value){?>
	<div class="conf" style="display:block;">
		<?php  $_smarty_tpl->tpl_vars['conf'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['conf']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['confirmations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->key => $_smarty_tpl->tpl_vars['conf']->value){
$_smarty_tpl->tpl_vars['conf']->_loop = true;
?>
			<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>
<br />
		<?php } ?>
	</div><br />
<?php }?>
<?php if (count($_smarty_tpl->tpl_vars['warnings']->value)){?>
	<div class="warn">
		<span style="float:right">
			<a id="hideWarn" href=""><img alt="X" src="../img/admin/close.png" /></a>
		</span>
		<?php if (count($_smarty_tpl->tpl_vars['warnings']->value)>1){?>
			<?php echo smartyTranslate(array('s'=>'There are %d warnings.','sprintf'=>count($_smarty_tpl->tpl_vars['warnings']->value)),$_smarty_tpl);?>

			<span style="margin-left:20px;" id="labelSeeMore">
				<a id="linkSeeMore" href="#" style="text-decoration:underline"><?php echo smartyTranslate(array('s'=>'Click here to see more'),$_smarty_tpl);?>
</a>
				<a id="linkHide" href="#" style="text-decoration:underline;display:none"><?php echo smartyTranslate(array('s'=>'Hide warning'),$_smarty_tpl);?>
</a>
			</span>
			<ul <?php if (count($_smarty_tpl->tpl_vars['warnings']->value)>1){?>style="display:none;"<?php }?> id="seeMore">
			<?php  $_smarty_tpl->tpl_vars['warning'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['warning']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['warnings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['warning']->key => $_smarty_tpl->tpl_vars['warning']->value){
$_smarty_tpl->tpl_vars['warning']->_loop = true;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</li>
			<?php } ?>
			</ul>
		<?php }else{ ?>
			<ul style="margin-top: 3px">
			<?php  $_smarty_tpl->tpl_vars['warning'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['warning']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['warnings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['warning']->key => $_smarty_tpl->tpl_vars['warning']->value){
$_smarty_tpl->tpl_vars['warning']->_loop = true;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</li>
			<?php } ?>
			</ul>
		<?php }?>
	</div>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['page']->value;?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
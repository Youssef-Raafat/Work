<?php
/* Smarty version 3.1.33, created on 2021-05-04 10:58:16
  from '/home/shorwnxi/elqahwa.online/templates/apollo/modal-addvideo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_609128c8c1dc45_48454534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cb08ca194fd57991f4b7b29fc27fc87d48943f3' => 
    array (
      0 => '/home/shorwnxi/elqahwa.online/templates/apollo/modal-addvideo.tpl',
      1 => 1566151162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609128c8c1dc45_48454534 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Modal -->
<div class="modal" id="modal-addvideo">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo $_smarty_tpl->tpl_vars['lang']->value['close'];?>
</span></button>
				<h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['add_video'];?>
</h4>
			</div>
			<div class="modal-body">
			<ul class="pm-addvideo-modal list-unstyled">
				<?php if (@constant('_ALLOW_USER_SUGGESTVIDEO') == '1') {?>
				<li>
				<a href="<?php echo @constant('_URL');?>
/suggest.<?php echo @constant('_FEXT');?>
"><i class="mico mico-insert_link"></i> <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['suggest'];?>
</span></a>
				</li>
				<?php }?>
				<?php if (@constant('_ALLOW_USER_UPLOADVIDEO') == '1') {?>
				<li><a href="<?php echo @constant('_URL');?>
/upload.<?php echo @constant('_FEXT');?>
"><i class="mico mico-cloud_upload"></i> <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['upload_video'];?>
</span></a></li>
				<?php }?>
			</ul>
			</div>
		</div>
	</div>
</div><?php }
}

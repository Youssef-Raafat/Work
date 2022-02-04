<?php
/* Smarty version 3.1.33, created on 2021-05-04 11:08:12
  from '/home/shorwnxi/elqahwa.online/templates/apollo/profile-playlists.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60912b1cc5ff34_36601624',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4328af2fa87531b37d208cd6142cf0f5326ad0ac' => 
    array (
      0 => '/home/shorwnxi/elqahwa.online/templates/apollo/profile-playlists.tpl',
      1 => 1566151162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:profile-header.tpl' => 1,
    'file:profile-playlists-ul.tpl' => 1,
    'file:modal-playlist-createnew.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60912b1cc5ff34_36601624 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_index'=>'1','p'=>"playlists",'tpl_name'=>"profile-playlists"), 0, false);
$_smarty_tpl->_subTemplateRender("file:profile-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('p'=>"playlists"), 0, false);
?>
<div id="content">
	<div class="container-fluid">
	<div class="row row-page-heading">
		<div class="col-xs-8 col-sm-8 col-md-10"><h1><?php echo (($tmp = @$_smarty_tpl->tpl_vars['lang']->value['manage_playlists'])===null||$tmp==='' ? 'Manage Playlists' : $tmp);?>
</h1></div>
		<div class="col-xs-4 col-sm-4 col-md-2">
		<?php if ($_smarty_tpl->tpl_vars['allow_playlists']->value) {?>
		<a href="#modal-new-playlist" data-toggle="modal" data-backdrop="true" data-keyboard="true" class="btn btn-sm btn-success pull-right"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['new_playlist'];?>
</a>
		<?php }?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
		<?php $_smarty_tpl->_subTemplateRender('file:profile-playlists-ul.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('playlists'=>$_smarty_tpl->tpl_vars['playlists']->value), 0, false);
?>
		</div>
	</div>

			<?php if ($_smarty_tpl->tpl_vars['allow_playlists']->value) {?>
				<?php $_smarty_tpl->_subTemplateRender("file:modal-playlist-createnew.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			<?php }?>
	</div><!-- .row -->
	</div><!-- .container-fluid -->
</div><!-- #content -->
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }
}

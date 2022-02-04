<?php
/* Smarty version 3.1.33, created on 2021-05-04 11:08:12
  from '/home/shorwnxi/elqahwa.online/templates/apollo/profile-header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60912b1cc6f359_19464155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd17b9e6f502790e066a6b5e717b133c725a148c' => 
    array (
      0 => '/home/shorwnxi/elqahwa.online/templates/apollo/profile-header.tpl',
      1 => 1566151162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60912b1cc6f359_19464155 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['logged_in']->value && $_smarty_tpl->tpl_vars['current_user_data']->value['id'] == $_smarty_tpl->tpl_vars['s_user_id']->value) {?>
<div id="profile-header" class="container-fluid">
	<div class="row">
		<div class="col-sm-12 col-xs-12 col-md-12">
			<div class="pm-user-brief">
				<div class="pm-avatar">
					<a href="<?php echo $_smarty_tpl->tpl_vars['current_user_data']->value['profile_url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['current_user_data']->value['avatar_url'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['current_user_data']->value['username'];?>
"  border="0" class="img-responsive"></a>
				</div>
				<div class="pm-username"><?php echo $_smarty_tpl->tpl_vars['current_user_data']->value['username'];?>
</div>

				<div class="nav-responsive">
					<ul class="nav nav-tabs nav-underlined">
						<li<?php if ($_smarty_tpl->tpl_vars['p']->value == "profile-edit") {?> class="active"<?php }?>><a href="<?php echo @constant('_URL');?>
/edit-profile.<?php echo @constant('_FEXT');?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['edit_profile'];?>
</a>
						<li<?php if ($_smarty_tpl->tpl_vars['p']->value == "playlists") {?> class="active"<?php }?>><a href="<?php echo @constant('_URL');?>
/playlists.<?php echo @constant('_FEXT');?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['lang']->value['manage_playlists'])===null||$tmp==='' ? 'Manage Playlists' : $tmp);?>
</a></li> 
						<li<?php if ($_smarty_tpl->tpl_vars['p']->value == "members") {?> class="active"<?php }?>><a href="<?php echo @constant('_URL');?>
/memberlist.<?php echo @constant('_FEXT');?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['members'];?>
</a></li>
						<?php if (@constant('_ALLOW_USER_SUGGESTVIDEO') == '1') {?>
						<li<?php if ($_smarty_tpl->tpl_vars['p']->value == "suggest") {?> class="active"<?php }?>><a href="<?php echo @constant('_URL');?>
/suggest.<?php echo @constant('_FEXT');?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['suggest'];?>
</a></li>
						<?php }?>
						<?php if (@constant('_ALLOW_USER_UPLOADVIDEO') == '1') {?>
						<li<?php if ($_smarty_tpl->tpl_vars['p']->value == "upload") {?> class="active"<?php }?>><a href="<?php echo @constant('_URL');?>
/upload.<?php echo @constant('_FEXT');?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['upload_video'];?>
</a></li>
						<?php }?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }
}
}

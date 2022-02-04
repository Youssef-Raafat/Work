<?php
/* Smarty version 3.1.33, created on 2021-05-04 11:13:23
  from '/home/shorwnxi/elqahwa.online/templates/apollo/activity-stream.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60912c53e540c4_92712492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ef98091ec1d5d25362363496e71e5bfc2d026f8' => 
    array (
      0 => '/home/shorwnxi/elqahwa.online/templates/apollo/activity-stream.tpl',
      1 => 1566151162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:activity-stream-item.tpl' => 1,
  ),
),false)) {
function content_60912c53e540c4_92712492 (Smarty_Internal_Template $_smarty_tpl) {
?><span id="preview_status"></span>
<ul class="pm-activity-stream list-unstyled">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['activity_meta_bucket']->value, 'activity_meta', false, 'activity_index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['activity_index']->value => $_smarty_tpl->tpl_vars['activity_meta']->value) {
?>
      	<?php $_smarty_tpl->_subTemplateRender('file:activity-stream-item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php
}
} else {
?>
        <li><?php echo $_smarty_tpl->tpl_vars['lang']->value['my_activity_empty'];?>
</li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php if ($_smarty_tpl->tpl_vars['total_activities']->value == @constant('ACTIVITIES_PER_PAGE')) {?>
	<div class="clearfix"></div>
    <span id="btn_activity_stream_load_more"></span>
<?php }
}
}

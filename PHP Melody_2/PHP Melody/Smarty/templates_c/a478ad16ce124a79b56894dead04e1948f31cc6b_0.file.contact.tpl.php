<?php
/* Smarty version 3.1.33, created on 2021-05-04 11:07:54
  from '/home/shorwnxi/elqahwa.online/templates/apollo/contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60912b0aa16b53_69081862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a478ad16ce124a79b56894dead04e1948f31cc6b' => 
    array (
      0 => '/home/shorwnxi/elqahwa.online/templates/apollo/contact.tpl',
      1 => 1566151162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60912b0aa16b53_69081862 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('p'=>"general"), 0, false);
?> 
<div id="content" class="content-detached">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-md-8">
          <h1><?php echo $_smarty_tpl->tpl_vars['lang']->value['contact_us'];?>
</h1>
          <hr />
            <?php if (isset($_smarty_tpl->tpl_vars['err_captcha']->value)) {?>
            <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['err_captcha']->value;?>
</div>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['err_email']->value)) {?>
            <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['err_email']->value;?>
</div>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['err_msg']->value)) {?>
            <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['err_msg']->value;?>
</div>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['confirm_send']->value)) {?>
            <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['lang']->value['contact_msg1'];?>
</div>
            <?php }?>
            <?php if (!isset($_smarty_tpl->tpl_vars['confirm_send']->value)) {?>
          	<form class="form-horizontal" method="post" action="<?php echo @constant('_URL');?>
/contact.php">
              <div class="form-group">
                <label for="your_name" class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['your_name'];?>
</label>
                <div class="col-md-10"><input type="text" class="form-control" name="your_name" value="<?php if ($_smarty_tpl->tpl_vars['logged_in']->value) {
echo $_smarty_tpl->tpl_vars['s_name']->value;
} else {
echo $_POST['your_name'];
}?>"></div>
              </div>
              <div class="form-group">
                <label for="your_email" class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['your_email'];?>
</label>
                <div class="col-md-10">
                  <input type="email" class="form-control" name="your_email" value="<?php if ($_smarty_tpl->tpl_vars['logged_in']->value) {
echo $_smarty_tpl->tpl_vars['s_email']->value;
} else {
echo $_POST['your_email'];
}?>">
                </div>
              </div>
              <div class="form-group">
                <label for="importance" class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['importance'];?>
</label>
                <div class="col-md-10">
                  <select name="importance" class="form-control">
                    <option value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['low'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['low'];?>
</option>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['normal'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['lang']->value['normal'];?>
</option>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['high'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['high'];?>
</option>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['urgent'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['urgent'];?>
</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="select" class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['in_regard'];?>
</label>
                <div class="col-md-10">
                  <select name="select" class="form-control">
                    <option selected="selected"><?php echo $_smarty_tpl->tpl_vars['lang']->value['select'];?>
</option>
                    <option><?php echo $_smarty_tpl->tpl_vars['lang']->value['bug_report'];?>
</option>
                    <option><?php echo $_smarty_tpl->tpl_vars['lang']->value['suggestions'];?>
</option>
                    <option><?php echo $_smarty_tpl->tpl_vars['lang']->value['general_q'];?>
</option>
                    <option><?php echo $_smarty_tpl->tpl_vars['lang']->value['other'];?>
</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="msg" class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['your_message'];?>
</label>
                <div class="col-md-10">
                  <textarea name="msg" rows="4" class="form-control" placeholder=""><?php echo $_POST['msg'];?>
</textarea>
                </div>
              </div>
          		<?php if ($_smarty_tpl->tpl_vars['logged_in']->value == 0) {?>
          		<?php if ($_smarty_tpl->tpl_vars['spambot_prevention']->value == 'securimage') {?>
          		<div class="form-group">
          			<div class="col-md-offset-2 col-md-7">
          				<input type="text" name="imagetext" class="form-control" autocomplete="off" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['enter_captcha'];?>
">

          			</div>
                <div class="col-md-3">
                  <img src="<?php echo @constant('_URL');?>
/include/securimage_show.php?sid=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['echo_securimage_sid'][0], array( array(),$_smarty_tpl ) );?>
" id="captcha_image" align="absmiddle" alt="" class="img-rounded">
                  <button class="btn btn-sm btn-link btn-refresh" onclick="document.getElementById('captcha_image').src = '<?php echo @constant('_URL');?>
/include/securimage_show.php?sid=' + Math.random(); return false"><i class="fa fa-refresh"></i></button>
                </div>
          		</div>
          		<?php }?>
          		<?php if ($_smarty_tpl->tpl_vars['spambot_prevention']->value == 'recaptcha') {?>
          		<div class="form-group">
          			<div class="col-md-offset-2 col-md-10">
          				<?php echo $_smarty_tpl->tpl_vars['recaptcha_html']->value;?>

          			</div>
          		</div>
          		<?php }?>
          		<?php }?>
              <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                  <button type="submit" name="Submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['submit_send_msg'];?>
" class="btn btn-success" data-loading-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value['submit_send_msg'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['submit_send_msg'];?>
</button>
                </div>
              </div>
            </form>
            <?php }?>
      </div>
      <div class="col-sm-5 col-md-5"></div>
    </div>
  </div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

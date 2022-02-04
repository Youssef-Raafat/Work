<?php
/* Smarty version 3.1.33, created on 2021-05-05 15:38:02
  from '/home/shorwnxi/elqahwa.online/templates/apollo/video-series.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6092bbda27a816_60490775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69b97d4bfede1b688797a29888e261b263e44699' => 
    array (
      0 => '/home/shorwnxi/elqahwa.online/templates/apollo/video-series.tpl',
      1 => 1566151162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:item-series-obj.tpl' => 5,
    'file:item-pagination-obj.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6092bbda27a816_60490775 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/shorwnxi/elqahwa.online/Smarty/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('p'=>"general",'tpl_name'=>"video-series"), 0, false);
?>

<div id="content">
	<div id="category-header" class="container-fluid">
		<div class="pm-category-highlight">
			<h1><?php $_prefixVariable1 = !@constant('_SITENAME');
$_smarty_tpl->_assignInScope('meta_title', $_prefixVariable1);
if ($_prefixVariable1) {
echo $_smarty_tpl->tpl_vars['meta_title']->value;
}?></h1>
		</div>

		<?php if ($_smarty_tpl->tpl_vars['genres']->value[$_smarty_tpl->tpl_vars['genre_id']->value]['child_count'] > 0) {?>
			<div class="row pm-category-header-subcats">
				<div class="col-md-12">
					<div class="pm-section-head">
					<h2><?php echo (($tmp = @$_smarty_tpl->tpl_vars['lang']->value['related_genres'])===null||$tmp==='' ? "Related Genres" : $tmp);?>
</h2>
						<div class="btn-group btn-group-sort">
							<button class="btn btn-xs" id="pm-slide-prev_subcategories"><i class="fa fa-chevron-left"></i></button>
							<button class="btn btn-xs" id="pm-slide-next_subcategories"><i class="fa fa-chevron-right"></i></button>
						</div>
					</div>
					<ul class="pm-ul-carousel-videos list-inline pm-ul-browse-subcategories thumbnails mt-3" data-slider-id="subcategories" data-slides="5" id="pm-carousel_subcategories">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genres']->value, 'genre_array', false, NULL, 'genres_items_loop', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genre_array']->value) {
?>
						<?php if ($_smarty_tpl->tpl_vars['genre_array']->value['parent_id'] == $_smarty_tpl->tpl_vars['genre_id']->value) {?>
						<li>
							<div class="pm-li-category">
								<a href="<?php echo $_smarty_tpl->tpl_vars['genre_array']->value['url'];?>
">
									<h3><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['genre_array']->value['name'],32);?>
</h3>
								</a>
							</div>
						</li>
						<?php }?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				</div>
			</div>
		<?php }?>

	</div>



	<div class="container-fluid">
	<?php if (isset($_smarty_tpl->tpl_vars['featured_items']->value) && (count($_smarty_tpl->tpl_vars['featured_items']->value) > 0)) {?>
	<div class="row">
		<div class="col-md-12 col-md-12 border border-grey border-left-0 border-top-0 border-right-0">
			<div class="pm-section-head">
				<h2><?php echo $_smarty_tpl->tpl_vars['lang']->value['_feat'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['_series'];?>
</h2>
				<div class="btn-group btn-group-sort">
				<button class="btn btn-xs" id="pm-slide-prev_featured"><i class="fa fa-chevron-left"></i></button>
				<button class="btn btn-xs" id="pm-slide-next_featured"><i class="fa fa-chevron-right"></i></button>
				</div>
			</div>
			<div id="">
			<!-- Carousel items -->
				<ul class="pm-ul-carousel-videos pm-ul-carousel-series list-inline" data-slider-id="featured" data-slides="5" id="pm-carousel_featured">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['featured_items']->value, 'item_data', false, 'k', 'featured_items_loop', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['item_data']->value) {
?>
						<?php if ($_smarty_tpl->tpl_vars['item_data']->value['_item_type_'] == 'series') {?>
							<li>
								<?php $_smarty_tpl->_subTemplateRender('file:item-series-obj.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hideLabels'=>'1','hideMeta'=>'1','thumbSize'=>'poster'), 0, true);
?>
							</li>
						<?php }?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			</div><!-- #pm-slider -->
		</div>
	</div>
	<?php }?>

	<!-- featured genres -->
	<?php if (isset($_smarty_tpl->tpl_vars['featured_genres_data']->value) && (count($_smarty_tpl->tpl_vars['featured_genres_data']->value) > 0)) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['featured_genres_data']->value, 'series_data_array', false, 'genre_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genre_id']->value => $_smarty_tpl->tpl_vars['series_data_array']->value) {
?>
			<?php if ($_smarty_tpl->tpl_vars['genres']->value[$_smarty_tpl->tpl_vars['genre_id']->value]['total_series'] > 0 && pm_count($_smarty_tpl->tpl_vars['series_data_array']->value) > 0) {?>
				<div class="row">
					<div class="col-md-12 col-md-12 border border-grey border-left-0 border-top-0 border-right-0">
						<div class="pm-section-head">
							<h2><a href="<?php echo $_smarty_tpl->tpl_vars['genres']->value[$_smarty_tpl->tpl_vars['genre_id']->value]['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['genres']->value[$_smarty_tpl->tpl_vars['genre_id']->value]['name'];?>
</a></h2>
							<div class="btn-group btn-group-sort">
							<button class="btn btn-xs" id="pm-slide-prev_<?php echo $_smarty_tpl->tpl_vars['genre_id']->value;?>
"><i class="fa fa-chevron-left"></i></button>
							<button class="btn btn-xs" id="pm-slide-next_<?php echo $_smarty_tpl->tpl_vars['genre_id']->value;?>
"><i class="fa fa-chevron-right"></i></button>
							</div>
						</div>
						<div id="">
						<!-- Carousel items -->
							<ul class="pm-ul-carousel-videos pm-ul-carousel-series list-inline" data-slider-id="<?php echo $_smarty_tpl->tpl_vars['genre_id']->value;?>
" data-slides="" id="pm-carousel_<?php echo $_smarty_tpl->tpl_vars['genre_id']->value;?>
">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['series_data_array']->value, 'item_data', false, 'k', 'featured_items_loop', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['item_data']->value) {
?>
									<li>
										<?php $_smarty_tpl->_subTemplateRender('file:item-series-obj.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hideLabels'=>'1','hideMeta'=>'1','thumbSize'=>'poster','isObj'=>'series'), 0, true);
?>
									</li>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ul>
						</div><!-- #pm-slider -->
					</div>
				</div>
			<?php }?>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>

	<div class="row">
		<div class="col-md-8">
		<?php if (pm_count($_smarty_tpl->tpl_vars['new_episodes']->value) > 0) {?>
			<!-- New episodes list --> 
			<div class="pm-section-head">
				<h2><?php echo (($tmp = @$_smarty_tpl->tpl_vars['lang']->value['new_episodes'])===null||$tmp==='' ? "New Episodes" : $tmp);?>
</h2>
			</div>
			<ul class="pm-ul-browse-videos list-unstyled">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_episodes']->value, 'item_data', false, 'k', 'new_episodes_loop', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['item_data']->value) {
?>
				<li class="col-xs-6 col-sm-6 col-md-4">
					<?php $_smarty_tpl->_subTemplateRender('file:item-series-obj.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hideLabels'=>'1','hideMeta'=>'1','thumbSize'=>'medium','isObj'=>'episode'), 0, true);
?>
				</li>
				<?php
}
} else {
?>
				<li class="col-xs-12 col-sm-12 col-md-12">
					<?php echo $_smarty_tpl->tpl_vars['lang']->value['top_videos_msg2'];?>

				</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
			<div class="clearfix"></div>
		<?php }?>
		</div><!-- .col-md-8 -->
		<div class="col-md-4 col-md-sidebar">
		<?php if (pm_count($_smarty_tpl->tpl_vars['top_episodes']->value) > 0) {?>
			<div class="widget">
				<div class="pm-section-head">
					<h2><?php echo (($tmp = @$_smarty_tpl->tpl_vars['lang']->value['most_watched_episodes'])===null||$tmp==='' ? "Most Watched Episodes" : $tmp);?>
</h2>
				</div>
				<ul class="row pm-ul-browse-videos list-unstyled">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['top_episodes']->value, 'item_data', false, 'k', 'new_episodes_loop', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['item_data']->value) {
?>
					<li class="col-xs-6 col-sm-6 col-md-6">
						<?php $_smarty_tpl->_subTemplateRender('file:item-series-obj.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hideLabels'=>'1','hideMeta'=>'1','thumbSize'=>'small','isObj'=>'episode'), 0, true);
?>
					</li>
					<?php
}
} else {
?>
					<li class="col-xs-12 col-sm-12 col-md-12">
						<?php echo $_smarty_tpl->tpl_vars['lang']->value['top_videos_msg2'];?>

					</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
				<div class="clearfix"></div>
			</div><!-- .widget -->
		<?php }?>
		</div><!-- .col-md-4 -->
	</div><!-- .row -->

		<div class="row">
		<div class="col-md-12">
		<div class="pm-section-head">
			<h2><?php echo $_smarty_tpl->tpl_vars['lang']->value['_series'];?>
</h2>
		</div>

			<?php if (pm_count($_smarty_tpl->tpl_vars['series']->value) > 0) {?>
				<ul class="pm-ul-browse-videos pm-ul-carousel-series list-unstyled d-flex flex-wrap align-content-start">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['series']->value, 'item_data', false, 'k', 'series_loop', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['item_data']->value) {
?>
					<li>
					<?php $_smarty_tpl->_subTemplateRender('file:item-series-obj.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hideLabels'=>'1','hideMeta'=>'0','thumbSize'=>'poster','isObj'=>'series'), 0, true);
?>
					</li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>

				<?php if (is_array($_smarty_tpl->tpl_vars['pagination']->value)) {?>
					<?php $_smarty_tpl->_subTemplateRender('file:item-pagination-obj.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('custom_class'=>'pagination-arrows'), 0, false);
?>
				<?php }?>

			<?php } else { ?>
				<div class="row">
					<div class="col-md-12 text-center">
						<p></p>
						<p><?php echo $_smarty_tpl->tpl_vars['lang']->value['browse_msg2'];?>
</p>
					</div>
				</div>
			<?php }?>

		</div><!-- #content -->
		</div><!-- .row -->
	</div><!-- .container -->
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tpl_name'=>"video-series"), 0, false);
}
}

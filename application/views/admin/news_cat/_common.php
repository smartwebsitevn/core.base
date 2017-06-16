<!-- Title area -->
<div class="titleArea">
	<div class="wrapper">
		<div class="pageTitle">
			<h5><?php echo lang('mod_cat_news'); ?></h5>
			<span><?php echo lang('cat_news_info'); ?></span>
		</div>
		
		<div class="horControlB menu_action">
			<ul>
				<li><a href="<?php echo admin_url('cat_news/add'); ?>">
					<img src="<?php echo public_url('admin'); ?>/images/icons/control/16/add.png" />
					<span><?php echo lang('add'); ?></span>
				</a></li>
				
				<li><a href="<?php echo admin_url('cat_news'); ?>">
					<img src="<?php echo public_url('admin'); ?>/images/icons/control/16/list.png" />
					<span><?php echo lang('list'); ?></span>
				</a></li>
			</ul>
		</div>
		
		<div class="clear"></div>
	</div>
</div>
<div class="line"></div>

<!-- Breadcrumbs -->
<?php if ( ! empty($breadcrumbs)) $this->widget->admin->breadcrumbs($breadcrumbs); ?>

<!-- Message -->
<?php if ( ! empty($message)):?>
	<div class="wrapper">
		<?php $this->widget->admin->message($message); ?>
	</div>
<?php endif; ?>
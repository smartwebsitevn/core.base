<!-- Title area -->
<div class="titleArea">
	<div class="wrapper">
		<div class="pageTitle">
			<h5><?php echo lang('mod_support_group'); ?></h5>
			<span><?php echo lang('support_group_info'); ?></span>
		</div>
		
		<div class="horControlB menu_action">
			<ul>
				<li><a href="<?php echo admin_url('support_group/add'); ?>" class="lightbox">
					<img src="<?php echo public_url('admin'); ?>/images/icons/control/16/add.png" />
					<span><?php echo lang('add'); ?></span>
				</a></li>
				
				<li><a href="<?php echo admin_url('support_group'); ?>">
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
<?php $this->widget->admin->breadcrumbs($breadcrumbs); ?>


<!-- Message -->
<?php if (isset($message)):?>
	<div class="wrapper">
		<?php $this->widget->admin->message($message); ?>
	</div>
<?php endif; ?>






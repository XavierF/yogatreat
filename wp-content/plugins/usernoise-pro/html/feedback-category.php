<h3>
	<a href="#" id="button-back" style="display: none"><?php _e('Back', 'usernoise-pro')?></a>
	<i class='<?php echo un_get_type_icon($type_slug) ?>' />&nbsp;
	<?php _e('Popular ') ?><?php echo un_get_option(UN_FEEDBACK_FORM_SHOW_TYPE) ? $un_model->get_plural_feedback_type_label($type_slug) : __('Popular Feedback', 'usernoise-pro') ?> <small>(<?php echo $query->found_posts ?>)</small>
</h3>
<?php if ($query->have_posts()): ?>
	<div id="feedback-list" class="scrollable">
		<div class="viewport">
			<div class="overview">
				<ul><?php require(usernoisepro_path('/html/feedback-items.php')) ?></ul>
			</div>
		</div>
		<div class="scrollbar"><div class="track"><div class="thumb"><div class="top"></div><div class="end"></div></div></div></div>
	</div>
<?php else: ?>
	<?php global $un_model ?>
	<div id="no-feedback-yet">
		<?php if ($type_slug): ?>
			<?php echo sprintf(__('No %s yet', 'usernoise-pro'), $un_model->get_plural_feedback_type_label($type_slug)) ?>
		<?php else: ?>
			<?php _e('No feedback yet', 'usernoise-pro') ?>
		<?php endif ?>
	</div>
<?php endif ?>
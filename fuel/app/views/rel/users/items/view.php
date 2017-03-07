<h2>Viewing #<?php echo $rel_users_item->id; ?></h2>

<p>
	<strong>Fk users:</strong>
	<?php echo $rel_users_item->fk_users; ?></p>
<p>
	<strong>Fk items:</strong>
	<?php echo $rel_users_item->fk_items; ?></p>

<?php echo Html::anchor('rel/users/items/edit/'.$rel_users_item->id, 'Edit'); ?> |
<?php echo Html::anchor('rel/users/items', 'Back'); ?>
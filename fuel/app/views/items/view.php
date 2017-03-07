<h2>Viewing #<?php echo $item->id; ?></h2>

<p>
	<strong>Name:</strong>
	<?php echo $item->name; ?></p>
<p>
	<strong>Description:</strong>
	<?php echo $item->description; ?></p>
<p>
	<strong>Image:</strong>
	<?php echo $item->image; ?></p>
<p>
	<strong>Prize:</strong>
	<?php echo $item->prize; ?></p>

<?php echo Html::anchor('items/edit/'.$item->id, 'Edit'); ?> |
<?php echo Html::anchor('items', 'Back'); ?>
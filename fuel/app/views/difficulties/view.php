<h2>Viewing #<?php echo $difficulty->id; ?></h2>

<p>
	<strong>Name:</strong>
	<?php echo $difficulty->name; ?></p>
<p>
	<strong>Description:</strong>
	<?php echo $difficulty->description; ?></p>
<p>
	<strong>Image:</strong>
	<?php echo $difficulty->image; ?></p>

<?php echo Html::anchor('difficulties/edit/'.$difficulty->id, 'Edit'); ?> |
<?php echo Html::anchor('difficulties', 'Back'); ?>
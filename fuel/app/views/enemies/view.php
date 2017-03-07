<h2>Viewing #<?php echo $enemy->id; ?></h2>

<p>
	<strong>Name:</strong>
	<?php echo $enemy->name; ?></p>
<p>
	<strong>Description:</strong>
	<?php echo $enemy->description; ?></p>
<p>
	<strong>Image:</strong>
	<?php echo $enemy->image; ?></p>
<p>
	<strong>Health:</strong>
	<?php echo $enemy->health; ?></p>
<p>
	<strong>Attack:</strong>
	<?php echo $enemy->attack; ?></p>

<?php echo Html::anchor('enemies/edit/'.$enemy->id, 'Edit'); ?> |
<?php echo Html::anchor('enemies', 'Back'); ?>
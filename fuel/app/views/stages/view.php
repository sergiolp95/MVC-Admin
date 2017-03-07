<h2>Viewing #<?php echo $stage->id; ?></h2>

<p>
	<strong>Stages:</strong>
	<?php echo $stage->stages; ?></p>

<?php echo Html::anchor('stages/edit/'.$stage->id, 'Edit'); ?> |
<?php echo Html::anchor('stages', 'Back'); ?>
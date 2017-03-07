<h2>Editing Difficulty</h2>
<br>

<?php echo render('difficulties/_form'); ?>
<p>
	<?php echo Html::anchor('difficulties/view/'.$difficulty->id, 'View'); ?> |
	<?php echo Html::anchor('difficulties', 'Back'); ?></p>

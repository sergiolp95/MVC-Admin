<h2>Editing Stage</h2>
<br>

<?php echo render('stages/_form'); ?>
<p>
	<?php echo Html::anchor('stages/view/'.$stage->id, 'View'); ?> |
	<?php echo Html::anchor('stages', 'Back'); ?></p>

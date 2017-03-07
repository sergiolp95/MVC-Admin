<h2>Editing Enemy</h2>
<br>

<?php echo render('enemies/_form'); ?>
<p>
	<?php echo Html::anchor('enemies/view/'.$enemy->id, 'View'); ?> |
	<?php echo Html::anchor('enemies', 'Back'); ?></p>

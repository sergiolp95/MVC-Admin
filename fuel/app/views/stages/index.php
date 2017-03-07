<h2>Listing Stages</h2>
<br>
<?php if ($stages): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Id</th>
			<th>Stages</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($stages as $item): ?>		<tr>

			<td><?php echo $item->id; ?></td>
			<td><?php echo $item->stages; ?></td>
			<td>
				<?php echo Html::anchor('stages/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('stages/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('stages/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Stages.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('stages/create', 'Add new Stage', array('class' => 'btn btn-success')); ?>

</p>

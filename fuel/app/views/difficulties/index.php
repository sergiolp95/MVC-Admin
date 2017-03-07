<h2>Listing Difficulties</h2>
<br>
<?php if ($difficulties): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Description</th>
			<th>Image</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($difficulties as $item): ?>		<tr>

			<td><?php echo $item->id; ?></td>
			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->description; ?></td>
			<td><?php echo $item->image; ?></td>
			<td>
				<?php echo Html::anchor('difficulties/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('difficulties/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('difficulties/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Difficulties.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('difficulties/create', 'Add new Difficulty', array('class' => 'btn btn-success')); ?>

</p>

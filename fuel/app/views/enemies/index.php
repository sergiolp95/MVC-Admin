<h2>Listing Enemies</h2>
<br>
<?php if ($enemies): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Description</th>
			<th>Image</th>
			<th>Health</th>
			<th>Attack</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($enemies as $item): ?>		<tr>

			<td><?php echo $item->id; ?></td>
			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->description; ?></td>
			<td><?php echo $item->image; ?></td>
			<td><?php echo $item->health; ?></td>
			<td><?php echo $item->attack; ?></td>
			<td>
				<?php echo Html::anchor('enemies/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('enemies/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('enemies/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Enemies.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('enemies/create', 'Add new Enemy', array('class' => 'btn btn-success')); ?>

</p>

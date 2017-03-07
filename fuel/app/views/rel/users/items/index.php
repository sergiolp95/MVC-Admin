<h2>Listing Rel_users_items</h2>
<br>
<?php if ($rel_users_items): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Id</th>
			<th>Fk users</th>
			<th>Fk items</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($rel_users_items as $item): ?>		<tr>

			<td><?php echo $item->id; ?></td>
			<td><?php echo $item->fk_users; ?></td>
			<td><?php echo $item->fk_items; ?></td>
			<td>
				<?php echo Html::anchor('rel/users/items/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('rel/users/items/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('rel/users/items/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Rel_users_items.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('rel/users/items/create', 'Add new Rel users item', array('class' => 'btn btn-success')); ?>

</p>

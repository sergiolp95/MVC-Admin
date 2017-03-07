<h2>Listing Users</h2>
<br>
<?php if ($users): ?>
<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th>Id</th>
			<th>Username</th>
			<th>Password</th>
			<th>Email</th>
			<th>Image</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($users as $item): ?>		<tr>

			<td><?php echo $item->id; ?></td>
			<td><?php echo $item->username; ?></td>
			<td><?php echo $item->password; ?></td>
			<td><?php echo $item->email; ?></td>
			<td><?php echo $item->image; ?></td>
			<td>
				<?php echo Html::anchor('users/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('users/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('users/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Users.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('users/create', 'Add new User', array('class' => 'btn btn-success')); ?>

</p>

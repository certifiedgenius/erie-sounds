<?php
include(ROOT_PATH . '/views/partials/header.php');
?>

	<h1>Erie Sounds</h1>

	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Stage Name</th>
			<th>Birth Name</th>
			<th>Album's</th>
		</thead>
		<tbody>
			<?php foreach($users as $user): ?>
				<tr>
					<td>
						<?php echo $user->id; ?>
					</td>
					<td>
						<?php echo $user->getStageName(); ?>
					</td>
					<td>
						<?php echo $user->getBirthName(); ?>
					</td>
					<td>
						<a href="user.php?id=<?php echo $user->id; ?>" class="btn btn-primary">View &raquo;</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

<?php
include(ROOT_PATH . '/views/partials/footer.php');
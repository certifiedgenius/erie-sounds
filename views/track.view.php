<?php
include(ROOT_PATH . '/views/partials/header.php');
?>

	<h1><?php echo $user->getStageName(); ?></h1>

	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Artist</th>
			<th>Album</th>
			<th>Songs on the album</th>
		</thead>
		<tbody>
			<?php foreach($tracks as $track): ?>
				<tr>
					<td>
						<?php echo $track->id; ?>
					</td>
					<td>
						<?php echo $track->title; ?>
					</td>
					<td>
						<?php echo $track->user_id; ?>
					</td>
					<td>
						<a href="account.php?id=<?php echo $track->id; ?>&user_id=<?php echo $user_id; ?>" class="btn btn-primary">View &raquo;</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

<?php
include(ROOT_PATH . '/views/partials/footer.php');
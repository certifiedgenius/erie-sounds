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
			<?php foreach($accounts as $account): ?>
				<tr>
					<td>
						<?php echo $account->id; ?>
					</td>
					<td>
						<?php echo $account->artist; ?>
					</td>
					<td>
						<?php echo $account->album_name; ?>
					</td>
					<td>
						<a href="track.php?id=<?php echo $account->id; ?>&user_id=<?php echo $user_id; ?>" class="btn btn-primary">View &raquo;</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

<?php
include(ROOT_PATH . '/views/partials/footer.php');
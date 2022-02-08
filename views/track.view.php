<?php
include(ROOT_PATH . '/views/partials/header.php');
?>

	

	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Title</th>
			<th>Album</th>

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

					<?php foreach($accounts as $account): ?>

					<td>
						<?php echo $account->album_name; ?>
					</td>

					<?php endforeach; ?>

				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

<?php
include(ROOT_PATH . '/views/partials/footer.php');
	<h2>Clients</h2>
	<article>
		<table>
			<thead>
				<tr>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Phone</th>
					<th>Email</th>
					<th class="action">Action</th>
				</tr>
			</thead>
			<tbody>
<?php 
				foreach ($clients as $client) {
?>
				<tr>
					<td><?=$client["client_firstname"]?></td>
					<td><?=$client["client_lastname"]?></td>
					<td><?=$client["client_phonenumber"]?></td>
					<td><?=$client["client_email"]?></td>
					<td class="center">
						<a class="edit" href="<?= URL ?>client/edit/<?=$client["client_id"]?>">edit</a>
						<a href="<?= URL ?>client/delete/<?=$client["client_id"]?>">delete</a>
					</td>
				</tr>
<?php 
				}
?>
				<tr>
					<td colspan="5"><a href="<?= URL ?>client/create">Create</a></td>
				</tr>
			</tbody>
		</table>
	</article>
	<h2>Patiënts</h2>
	<article>
		<table>
			<thead>
				<tr>
					<th>Name</th>
					<th>Species</th>
					<th>Status</th>
					<th>Client</th>
					<th class="action" colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
<?php 
				foreach ($patients as $patient) {
?>
				<tr>
					<td><?=$patient["patient_name"]?></td>
					<td><?=$patient["species_description"]?></td>
					<td><?=$patient["patient_status"]?></td>
					<td><?=$patient["client_firstname"] . " " . $patient["client_lastname"]?></td>
					<td class="center">
						<a class="edit" href="<?= URL ?>patient/edit/<?=$patient["patient_id"]?>">edit</a>
						<a href="<?= URL ?>patient/delete/<?=$patient["patient_id"]?>">delete</a>
					</td>
				</tr>
<?php 
			}
?>
				<tr>
					<td colspan="6"><a href="<?= URL ?>patient/create">Create</a></td>
				</tr>
			</tbody>
		</table>
	</article>
	<h2>Species</h2>
	<article>
		<table>
			<thead>
				<tr>
					<th>Description</th>
					<th class="action" colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
<?php 
				foreach ($species as $specie) {
?>
				<tr>
					<td><?=$specie["species_description"]?></td>
					<td class="center">
						<a class="edit" href="<?= URL ?>species/edit/<?=$specie["species_id"]?>">edit</a>
						<a href="<?= URL ?>species/delete/<?=$specie["species_id"]?>">delete</a>
					</td>
				</tr>
<?php 
				}
?>
				<tr>
					<td colspan="3"><a href="<?= URL ?>species/create">Create</a></td>
				</tr>
			</tbody>
		</table>
		</article>
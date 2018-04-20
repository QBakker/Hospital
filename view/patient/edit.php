<article>
	<h1>Edit Patiënt:</h1>
	<form action="<?= URL ?>patient/editSave/<?= $patient["patient_id"]?>" method="POST">

	<input class="text" type="hidden" name="id" value="<?= $patient["patient_id"]?>">
	<label>Name:</label>
	<input class="text" type="text" name="name" value="<?= $patient["patient_name"]?>">
	<label>Species:</label>
		<select name="species" value="<?=$species["species_description"]?>">
<?php 
		foreach ($species as $specie) {
?>
		<option value="<?=$specie["species_id"]?>" <?php if ($specie['species_id'] === $patient['species_id']) { echo "selected"; } ?>><?=$specie["species_description"]?></option>

<?php
		}
?>
	</select>
	<label>Status:</label>
	<input class="text" type="text" name="status" value="<?= $patient["patient_status"]?>">
	<label>Client:</label>
	<select name="client" value="<?=$client["client_firstname"]?> <?=$client["client_lastname"]?>">
<?php 
		foreach ($clients as $client) {
?>
		<option value="<?=$client["client_id"]?>" <?php if ($client['client_id'] === $patient['client_id']) { echo "selected"; } ?>><?=$client["client_firstname"]?> <?=$client["client_lastname"]?></option>
<?php
		}
?>
	</select>
	<input class="add" type="submit">
	</form>
</article>
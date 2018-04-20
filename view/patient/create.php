<article>
<h1>New Patiënt:</h1>
<form action="<?= URL ?>patient/createSave" method="POST">

	<label>Name:</label>
	<input class="text" type="text" name="name">
	<label>Species:</label>
	<select name="species">
		<option value="" selected disabled hidden>Choose here</option>
<?php 
		foreach ($species as $specie) {
?>
		<option value="<?=$specie["species_id"]?>"><?=$specie["species_description"]?></option>

<?php
		}
?>
	</select>
	<label>Status:</label>
	<input class="text" type="text" name="status">
	<label>Client:</label>
	<select name="client">
		<option value="" selected disabled hidden>Choose here</option>
<?php 
		foreach ($clients as $client) {
?>
		<option value="<?=$client["client_id"]?>"><?=$client["client_firstname"]?> <?=$client["client_lastname"]?></option>
<?php
		}
?>
	</select>
	<input class="add" type="submit">
</form>
</article>
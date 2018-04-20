<article>
	<h1>Edit Species:</h1>
	<form action="<?= URL ?>species/editSave/<?= $specie["species_id"]?>" method="POST">

	<input type="hidden" name="id" value="<?= $specie["species_id"]?>">
	<label>Description:</label>
	<input class="text" type="text" name="description" value="<?= $specie["species_description"]?>">

	<input class="add" type="submit">
	</form>
</article>
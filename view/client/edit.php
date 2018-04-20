<article>
	<h1>Edit Client:</h1>
	<form action="<?= URL ?>client/editSave/<?=$client["client_id"]?>" method="POST">

	<input type="hidden" name="id" value="<?=$client["client_id"]?>">
	<label>Firstname:</label>
	<input class="text" type="text" name="firstname" value="<?=$client["client_firstname"]?>">
	<label>Lastname:</label>
	<input class="text" type="text" name="lastname" value="<?=$client["client_lastname"]?>">
	<label>Mobile number:</label>
	<input class="text" type="tel" name="phonenumber" value="<?=$client["client_phonenumber"]?>" maxlength="10">
	<label>Email adress:</label>
	<input class="text" type="email" name="email" value="<?=$client["client_email"]?>">

	<input class="add" type="submit">
	</form>
</article>
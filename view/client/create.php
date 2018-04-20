<article>
<h1>New Client:</h1>
<form action="<?= URL ?>client/createSave" method="POST">

	<label>First Name:</label>
	<input class="text" type="text" name="firstname">
	<label>Last Name:</label>
	<input class="text" type="text" name="lastname">
	<label>Phonenumber:</label>
	<input class="text" type="tel" name="phonenumber" maxlength="10">
	<label>Email:</label>
	<input class="text" type="email" name="email">
	<input class="add" type="submit">
</form>
</article>
<!DOCTYPE html>
<html>
<head>
    <title>PHP and Checkboxes</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>

<body>
<form action="winners.php" method="post">
<fieldset>
	<legend>Which of the following countries have won the world cup?</legend>
	<label for="brazil">Brazil</label>
	<input type="checkbox" name="winners[]" value="Brazil" id="brazil">
	<label for="portugal">Portugal</label>
	<input type="checkbox" name="winners[]" value="Portugal" id="portugal">
	<label for="uraguay">Uruguay</label>
	<input type="checkbox" name="winners[]" value="Uruguay" id="uruguay">
	<label for="england">England</label>
	<input type="checkbox" name="winners[]" value="England" id="england">
	<label for="netherlands">Netherlands</label>
	<input type="checkbox" name="winners[]" value="Netherlands" id="netherlands">
	<label for="argentina">Argentina</label>
	<input type="checkbox" name="winners[]" value="Argentina" id="argentina">
</fieldset>
<input type="submit" name="submit_btn">
</form>

</body>
</html>

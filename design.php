<!-- /*Sole Search Year 2 Web Progrmamming Assignment 1 -->

<!-- /*---___---___---___---___---*/
/*---___---___---___---___---*/
/* PHP*/
/*---___---___---___---___---*/
/*---___---___---___---___---*/ -->

<?php
try{
    $conn = new PDO('mysql:host=localhost;dbname=Assign_1', 'u1774692', '10dec74');
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $exception) 
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}
?>













<!-- /*---___---___---___---___---*/
/*---___---___---___---___---*/
/* HTML*/
/*---___---___---___---___---*/
/*---___---___---___---___---*/ -->

<!DOCTYPE HTML>
<html>
<head>
	<title>Sole Search, For Sneakerheads</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Libre+Barcode+128+Text" rel="stylesheet">
		<!-- <link rel="stylesheet" type="text/css" href="css/sole_search.css"> -->
</head>
<body>	
		<header>
		<a href="assign.php"><button>sole search<button></a>
		<div id="blank"></div>
		<a href="design.php"><button>design</button></a>
		<a href="details.php"><button>details</button></a>
		</header>

	<?php
echo "<table>";
echo "<tr><th>id</th><th>Brand</th></tr>";
foreach ($brand as $brand){

	echo "<tr>";
	echo "<td>{$brand['id']}</td>";
	echo "<td>{$brand['brand']}</td>";
	echo "<tr>";
}
echo "</table>"

?>
<section>
		<img src="images/Sneakers_Class.png">
</section>

</body>
</html>


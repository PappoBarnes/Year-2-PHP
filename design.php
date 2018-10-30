
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
//select all the Brands
$query = "SELECT * FROM brands";
$resultset = $conn->query($query);
$brands = $resultset->fetchAll();
//select all the Models
$queryModel = "SELECT * FROM models";
$resultsetModel = $conn->query($queryModel);
$models = $resultsetModel->fetchAll();
//select all the Styles
$queryStyles = "SELECT * FROM styles";
$resultsetStyle = $conn->query($queryStyles);
$styles = $resultsetStyle->fetchAll();
//select all the Shoes
$queryShoes = "SELECT * FROM shoes";
$resultsetShoes = $conn->query($queryShoes);
$shoes = $resultsetShoes->fetchAll();
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
		<link rel="stylesheet" type="text/css" href="style.css">
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


<section>
		<img src="images/Sneakers_Class.png">
</section>

<section>

	<!-- /* Brands TABLE */ -->

<?php
echo "<table>";
echo "<tr><th>id</th><th>Brands</th></tr>";
foreach ($brands as $brand){
	echo "<tr>";
	echo "<td>{$brand['id']}</td>";
	echo "<td>{$brand['brand']}</td>";
	echo "<tr>";
}
echo "</table>";
echo "<br>";
?>

<!-- /* Models TABLE */ -->

<?php
echo "<table>";
echo "<tr><th>id</th><th>Models</th><th>Brand ID</th></tr>";
foreach ($models as $model){
	echo "<tr>";
	echo "<td>{$model['id']}</td>";
	echo "<td>{$model['model']}</td>";
	echo "<td>{$model['brand_id']}</td>";
	echo "<tr>";
}
echo "</table>";
echo "<br>";
?>

<!-- /* Styles TABLE */ -->

<?php
echo "<table>";
echo "<tr><th>id</th><th>Styles</th><th>Model ID</th></tr>";
foreach ($styles as $style){
	echo "<tr>";
	echo "<td>{$style['id']}</td>";
	echo "<td>{$style['style']}</td>";
	echo "<td>{$style['model_id']}</td>";
	echo "<tr>";
}
echo "</table>";
echo "<br>";
?>

<!-- /* Styles TABLE */ -->

<?php
echo "<table>";
echo "<tr><th>id</th><th>Style ID</th><th>Name</th><th>Description</th><th>Image</th></tr>";
foreach ($shoes as $shoe){
	echo "<tr>";
	echo "<td>{$shoe['id']}</td>";
	echo "<td>{$shoe['style_id']}</td>";
	echo "<td>{$shoe['name']}</td>";
	echo "<td>{$shoe['description']}</td>";
	echo "<td><img src={$shoe['image']}></td>";
	echo "<tr>";
}
echo "</table>";
echo "<br>";
?>
</section>

</body>
</html>


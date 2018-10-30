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
//the search term the user entered
$searchTerm=$_GET['search'];
//Need to use a LIKE for fuzzy matching just like in previous weeks 
$stmt = $conn->prepare("SELECT brands.brand,models.model,styles.style,shoes.name,shoes.description,shoes.image

FROM brands
INNER JOIN models ON models.brand_id = brands.id
INNER JOIN styles ON styles.model_id = models.id 
INNER JOIN shoes ON shoes.style_id = styles.id

WHERE shoes.name=:searchTerm");

$stmt->bindValue(":searchTerm","%{$searchTerm}%");
$stmt->execute();
$shoes = $stmt->fetchAll();
$conn=NULL;
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
		
		<a href="assign.php"><button>sole search</button></a>
		<div id="blank"></div>
		<a href="design.php"><button>design</button></a>
		<div id="blank"></div>
		<!-- <a href="details.php"><button>details</button></a> -->
</header>
<?php
 if($shoes){
	foreach ($shoes as $shoe) 
	// loop over the array shoes
	    echo "<p>";
	    echo "<a href='details.php?id={$shoe['name']}'>";
	    echo "{$shoe['name']}";
		echo "<img src={$shoe['image']}>";
		echo "</a>";
	    echo "</p>";
	}else{

		echo "No Records for that shoe";
	}
?>	





</body>
</html>
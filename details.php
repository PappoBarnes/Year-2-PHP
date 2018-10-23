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
$stmt = $conn->prepare("SELECT * FROM brands WHERE brand LIKE :searchTerm");
$stmt->bindValue(":searchTerm","%{$searchTerm}%");
$stmt->execute();
$brands = $stmt->fetchAll();
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
		
		<a href="assign.php"><button>sole search</button></a>
		<div id="blank"></div>
		<a href="design.php"><button>design</button></a>
		<a href="details.php"><button>details</button></a>
</header>
	
	


<?php
foreach ($brands as $brand) {
	echo "<p>{$brand['brand']}</p>";
}
?>
		

</body>
</html>
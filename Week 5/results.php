
<?php
try{
    $conn = new PDO('mysql:host=localhost;dbname=u1774692', 'u1774692', '10dec74');
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $exception) 
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}

//the search term the user entered

$searchTerm=$_GET['search'];


//Need to use a LIKE for fuzzy matching just like in previous weeks 

$stmt = $conn->prepare("SELECT * FROM films WHERE title LIKE :searchTerm");
$stmt->bindValue(":searchTerm","%{$searchTerm}%");
$stmt->execute();
$films = $stmt->fetchAll();

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Search results</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<?php
foreach ($films as $film) {
    echo "<p>{$film["title"]}</p>";
}
?>
</body>
</html>
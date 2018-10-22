<?php
try{
       $conn = new PDO('mysql:host=localhost;dbname=u1774692', 'u1774692', '10dec74');
       $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $exception) 
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}
//select all the films
$query = "SELECT * FROM films";
$resultset = $conn->query($query);
$films = $resultset->fetchAll();
$conn=NULL;



?>


<!DOCTYPE HTML>
<html>
<head>
<title>List the films</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
	<p><a href="index.php"><<< Home</a></p>
	<h1>A Browseable List</h1>
<?php
//add a foreach loop here to display the films
foreach ($films as $film){
    echo "<p>";
    echo "<a href='details.php?id={$film["id"]}'>";
    echo "{$film['title']}";
    	echo "</a>";
    echo "</p>";
}
?>
</body>
</html>
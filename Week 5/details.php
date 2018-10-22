
<?php
try{
       $conn = new PDO('mysql:host=localhost;dbname=u1774692', 'u1774692', '10dec74');
}
catch (PDOException $exception) 
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}
//the id from the query string e.g. details.php?id=4
$filmId=$_GET['id']; 
//prepared statement uses the id to select a single student
$stmt = $conn->prepare("SELECT * FROM films WHERE films.id = :id");
$stmt->bindValue(':id',$filmId);
$stmt->execute();
$film=$stmt->fetch();
$conn=NULL;
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Display the details for a student</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<p><a href="pod_wk5.php"><<< Back to list</a></p>
<h1>A Details View Example</h1>
<?php
//simple validation to see if we found a student
if($film){
	echo "<h1>".$film['title']." ".$film['duration']."</h1>";
}
else
{
	echo "<p>Can't find any film records.</p>";
}
?>
</body>
</html>
<?php
$name;
$location;
$genre;
$errors=false;
$errMsg="";
$results=[];
$submitted=false;

$bands=[
    ["name"=>"The Rolling Stones", "formed"=>1962, "location"=>"London","genre"=>"Rock"],
    ["name"=>"The Beatles", "formed"=>1960, "location"=>"Liverpool","genre"=>"Rock"],
    ["name"=>"The Wu-Tang Clan", "formed"=>1992, "location"=>"New York","genre"=>"Hip-hop"],
    ["name"=>"Oasis", "formed"=>1989, "location"=>"Madchester","genre"=>"Indie"]
];


if(isset($_POST['submit_btn'])){
    $submitted=true;
    // if (isset($_POST['genre'])){
    //     $genre=$_POST['$genre'];
}



?>

<!DOCTYPE HTML>
<html>
<head>
<title>Loops, Arrays and Strings</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>


<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
<fieldset>
<label for="location">Choose a Location:</label><input type="text" name="location" id="location">
</fieldset>

<fieldset>
<label for="genre">Choose a Genre:</label>
<select id="genre" name="genre">
<option <?php if($genre=="Rock") echo "selected"; ?>value="Rock">Rock</option>
<option <?php if($genre=="Hip-hop") echo "selected"; ?>value="Hip-hop">Hip-hop</option>
<option <?php if($genre=="Rock") echo "selected"; ?>value="Indie">Indie</option>
</select>
</fieldset>

<fieldset>
<input type="submit" name="submitBtn" value="Search">
</fieldset>
</form>


</body>
</html>
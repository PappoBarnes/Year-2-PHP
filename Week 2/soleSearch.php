<?php
$name;
$brand;
$color;
$material;
$
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

// Test the submit button before used....
if(isset($_POST['submit_btn'])){
    $submitted=true;
    // if (isset($_POST['genre'])){
    //     $genre=$_POST['$genre'];
}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Sole Search</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
<fieldset>
<label for="search">Get some heat:</label><input type="text" name="search" id="brand">
</fieldset>

<fieldset>
<label for="brand">Brand:</label>
<select id="brand" name="model">
<option <?php if($brand=="Nike") echo "selected"; ?>value="Nike">Nike</option>
<option <?php if($brand=="Adidas") echo "selected"; ?>value="Adidas">Adidas</option>
<option <?php if($brand=="New Balance") echo "selected"; ?>value="New Balance">New Balance</option>
<option <?php if($brand=="Asics") echo "selected"; ?>value="Asics">Asics</option>
</select>
</fieldset>

<fieldset>
<input type="submit" name="submitBtn" value="Search">
</fieldset>
</form>


</body>
</html>
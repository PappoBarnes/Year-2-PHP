<!DOCTYPE HTML>
<html>
<head>
<title>Loops, Arrays and Strings</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<?php


// Q1) Loops


// a) Modify the following code so that the loop outputs the numbers 5-15
for($i=5;$i<=15;$i++)
{
    echo "{$i}<br>";
}
?>
<br>
<!-- // b) Re-write the loop as a while loop -->
<?php
$counter=5;
while ($counter<=15){
	echo "{$counter}<br>";
	$counter++;
}
?>
<br>
<!-- // Q2) Arrays
// a) Output the entire contents of the $countries array using a print_r() statement -->


<?php
$countries=["China","India","USA","Indonesia","Brazil","Pakistan"];
print_r($countries); // prints the array of countries.

 // b) Using this array, write a single  echo statement that outputs 'China, India, Indonesia and Pakistan are all in Asia' -->

?>
<br>
<?php
$countries=["China","India","USA","Indonesia","Brazil","Pakistan"];
echo"{$countries} are all located in asia.";
?>


<!-- // c) Output the entire contents of the array as an HTML list using a foreach loop -->
<?php
$countries=["China","India","USA","Indonesia","Brazil","Pakistan"];
foreach ($countries as $country)
{
	echo "<li>{$country}</li>";
}

?>


<?php

// d) Uncomment the line that declares the $moreCountries array. Join the two arrays together  Do some research using php.net
// http://php.net/manual/en/function.array-merge.php. Output the joined array using a print_r() statement.

$moreCountries=["Nigeria","Bangladesh","Russia","Japan"];
$countries=["China","India","USA","Indonesia","Brazil","Pakistan"];
$fullList= array_merge($countries, $moreCountries);
print_r($fullList);

?>
<br>
<?php

// e) Sort this larger list of countries into reverse alphabetical order (do some research into sorting functions) and output the result using a foreach loop.
$moreCountries=["Nigeria","Bangladesh","Russia","Japan"];
$countries=["China","India","USA","Indonesia","Brazil","Pakistan"];
$fullList= array_merge($countries, $moreCountries);
rsort($fullList);
print_r($fullList);

?>

<br>

<?php

// Q3) Associative Arrays
// a) Using the $bands array, write an echo statement that outputs 'The Wu-Tang Clan were formed in 1992'
$bands=[
    ["name"=>"The Rolling Stones", "formed"=>1962, "location"=>"London","genre"=>"Rock"],
    ["name"=>"The Beatles", "formed"=>1960, "location"=>"Liverpool","genre"=>"Rock"],
    ["name"=>"The Wu-Tang Clan", "formed"=>1992, "location"=>"New York","genre"=>"Hip-hop"],
];

echo $bands[2]["name"];
echo " were formed in " .$bands[2]["formed"];
echo " ";
echo $bands[2]["location"];
echo "<br>";
?>
<br>
<!-- // b) Add another band to the array, using an echo statement, output some of new the band's details

// d) Output the data from (c) using an HTML table. -->

<?php
$bands=[
    ["name"=>"The Rolling Stones", "formed"=>1962, "location"=>"London","genre"=>"Rock"],
    ["name"=>"The Beatles", "formed"=>1960, "location"=>"Liverpool","genre"=>"Rock"],
    ["name"=>"The Wu-Tang Clan", "formed"=>1992, "location"=>"New York","genre"=>"Hip-hop"],
    ["name"=>"Notorious BIG", "formed"=>1989, "location"=>"Brooklyn","genre"=>"Hip-hop"]
];
// c) Using a foreach loop display the details for all the bands
echo $bands[3]["name"];

foreach($bands as $band){
	echo "<p>";
	echo $band["name"] ." were formed in " .$band["formed"] ." they originate from ".$band["location"] ." the genre is ".$band["location"];
	echo "</p>";
	 
}
// d) Output the data from (c) using an HTML table. -->

echo "<table>";
echo "<tr><th>Name</th><th>Year</th><th>City</th><th>Genre</th></tr>";
foreach($bands as $band)
{
	echo "<tr>";
	echo "<td>".$band["name"]."</td>";
	echo "<td>".$band["formed"]."</td>";
	echo "<td>".$band["location"]."</td>";
	echo "<td>".$band["genre"]."</td>";
	echo "</tr>";
	 
}
echo "</table>";

?>

<!-- 
// // 
// Q4) Strings



// d) Use the substr() (http://php.net/manual/en/function.substr.php) function to output the word 'Web'
// */ -->

<!-- // a) Using the following string, write an echo statement that outputs the fifth character in the string -->
<?php
$moduleStr="CIT2318 Web Design and Programming";
echo ($moduleStr[3]);
echo "<br>";
// b) Use the strlen() (http://php.net/manual/en/function.strlen.php) function to output the length of the string
echo strlen($moduleStr);
// c) Convert the string to lowercase (http://php.net/manual/en/function.strtolower.php) and output it.
echo "<br>";
echo strtolower($moduleStr);
// d) Use the substr() (http://php.net/manual/en/function.substr.php) function to output the word 'Web'
echo "<br>"
?>
<?php
$moduleStr = substr("CIT2318 Web Design and Programming", 8, -22);
echo ($moduleStr);
?>

</body>
</html>

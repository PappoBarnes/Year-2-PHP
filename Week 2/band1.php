<?php
$bands=[
    ["name"=>"The Rolling Stones", "formed"=>1962, "location"=>"London","genre"=>"Rock"],
    ["name"=>"The Beatles", "formed"=>1960, "location"=>"Liverpool","genre"=>"Rock"],
    ["name"=>"The Wu-Tang Clan", "formed"=>1992, "location"=>"New York","genre"=>"Hip-hop"],
    ["name"=>"Oasis", "formed"=>1989, "location"=>"Madchester","genre"=>"Indie"]

];
echo $bands[]; //outputs  66000000


?>

<?php
foreach($bands as $band)
{

    echo "<p>{$band['name']} is from {$band['location']}</p>";
}
?>
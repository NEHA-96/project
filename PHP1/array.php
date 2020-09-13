<?php

$chock=array("dairy milk","kit kat");

for($i=0;$i<count($chock);$i++)
{
    echo $chock[$i]."<br/>";
}

echo "<hr/>";
//sort($chock); // Ascending
rsort($chock); // Descending
foreach($chock as $s){
    echo $s . "<br/>";
}
echo "<hr/>";
echo "<hr/>";

$choclates_price = array("Coffee Bite" => 1, "Ferrero Roche" => 180);
$choclates_price["Dairy Milk"] = 125;
$choclates_price["Kit Kat"] = 80;
$choclates_price["Milky Bar"] = 40;

//echo $choclates_price[0];

//echo "<Br/>" . " price of dairy milk is ". $choclates_price["Dairy Milk"];
//asort($choclates_price); //Ascending value sorting
//arsort($choclates_price);//Descending value sorting
//ksort($choclates_price); // Ascending key sorting
krsort($choclates_price); // Descending key sorting

foreach($choclates_price as $name => $price){
    echo "<br/> " . $name . " costs " . $price . "Rs."; 
}

?>
<?php
$note8 = $_POST["note8"];
$iphonex = $_POST["iphonex"];
$iphone8p = $_POST["iphone8p"];
$iphone8 = $_POST["iphone8"];
$mix2 = $_POST["mix2"];


$shipping = $_POST["ship"];
$username = $_POST["username"];
$password = $_POST["password"];

$note8pp = 930*$note8;
$iphonexpp = 999*$iphonex;
$iphone8ppp = 799*$iphone8p;
$iphone8pp = 599*$iphone8;
$mix2pp = 450*$mix2;

$shippingSub = 0;
echo '<link rel="stylesheet" type="text/css" href="exe3.css">';
echo "<script type='text/javascript'>alert('Hello, $username. Your password is: $password');</script>";
if($shipping == "overnight")
{
	$shippingSub = 50;
}
else if($shipping == "free")
{
	$shippingSub = 0;
}
else if($shipping == "three day")
{
	$shippingSub = 5;
}
$totalCost = $note8pp + $iphonexpp + $iphone8ppp + $iphone8pp + $mix2pp + $shippingSub;
echo '<table class = outputForm>';
echo '<tr><td></td><td>Quantity</td><td>Cost Per Item</td><td>Sub Total</td></tr>';
echo '<tr><td>Note8</td><td class = specialCells>'.$note8.'</td><td class = specialCells>$930.00</td><td class = specialCells>$'.$note8pp.'.00</td></tr>';
echo '<tr><td>iPhoneX</td><td class = specialCells>'.$iphonex.'</td><td class = specialCells>$999.00</td><td class = specialCells>$'.$iphonexpp.'.00</td></tr>';
echo '<tr><td>iPhone8Plus</td><td class = specialCells>'.$iphone8p.'</td><td class = specialCells>$799.00</td><td class = specialCells>$'.$iphone8ppp.'.00</td></tr>';
echo '<tr><td>iPhone8</td><td class = specialCells>'.$iphone8.'</td><td class = specialCells>$599.00</td><td class = specialCells>$'.$iphone8pp.'.00</td></tr>';
echo '<tr><td>Mix2</td><td class = specialCells>'.$mix2.'</td><td class = specialCells>$450.00</td><td class = specialCells>$'.$mix2pp.'.00</td></tr>';
echo '<tr><td>Shipping</td><td colspan = 2 class = specialCells>'.$shipping.'</td><td class = specialCells>$'.$shippingSub.'.00</td></tr>';
echo '<tr><td colspan = 3>Total Cost</td><td>$'.$totalCost.'.00</td></tr>';
echo '</table>';
?>
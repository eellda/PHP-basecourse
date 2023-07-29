<?php

$name = "Bro Code";
$food = "Chiken";
$eamil = "test@gmail.com";
$age = 24;
$quantity = 3;
$gpa = 2.5;
$price = 4.99;
$tex_rate = 5.1;
$employed = true;
$online = true;
$for_sale = true;
$total = null;

//echo $name;
echo "hello {$name}<br>";
echo "do you like {$food}?<br>";
echo "your Email is {$eamil} right?<br>";
echo "i'm {$age} years old.<br>";
echo "my gpa is {$gpa}<br>";
echo "your pizza is \${$price}<br>";
echo "this tex sales is: {$tex_rate}%<br>";
echo "online status: {$online}<br>";

echo "you have ordered {$quantity} x {$food}s <br>";
$total = $quantity * $price;
echo "your total is: \${$total}<br>";

?>
<?php

// Stirng
$name = "Anders";
$food = "Pizza";
$email ="Hej@hej.dk";

//Int
$age = 36;
$users = 3; 
$quantity = 2; 

//Float
$gpa = 2.5; 
$price = 99.99;
$sales_rate = 5.1;

//booleans 
$employed = true; 
$online = false; 
$for_sale = true;


//math

$total = null;

//echo $name; 

//String
echo "Hej jeg hedder {$name} og jeg er {$age} år gammel<br>";
echo "Kan du lide pizza {$name}? Når du er {$age} år gammel <br>";
echo "Du kan bestille en pizza, hvis du giver mig din {$email} <br>";
echo "Det er spændene om du kan lide pizza når du er {$age} år gammel :) <br>";

//int
echo "Der er {$users} online <br>";
echo "Du kan lide at købe {$quantity} ting <br>";

//Float
echo "Din gpa er: {$gpa} <br>";
//husk backslash ved dollar tegn.
echo "Din pizza koster \${$price}";
echo "The sales tax rate is {$sales_rate}% <br>";

//boolean vises ikke ved false;  
echo "Online status: {$online} <br>";
echo "der er {$employed} ansatte <br>";


//math
echo "du har bestilt {$quantity} x {$food}s <br>";
$total = $quantity * $price; 
echo "Your total is: \${$total}";



?>
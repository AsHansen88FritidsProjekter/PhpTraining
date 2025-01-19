<?php

// logical operators = combine conditional statements 
//if (condition1 && condition 2)

// && True if Both conditions are true
// || = True if at least one condition is true
// ! = True if false. False if true


//Example, Tempeture

/*
$temp = -25; 

if($temp >= 0 && $temp <= 30){
  echo "The weather is good.";
}
else {
  echo "The weather is bad."; 
}
*/


/*

$temp = -10;

if($temp <0 || $temp >30){
  echo "The weather is bad";
}

else {
  echo "The weather is good";
}


*/ 

$temp = 15;
$cloudy = false; 

if($temp < 0 || $temp > 30){
  echo "The weather is bad <br>";
}
else {
  echo "The weather is good <br>";
}

/*
if($cloudy){
  echo "Its cloudy";

}else{

  echo "The weather is good.<br>";
  
}
*/
if(!$cloudy) {
  echo "Its sunny :)";
} 
else {
  echo "It's cloudy";
} 


?>
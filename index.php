<?php
/*
    $age = 101; 

    if($age >= 18) {
        echo "you may enter";
    }

    elseif($age <= 0){
        echo "that is not valid age";

    }

    elseif($age <= 100) {
        echo "You are to old to enter this site";
    }


    else{
       echo "you must be atleast 18 years old to enter";
    }
  */
  

  /*
  $adult = true; 

  if($adult == true)
  echo "You may enter";

  else{
    echo "You must be an adult to enter"; 
}
*/

 //Excerzie 

  $hours = 50; 
  $rate = 15;
  $weekley_pay = null;

  if($hours <= 0) {
    $weekley_pay = 0;
  }

  elseif($hours <= 40){
   
    $weekley_pay = $hours * $rate; 
     
  }
    else{
      $weekley_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
    }


  echo "You made \${$weekley_pay} this week"; 




?>
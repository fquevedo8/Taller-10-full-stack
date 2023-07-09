<?php
  
  $result = 0;

 if (isset($_POST["age_number"]))  {
    


  $ageNumber = intval($_POST["age_number"]);

  if ($ageNumber >= 18) {
    $result = "Es mayor de edad";
  } 
  else {
    $result = "No es mayor de edad";
  }

 }

?>
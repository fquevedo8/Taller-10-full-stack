<?php
  
  $result = 0;
  $age = 0;

 if (isset($_POST["birth_date"]))  {
    
  

  $birthDate = date($_POST["birth_date"]);
  $currenDate = date("d-m-Y");
  $birth = new DateTime($birthDate);
  $curren = new DateTime($currenDate);
  $difference = $curren->diff($birth);
  $age = $difference->format('%Y');


  if ($age >= 18 ) {
    $result = "Es mayor de edad";
  } 
  else {
    $result = "No es mayor de edad";
  }

 }

?>
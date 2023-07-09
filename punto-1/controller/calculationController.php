<?php
  $firstNumber = $_POST["first_number"];
  $secondNumber = $_POST["second_number"];
  $operationType = $_POST["operation_type"];

  $result = 0;

  switch ($operationType) {
    case '1':
        $result = $firstNumber + $secondNumber;
        break;
    case '2':
        $result = $firstNumber - $secondNumber;
        break;
    case '3':
        $result = $firstNumber * $secondNumber;
        break;
    case '4':
        $result = $firstNumber / $secondNumber;
        break;
    
    default:
        echo "No eligio una opción correcta";
        break;
  }


?>
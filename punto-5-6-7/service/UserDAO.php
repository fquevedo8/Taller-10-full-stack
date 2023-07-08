<?php
include "connection.php";

function getAllUsers() {
    return mysqli_query(CONNECTION,"SELECT * FROM usuarios");
}

function getUserByIdNumber($idNumbet){
    return mysqli_query(CONNECTION,"SELECT * FROM usuarios WHERE cedula = $idNumber");
}



 //print_r(mysqli_fetch_all($query, MYSQLI_ASSOC));
?>
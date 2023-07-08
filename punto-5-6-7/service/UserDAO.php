<?php
include "connection.php";

function createUserBD($user) {
    $query = "INSERT INTO
    usuarios (nombre, apellido, cedula) VALUES (";
    $query .= "'".$user->nombre."',";
    $query .= "'".$user->apellido."',";
    $query .= "'".$user->cedula."',";
    return mysqli_query(CONNECTION, $query);
}

function getAllUsers() {
    return mysqli_query(CONNECTION,"SELECT * FROM usuarios");
}

function getUserByIdNumber($idNumbet){
    return mysqli_query(CONNECTION,"SELECT * FROM usuarios WHERE cedula = $idNumber");
}


 //print_r(mysqli_fetch_all($query, MYSQLI_ASSOC));
?>
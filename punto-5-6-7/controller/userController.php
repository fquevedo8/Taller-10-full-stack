<?php
  include "./service/UserDAO.php";
  include "./model/User.php";

  if (isset($_POST["name"]) && 
      isset($_POST["lastName"]) &&
      isset($_POST["idNumber"])) {
    createUser();
      }

  function getUsers() {
    $usersQuery = getAllUsers();
    $users = array();

    while($row = mysqli_fetch_assoc($usersQuery)) {
      $user = new User(
        $row["id"],
        $row["nombre"],
        $row["apellido"],
        $row["cedula"],
      );
      $userList[] = $user;
    }
    return $userList;
  }
  function createUser() {
    $name = $_POST["name"];
    $lastName = $_POST["lastName"];
    $idNumber = $_POST["idNumber"];

    $user = new User(
        null,
        $name,
        $lastName,
        $idNumber
    );
    return createUserBD($user);
  }
?>
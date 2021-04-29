<?php
ob_start();
session_start();

include "connection.php";

if (isset($_POST['login'])) {

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $userName = $_POST['userName'];
    $password = $_POST['password'];

    $query = $db->prepare("SELECT * FROM users where F_NAME=:firstName and L_NAME=:lastName and USERNAME=:userName and password=:pass");
    $query->execute(array(
        'firstName' => $firstName,
        'lastName' => $lastName,
        'userName' => $userName,
        'pass' => $password
    ));

    echo $isUser = $query->rowCount();

    if ($isUser == 1) {

        $_SESSION['userName'] = $userName;
        header("Location:../home.php");
        exit;
    } else {

        header("Location:../login.php?status=no");
        exit;
    }
}

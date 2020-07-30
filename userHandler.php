<?php
include "./users.php";
if (isset($_POST['submit'])) {
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $users = new Users();
    $users->executeReg($fname, $lname, $email, $password, "admin");
}


if (isset($_POST['submit_login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $users = new Users();
    $users->executeLogin($email, $password);
}

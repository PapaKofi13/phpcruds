<?php
require './userHandler.php';



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .form_container {
            width: 60%;
            height: 400px;
            margin: auto;
            background-color: cornflowerblue;
            padding-top: 20px;
            margin-bottom: 40px;
            text-align: center;
        }

        .form_container2 {
            text-align: center;
            width: 60%;
            height: 400px;
            margin: auto;
            background-color: grey;
            padding-top: 20px;
        }

        input {
            display: block;
            margin: auto;
            margin-top: 20px;
            width: 50%;
            height: 40px;
        }
    </style>

    <title>Document</title>
</head>

<body>
    <!-- REGISTER -->
    <div class="form_container">
        <h2>REGISTER</h2>
        <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="post">
            <input type="text" name="first_name" placeholder="First Name">
            <input type="text" name="last_name" placeholder="Last Name">
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="Register" name="submit">
        </form>

    </div>
    <!-- LOGIN FORM -->
    <div class="form_container2">
        <h2>LOGIN</h2>
        <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="post">
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="Login" name="submit_login">
        </form>
    </div>
</body>

<div class="form_container2">
    <h2>Add Report</h2>
    <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="post">
        <input type="text" name="id" placeholder="VolumeID">
        <input type="text" name="Report_id" placeholder="Report_id">
        <input type="text" name="Report_title" placeholder="Report_title">
        <input type="text" name="Report_summary" placeholder="Report_summary">
        <input type="text" name="Report_highlights" placeholder="Report_highlights">
        <input type="text" name="Report_this_issue" placeholder="Report_this_issue">
        <input type="text" name="Report_date" placeholder="Report_date">
        <input type="text" name="Report_description" placeholder="Report_description">
        <input type="text" name="Report_authors" placeholder="Report_authors">
        <input type="submit" value="Add" name="add_report">
    </form>
</div>

<div class="form_container2">
    <h2>Add Volume</h2>
    <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="post">
        <input type="text" name="Volume_id" placeholder="Volume_id">
        <input type="text" name="Volume_title" placeholder="Volume_title">
        <input type="text" name="Volume_year" placeholder="Volume_year">
        <input type="text" name="Volume_description" placeholder="Volume_description">
        <input type="submit" value="Add" name="add_volume">
    </form>
</div>

</body>

</html>
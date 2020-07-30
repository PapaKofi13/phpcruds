<?php
include_once "./users.php";
include_once "./volume.php";
include_once "./report.php";

//////// REGISTER /////////////
if (isset($_POST['submit'])) {
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $users = new Users();
    $users->executeReg($fname, $lname, $email, $password, "admin");
}


//////////////// LOGIN /////////////////
if (isset($_POST['submit_login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $users = new Users();
    $users->executeLogin($email, $password);
}


/////////////////// ADD REPORT //////////////////////
if (isset($_POST['add_volume'])) {
    $volume_title = $_POST['volume_title'];
    $volume_year = $_POST['volume_year'];
    $volume_description = $_POST['volume_description'];
    $volume = new Volume();
    $volume->executeAddVolume($volume_title, $volume_year, $volume_description);
}


////////////////////// ADD VOLUME /////////////////////////
if (isset($_POST['add_report'])) {
    $volume_id = $_POST['volume_id'];
    $report_title = $_POST['report_title'];
    $report_summary = $_POST['report_summary'];
    $report_highlights = $_POST['report_highlights'];
    $report_this_issue = $_POST['report_this_issue'];
    $report_date = $_POST['report_date'];
    $report_description = $_POST['report_description'];
    $report_authors = $_POST['report_authors'];

    $report = new Report();
    $report->executeAddReport($volume_id, $report_title, $report_summary ,$report_highlights, $report_this_issue, $report_date,$report_description, $report_authors);
  
}

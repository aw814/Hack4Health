<?php
session_start();
include 'connect.php';
$conn = OpenCon();

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$pwd = $_POST["password"];
$age = $_POST["age"];
$gender = $_POST["gender"];

//$name = $fname. " ". $lname;
//echo $name;

if( ($fname == '') || ($lname == '') || ($email == '') || ($pwd == '') || ($age == '') || ($gender == '')) {
    echo "<br>All fields are required. Auto-refresh in 1 second.<br>";
    header("refresh:1; url='register.html'");
    exit;
}

$_SESSION["user"] = $email;

$sql = "INSERT INTO Users VALUES('$fname', '$lname', '$pwd', '$age', '$gender', '$email')";
mysqli_query($conn, $sql);

CloseCon($conn);

header("Location: foodintake.html");

?>
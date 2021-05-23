<?php
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

$sql = "INSERT INTO Users VALUES('$fname', '$lname', '$pwd', '$age', '$gender', '$email')";
mysqli_query($conn, $sql);

CloseCon($conn);

header("Location: foodintake.html");

?>
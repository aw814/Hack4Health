<?php
session_start();
include 'connect.php';
$conn = OpenCon();

$user = $_SESSION["user"];

$sql = "SELECT age, gender FROM Users Where email = '$user'";
$result = mysqli_query($conn, $sql);
$info = mysqli_fetch_array($result);
$age = $info[0];
$gender = $info[1];

if (1 <= $age <= 3){
    $Reference[0] = 210;
    $Reference[1] = ;
    $Reference[1] = 10;

}



CloseCon($conn);
?>

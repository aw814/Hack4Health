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

if ((1 <= $age) && ($age<= 3)){
    $Reference[0] = 210*10^(-6);
    $Reference[1] = 10*10^(-6);
    $Reference[2] = 5*10^(-3);
    $Reference[3] = 30*10^(-6);
    $Reference[4] = 13*10^(-3);
    $Reference[5] = 500*10^(-3);
    $Reference[6] = 260*10^(-6);
    $Reference[7] = 65*10^(-6);
    $Reference[8] = 0.7*10^(-3);
    $Reference[9] = 3*10^(-3);
    $Reference[10] = 100;
    $Reference[11] = 0.87;
    $Reference[12] = 19;
    $Reference[13] = 1.3;
} else if ((4 <= $age) && ($age<= 8)){
    $Reference[0] = 275*10^(-6);
    $Reference[1] = 10*10^(-6);
    $Reference[2] = 6*10^(-3);
    $Reference[3] = 55*10^(-6);
    $Reference[4] = 22*10^(-3);
    $Reference[5] = 800*10^(-3);
    $Reference[6] = 340*10^(-6);
    $Reference[7] = 65*10^(-6);
    $Reference[8] = 1*10^(-3);
    $Reference[9] = 4.1*10^(-3);
    $Reference[10] = 100;
    $Reference[11] = 0.76;
    $Reference[12] = 25;
    $Reference[13] = 1.7;
} else if ((9 <= $age) && ($age<= 13)){
    if($gender == "M"){
    $Reference[0] = 445*10^(-6);
    $Reference[1] = 10*10^(-6);
    $Reference[2] = 9*10^(-3);
    $Reference[3] = 60*10^(-6);
    $Reference[4] = 39*10^(-3);
    $Reference[5] = 1100*10^(-3);
    $Reference[6] = 540*10^(-6);
    $Reference[7] = 73*10^(-6);
    $Reference[8] = 2*10^(-3);
    $Reference[9] = 5.9*10^(-3);
    $Reference[10] = 100;
    $Reference[11] = 0.76;
    $Reference[12] = 31;
    $Reference[13] = 2.4;
    } else if ($gender == "F"){
    $Reference[0] = 420*10^(-6);
    $Reference[1] = 10*10^(-6);
    $Reference[2] = 9*10^(-3);
    $Reference[3] = 60*10^(-6);
    $Reference[4] = 39*10^(-3);
    $Reference[5] = 1100*10^(-3);
    $Reference[6] = 540*10^(-6);
    $Reference[7] = 73*10^(-6);
    $Reference[8] = 2*10^(-3);
    $Reference[9] = 5.7*10^(-3);
    $Reference[10] = 100;
    $Reference[11] = 0.76;
    $Reference[12] = 26;
    $Reference[13] = 2.1;
    }
}else if ((14 <= $age) && ($age<= 18)){
    if($gender == "M"){
    $Reference[0] = 630*10^(-6);
    $Reference[1] = 10*10^(-6);
    $Reference[2] = 12*10^(-3);
    $Reference[3] = 75*10^(-6);
    $Reference[4] = 63*10^(-3);
    $Reference[5] = 1100*10^(-3);
    $Reference[6] = 685*10^(-6);
    $Reference[7] = 95*10^(-6);
    $Reference[8] = 3*10^(-3);
    $Reference[9] = 7.7*10^(-3);
    $Reference[10] = 100;
    $Reference[11] = 0.73;
    $Reference[12] = 38;
    $Reference[13] = 3.3;
    } else if ($gender == "F"){
    $Reference[0] = 485*10^(-6);
    $Reference[1] = 10*10^(-6);
    $Reference[2] = 12*10^(-3);
    $Reference[3] = 75*10^(-6);
    $Reference[4] = 56*10^(-3);
    $Reference[5] = 1100*10^(-3);
    $Reference[6] = 685*10^(-6);
    $Reference[7] = 95*10^(-6);
    $Reference[8] = 3*10^(-3);
    $Reference[9] = 7.9*10^(-3);
    $Reference[10] = 100;
    $Reference[11] = 0.71;
    $Reference[12] = 26;
    $Reference[13] = 2.3;
    }
} else if ((19 <= $age) && ($age<= 50)){
    if($gender == "M"){
    $Reference[0] = 625*10^(-6);
    $Reference[1] = 10*10^(-6);
    $Reference[2] = 12*10^(-3);
    $Reference[3] = 120*10^(-6);
    $Reference[4] = 75*10^(-3);
    $Reference[5] = 800*10^(-3);
    $Reference[6] = 700*10^(-6);
    $Reference[7] = 95*10^(-6);
    $Reference[8] = 4*10^(-3);
    $Reference[9] = 6*10^(-3);
    $Reference[10] = 100;
    $Reference[11] = 0.66;
    $Reference[12] = 38;
    $Reference[13] = 3.7;
    } else if ($gender == "F"){
    $Reference[0] = 500*10^(-6);
    $Reference[1] = 10*10^(-6);
    $Reference[2] = 12*10^(-3);
    $Reference[3] = 90*10^(-6);
    $Reference[4] = 60*10^(-3);
    $Reference[5] = 800*10^(-3);
    $Reference[6] = 700*10^(-6);
    $Reference[7] = 95*10^(-6);
    $Reference[8] = 3*10^(-3);
    $Reference[9] = 8.1*10^(-3);
    $Reference[10] = 100;
    $Reference[11] = 0.66;
    $Reference[12] = 25;
    $Reference[13] = 2.7;
    }
} else if ((51 <= $age) && ($age<= 70)){
    if($gender == "M"){
    $Reference[0] = 625*10^(-6);
    $Reference[1] = 10*10^(-6);
    $Reference[2] = 12*10^(-3);
    $Reference[3] = 120*10^(-6);
    $Reference[4] = 75*10^(-3);
    $Reference[5] = 800*10^(-3);
    $Reference[6] = 700*10^(-6);
    $Reference[7] = 95*10^(-6);
    $Reference[8] = 4*10^(-3);
    $Reference[9] = 6*10^(-3);
    $Reference[10] = 100;
    $Reference[11] = 0.66;
    $Reference[12] = 30;
    $Reference[13] = 3.7;
    } else if ($gender == "F"){
    $Reference[0] = 500*10^(-6);
    $Reference[1] = 10*10^(-6);
    $Reference[2] = 12*10^(-3);
    $Reference[3] = 90*10^(-6);
    $Reference[4] = 60*10^(-3);
    $Reference[5] = 1000*10^(-3);
    $Reference[6] = 700*10^(-6);
    $Reference[7] = 95*10^(-6);
    $Reference[8] = 3*10^(-3);
    $Reference[9] = 5*10^(-3);
    $Reference[10] = 100;
    $Reference[11] = 0.66;
    $Reference[12] = 21;
    $Reference[13] = 2.7;
    }
} else if ($age > 70){
    if($gender == "M"){
    $Reference[0] = 625*10^(-6);
    $Reference[1] = 10*10^(-6);
    $Reference[2] = 12*10^(-3);
    $Reference[3] = 120*10^(-6);
    $Reference[4] = 75*10^(-3);
    $Reference[5] = 1000*10^(-3);
    $Reference[6] = 700*10^(-6);
    $Reference[7] = 95*10^(-6);
    $Reference[8] = 4*10^(-3);
    $Reference[9] = 6*10^(-3);
    $Reference[10] = 100;
    $Reference[11] = 0.66;
    $Reference[12] = 30;
    $Reference[13] = 3.7;
    } else if ($gender == "F"){
    $Reference[0] = 500*10^(-6);
    $Reference[1] = 10*10^(-6);
    $Reference[2] = 12*10^(-3);
    $Reference[3] = 90*10^(-6);
    $Reference[4] = 60*10^(-3);
    $Reference[5] = 1000*10^(-3);
    $Reference[6] = 700*10^(-6);
    $Reference[7] = 95*10^(-6);
    $Reference[8] = 3*10^(-3);
    $Reference[9] = 5*10^(-3);
    $Reference[10] = 100;
    $Reference[11] = 0.66;
    $Reference[12] = 21;
    $Reference[13] = 2.7;
    }
}


// $clear_data = "CREATE EVENT clear_data_at_midnight 
// ON SCHEDULE EVERY 1 DAY STARTS CURDATE() + INTERVAL 1 DAY
// DELETE FROM UpdateNutrients, NutritionReport, Display WHERE UpdateNutrients.name = Display.name and NutritionReport.reportID = Display.reportID";

// mysqli_query($conn, $clear_data);



CloseCon($conn);
?>

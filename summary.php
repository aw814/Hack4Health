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
    $Reference[0] = 210e-6;
    $Reference[1] = 10e-6;
    $Reference[2] = 5e-3;
    $Reference[3] = 30e-6;
    $Reference[4] = 13e-3;
    $Reference[5] = 500e-3;
    $Reference[6] = 260e-6;
    $Reference[7] = 65e-6;
    $Reference[8] = 0.7e-3;
    $Reference[9] = 3e-3;
    $Reference[10] = 100;
    $Reference[11] = 0.87;
    $Reference[12] = 19;
    $Reference[13] = 1.3;
} else if ((4 <= $age) && ($age<= 8)){
    $Reference[0] = 275e-6;
    $Reference[1] = 10e-6;
    $Reference[2] = 6e-3;
    $Reference[3] = 55e-6;
    $Reference[4] = 22e-3;
    $Reference[5] = 800e-3;
    $Reference[6] = 340e-6;
    $Reference[7] = 65e-6;
    $Reference[8] = 1e-3;
    $Reference[9] = 4.1e-3;
    $Reference[10] = 100;
    $Reference[11] = 0.76;
    $Reference[12] = 25;
    $Reference[13] = 1.7;
} else if ((9 <= $age) && ($age<= 13)){
    if($gender == "M"){
    $Reference[0] = 445e-6;
    $Reference[1] = 10e-6;
    $Reference[2] = 9e-3;
    $Reference[3] = 60e-6;
    $Reference[4] = 39e-3;
    $Reference[5] = 1100e-3;
    $Reference[6] = 540e-6;
    $Reference[7] = 73e-6;
    $Reference[8] = 2e-3;
    $Reference[9] = 5.9e-3;
    $Reference[10] = 100;
    $Reference[11] = 0.76;
    $Reference[12] = 31;
    $Reference[13] = 2.4;
    } else if ($gender == "F"){
    $Reference[0] = 420e-6;
    $Reference[1] = 10e-6;
    $Reference[2] = 9e-3;
    $Reference[3] = 60e-6;
    $Reference[4] = 39e-3;
    $Reference[5] = 1100e-3;
    $Reference[6] = 540e-6;
    $Reference[7] = 73e-6;
    $Reference[8] = 2e-3;
    $Reference[9] = 5.7e-3;
    $Reference[10] = 100;
    $Reference[11] = 0.76;
    $Reference[12] = 26;
    $Reference[13] = 2.1;
    }
}else if ((14 <= $age) && ($age<= 18)){
    if($gender == "M"){
    $Reference[0] = 630e-6;
    $Reference[1] = 10e-6;
    $Reference[2] = 12e-3;
    $Reference[3] = 75e-6;
    $Reference[4] = 63e-3;
    $Reference[5] = 1100e-3;
    $Reference[6] = 685e-6;
    $Reference[7] = 95e-6;
    $Reference[8] = 3e-3;
    $Reference[9] = 7.7e-3;
    $Reference[10] = 100;
    $Reference[11] = 0.73;
    $Reference[12] = 38;
    $Reference[13] = 3.3;
    } else if ($gender == "F"){
    $Reference[0] = 485e-6;
    $Reference[1] = 10e-6;
    $Reference[2] = 12e-3;
    $Reference[3] = 75e-6;
    $Reference[4] = 56e-3;
    $Reference[5] = 1100e-3;
    $Reference[6] = 685e-6;
    $Reference[7] = 95e-6;
    $Reference[8] = 3e-3;
    $Reference[9] = 7.9e-3;
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

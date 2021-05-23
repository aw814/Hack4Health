<?php

include 'connect.php';

$conn = OpenCon();
$rv_a = 0;
$rv_d = 0;
$rv_e = 0;
$rv_k = 0;
$rv_c = 0;

$rv_ca = 0;
$rv_co = 0;
$rv_io = 0;
$rv_fl = 0;
$rv_ir = 0;

$rv_carb = 0;
$rv_protein = 0;
$rv_fibre = 0;
$rv_water = 0;


#example for sum v_a
        foreach($conn->query('SELECT SUM(v_a) 
        FROM UpdateNutrients') as $row) {
            echo "<tr>";
            echo "<td>" . $row['SUM(v_a)'] . "</td>";
            echo "</tr>";
            $rv_a = $row['SUM(v_a)'];
        }

#example for sum v_d
foreach($conn->query('SELECT SUM(v_d) 
        FROM UpdateNutrients') as $row) {
    echo "<tr>";
    echo "<td>" . $row['SUM(v_d)'] . "</td>";
    echo "</tr>";
    $rv_d = $row['SUM(v_d)'];
}

#example for sum v_e
foreach($conn->query('SELECT SUM(v_e) 
        FROM UpdateNutrients') as $row) {
    echo "<tr>";
    echo "<td>" . $row['SUM(v_e)'] . "</td>";
    echo "</tr>";
    $rv_e = $row['SUM(v_e)'];
}

#example for sum v_k
foreach($conn->query('SELECT SUM(v_k) 
        FROM UpdateNutrients') as $row) {
    echo "<tr>";
    echo "<td>" . $row['SUM(v_k)'] . "</td>";
    echo "</tr>";
    $rv_k = $row['SUM(v_k)'];
}

#example for sum v_c
foreach($conn->query('SELECT SUM(v_c) 
        FROM UpdateNutrients') as $row) {
    echo "<tr>";
    echo "<td>" . $row['SUM(v_c)'] . "</td>";
    echo "</tr>";
    $rv_c = $row['SUM(v_c)'];
}

#example for sum $rv_ca
foreach($conn->query('SELECT SUM(calcium) 
        FROM UpdateNutrients') as $row) {
    echo "<tr>";
    echo "<td>" . $row['SUM(calcium)'] . "</td>";
    echo "</tr>";
    $rv_ca = $row['SUM(calcium)'];
}

#example for sum $rv_co
foreach($conn->query('SELECT SUM(copper) 
        FROM UpdateNutrients') as $row) {
    echo "<tr>";
    echo "<td>" . $row['SUM(copper)'] . "</td>";
    echo "</tr>";
    $rv_co = $row['SUM(copper)'];
}

#example for sum $rv_io
foreach($conn->query('SELECT SUM(iodine) 
        FROM UpdateNutrients') as $row) {
    echo "<tr>";
    echo "<td>" . $row['SUM(iodine)'] . "</td>";
    echo "</tr>";
    $rv_io = $row['SUM(iodine)'];
}

#example for sum $rv_fl
foreach($conn->query('SELECT SUM(fluoride) 
        FROM UpdateNutrients') as $row) {
    echo "<tr>";
    echo "<td>" . $row['SUM(fluoride)'] . "</td>";
    echo "</tr>";
    $rv_fl = $row['SUM(fluoride)'];
}

#example for sum $rv_ir
foreach($conn->query('SELECT SUM(iron) 
        FROM UpdateNutrients') as $row) {
    echo "<tr>";
    echo "<td>" . $row['SUM(iron)'] . "</td>";
    echo "</tr>";
    $rv_ir = $row['SUM(iron)'];
}

#example for sum $rv_carb
foreach($conn->query('SELECT SUM(carb) 
        FROM UpdateNutrients') as $row) {
    echo "<tr>";
    echo "<td>" . $row['SUM(carb)'] . "</td>";
    echo "</tr>";
    $rv_ca = $row['SUM(carb)'];
}

#example for sum $rv_protein
foreach($conn->query('SELECT SUM(protein) 
        FROM UpdateNutrients') as $row) {
    echo "<tr>";
    echo "<td>" . $row['SUM(protein)'] . "</td>";
    echo "</tr>";
    $rv_protein = $row['SUM(protein)'];
}

#example for sum $rv_fibre
foreach($conn->query('SELECT SUM(fibre) 
        FROM UpdateNutrients') as $row) {
    echo "<tr>";
    echo "<td>" . $row['SUM(fibre)'] . "</td>";
    echo "</tr>";
    $rv_fibre = $row['SUM(fibre)'];
}

#example for sum $rv_water
foreach($conn->query('SELECT SUM(water) 
        FROM UpdateNutrients') as $row) {
    echo "<tr>";
    echo "<td>" . $row['SUM(water)'] . "</td>";
    echo "</tr>";
    $rv_water = $row['SUM(water)'];
}


CloseCon($conn);
?>
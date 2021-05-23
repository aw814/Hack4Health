<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <title></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />

    <link rel="manifest" href="site.webmanifest" />
    <link rel="apple-touch-icon" href="icon.png" />
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/styles.css" />

    <meta name="theme-color" content="#fafafa" />
  </head>

  <body>
    <!-- Add your site or application content here -->
    <script src="js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="js/plugins.js"></script>

    <!-- Maybe it is easier to put everything on one page, so it's easy to access.
      So we may not need this page. -->
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

    $Reference = array_fill(0, 14, 0);
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
            $Reference[0] = 625e-6;
            $Reference[1] = 10e-6;
            $Reference[2] = 12e-3;
            $Reference[3] = 120e-6;
            $Reference[4] = 75e-3;
            $Reference[5] = 800e-3;
            $Reference[6] = 700e-6;
            $Reference[7] = 95e-6;
            $Reference[8] = 4e-3;
            $Reference[9] = 6e-3;
            $Reference[10] = 100;
            $Reference[11] = 0.66;
            $Reference[12] = 38;
            $Reference[13] = 3.7;
        } else if ($gender == "F"){
            $Reference[0] = 500e-6;
            $Reference[1] = 10e-6;
            $Reference[2] = 12e-3;
            $Reference[3] = 90e-6;
            $Reference[4] = 60e-3;
            $Reference[5] = 800e-3;
            $Reference[6] = 700e-6;
            $Reference[7] = 95e-6;
            $Reference[8] = 3e-3;
            $Reference[9] = 8.1e-3;
            $Reference[10] = 100;
            $Reference[11] = 0.66;
            $Reference[12] = 25;
            $Reference[13] = 2.7;
        }
    } else if ((51 <= $age) && ($age<= 70)){
        if($gender == "M"){
            $Reference[0] = 625e-6;
            $Reference[1] = 10e-6;
            $Reference[2] = 12e-3;
            $Reference[3] = 120e-6;
            $Reference[4] = 75e-3;
            $Reference[5] = 800e-3;
            $Reference[6] = 700e-6;
            $Reference[7] = 95e-6;
            $Reference[8] = 4e-3;
            $Reference[9] = 6e-3;
            $Reference[10] = 100;
            $Reference[11] = 0.66;
            $Reference[12] = 30;
            $Reference[13] = 3.7;
        } else if ($gender == "F"){
            $Reference[0] = 500e-6;
            $Reference[1] = 10e-6;
            $Reference[2] = 12e-3;
            $Reference[3] = 90e-6;
            $Reference[4] = 60e-3;
            $Reference[5] = 1;
            $Reference[6] = 7e-4;
            $Reference[7] = 9.5e-5;
            $Reference[8] = 3e-3;
            $Reference[9] = 5e-3;
            $Reference[10] = 100;
            $Reference[11] = 0.66;
            $Reference[12] = 21;
            $Reference[13] = 2.7;
        }
    } else if ($age > 70){
        if($gender == "M"){
            $Reference[0] = 625e-6;
            $Reference[1] = 10e-6;
            $Reference[2] = 12e-3;
            $Reference[3] = 120e-6;
            $Reference[4] = 75e-3;
            $Reference[5] = 1000e-3;
            $Reference[6] = 700e-6;
            $Reference[7] = 95e-6;
            $Reference[8] = 4e-3;
            $Reference[9] = 6e-3;
            $Reference[10] = 100;
            $Reference[11] = 0.66;
            $Reference[12] = 30;
            $Reference[13] = 3.7;
        } else if ($gender == "F"){
            $Reference[0] = 5e-4;
            $Reference[1] = 1e-5;
            $Reference[2] = 1.2e-2;
            $Reference[3] = 90e-6;
            $Reference[4] = 60e-3;
            $Reference[5] = 1000e-3;
            $Reference[6] = 700e-6;
            $Reference[7] = 95e-6;
            $Reference[8] = 3e-3;
            $Reference[9] = 5e-3;
            $Reference[10] = 100;
            $Reference[11] = 0.66;
            $Reference[12] = 21;
            $Reference[13] = 2.7;
        }
    }

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
        FROM UpdateNutrients WHERE email = "$user"') as $row) {
        echo "<tr>";
        echo "<td>" . $row['SUM(v_a)'] . "</td>";
        echo "</tr>";
        $rv_a = $row['SUM(v_a)'];
    }

    #example for sum v_d
    foreach($conn->query('SELECT SUM(v_d) 
        FROM UpdateNutrients WHERE email = "$user"') as $row) {
        echo "<tr>";
        echo "<td>" . $row['SUM(v_d)'] . "</td>";
        echo "</tr>";
        $rv_d = $row['SUM(v_d)'];
    }

    #example for sum v_e
    foreach($conn->query('SELECT SUM(v_e) 
        FROM UpdateNutrients WHERE email = "$user"') as $row) {
        echo "<tr>";
        echo "<td>" . $row['SUM(v_e)'] . "</td>";
        echo "</tr>";
        $rv_e = $row['SUM(v_e)'];
    }

    #example for sum v_k
    foreach($conn->query('SELECT SUM(v_k) 
        FROM UpdateNutrients WHERE email = "$user"') as $row) {
        echo "<tr>";
        echo "<td>" . $row['SUM(v_k)'] . "</td>";
        echo "</tr>";
        $rv_k = $row['SUM(v_k)'];
    }

    #example for sum v_c
    foreach($conn->query('SELECT SUM(v_c) 
        FROM UpdateNutrients WHERE email = "$user"') as $row) {
        echo "<tr>";
        echo "<td>" . $row['SUM(v_c)'] . "</td>";
        echo "</tr>";
        $rv_c = $row['SUM(v_c)'];
    }

    #example for sum $rv_ca
    foreach($conn->query('SELECT SUM(calcium) 
        FROM UpdateNutrients WHERE email = "$user"') as $row) {
        echo "<tr>";
        echo "<td>" . $row['SUM(calcium)'] . "</td>";
        echo "</tr>";
        $rv_ca = $row['SUM(calcium)'];
    }

    #example for sum $rv_co
    foreach($conn->query('SELECT SUM(copper) 
        FROM UpdateNutrients WHERE email = "$user"') as $row) {
        echo "<tr>";
        echo "<td>" . $row['SUM(copper)'] . "</td>";
        echo "</tr>";
        $rv_co = $row['SUM(copper)'];
    }

    #example for sum $rv_io
    foreach($conn->query('SELECT SUM(iodine) 
        FROM UpdateNutrients WHERE email = "$user"') as $row) {
        echo "<tr>";
        echo "<td>" . $row['SUM(iodine)'] . "</td>";
        echo "</tr>";
        $rv_io = $row['SUM(iodine)'];
    }

    #example for sum $rv_fl
    foreach($conn->query('SELECT SUM(fluoride) 
        FROM UpdateNutrients WHERE email = "$user"') as $row) {
        echo "<tr>";
        echo "<td>" . $row['SUM(fluoride)'] . "</td>";
        echo "</tr>";
        $rv_fl = $row['SUM(fluoride)'];
    }

    #example for sum $rv_ir
    foreach($conn->query('SELECT SUM(iron) 
        FROM UpdateNutrients WHERE email = "$user"') as $row) {
        echo "<tr>";
        echo "<td>" . $row['SUM(iron)'] . "</td>";
        echo "</tr>";
        $rv_ir = $row['SUM(iron)'];
    }

    #example for sum $rv_carb
    foreach($conn->query('SELECT SUM(carb) 
        FROM UpdateNutrients WHERE email = "$user"') as $row) {
        echo "<tr>";
        echo "<td>" . $row['SUM(carb)'] . "</td>";
        echo "</tr>";
        $rv_carb = $row['SUM(carb)'];
    }

    #example for sum $rv_protein
    foreach($conn->query('SELECT SUM(protein) 
        FROM UpdateNutrients WHERE email = "$user"') as $row) {
        echo "<tr>";
        echo "<td>" . $row['SUM(protein)'] . "</td>";
        echo "</tr>";
        $rv_protein = $row['SUM(protein)'];
    }

    #example for sum $rv_fibre
    foreach($conn->query('SELECT SUM(fibre) 
        FROM UpdateNutrients WHERE email = "$user"') as $row) {
        echo "<tr>";
        echo "<td>" . $row['SUM(fibre)'] . "</td>";
        echo "</tr>";
        $rv_fibre = $row['SUM(fibre)'];
    }

    #example for sum $rv_water
    foreach($conn->query('SELECT SUM(water) 
        FROM UpdateNutrients WHERE email = "$user"') as $row) {
        echo "<tr>";
        echo "<td>" . $row['SUM(water)'] . "</td>";
        echo "</tr>";
        $rv_water = $row['SUM(water)'];
    }


    $Nutrient = array_fill(0, 14, 0);
    $Nutrient[0] = Need($rv_a,$Reference[0]);
    $Nutrient[1] = Need($rv_d,$Reference[1]);
    $Nutrient[2] = Need($rv_e,$Reference[2]);
    $Nutrient[3] = Need($rv_k,$Reference[3]);
    $Nutrient[4] = Need($rv_c,$Reference[4]);

    $Nutrient[5] = Need($rv_ca,$Reference[5]);
    $Nutrient[6] = Need($rv_co,$Reference[6]);
    $Nutrient[7] = Need($rv_io,$Reference[7]);
    $Nutrient[8] = Need($rv_fl,$Reference[8]);
    $Nutrient[9] = Need($rv_ir,$Reference[9]);

    $Nutrient[10] = Need($rv_carb,$Reference[10]);
    $Nutrient[11] = Need($rv_protein,$Reference[11]);
    $Nutrient[12] = Need($rv_fibre,$Reference[12]);
    $Nutrient[13] = Need($rv_water,$Reference[13]);

    foreach ($Nutrient as $value) {
        echo "\n $value <br>";
    }

    //$snv_a = Need($rv_a,$Reference[0]);
    //$snv_d = Need($rv_d,$Reference[1]);
    //$snv_e = Need($rv_e,$Reference[2]);
    //$snv_k = Need($rv_k,$Reference[3]);
    //$snv_c = Need($rv_c,$Reference[4]);
    //
    //$snca = Need($rv_ca,$Reference[5]);
    //$snco = Need($rv_co,$Reference[6]);
    //$snio = Need($rv_io,$Reference[7]);
    //$snfl = Need($rv_fl,$Reference[8]);
    //$snir = Need($rv_ir,$Reference[9]);

    //$sncarb = Need($rv_carb,$Reference[10]);
    //$snprotein = Need($rv_protein,$Reference[11]);
    //$snfibre = Need($rv_fibre,$Reference[12]);
    //$snwater = Need($rv_water,$Reference[13]);

    function Need($r, $ref) {
        return $ref - $r;
    }


    CloseCon($conn);
    ?>

    <h1>Total Nutrition</h1>

    <table>
      <tr>
        <td>Vitamins</td>
        <td>Intake</td>
        <td>Daily recommendation</td>
      </tr>
      <tr>
        <td>A</td>
        <td>500 mg</td>
        <td>2000 mg</td>
      </tr>
      <tr>
        <td>C</td>
        <td>400 mg</td>
        <td>1200 mg</td>
      </tr>
    </table>

    <br />
    <br />

    <table>
      <tr>
        <td>Elements</td>
        <td>Intake</td>
        <td>Daily recommendation</td>
      </tr>
      <tr>
        <td>Calcium</td>
        <td>500 mg</td>
        <td>2000 mg</td>
      </tr>
      <tr>
        <td>Chromium</td>
        <td>400 mg</td>
        <td>1200 mg</td>
      </tr>
    </table>

    <br />
    <br />

    <table>
      <tr>
        <td>Macronutrients</td>
        <td>Intake (g)</td>
<!--        <td>Daily recommendation</td>-->
        <td>You still need (g)</td>
      </tr>
      <tr>
        <td>Vitamin A</td>
        <td><?php
            echo $rv_a
            ?></td>
        <td>
            <?php
            echo $Nutrient[0]
            ?>
        </td>
      </tr>
      <tr>
        <td>Vitamin D</td>
          <td><?php
              echo $rv_d
              ?></td>
<!--          <td>--><?php
//              echo $Reference[1]
//              ?><!--</td>-->
          <td>
              <?php
              echo $Nutrient[1]
              ?>
          </td>
      </tr>
      <tr>
        <td>Vitamin E</td>
          <td><?php
              echo $rv_e
              ?></td>
<!--          <td>--><?php
//              echo $Reference[2]
//              ?><!--</td>-->
          <td>
              <?php
              echo $Nutrient[2]
              ?>
          </td>
      </tr>
      <tr>
        <td>Vitamin K</td>
          <td><?php
              echo $rv_k
              ?></td>
<!--          <td>--><?php
//              echo $Reference[3]
//              ?><!--</td>-->
          <td><?php
              echo $Nutrient[3]
              ?>
          </td>
      </tr>
      <tr>
        <td>Vitamin C</td>
          <td><?php
              echo $rv_c
              ?></td>
<!--          <td>--><?php
//              echo $Reference[4]
//              ?><!--</td>-->
          <td><?php
              echo $Nutrient[4]
              ?></td>
      </tr>
      <tr>
        <td>Calcium</td>
          <td><?php
              echo $rv_ca
              ?></td>
<!--          <td>--><?php
//              echo $Reference[5]
//              ?><!--</td>-->
          <td><?php
              echo $Nutrient[5]
              ?></td>
      </tr>
      <tr>
        <td>Copper</td>
          <td><?php
              echo $rv_co
              ?></td>
<!--          <td>--><?php
//              echo $Reference[6]
//              ?><!--</td>-->
          <td><?php
              echo $Nutrient[6]
              ?></td>
      </tr>
      <tr>
        <td>Iodine</td>
          <td><?php
              echo $rv_io
              ?></td>
<!--          <td>--><?php
//              echo $Reference[7]
//              ?><!--</td>-->
          <td><?php
              echo $Nutrient[7]
              ?></td>
      </tr>
      <tr>
        <td>Fluoride</td>
          <td><?php
              echo $rv_fl
              ?></td>
<!--          <td>--><?php
//              echo $Reference[8]
//              ?><!--</td>-->
          <td><?php
              echo $Nutrient[8]
              ?></td>
      </tr>
      <tr>
        <td>Iron</td>
          <td><?php
              echo $rv_ir
              ?></td>
<!--          <td>--><?php
//              echo $Reference[9]
//              ?><!--</td>-->
          <td><?php
              echo $Nutrient[9]
              ?></td>
      </tr>

      <tr>
        <td>Carbs</td>
          <td><?php
              echo $rv_carb
              ?></td>
<!--          <td>--><?php
//              echo $Reference[10]
//              ?><!--</td>-->
          <td><?php
              echo $Nutrient[10]
              ?></td>
      </tr>
      <tr>
        <td>Proteins</td>
          <td><?php
              echo $rv_protein
              ?></td>
<!--          <td>--><?php
//              echo $Reference[11]
//              ?><!--</td>-->
          <td><?php
              echo $Nutrient[11]
              ?></td>
      </tr>
      <tr>
        <td>Fibres</td>
          <td><?php
              echo $rv_fibre
              ?></td>
<!--          <td>--><?php
//              echo $Reference[12]
//              ?><!--</td>-->
          <td><?php
              echo $Nutrient[12]
              ?></td>
      </tr>
      <tr>
        <td>Water</td>
          <td><?php
              echo $rv_water
              ?></td>
<!--          <td>--><?php
//              echo $Reference[13]
//              ?><!--</td>-->
          <td><?php
              echo $Nutrient[13]
              ?></td>
      </tr>
    </table>

    <br />
    <br />
    <a href="index.html">Logout</a>
  </body>


</html>

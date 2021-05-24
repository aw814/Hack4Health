<?php
    $MY_API_KEY = "Nns7eKVF4qQtGNOqQjLzB4AWmHDE8K7hwbw0oLFQ"; // may need to put this in a hidden file
    
    session_start();
    include 'connect.php';
    $conn = OpenCon();
    $email = $_SESSION['email'];

    require_once("call_api.php");

    // get values from form input fields
    $food = $_GET['food'];
    $quantity = $_GET['quantity'];
    
    // API call
    $rawdata = callAPI(
        'GET', 
        'https://api.nal.usda.gov/fdc/v1/foods/search?api_key='.$MY_API_KEY.'&query='.$food, 
        false
    );

    $response = json_decode($rawdata, true);
    // echo 'API response is ' . $response['foods'] . '<br /><br /><br /><br /><br /><br /><br /><br />';

    $nutrientArray = array('Vitamin A'=>array('0','',false),'Vitamin D'=>array('0','',false),
                           'Vitamin E'=>array('0','',false),'Vitamin K'=>array('0','',false),
                           'Vitamin C'=>array('0','',false),'Calcium'=>array('0','',false),
                           'Copper'=>array('0','',false),'Iodine'=>array('0','',false),
                            'Fluoride'=>array('0','',false),'Iron'=>array('0','',false),
                            'Carb'=>array('0','',false),'Protein'=>array('0','',false),
                            'Fibre'=>array('0','',false),'Water'=>array('0','',false));
    //$nutrientValueArray = array_fill(0, count($nutrientNameArray), 0);

    $count = 0;
    $index = 0;
    while ($count < count($nutrientArray) and $index < 50) {
        $foodNutrientsArray = $response['foods'][$index]['foodNutrients'];
        // echo 'food nutrients array is ' . $foodNutrientsArray . '<br /><br />';
        // print_r($foodNutrientsArray);

        for ($x = 0; $x < count($foodNutrientsArray); $x++) {
            // echo "see".$foodNutrientsArray[$x]['nutrientName'];
            foreach ($nutrientArray as $key => $value) {

                if ((strpos($foodNutrientsArray[$x]['nutrientName'], $key) !== false)
                    and $nutrientArray[$key][2] == false) {

                    $nutrientArray[$key] = array(
                            $foodNutrientsArray[$x]['value'],$foodNutrientsArray[$x]['unitName'], true);
                    $count++;

                }
            }
        }
        $index++;
    }
    // print the array as a preliminary result
    // print_r($nutrientArray);

    // vitamins
    $vit_a = $nutrientArray['Vitamin A'][0];
    $vit_d = $nutrientArray['Vitamin D'][0];
    $vit_e = $nutrientArray['Vitamin E'][0];
    $vit_k = $nutrientArray['Vitamin K'][0];
    $vit_c = $nutrientArray['Vitamin C'][0];
    // elements
    $calcium = $nutrientArray['Calcium'][0];
    $copper = $nutrientArray['Copper'][0];
    $iodine = $nutrientArray['Iodine'][0];
    $fluoride = $nutrientArray['Fluoride'][0];
    $iron = $nutrientArray['Iron'][0];
    // macronutrients
    $carb = $nutrientArray['Carb'][0];
    $protein = $nutrientArray['Protein'][0];
    $fibre = $nutrientArray['Fibre'][0];
    $water = $nutrientArray['Water'][0];

    $q_name = "SELECT Count(*) FROM UpdateNutrients";

    $result = mysqli_query($conn, $q_name);

    $num = ($result->fetch_array())[0];
    $name = 'name'.strval($num);
    $sql = "INSERT INTO UpdateNutrients VALUES('$name', '$vit_a', '$vit_d', '$vit_e', '$vit_k', '$vit_c',
                                   '$calcium', '$copper', '$iodine', '$fluoride', '$iron', 
                                   '$carb', '$protein','$fibre', '$water',
                                   '$email')";
    mysqli_query($conn, $sql);

    CloseCon($conn);
    header("Location: nutritionsummary.php");
?>

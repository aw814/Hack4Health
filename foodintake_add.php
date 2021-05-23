<?php
    session_start();
    $email = $_SESSION['email'];

    require_once("call_api.php");
    $MY_API_KEY = "Nns7eKVF4qQtGNOqQjLzB4AWmHDE8K7hwbw0oLFQ"; // in future, put key in external file

    // get values from form input fields
    $food = $_GET['food'];
    $quantity = $_GET['quantity'];
    echo 'food is ' . $food . '<br /><br />';
    echo 'quantity is ' . $quantity . '<br /><br />';

    // Variables
    $data = '';
    // vitamins
    $vit_a = '';
    $vit_d = '';
    $vit_e = '';
    $vit_k = '';
    $vit_c = '';
    // elements
    $calcium = '';
    $copper = '';
    $iodine = '';
    $fluoride = '';
    $iron = '';
    // macronutrients
    $carb = '';
    $protein = '';
    $fiibre = '';
    $water = '';
    
    // API call
    $rawdata = callAPI(
        'GET', 
        'https://api.nal.usda.gov/fdc/v1/foods/search?api_key='.$MY_API_KEY.'&query='.$food, 
        false
    );
    // echo 'API response raw data is ' . $rawdata . '<br /><br />';

    $response = json_decode($rawdata, true);
    echo 'API response is ' . $response['foods'] . '<br /><br /><br /><br /><br /><br /><br /><br />';
    // echo 'API response is ' . $response . '<br /><br /><br /><br /><br /><br /><br /><br />';

    $nutrientArray = array('Vitamin A'=>array('0', false),'Vitamin D'=>array('0', false),
                           'Vitamin E'=>array('0', false),'Vitamin K'=>array('0', false),'Vitamin C'=>array('0', false),
                            'Calcium'=>array('0', false),'Copper'=>array('0', false),'Iodine'=>array('0', false),
                            'Fluoride'=>array('0', false),'Iron'=>array('0', false),
                            'Carb'=>array('0', false),'Protein'=>array('0', false),
                            'Fibre'=>array('0', false),'Water'=>array('0', false));
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
                    and $nutrientArray[$key][1] == false) {

                    $nutrientArray[$key] = array($foodNutrientsArray[$x]['value'], true);
                    $count++;

                }
            }
        }
        $index++;
    }

    // print the array as a preliminary result
    print_r($nutrientArray);


    //echo 'food nutrients array element 0 is ' . $foodNutrientsArray[0] . '<br /><br />';
    // $errors = $response['response']['errors'];
    // $data = $response['response']['data'][0];

    // decode JSON results from API

?>

<?php
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
    //echo 'API response raw data is ' . $rawdata . '<br /><br />';

    $response = json_decode($rawdata, true);
    echo 'API response is ' . $response . '<br /><br /><br /><br /><br /><br /><br /><br />';
    
    $foodNutrientsArray = $response.foods[0].foodNutrients;
    echo 'food nutrients array is ' . $foodNutrientsArray . '<br /><br />';
    
    //echo 'food nutrients array element 0 is ' . $foodNutrientsArray[0] . '<br /><br />';
    // $errors = $response['response']['errors'];
    // $data = $response['response']['data'][0];

    // decode JSON results from API

?>

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
    <script src="js/vendor/jquery-3.6.0.js"></script>
    <script src="js/plugins.js"></script>
    <!-- <script src="js/foodintake.js"></script> -->

    <h1>Food Intake</h1>

    <form action="foodintake_add.php" method="get">
      <label for="food">Enter in food item:</label><br />
      <input type="text" id="food" name="food" />
      <br /><br />

      <label for="quantity">Enter in quantity:</label><br />
      <input type="text" id="quantity" name="quantity" />

      <!-- <button id="btn_add">Add</button> -->
      <input type="submit" value="Add" />
    </form>

    <br /><br />


    <br /><br />
    <div id="feedback" style="color: red"></div>

    <hr />
    <h2>List of food items eaten:</h2>

    <table>
      <tr>
        <td>Food item</td>
        <td>Quantity</td>
        <td>Time eaten</td>
      </tr>
      <tr>
        <td>Apple</td>
        <td>1</td>
        <td>8:30 AM</td>
      </tr>
      <tr>
        <td>Donuts</td>
        <td>3</td>
        <td>9:05 PM</td>
      </tr>
    </table>

    <!-- Maybe we don't need the nutritionsummary.html page, 
      as it might be easier to populate and access the data just from one page
    -->
    <!--
      <br />
      <br />
      <a href="nutritionsummary.html">Check your nutrition so far</a>
    -->
    <h1>Total Nutrition</h1>

    <table>
      <tr>
        <th>Vitamins</th>
        <th>Intake</th>
        <th>Daily recommendation</th>
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
        <th>Elements</td>
        <th>Intake</th>
        <th>Daily recommendation</th>
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
        <th>Macronutrients</th>
        <th>Intake</th>
        <th>Daily recommendation</th>
      </tr>
      <tr>
        <td>Carbs</td>
        <td>500 mg</td>
        <td>2000 mg</td>
      </tr>
      <tr>
        <td>Proteins</td>
        <td>400 mg</td>
        <td>1200 mg</td>
      </tr>
    </table>

  </body>
</html>

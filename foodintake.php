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
    <script src="js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="js/vendor/jquery-3.6.0.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/foodintake.js"></script>

    <h1>Food Intake</h1>

    <form action="foodintake_add.php" method="get">
      <label for="food">Enter in food item:</label><br />
      <input type="text" id="food" name="food" />
      <br /><br />

      <label for="quantity">Enter in quantity:</label><br />
      <input type="text" id="quantity" name="quantity" />

      <input type="submit" id="btn_add" value="Add" />
    </form>

    <br /><br />


    <br /><br />
    <div id="feedback" style="color: red"></div>

    <hr />
    <h2>List of food items eaten:</h2>

    <ul id="eaten-list">
    </ul>

  </body>
</html>

/* Author's Javascript/jQuery */

// Wait until DOM has loaded
$(document).ready(function () {
  // Variables
  const MY_API_KEY = "Nns7eKVF4qQtGNOqQjLzB4AWmHDE8K7hwbw0oLFQ"; // in future, put key in external file

  // DOM References
  const $btnAdd = $("#btn_add");
  const $userFeedback = $("#feedback");

  function getNutritionData(item) {
    // using jQuery ajax method
    $.ajax({
      method: "GET",
      url: `https://api.nal.usda.gov/fdc/v1/foods/search?api_key=${MY_API_KEY}&query=${item}`,
    })
      .done(function (data) {
        console.log("food data", item, data);

        // Proceed only if there are any results
        if (data) {
          //data.status==='OK' && data.foods && data.foods.length > 0
          // vitamin C specifically just to demo JSON
          const foodNutrition = data.foods[0].foodNutrients[6].value;

          // display results to user in a table/list...
          $userFeedback.text(foodNutrition);

          // calculate total nutrition.  Need to use $quantity...
        } else {
          $userFeedback.text("No results returned for food " + item);
        }
      })
      .fail(function () {
        userFeedback.innerText = "Error - API call failed";
      });
  }

  // click handler for Add food button
  $btnAdd.click(function (e) {
    const $food = $("#food").val();
    const $quantity = $("#quantity").val();

    // check if both food and quantity have been inputted
    if ($food && $quantity) {
      // if so, then make API call
      getNutritionData($food);
    } else {
      $userFeedback.text("Please enter in food and quantity");
    }
  });
});

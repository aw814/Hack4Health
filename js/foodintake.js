/* Author's Javascript/jQuery */

// Wait until DOM has loaded
$(document).ready(function () {
  // DOM References
  const $btnAdd = $("#btn_add");
  const $userFeedback = $("#feedback");
  const $form = $("form");
  const $eatenList = $("#eaten-list");

  // Variables
  let $food = "";
  let $quantity = "";

  // Event handlers
  $btnAdd.click(function (e) {
    $food = $("#food").val();
    $quantity = $("#quantity").val();

    // check if both food and quantity have been inputted
    if (!$food || !$quantity) {
      $userFeedback.text("Please enter in food and quantity");
      // prevent form submit
      e.preventDefault();
    }
  });

  // Add food item to eaten list
  $form.on("submit", function (e) {
    let $listItem = $("<li></li>");
    $listItem.text($quantity + " " + $food);
    $eatenList.append($listItem);
  });
});

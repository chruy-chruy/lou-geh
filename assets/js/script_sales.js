$("#item").change(function () {
  let item_number = document.getElementById("item").value;
  let value;
  $.ajax({
    url: "get-items.php?item_number=" + item_number,
    type: "GET",
    success: function (result) {
      value = result;
      console.log(result);
      let res = result.split(",");
      document.getElementById("price2").innerHTML = res[0];
      document.getElementById("price").value = res[0];
      document.getElementById("stocks2").innerHTML = res[3];
      document.getElementById("stocks").value = res[3];
      document.getElementById("item_name").value = res[1];
      document.getElementById("item_number").value = res[2];

      document.getElementById("quantity").value = "";
      document.getElementById("total").innerHTML = 0;
      document.getElementById("total2").value = 0;
    },
    error: function (error) {
      console.log("error: ", error);
    },
  });
});

$("#quantity").change(function () {
  stocks = parseInt(document.getElementById("stocks").value);
  quantity = parseInt(document.getElementById("quantity").value);
  price = document.getElementById("price").value;

  if (quantity <= 0) {
    document.getElementById("quantity").value = "";
    document.getElementById("total").innerHTML = 0;
    document.getElementById("total2").value = 0;
    document.querySelector(".error-msg").innerHTML =
      "Quantity must be greater than 0.";
  } else if (stocks >= quantity) {
    var total = quantity * price;
    document.getElementById("total").innerHTML = total;
    document.getElementById("total2").value = total;
    document.querySelector(".error-msg").innerHTML = "";
  } else if (stocks < quantity) {
    document.getElementById("quantity").value = "";
    document.getElementById("total").innerHTML = 0;
    document.getElementById("total2").value = 0;
    document.querySelector(".error-msg").innerHTML = "Not enough stocks.";
  }
});

/*runs each time a new character is entered*/
$("#searchp").keyup(function () {
  /*takes inpt from input box*/
  var seterm = $("#searchp").val();
  /*scans through each element*/
  for (var i = 0; i < $(".products_list").length; i++) {
    /*Makes all elements visible*/
    $(".products_list:eq(" + i + ")").css("display", "inline-block");
    /*If it doesn't match the input it is hidden*/
    if (
      $(".products_list:eq(" + i + ")")
        .text()
        .toLowerCase()
        .indexOf(seterm) < 0
    ) {
      $(".products_list:eq(" + i + ")").css("display", "none");
    }
  }
});
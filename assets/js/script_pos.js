/*runs each time a new character is entered*/
$("#searchp").keyup(function () {
  /*takes inpt from input box*/
  var seterm = $("#searchp").val();
  /*scans through each element*/
  for (var i = 0; i < $(".products_list").length; i++) {
    /*Makes all elements visible*/
    $(".show:eq(" + i + ")").css("display", "inline-block");
    /*If it doesn't match the input it is hidden*/
    if (
      $(".products_list:eq(" + i + ")")
        .text()
        .toLowerCase()
        .indexOf(seterm.toLowerCase()) < 0
    ) {
      $(".show:eq(" + i + ")").css("display", "none");
    }
  }
});
// $(document).ready(function () {
//   $("select_category").change(function () {
//     console.log("tst");
//   });
// });

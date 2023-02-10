
  $(document).ready(function () {

    $("#item").change( function()
    {
        let item_number = document.getElementById("item").value;
        let value;
        $.ajax({
        url: "get-items.php?item_number="+item_number,
        type: 'GET',
            success: function(result) { 
            value = result
            console.log(result);
            document.getElementById("price2").innerHTML = result;
            document.getElementById("price").value = result;
            var quantity =  document.getElementById("quantity").value
            var price =  document.getElementById("price").value
            var total =  quantity * price;
             document.getElementById("total").innerHTML = total;
             document.getElementById("total2").value = total;
            },error: function(error) {
                console.log('error: ',error)
            }
        });

    });

    var quantity =  document.getElementById("quantity").value
    var price =  document.getElementById("price").value
    var total =  quantity * price;
     document.getElementById("total").innerHTML = total;
     document.getElementById("total2").value = total;
     
    
    $("#quantity").change(function() {
     var quantity =  document.getElementById("quantity").value
    var price =  document.getElementById("price").value
    var total =  quantity * price;
     document.getElementById("total").innerHTML = total;
     document.getElementById("total2").value = total;
    })       

});
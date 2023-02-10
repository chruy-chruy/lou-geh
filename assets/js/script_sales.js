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
            let res = result.split(",");
            document.getElementById("price2").innerHTML = res[0];
            document.getElementById("price").value = res[0];
            document.getElementById("item_name").value = res[1];
            document.getElementById("item_number").value = res[2];

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
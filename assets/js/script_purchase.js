
$(document).ready(function () { 

    $("#quantity").change(function() {
    var quantity =  document.getElementById("quantity").value
    var price =  document.getElementById("price").value
    var total = quantity*price;
    
     document.getElementById("total2").innerHTML = total;
     document.getElementById("total").value = total;
    })    
    $("#price").change(function() {
        var quantity =  document.getElementById("quantity").value
        var price =  document.getElementById("price").value
        var total = quantity*price;
        
    
     document.getElementById("total2").innerHTML = total;
     document.getElementById("total").value = total;
    })     
})
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
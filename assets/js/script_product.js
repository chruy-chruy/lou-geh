
  
$(document).ready(function () { 

$("#quantity").change(function() {
var quantity =  document.getElementById("quantity").value
var price =  document.getElementById("price").value
var selling_price =  document.getElementById("selling_price").value
var total_selling_price=  quantity*selling_price
var total_cost = quantity*price
var revenue = total_selling_price - total_cost

 document.getElementById("revenue2").innerHTML = revenue;
 document.getElementById("revenue").value = revenue;
})    
$("#price").change(function() {
var quantity =  document.getElementById("quantity").value
var price =  document.getElementById("price").value
var selling_price =  document.getElementById("selling_price").value
var total_selling_price=  quantity*selling_price
var total_cost = quantity*price
var revenue = total_selling_price - total_cost

 document.getElementById("revenue2").innerHTML = revenue;
 document.getElementById("revenue").value = revenue;
})   
$("#selling_price").change(function() {
var quantity =  document.getElementById("quantity").value
var price =  document.getElementById("price").value
var selling_price =  document.getElementById("selling_price").value
var total_selling_price=  quantity*selling_price
var total_cost = quantity*price
var revenue = total_selling_price - total_cost

 document.getElementById("revenue2").innerHTML = revenue;
 document.getElementById("revenue").value = revenue;
})  

})
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})

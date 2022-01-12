

// function priceUpdate(){
//     var quantity = document.getElementById("quantity").value;
//     var price = document.getElementsByClassName("priceid").value
//     var smallTotal = eval(quantity*price);
//     document.getElementById("finalcost").value = "Price: $" + smallTotal;
//   }
  
//     // quantity.addEventListener("change", priceUpdate());
  
//     quantity.addEventListener('change', event => {
//       priceUpdate(event);
//   })



// quantity.addEventListener('change', event => {
//   priceUpdate(event);
//   })
var price = document.getElementById("lol").innerHTML;

  function priceUpdate(){
    var quantity = document.getElementById("quantity").value;

    document.getElementById("lol").innerHTML = quantity*price;
  }

  
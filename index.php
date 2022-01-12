<?php
    

    // function search(){
    //   include ('./php/connect.php');
    //   $keyword = $_POST['filter'];
    //   $sqlquery = "SELECT id, productName, imagePath, price, rating FROM products WHERE productName LIKE '%$keyword%'";
    //   $result = $mysqli->query($sqlquery);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  
    <!-- <link rel="shortcut icon" href="./images/logo.png" /> -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>Global Village</title>
    
    <link rel="stylesheet" href=".\css\index.css"> 
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <!-- //Animate On Scroll Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
   <!-- fonts styles -->
    <link rel="preconnect" href="https://fonts.googleapis.com" >
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin >
    <link
      href="https://fonts.googleapis.com/css2?family=Kirang+Haerang&display=swap"
      rel="stylesheet"
    >
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"
    >
  </head>

  <body id="whynot">
  <style>
    body{
      background-color: black !important;
    }
  </style>
    <header >
      <a href="index.php" class="logo">
        <img src="./images/logo.png" >
      </a>

      <ul class="main-menu">
        <li> <a href="index.php">Home</a> </li>
        <li> <a href="#">About Us</a> </li>
        <li> <a href="#">Log in</a> </li>
        <li>
          <a href="#"> <i class="fa fa-shopping-cart fa_custom fa-2x"></i> </a>
        </li>
      </ul>

      <span class="mb-menu-toggle" id="mb-menu-toggle">
        <i class="bx bx-menu"></i>
      </span>
   
    </header>

    <li class="slogan1">
      <a class="nav-link"> </a><em>Savor your favorite food..</em>
    </li>
    <li class="slogan2"> <a class="nav-link"></a><em> Anywhere</em> </li>

    <div class="home-header" id="section1">
      <div class="box">
        <h3><em>Wanna try something today?</em></h3>
       
        
          <div class="autocomplete">
          <form method="POST" action="./Prod-Page.php">
          <input id="myInput" type="text" name="filter" placeholder="Search.." />
            <input type="submit" name="submit" value="Search" />  
          </form>
          </div>
        
        <br />
        <form method="POST" action="./Prod-Page.php">
        <input type="hidden" name="filter"/>
        <input type="submit" name="submit" class="explore-button" value="Explore Now &#8594;">
        </form>
      </div>
    </div>
    <script>
      function autocomplete(inp, arr) {
        /*the autocomplete function takes two arguments,
        the text field element and an array of possible autocompleted values:*/
        var currentFocus;
        /*execute a function when someone writes in the text field:*/
        inp.addEventListener("input", function(e) {
            var a, b, i, val = this.value;
            /*close any already open lists of autocompleted values*/
            closeAllLists();
            if (!val) { return false;}
            currentFocus = -1;
            /*create a DIV element that will contain the items (values):*/
            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "autocomplete-items");
            /*append the DIV element as a child of the autocomplete container:*/
            this.parentNode.appendChild(a);
            /*for each item in the array...*/
            for (i = 0; i < arr.length; i++) {
              /*check if the item starts with the same letters as the text field value:*/
              if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                /*create a DIV element for each matching element:*/
                b = document.createElement("DIV");
                /*make the matching letters bold:*/
                b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                b.innerHTML += arr[i].substr(val.length);
                /*insert a input field that will hold the current array item's value:*/
                b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                /*execute a function when someone clicks on the item value (DIV element):*/
                b.addEventListener("click", function(e) {
                    /*insert the value for the autocomplete text field:*/
                    inp.value = this.getElementsByTagName("input")[0].value;
                    /*close the list of autocompleted values,
                    (or any other open lists of autocompleted values:*/
                    closeAllLists();
                });
                a.appendChild(b);
              }
            }
        });
        /*execute a function presses a key on the keyboard:*/
        inp.addEventListener("keydown", function(e) {
            var x = document.getElementById(this.id + "autocomplete-list");
            if (x) x = x.getElementsByTagName("div");
            if (e.keyCode == 40) {
              /*If the arrow DOWN key is pressed,
              increase the currentFocus variable:*/
              currentFocus++;
              /*and and make the current item more visible:*/
              addActive(x);
            } else if (e.keyCode == 38) { //up
              /*If the arrow UP key is pressed,
              decrease the currentFocus variable:*/
              currentFocus--;
              /*and and make the current item more visible:*/
              addActive(x);
            } else if (e.keyCode == 13) {
              /*If the ENTER key is pressed, prevent the form from being submitted,*/
              e.preventDefault();
              if (currentFocus > -1) {
                /*and simulate a click on the "active" item:*/
                if (x) x[currentFocus].click();
              }
            }
        });
        function addActive(x) {
          /*a function to classify an item as "active":*/
          if (!x) return false;
          /*start by removing the "active" class on all items:*/
          removeActive(x);
          if (currentFocus >= x.length) currentFocus = 0;
          if (currentFocus < 0) currentFocus = (x.length - 1);
          /*add class "autocomplete-active":*/
          x[currentFocus].classList.add("autocomplete-active");
        }
        function removeActive(x) {
          /*a function to remove the "active" class from all autocomplete items:*/
          for (var i = 0; i < x.length; i++) {
            x[i].classList.remove("autocomplete-active");
          }
        }
        function closeAllLists(elmnt) {
          /*close all autocomplete lists in the document,
          except the one passed as an argument:*/
          var x = document.getElementsByClassName("autocomplete-items");
          for (var i = 0; i < x.length; i++) {
            if (elmnt != x[i] && elmnt != inp) {
              x[i].parentNode.removeChild(x[i]);
            }
          }
        }
        /*execute a function when someone clicks in the document:*/
        document.addEventListener("click", function (e) {
            closeAllLists(e.target);
        });
      }
      
      /*An array containing all the things we need to search for:*/
    
      var food =["Canada Food","Burger","Pizza","Pasta","China Food","Seafood Hotpot","BahSkewers Barbecue" ,
      "Mapo Tofu","VietNam Food","Banh Can","Banh Mi","Bun Thit Nuong","Banh Xeo","Banh Cuon","Bun Rieu","Taiwan Food",
      "Xiaolongbao","Plain Noodles","Minced Pork Rice","India Food","Chaat","Khaman","Hyderabadi Biryani","Dosa","Rogan Josh","Roti","Korea Food",
      "Bibimbap","Kimchi","Bulgogi","Chickin","Samyetang","Tteokbokki","Drinks","Banana Milk","Beer","Boba Tea","Coca Cola","Matcha Latte","Hot Milk","Dessert",
      "Coconut Cake","Pavlova","Nutella","Lavender Cake","Strawberry Cake","Pineapple Mini Cake"];
      /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
      autocomplete(document.getElementById("myInput"), food);
      </script>

  </body>
   <!-- //Animate On Scroll Library  -->
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</html>

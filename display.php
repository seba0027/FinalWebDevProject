<?php
    include ('./php/connect.php');
    $id = $_GET['product'];
    
    $sqlquery = "SELECT * FROM products WHERE products.id=$id";
   
    $result = $mysqli->query($sqlquery);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $productName = $row["productName"];
          $imagePath = $row["imagePath"];
          $price = $row["price"];
          $rating = $row["rating"];
          $description = $row["description"];
        }
      } else {
        echo "0 results";
      }

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="./css/display.css" class="stylesheet">
      <title><?php echo $productName ?></title>
      
    </head>
    <body>
    
    
    <header>
        <a href="./index.php" class="logo">
          <img src="./images/logo.png" />
        </a>
 
        <ul class="main-menu">
          <li> <a href="index.php">Home</a> </li>
          <li> <a href="#">About Us</a> </li>
          <li> <a href="#">Log in</a> </li>
          <li>
            <a href="#"> <i class="fa fa-shopping-cart fa_custom fa-2x"></i> </a>
          </li>
        </ul>
  
        <!-- <span class="mb-menu-toggle" id="mb-menu-toggle">
          <i class="bx bx-menu"></i>
        </span> -->
    </header>

      <p class="slogan1">
        <a class="nav-link"> </a><em>Savor your favorite food..</em>
      </p>
      <p class="slogan2"> <a class="nav-link"></a><em> Anywhere</em> </p>

     <!-- //search bar -->
     <div class="box">    
    <form>
        <input type="text" name="" placeholder="Search..">
        <input type="submit" name="" value="Search">
    </form>
    </div>
    
    <div class="container">
        <ul class="left">
          <li class="left"><img class="productImage" src="<?php echo ($imagePath);?>"/></li>
        </ul>
        <ul class="right">
            <li class="name"><h1><?php echo $productName ?></h1></li>
            <li id="price_id"class="name"><span id="dollar"><h2 id="dollar">$ </h2><h2 id="lol"><?php echo $price ?></h2></span></li>
            <li id="quant">
              <label for="quantity">Quantity:</label>
              <input type="number" style="position: relative" id="quantity" name="quantity" value="1" min="1" max="30" onchange="priceUpdate()">
            </li>
            <li id="desc_id" class="name"><p><?php echo $description ?></p></li>
        </ul>
    </div>
      
     
    <script src="./js/display.js"></script>
    </body>
    </html>
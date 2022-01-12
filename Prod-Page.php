<?php

$filter = $_POST['filter'];


include ('./php/connect.php');

// if(isset($_POST['submit'])){
//   $selected = $_POST['sort-options'];
//   echo $selected
// }

if(is_null($filter)){
  $sqlquery = "SELECT id, productName, imagePath, price, rating FROM products";
  $result = $mysqli->query($sqlquery);
} else {
  $sqlquery = "SELECT id, productName, imagePath, price, rating FROM products WHERE productName LIKE '%$filter%'";
  $result = $mysqli->query($sqlquery);

  $prods = [];
  while($row = mysqli_fetch_array($result)){
    $prods[] = $row;
  }

  $price = array_column($prods,'price');
  array_multisort($price, SORT_ASC, $prods);

}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/logo.png">
    <title>Global Village</title>
   
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Kirang+Haerang&display=swap"   rel="stylesheet" />

    <link rel="stylesheet" href="./css/bootstrap.min.css">
	<script src="./js/jquery-3.4.1.slim.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./css/Prod-Page.css">

<style>
</style>
</head>
<body>
    <header>
        <a href="./index.php" class="logo">
          <img src="./images/logo.png" />
        </a>
 
        <ul class="main-menu">
          <li> <a href="./index.php">Home</a> </li>
          <li> <a href="#">About Us</a> </li>
          <li> <a href="#">Log in</a> </li>
          <li>
            <a href="#"> <i class="fa fa-shopping-cart fa_custom fa-2x"></i> </a>
          </li>
        </ul>
      </header>

      <p class="slogan1">
        <a class="nav-link"> </a><em>Savor your favorite food..</em>
      </p>
      <p class="slogan2"> <a class="nav-link"></a><em> Anywhere</em> </p>

    <div class="box">
      <!--Yummy yummy...-->
          <input id="myInput" type="text" name="" placeholder="<?php echo $filter ?>" />
          <input type="submit" class="submit-btn" name="" value="Search" />
          </div>


          <div class="box2">
      <!--Yummy yummy...-->
      <form method="POST" action="./Prod-Page.php">
      <label style="color: white" >Sort:</label>
          <select name="sort-options">
              <option value="1">Sort by Price ASC</option>
              <option value="2">Sort by Price DESC</option>
              <option value="3">Sort by Rating ASC</option>
              <option value="4">Sort by Rating DESC</option>
          </select>
          <!-- <input type="submit" name="submit" value="Go"> -->
      </form>
          </div>


          <div class="container">
        <div class="row justify-content-md-center">
            <div class="col">
               

                <!-- <hr> -->
                <div class="row mb-3">
   
              <?php foreach ($prods as $row) { ?>
						  <div class="col-md-4 my-auto">
						<img id="prod_images" class="img-fluid img-thumbnail" src="<?php echo $row[2]; ?>" alt=""/>
            <div class="container">   <a value="<?php echo $row[0] ?>" href="./display.php?product=<?php echo $row[0] ?>" > <div class="overlay"><div class="text"><?php echo $row[1]; ?> <br> Price: $ <?php echo $row[3]; ?> <br> Rating:  <?php echo $row[4]; ?>/5</div></div></a></div>
  
          </div>
						<?php } ?>

                </div>
            </div>
        </div>
    </div>





    
</body>


<script src=".\js\Prod-Page.js"></script>
</html>
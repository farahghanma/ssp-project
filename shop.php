<?php
    
    require_once("connection.php"); 

    $conn = new mysqli($hn, $un, $pw, $db); 
    if ($conn->connect_error) {die($conn->connect_error);}
    //insert into 
    else {
        if(isset($_POST['necklace'])){
            $query = "INSERT INTO shop(itemID, itemName, itemPrice, itemNum) VALUES ( NOT NULL, 'Jordanian Flag Necklace', '15', '1')";
            $result = $conn->query($query); 
            if(!$result) die($conn->error);
        }
        if (isset($_POST['candle'])){
            $query = "INSERT INTO shop(itemID, itemName, itemPrice, itemNum) VALUES ( NOT NULL, 'Candle Holder', '7', '1')";
            $result = $conn->query($query); 
            if(!$result) die($conn->error);
            
        }
        if (isset($_POST['balls'])){
            $query = "INSERT INTO shop(itemID, itemName, itemPrice, itemNum) VALUES ( NOT NULL, ' Marble Balls', '5', '1')";
            $result = $conn->query($query); 
            if(!$result) die($conn->error);
        }
        if (isset($_POST['mugs'])){
            $query = "INSERT INTO shop(itemID, itemName, itemPrice, itemNum) VALUES ( NOT NULL, 'Mosaic Coffee Mugs', '15', '1')";
            $result = $conn->query($query); 
            if(!$result) die($conn->error);
        }
        if (isset($_POST['scarf'])){
            $query = "INSERT INTO shop(itemID, itemName, itemPrice, itemNum) VALUES ( NOT NULL, 'Jordanian Flag Scarf', '8', '1')";
            $result = $conn->query($query); 
            if(!$result) die($conn->error);
        }
        if (isset($_POST['sand'])){
            $query = "INSERT INTO shop(itemID, itemName, itemPrice, itemNum) VALUES ( NOT NULL, 'Sand Bottle', '25', '1')";
            $result = $conn->query($query); 
            if(!$result) die($conn->error);
        }
        
         //deleting 
        if(isset($_POST['Delrow'])){
             $query = "TRUNCATE TABLE shop";
             $result = $conn->query($query); 
             if(!$result) die($conn->error);
             
        }
        
       
    }
    
   
?>



<!DOCTYPE html>
<head>

    
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--BOOTSTRAP Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Including CSS -->
    <link rel="stylesheet" href="shop.css">
    <link rel = "stylesheet" href = "shop_edited.css">

    <!-- Including jQuery -->
    <!-- Using jQuery for the header & burger menu -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- Including JS -->
    <script src="main.js"></script>
	<link rel="icon" href="images/travel-guide.png"><title>Gift Shop</title>
	
	
</head>

<body class="shop" style="background-color:#F5DEB3;" >
    
	<!-- Header --> 
<header class = "header">
      <nav class="navbar navbar-expand-sm sticky-top">
      <!-- Brand -->
             <a  href= "home.html"><img src="images/travel-guide.png" height =50 width =50  id="logo" /></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

      <!-- Links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="home.php#about">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="home.php#sites">Sites</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="shop.html">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="home.php#contact">Contact</a>
        </li>
        </ul>
    </nav>
</header>  

<br>
<br>
<p class="title text-center"> <img src = "images/gift.png" class = "gift" /> Gift Shop <img src = "images/gift.png" class = "gift"/>  </p>
<br>

<form method = "post" action = "shop.php"> 
<!-- Card deck -->
<div class="card-deck">

  <!-- Card -->
  <div class="card sm-2">

    <!--Card image-->
    <div>
      <img class="card-img-top" src="images/jewel1.jpg" alt="Card image cap">
    </div

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title" style = "font-size:25px;">Jordanian Flag Necklace</h4>
      <!--Text-->
      <p id = "price" style = "font-size: 20px; margin-left: 125px;"><strong>15 JOD </strong></p>
      <button type="sumbit" class="btn btn-light-blue btn-md center" style = "margin-left: 105px;" name = "necklace" value = "necklace">  <img src = "images/add.png" height="10px" width="10px"> 
      <strong> Add </strong> </button>

    </div>

  </div>
  <!-- Card -->
  <!-- Card -->
  <div class="card sm-2">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="images/jewel2.jpg" alt="Card image cap">
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title" style = "font-size:25px;"> Candle Holder </h4>
      <!--Text-->
      <p id = "price" style = "font-size: 20px; margin-left: 125px;"><strong>7 JOD</strong> </p>      
      <button type="sumbit" class="btn btn-light-blue btn-md" style = "margin-left: 105px;" name = "candle" value = "candle"> <img src = "images/add.png" height="10px" width="10px"> 
        <strong> Add </strong></button>

    </div>

  </div>
  <!-- Card -->

  <!-- Card -->
  <div class="card ">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="images/jewel3.jpg" alt="Card image cap">
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title" style = "font-size:25px;"> Marble Balls </h4>
      <!--Text-->
      <p id = "price" style = "font-size: 20px; margin-left: 125px;"><strong>5 JOD</strong> </p>
      <button type="sumbit" class="btn btn-light-blue btn-md" style = "margin-left: 105px;" name = "balls" value = "balls"> <img src = "images/add.png" height="10px" width="10px"> 
        <strong> Add </strong></button>

    </div>

  </div>

  <!-- Card -->
 
</div>
<!-- Card deck -->
 <!-- Card deck -->
<div class="card-deck">
 <!-- Card -->
  <div class="card sm-2 ">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="images/jewel4.jpg" alt="Card image cap" height="500px">
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title" style = "font-size:25px;"> Mosaic Coffee Mugs </h4>
      <!--Text-->
      <p id = "price" style = "font-size: 20px; margin-left: 125px;"><strong> 15 JOD </strong></p>
      <button type="sumbit" class="btn btn-light-blue btn-md" style = "margin-left: 105px;" name = "mugs" value = "mugs" > <img src = "images/add.png" height="10px" width="10px"> 
        <strong> Add </strong></button>

    </div>

  </div>
  <!-- Card -->

  <!-- Card -->
  <div class="card sm-2">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="images/jewel5.jpg" alt="Card image cap">
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title" style = "font-size:25px;"> Jordanian Flag Scarf </h4>
      <!--Text-->
       <p id = "price" style = "font-size: 20px; margin-left: 125px;"> <strong>8 JOD</strong> </p>
      <button type="sumbit " class="btn btn-light-blue btn-md" style = "margin-left: 105px;" name = "scarf" value = "scarf"> <img src = "images/add.png" height="10px" width="10px"><strong> Add </strong></button>
    </div>

  </div>
  <!-- Card -->
  <div class="card sm-2">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="images/jewel6.jpg" alt="Card image cap" >
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title" style = "font-size:25px;">Sand Bottle</h4>
      <!--Text-->
       <p id = "price" style = "font-size: 20px; margin-left: 125px;"> <strong> 25 JOD </strong></p>
       <button type="sumbit" class="btn btn-light-blue btn-md" style = "margin-left: 105px;" name = "sand" value = "sand" id= "button"> <img src = "images/add.png" height="10px" width="10px"> 
        <strong> Add </strong>
      </button>

    </div>

  </div>

</div>

<!-- Card deck -->
<div>
</form>


<div class = "container">
  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#cartModal" style = "margin-left: 500px;" width = 100px; value = "View">
    View Cart
  </button>  
</div>


    <?php
        
        $query = "SELECT itemNum, itemName, itemPrice FROM shop"; 
        $result = $conn->query($query); 
        if(!$result) die ($conn->error);
        $rows = $result->num_rows; 
        //$price = $result['itemPrice'];
        $TOTAL = 0;
           
    ?>
    
<div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
            <div class="modal-header text-center border-bottom-0">
                <h5 class=" col-12 modal-title" style = "font-size: 30px;" >
                 <img src= "images/shopping-cart.png" height = "30px" width = "30px" >  Your Shopping Cart  <img src= "images/shopping-cart.png" height = "30px" width = "30px" >
                </h5>
            </div>
            <div class="modal-body">
            
                        <table class="table table-image" style = "font-size: 20px;">
                          <thead class = "theader">
                            <tr style = "font-size: 20px;">
                              <th >Item No. </th>
                              <th >Item Name </th>
                              <th>Price</th>
                              <th> </th>
                            </tr>
                          </thead>
                           <tbody>
                    <?php
                        for ($j = 0 ; $j < $rows ; ++$j) { 
                            echo "<tr>";
                            echo "<td>".($j+1)."</td>";
                            $result->data_seek($j);
                            echo "<td>".$result->fetch_assoc()['itemName']."</td>";
                            $result->data_seek($j);
                            echo "<td>$".$price = $result->fetch_assoc()['itemPrice']."</td>";
                            echo "</tr>";
                            $TOTAL =  $TOTAL + $price;  
                            
                        }  
                       
                    ?>
                       </tbody>
                    </table>
                        <div class="d-flex justify-content-end" >
                          <h5 style = "font-size: 20px; font-weight: bold; margin-right: 20px; ">Total:$<span class="price text-success"> <?php echo $TOTAL ?></span></h5>
                        </div>
            </div>
          <div class="modal-footer border-top-0 d-flex justify-content-between">
            <button type="button" class=" text-center btn btn-secondary" data-dismiss="modal" style = "margin-left:150px;" >Close</button>
            <button type="sumbit" class=" text-center btn btn-success" style = "margin-right:150px;" name = "Delrow" value = "Delrow">Checkout</button>
          </div>
    </div>
  </div>
</div>

<!- Footer Content -->
<footer style="background-color:#FCF3CF;" >
   <a href = "home.php"><img src = "images/travel-guide.png" height= "30px" width="30px"></a>
   Ready to Join Jordan?
</footer>
<section class="footer">
        <h1>Created By Farah & Saba | All Rights Reserved </h1>
</section>

</body>
</html>
<!Footer Ends-->
<?php
$conn->close;
  
?>
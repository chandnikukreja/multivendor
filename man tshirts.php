<!DOCTYPE html>
<html>
<head>
<title>E-Vendor|Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
        <link href='//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'/>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css" > 
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>
</head>
<body>
<div class="indexpage">
        <?php
        include 'include/header.php';
        ?>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/plain-t-shirts-banner.jpg" width="100%">
    </div>

    <div class="item">
    <a href="#">  <img src="images/man tshirt banner.jpg" width="100%"></a>
    </div>

    
  </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/leatest1.png" width="115%">
	   
<a href="tshirt_details1.php" class="btn  btn -default"> View details </a>
<a href="#" class="btn btn-primary">
<i class="fa fa-shopping-cart"></i>   Add to cart
</a>
    </div>
  </div>

  <div class="column">
    <div class="card">
       <img src="images/man_t-shirt1.jpg" width="100%">
	    
<a href="tshirt_details2.php" class="btn  btn -default"> View details </a>
<a href="#" class="btn btn-primary">
<i class="fa fa-shopping-cart"></i>   Add to cart
</a>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/man_t-shirt2.jpg" width="90%">
       
<a href="tshirt_details3.php" class="btn  btn -default"> View details </a>
<a href="#" class="btn btn-primary">
<i class="fa fa-shopping-cart"></i>   Add to cart
</a>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/man_t-shirt3.jpeg" width="90%">
	   
<!--  Another Row   -->
<a href="tshirt_details4.php" class="btn  btn -default"> View details </a>
<a href="#" class="btn btn-primary">
<i class="fa fa-shopping-cart"></i>   Add to cart
</a>
    </div>
  </div>
</div>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/tshirt4.jpeg" width="85%">
	   
<a href="tshirt_details5.php" class="btn  btn -default"> View details </a>
<a href="#" class="btn btn-primary">
<i class="fa fa-shopping-cart"></i>   Add to cart
</a>
    </div>
  </div>

  <div class="column">
    <div class="card">
       <img src="images/tshirt5.jpeg" width="90%">
	    
<a href="tshirt_details6.php" class="btn  btn -default"> View details </a>
<a href="#" class="btn btn-primary">
<i class="fa fa-shopping-cart"></i>   Add to cart
</a>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/tshirt6.jpg" width="100%">
       
<a href="tshirt_details7.php" class="btn  btn -default"> View details </a>
<a href="#" class="btn btn-primary">
<i class="fa fa-shopping-cart"></i>   Add to cart
</a>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/tshirt7.jpeg" width="110%">
	   
<a href="tshirt_details8.php" class="btn  btn -default"> View details </a>
<a href="#" class="btn btn-primary">
<i class="fa fa-shopping-cart"></i>   Add to cart
</a>
    </div>
  </div>
</div>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/tshirt8.jpeg" width="110%">
	   
<a href="tshirt_details9.php" class="btn  btn -default"> View details </a>
<a href="#" class="btn btn-primary">
<i class="fa fa-shopping-cart"></i>   Add to cart
</a>
    </div>
  </div>

  <div class="column">
    <div class="card">
       <img src="images/tshirt9.jpg" width="85%">
	    
<a href="tshirt_details10.php" class="btn  btn -default"> View details </a>
<a href="#" class="btn btn-primary">
<i class="fa fa-shopping-cart"></i>   Add to cart
</a>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/tshirt10.jpg" width="115%">
       
<a href="tshirt_details11.php" class="btn  btn -default"> View details </a>
<a href="#" class="btn btn-primary">
<i class="fa fa-shopping-cart"></i>   Add to cart
</a>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/man_t-shirt.jpg" width="95%">
	   
<a href="tshirt_details12.php" class="btn  btn -default"> View details </a>
<a href="#" class="btn btn-primary">
<i class="fa fa-shopping-cart"></i>   Add to cart 
</a>
    </div>
  </div>
</div>
<?php
        include 'include/footer.php';
        ?>
        </div>
</body>
</html>


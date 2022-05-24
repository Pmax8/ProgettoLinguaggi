<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cryptopedia</title>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Cryptopedia</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Chi Siamo</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Cryptovalute
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Crypto1</a></li>
                  <li><a class="dropdown-item" href="#">Crypto2</a></li>
                  <li><a class="dropdown-item" href="#">Crypto3</a></li>
                  <li><a class="dropdown-item" href="#">Crypto4</a></li>
                  <li><a class="dropdown-item" href="#">Crypto5</a></li>
                  <li><a class="dropdown-item" href="#">Crypto6</a></li>
                  <li><a class="dropdown-item" href="#">Crypto7</a></li>
                  <li><a class="dropdown-item" href="#">Crypto8</a></li>
                  <?php
			session_start();
			if(!isset($_SESSION['name'])){
				echo "<li class='account'><a  href='signup/index.php'>Sign Up</a></li>
					<li class='account'><a  href='login/index.php'>Log In</a></li>";
			}
			else {
				echo "<li><a id='giudizio' href='feedback/index.php'>Give your feedback!</a></li>";
				echo "<li class='account'><a  href='logout/index.php'>Log out</a></li>";
			}
			?>
		</ul>
			<?php
			if(isset($_SESSION['name'])){
				$name=$_SESSION['name'];
				echo "WELCOME $name";
			}
			?>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
            <ul class="navbar-nav justify-content-end">
              <li class="nav-item">
                <a class="nav-link" href="#">Sign up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
              </li>
            </ul>
          </div>
        </div>
       </nav>


       <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="local/bitkanchanara-7cmA9ZL5dDk-unsplash.jpg" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="local/kanchanara-Lta5b8mPytw-unsplash.jpg" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="local/binance-coin-001-scaled.jpg" class="d-block w-100" alt="">
          </div>
         </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
         </button>
       </div> 
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>

 </body>
 </html>
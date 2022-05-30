<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="author" content="Matteo Gargaro and Massimiliano Picone">
  <meta charset='utf-8'>
  <title>Cryptopedia</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>


  <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Cryptopedia</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Local/ChiSiamo/index.php">Chi Siamo</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Cryptovalute
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="Crypto/Binance Coin.html">Binance Coin</a></li>
                  <li><a class="dropdown-item" href="Crypto/Bitcoin.html">Bitcoin</a></li>
                  <li><a class="dropdown-item" href="Crypto/Cardano.html">Cardano</a></li>
                  <li><a class="dropdown-item" href="Crypto/Ethereum.html">Ethereum</a></li>
                  <li><a class="dropdown-item" href="Crypto/Ripple.html">Ripple</a></li>
                  <li><a class="dropdown-item" href="Crypto/Tether.html">Tether</a></li>
                  <li><a class="dropdown-item" href="Crypto/USD Coin.html">USD Coin</a></li>
                </ul>
              </li>
            </ul>
            <ul class="navbar-nav justify-content-end">
              <li class="nav-item">
                <?php
			          session_start();
			          if(!isset($_SESSION['name'])){
			       	    echo "<li class='account'><a  class='nav-link' href='User/SignUp/index.php'> Sign Up </a></li>
                  <li></li>
				       	  <li class='account'><a class='nav-link' href='User/Login/index.php'> Log In </a></li>";
		    	      }
		    	      else {
			       	    echo "<li><a id='giudizio' class='nav-link' href='Local/Feedback/index.php'>Give your feedback!</a></li>";
				          echo "<li class='account'><a class='nav-link' href='User/Logout/index.php'>Log out</a></li>";
			          }
			          ?>

			          <?php
			          if(isset($_SESSION['name'])){
				          $name=$_SESSION['name'];
				          echo "WELCOME $name";
			          }
			          ?>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  <!--NAVBAR-END-->

  <div class="container-fluid">
    <h1 id="HomeTitle" style="text-align: center;">CryptoPedia</h1>
    <h2 style="text-align: center;">Know Your Crypto's</h2>
  </div>


<div class="container-md" id="main-div" style="background-color:black">
 
 
  <!--CAROSELLO-->
<div class="container" id="Cardiv">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 3"></button>
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
          <div class="carousel-item">
            <img src="local/binance-coin-001-scaled.jpg" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="local/binance-coin-001-scaled.jpg" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="local/binance-coin-001-scaled.jpg" class="d-block w-100" alt="">
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
</div>
  <!--CAROSELLO-END-->

  
  <!--GRID-->
  <div class="row" style="padding-top: 100px" >
    <div class="col-lg-4 col-md-6">
      <h1>TESTO</h1>
      <P>
        testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo 
        testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo 
        testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo 
        testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo 
      </P>
    </div>
    <div class="col-lg-4 col-md-6">
      <h1>TESTO</h1>
      <P>
        testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo 
        testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo 
        testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo 
        testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo 
      </P>
  </div>
    <div class="col-lg-4 col-md-12">
      <h1>TESTO</h1>
      <P>
        testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo 
        testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo 
        testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo 
        testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo 
      </P>
    </div>
  </div>
  <!--GRID-END-->
  
  <!--FOOTER-->
	<footer class="footer">
		<div class="container">
		  <p class="float-left" style="color: white;">&copy; 2022 CryptoPedia | Web Languages and Technologies' project, by M. Gargaro and M. Picone</p>
		</div>
	</footer>
	<!--FOOTER-ENDS-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</div>
</body>
</html>
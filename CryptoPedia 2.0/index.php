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
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
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
                <li><a class="dropdown-item" href="Crypto/Binance Coin.php">Binance Coin</a></li>
                <li><a class="dropdown-item" href="Crypto/Bitcoin.php">Bitcoin</a></li>
                <li><a class="dropdown-item" href="Crypto/Cardano.php">Cardano</a></li>
                <li><a class="dropdown-item" href="Crypto/Ethereum.php">Ethereum</a></li>
                <li><a class="dropdown-item" href="Crypto/Ripple.php">Ripple</a></li>
                <li><a class="dropdown-item" href="Crypto/Tether.php">Tether</a></li>
                <li><a class="dropdown-item" href="Crypto/USD Coin.php">USD Coin</a></li>
                </ul>
              </li>
            </ul>
            <ul class="navbar-nav justify-content-end">
              <li class="nav-item">
                <?php
			          session_start();
			          if(!isset($_SESSION['name'])){
			       	    echo "<li class='account'><a  class='nav-link' href='User/SignUp/index.php'> Sign Up </a></li>";
				       	  echo "<li class='account'><a class='nav-link' href='User/Login/index.php'> Log In </a></li>";
		    	      }
		    	      else {
			       	    echo "<li><a id='giudizio' class='nav-link' href='Local/Feedback/index.php'>Give your feedback!</a></li>";
				          echo "<li class='account'><a class='nav-link' href='User/Logout/index.php'>Log out</a></li>";
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
    <h2 id="subtitle" style="text-align: center;">Know Your Cryptos</h2>
  </div>


<div class="container-md" id="main-div">
 
 <!--GRID-->
 <div class="row" style="padding-left:2%;" >
    <div class="col-lg-4 col-md-6">
      <h1 id="grid-title">Che Cos'?? CryptoPedia?</h1>
      <P id="grid-info">
      CryptoPedia ?? un sito creato da due studenti di Ingegneria Informatica e Automatica dell???Universit??
      Sapienza di Roma, ed ha come scopo quello di introdurre alcune Principali CryptoValute a chi vuole addentrarsi in questo Universo.
      </P>
    </div>
    <div class="col-lg-4 col-md-6">
      <h1 id="grid-title">Intoduzione alle Crypto</h1>
      <P id="grid-info">
      Cosa sono le criptovalute? Dal nome si evince gi?? qualcosa: le criptovalute (Cryptocurrency in inglese)
      sono delle monete digitali utilizzate per fare acquisti; vengono anche chiamate criptomonete. Queste criptovalute
      godono della tecnologia Blockchain che garantisce un sistema di protezione inattaccabile verso queste monete digitali:
      per questo vengono chiamate criptovalute. Inoltre i pagamenti effettuati con le criptovalute sono difficilmente rintracciabili,
      garantendo l???anonimato anche a persone maleintenzionate.
      </P>
    </div>
    <div class="col-lg-4 col-md-12">
      <h1 id="grid-title">Cosa sono le Blockchain?</h1>
        <section>
          <div class="container">
            <div class="embed-responsive">
              <iframe preload="none" src="Crypto/vid/blockchainintro.mp4" width="100%" height="240" scrolling="no" frameborder="0"></iframe>
            </div>
          </div>
        </section>
    </div>
  </div>
  <!--GRID-END-->

  <!--CAROSELLO-->
<div class="container-fluid" id="Cardiv">
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
            <a href="Crypto/Ethereum.php">
            <img src="local/bitkanchanara-7cmA9ZL5dDk-unsplash.jpg" class="d-block w-100" alt="">
            </a>
            <div class="carousel-caption d-none d-md-block vontainer-fluid" id="car-caption">
              <h2>Ethereum</h2>
            </div>
          </div>
          <div class="carousel-item">
            <a href="Crypto/Bitcoin.php">
            <img src="local/kanchanara-Lta5b8mPytw-unsplash.jpg" class="d-block w-100" alt="">
            </a>
            <div class="carousel-caption d-none d-md-block" id="car-caption">
              <h2>Bitcoin</h2>
            </div>
          </div>
          <div class="carousel-item">
            <a href="Crypto/Binance Coin.php">
            <img src="Crypto/Im/BinanceCar.png" class="d-block w-100" alt="">
            </a>
            <div class="carousel-caption d-none d-md-block" id="car-caption">
              <h2>Binance Coin</h2>
            </div>
          </div>
          <div class="carousel-item">
            <a href="Crypto/Cardano.php">
            <img src="Crypto/Im/CardanoCar.jpg" class="d-block w-100" alt="">
            </a>
            <div class="carousel-caption d-none d-md-block" id="car-caption">
              <h2>Cardano</h2>
            </div>
          </div>
          <div class="carousel-item">
            <a href="Crypto/Ripple.php">
            <img src="Crypto/Im/RippleCar.jpg" class="d-block w-100" alt="">
            </a>
            <div class="carousel-caption d-none d-md-block" id="car-caption">
              <h2>Ripple</h2>
            </div>
          </div>
          <div class="carousel-item">
            <a href="Crypto/Tether.php">
            <img src="Crypto/Im/tethercar.jpg" class="d-block w-100" alt="">
            </a>
            <div class="carousel-caption d-none d-md-block" id="car-caption">
              <h2>Tether</h2>
            </div>
          </div>
          <div class="carousel-item">
            <a href="Crypto/USD Coin.php">
            <img src="Crypto/Im/usdcoincar.png" class="d-block w-100" alt="">
            </a>
            <div class="carousel-caption d-none d-md-block" id="car-caption">
              <h2>USD Coin</h2>
            </div>
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
</div>

  
  <!--FOOTER-->
	<footer class="footer">
		<div class="container">
		  <p class="float-left" style="color: white; padding-left:20%;">&copy; 2022 CryptoPedia | Web Languages and Technologies' project, by M. Gargaro and M. Picone</p>
		</div>
	</footer>
	<!--FOOTER-ENDS-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="author" content="Matteo Gargaro and Massimiliano Picone">
  <meta charset='utf-8'>
  <title>USD Coin</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../style.css">
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
            <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Local/ChiSiamo/index.php">Chi Siamo</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Cryptovalute
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="Binance Coin.php">Binance Coin</a></li>
              <li><a class="dropdown-item" href="Bitcoin.php">Bitcoin</a></li>
              <li><a class="dropdown-item" href="Cardano.php">Cardano</a></li>
              <li><a class="dropdown-item" href="Ethereum.php">Ethereum</a></li>
              <li><a class="dropdown-item" href="Ripple.php">Ripple</a></li>
              <li><a class="dropdown-item" href="Tether.php">Tether</a></li>
              <li><a class="dropdown-item" href="#">USD Coin</a></li>
            </ul>
          </li>
        </ul>
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item">
            <?php
            session_start();
            if(!isset($_SESSION['name'])){
             echo "<li class='account'><a  class='nav-link' href='../User/SignUp/index.php'> Sign Up </a></li>
              <li></li>
               <li class='account'><a class='nav-link' href='../User/Login/index.php'> Log In </a></li>";
            }
            else {
              echo "<li><a id='giudizio' class='nav-link' href='../Local/Feedback/index.php'>Give your feedback!</a></li>";
              echo "<li class='account'><a class='nav-link' href='../User/Logout/index.php'>Log out</a></li>";
            }
            ?>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!--NAVBAR-END-->

<div class="container">
  <img src="Im/USDCoinLogo.png" id="cryptoLogo">
</div>
<div class="container-md" id="main-div">

  <!--GRID-->
  <div class="row">
    <div class="col-md-12" align="center">
      <h1 id="cryptotitle">USD Coin</h1>
    </div>
    
    
    <hr class="featurette-divider">
    
    
    <div class="row featurette">
      <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset">
        <h2 id="info-title" class="featurette-heading">Creatore</h2>
          <p id="info" class="lead">testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo </p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-fluid mx-auto" src="Im/USDC.jpg" alt="Generic placeholder image">
      </div>
  </div>
    
    
  <hr class="featurette-divider">
    
    
  <div class="row featurette">
    <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset" style="bottom: 40px;">
      <h2 id="info-title">roba</h2>
      <p id="info" class="lead">roba roba roba roba roba roba roba roba roba roba roba roba roba roba roba roba roba roba roba roba roba roba roba roba roba roba roba roba roba roba roba roba roba roba roba"</p>
    </div>
    <div class="col-md-5 order-md-1">
      <img class="featurette-image img-fluid mx-auto" src="Im/USDCPredictions.png" alt="Generic placeholder image">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="col-lg-4 col-md-6">
    <h1 id="grid-title">TESTO</h1>
    <P id="grid-info">
        testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo 
        testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo 
        testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo 
        testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo 
    </P>
  </div>
  <div class="col-lg-4 col-md-6">
    <h1 id="grid-title">TESTO</h1>
    <P id="grid-info">
      testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo 
      testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo 
      testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo 
      testo testo testo testo testo testo testo testo testo testo testo testo testo testo testo 
    </P>
  </div>
  <div class="col-lg-4 col-md-12">
    <h2 id="grid-link">Controlla l'Andamento in Tempo Reale</h2>
  </div>
  </div>
  <!--GRID-END-->
  </div>
  <!--FOOTER-->
	<footer class="footer">
		<div class="container">
		  <p class="float-left" style="color: white;">&copy; 2022 CryptoPedia | Web Languages and Technologies' project, by M. Gargaro and M. Picone</p>
		</div>
	</footer>
	<!--FOOTER-ENDS-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>


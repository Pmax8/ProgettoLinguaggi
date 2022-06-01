<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="author" content="Matteo Gargaro and Massimiliano Picone">
  <meta charset='utf-8'>
  <title>Bitcoin</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../style.css">
</head>
<body style="padding-top:10px;">


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
              <li><a class="dropdown-item" href="#">Bitcoin</a></li>
              <li><a class="dropdown-item" href="Cardano.php">Cardano</a></li>
              <li><a class="dropdown-item" href="Ethereum.php">Ethereum</a></li>
              <li><a class="dropdown-item" href="Ripple.php">Ripple</a></li>
              <li><a class="dropdown-item" href="Tether.php">Tether</a></li>
              <li><a class="dropdown-item" href="USD Coin.php">USD Coin</a></li>
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

<div class="container" id="cryptoLogo">
  <img src="Im/BitcoinLogo.png" id="cryptoLogo">
</div>
<div class="container-md" id="main-div">

  <div class="col-md-12" align="center">
    <h1 id="cryptotitle">Bitcoin</h1>
  </div>
  <hr class="featurette-divider">
  <!--GRID-->
  <div class="row">
    
    
    
    
    
    
    <div class="row featurette">
      <div class="col-md-7">
        <h2 id="info-title" class="featurette-heading">Che Cos'è?</h2>
          <p id="info" class="lead">Il Bitcoin è una moneta virtuale creata nel 2009 creata da uno o più hacker
             con lo pseudonimo Satoshi Nakamoto, che sviluppò un'idea da lui stesso presentata su Internet a fine 2008.</p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-fluid mx-auto" src="Im/Bitcoin.jpg" alt="Generic placeholder image">
      </div>
  </div>
    
    
  <hr class="featurette-divider">
    
    
  <div class="row featurette">
    <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset" style="bottom: 40px;">
      <h2 id="info-title">Come funziona?</h2>
      <p id="info" class="lead">Diversamente dalle altre valute il Bitcoin non ha dietro una Banca centrale che distribuisce nuova
        moneta ma si basa fondamentalmente su due principi: un network di nodi, cioè di pc, che la gestiscono in modalità
        distribuita, peer-to-peer; e l'uso di una forte crittografia per validare e rendere sicure le transazioni. I Bitcoin
        disponibili in rete sono 21 milioni mentre quelli effettivamente in circolazione sono circa 9 milioni."</p>
    </div>
    <div class="col-md-5 order-md-1">
      <img class="featurette-image img-fluid mx-auto" src="Im/BitcoinPredictions.jpg" alt="Generic placeholder image">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row">
  <div class="col-lg-4 col-md-6">
    <h1 id="grid-title">Andamento Economico</h1>
    <P id="grid-info">
    Il valore del Bitcoin è passato da 0 (nel 2009), a 1200 (Novembre 2019) fino a 32000
    dollari (Maggio 2022). Secondo il Financial
    Times il volume del bitcoin arriva a sfiorare i 15.500.000.000 €.
    </P>
  </div>
  <div class="col-lg-4 col-md-6">
    <h1 id="grid-title">Controversie</h1>
    <P id="grid-info">
    In uno studio accademico pubblicato nel 2018 su Nature è stato stimato che l'anidride carbonica
     prodotta dal solo Bitcoin causerà un aumento della temperatura globale di oltre 2 gradi Celsius in meno di 3 decadi 
     dato che, secondo diverse testate indipendenti, solo il 40% dell'energia consumata dalle cryptovalute proviene da fonti rinnovabili,
      mentre il restante 60% proviene da combustibili fossili.  
    </P>
  </div>
  <div class="col-lg-4 col-md-12">
    <a href="https://coinmarketcap.com/it/currencies/bitcoin/" target="blank">
    <h2 id="grid-link">Controlla l'Andamento in Tempo Reale</h2>
    </a>
  </div>
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
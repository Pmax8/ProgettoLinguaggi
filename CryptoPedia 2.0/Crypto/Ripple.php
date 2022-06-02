<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="author" content="Matteo Gargaro and Massimiliano Picone">
  <meta charset='utf-8'>
  <title>Ripple</title>
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
              <li><a class="dropdown-item" href="#">Ripple</a></li>
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

<div class="container">
  <img src="Im/RippleLogo.png" id="cryptoLogo">
</div>
<div class="container-md" id="main-div">

  <!--GRID-->
  <div class="row">
    <div class="col-md-12" align="center">
      <h1 id="cryptotitle">Ripple (XRP)</h1>
    </div>
    
    
    <hr class="featurette-divider">
    
    
    <div class="row featurette">
      <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset">
        <h2 id="info-title" class="featurette-heading">Cos'è</h2>
          <p id="info" class="lead">
          Come noto, Ripple è una criptovaluta. L’aspetto però più interessante di Ripple è la sua rete e gli elementi che la compongono.
          In totale se ne contano tre: la valuta digitale (XRP), la borsa e un network di pagamenti. Altri due elementi fondanti della criptovaluta
          in questione sono Ripple Consensus e Ripple Consensus Ledger. Il primo è l’algoritmo che disciplina tutte le transizioni che avvengono nella rete,
          il secondo invece il registro dove quest’ultime vengono memorizzate e archiviate. Chi aderisce alla rete Ripple si assicura la possibilità di trasferire il denaro in valute diverse.
          </p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-fluid mx-auto" src="Im/Ripple.png" alt="Generic placeholder image">
      </div>
  </div>
    
    
  <hr class="featurette-divider">
    
    
  <div class="row featurette">
    <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset" style="bottom: 40px;">
      <h2 id="info-title">Come è Nato</h2>
      <p id="info" class="lead">Nasce nel 2013 a San Francisco, all’interno dei Ripple Labs, dove continua a essere sviluppata.
      Con il termine Ripple si intende anche la rete che sta alla base della criptovaluta. Al termine dell’anno 2017 raggiunge il
      massimo valore di capitalizzazione azionaria nella sua storia, superiore a 100 miliardi di dollari.
      I fondatori di Ripple sono Jed McCaleb e Chris Larsen. Con la creazione della criptovaluta e rete Ripple, McCaleb e Larsen hanno
      voluto introdurre nel settore delle criptomonete un nuovo soggetto capace di eliminare le criticità presenti in Bitcoin.</p>
    </div>
    <div class="col-md-5 order-md-1">
      <img class="featurette-image img-fluid mx-auto" src="Im/RipplePredictions.jpg" alt="Generic placeholder image">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="col-lg-4 col-md-6">
    <h1 id="grid-title">Ripple Vs Bitcoin</h1>
    <P id="grid-info">
    Ripple e Bitcoin nascono come due progetti diversi e questo è il motivo per il quale le differenze fra le due criptovalute sono numerose.
    La principale caratteristica che differenzia Ripple da Bitcoin è la sua natura finanziaria. Al momento della creazione di Ripple, i fondatori
    Larsen e McCaleb hanno guardato con estremo interesse a un eventuale partnership con gli istituti bancari e finanziari.
    </P>
  </div>
  <div class="col-lg-4 col-md-6">
    <h1 id="grid-title">XRP</h1>
    <P id="grid-info">
    XRP è la valuta nativa della rete Ripple ed esiste solamente in questi sistemi. <br>
    XRP ha avuto un valore inferiore a €1,00 fino al 21 dicembre 2017, il 4 gennaio 2018 ha raggiunto il massimo storico di €3,23. Il valore al 1 settembre 2021 è €1,01
    Negli ultimi 12 mesi il valore di XRP è aumentato di oltre il 400%
    </P>
  </div>
  <div class="col-lg-4 col-md-12">
  <a href="https://coinmarketcap.com/it/currencies/xrp/" target="blank">
    <h2 id="grid-link">Controlla l'Andamento in Tempo Reale</h2>
  </a>
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


<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="author" content="Matteo Gargaro and Massimiliano Picone">
  <meta charset='utf-8'>
  <title>Ethereum</title>
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
              <li><a class="dropdown-item" href="#">Ethereum</a></li>
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

<div class="container">
  <img src="Im/EthereumLogo.png" id="cryptoLogo">
</div>
<div class="container-md" id="main-div">

  <!--GRID-->
  <div class="row">
    <div class="col-md-12" align="center">
      <h1 id="cryptotitle">Ethereum</h1>
    </div>
    
    
    <hr class="featurette-divider">
    
    
    <div class="row featurette">
      <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset">
        <h2 id="info-title" class="featurette-heading">Cos'è?</h2>
          <p id="info" class="lead">
          Dopo la nascita di Bitcoin, sono state numerose le criptovalute create con lo scopo di raggiungere gli stessi successi.
          Alcune sono state un fallimento, altre sono riuscite a ritagliarsi il loro spazio all’interno dell’economia mondiale.
          Tra queste, non si può non citare Ethereum che, grazie ad una nuova blockchain, sta avendo un successo non indifferente.
          Il valore della moneta, denominata Ether, è in continua crescita e ha già raggiunto traguardi importanti.
          </p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-fluid mx-auto" src="Im/Ethereum.png" alt="Generic placeholder image">
      </div>
  </div>
    
    
  <hr class="featurette-divider">
    
    
  <div class="row featurette">
    <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset" style="bottom: 40px;">
      <h2 id="info-title">Come è nata</h2>
      <p id="info" class="lead">
      Ethereum viene attualmente considerata la principale concorrente del Bitcoin. La sua storia inizia nel 2015 e alla base della sua invenzione
      ci sono il genio e l’intuizione di Vitalik Buterin. Questo giovane programmatore abbandonò gli studi universitari per dedicarsi allo sviluppo della criptovaluta.
      Ethereum, esattamente come il bitcoin, è una criptovaluta che non prevede il controllo da parte di autorità bancarie o istituzionali. Tutti i dati della blockchain
      sono pubblici. Ogni volta che si avvia un programma, nessuno ha la possibilità né di modificarlo, né di fermarlo.
      </p>
    </div>
    <div class="col-md-5 order-md-1">
      <img class="featurette-image img-fluid mx-auto" src="Im/EthereumPredictions.jpeg" alt="Generic placeholder image">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="col-lg-4 col-md-6">
    <h1 id="grid-title">Caratteristiche</h1>
    <P id="grid-info">
      La principale caratteristica che identifica Ethereum è la possibilità di creare e diffondere smart contract all’interno della rete.
      Questi contratti intelligenti consentono di scambiare denaro, titoli azionari o altri valori in maniera assolutamente trasparente,
      senza dover richiedere l’intervento da parte di intermediari esterni.
    </P>
  </div>
  <div class="col-lg-4 col-md-6">
    <h1 id="grid-title">Storia delle quotazioni</h1>
    <P id="grid-info">
    Il prezzo iniziale di un singolo Ether è stato di circa un euro. Per i primi della sua esistenza,
    a causa dello scarso utilizzo e della bassa notorietà, il valore è rimasto quasi sempre costante. Il primo picco si può rilevare
    il 12 giugno 2017, dove Ethereum arrivò ad essere quotato ben 356 euro! In soli tre mesi il valore è cresciuto di 7 volte. Nel periodo successivo,
    a causa dell’alta volatilità che caratterizza tutte le criptovalute, il valore è stato altalenante. Nel mese di novembre, la quotazione ha ricominciato
    a salire in maniera costante, arrivando ad un nuovo record di oltre 440 euro.
    </P>
  </div>
  <div class="col-lg-4 col-md-12">
  <a href="https://coinmarketcap.com/it/currencies/ethereum/" target="blank">
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


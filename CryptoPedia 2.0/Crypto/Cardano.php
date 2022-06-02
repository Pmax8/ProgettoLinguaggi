<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="author" content="Matteo Gargaro and Massimiliano Picone">
  <meta charset='utf-8'>
  <title>Cardano</title>
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
              <li><a class="dropdown-item" href="#">Cardano</a></li>
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

<div class="container">
  <img src="Im/CardanoLogo.png" id="cryptoLogo">
</div>
<div class="container-md" id="main-div">

  <!--GRID-->
  <div class="row">
    <div class="col-md-12" align="center">
      <h1 id="cryptotitle">Cardano</h1>
    </div>
    
    
    <hr class="featurette-divider">
    
    
    <div class="row featurette">
      <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset">
        <h2 id="info-title" class="featurette-heading">Che cos'è?</h2>
          <p id="info" class="lead">
          Cardano è una piattaforma blockchain proof-of-stake: la prima ad essere fondata sulla ricerca
          peer-reviewed e sviluppata attraverso metodi basati sull'evidenza. Combina tecnologie all'avanguardia
          per fornire sicurezza e sostenibilità senza precedenti ad applicazioni, sistemi e società decentralizzate.<br>
          "Cardano esiste per ridistribuire il potere dalle strutture non responsabili ai margini agli individui ed essere una forza abilitante per cambiamenti e progressi positivi."
            </p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-fluid mx-auto" src="Im/Cardano.jpg" alt="Generic placeholder image">
      </div>
  </div>
    
    
  <hr class="featurette-divider">
    
    
  <div class="row featurette">
    <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset" style="bottom: 40px;">
      <h2 id="info-title">Come Nasce</h2>
      <p id="info" class="lead">
      Cardano nasce come criptovaluta a modo suo rivoluzionaria, poiché creata da scienziati. nasce per unire in un unico sistema il meglio dei Bitcoin (deposito di valore) e degli Ethereum (contratti smart).
      Cardano è però il nome della piattaforma, mentre il nome per la criptovaluta in se è ADA. <br>
      La scelta del nome Cardano è probabilmente un omaggio allo studioso italiano Girolamo Cardano (1501 – 1576), scienziato a tuttotondo e, a modo suo scommettitore (in quanto appassionato di calcolo della probabilità, del cui fu praticamente il principale fondatore).
      </p>
    </div>
    <div class="col-md-5 order-md-1">
      <img class="featurette-image img-fluid mx-auto" src="Im/CardanoPredictions.jpg" alt="Generic placeholder image">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="col-lg-4 col-md-6">
    <h1 id="grid-title">Cardano Vs Ethereum</h1>
    <P id="grid-info">
    Cardano è stato fondato da uno dei padri di Ethereum; un Charles Hoskinson appena fuoriuscito dalla su vecchia creatura poiché la sua “visione” non era più quella propria di Ethereum.
    Cardano, proprio come Ethereum, a differenza degli altri sistemi fondati le maggiori criptovalute, presenta un meccanismo per la creazione di smart contracts.
    </P>
  </div>
  <div class="col-lg-4 col-md-6">
    <h1 id="grid-title">Figlia di Più Organizzazioni</h1>
    <P id="grid-info">
    Tre grandi organizzazioni supervisionano lo sviluppo del progetto e del suo ecosistema: Input Output Hong Kong (IOHK), Emurgo e la Fondazione Cardano. <br>
    -	IOHK è una società di scienza e ingegneria che ha come scopo principale quello di affrontare il lato accademico e di ricerca.<br>
    -	La Cardano Foundation, un’entità senza scopo di lucro, supervisiona lo sviluppo e la crescita dell’ecosistema e garantisce la responsabilità degli stakeholder. <br>
    -	Emurgo, un’incubator con sede in Giappone, è un’impresa a scopo di lucro che sta promuovendo l’adozione di Cardano e del suo ecosistema attraverso iniziative commerciali.
 
    </P>
  </div>
  <div class="col-lg-4 col-md-12">
  <a href="https://coinmarketcap.com/it/currencies/cardano/" target="blank">
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


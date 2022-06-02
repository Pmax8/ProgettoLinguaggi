<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="author" content="Matteo Gargaro and Massimiliano Picone">
  <meta charset='utf-8'>
  <title>Tether</title>
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
              <li><a class="dropdown-item" href="#">Tether</a></li>
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
  <img src="Im/TetherLogo.png" id="cryptoLogo">
</div>
<div class="container-md" id="main-div">

  <!--GRID-->
  <div class="row">
    <div class="col-md-12" align="center">
      <h1 id="cryptotitle">Tether</h1>
    </div>
    
    
    <hr class="featurette-divider">
    
    
    <div class="row featurette">
      <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset">
        <h2 id="info-title" class="featurette-heading">Cos'è?</h2>
          <p id="info" class="lead">
          Lanciata nel 2014, Tether è una piattaforma abilitata alla blockchain progettata per facilitare l'uso di valute legali in modo digitale.
          Tether lavora per sconvolgere il sistema finanziario convenzionale attraverso un approccio più moderno al denaro. Tether ha fatto progressi
          offrendo ai clienti la possibilità di effettuare transazioni con le valute tradizionali attraverso la blockchain, senza la volatilità e la complessità
          intrinseche tipicamente associate a una valuta digitale.
          </p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-fluid mx-auto" src="Im/Tether.jpg" alt="Generic placeholder image">
      </div>
  </div>
    
    
  <hr class="featurette-divider">
    
    
  <div class="row featurette">
    <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset" style="bottom: 40px;">
      <h2 id="info-title">Prezzo e Quotazione</h2>
      <p id="info" class="lead">li stablecoin hanno un prezzo che è ancorato al prezzo di un’altra valuta, merce o criptoasset, in modo che la sua volatilità rimanga bassa.
      In questo caso, il prezzo di Tether è ancorato al prezzo del dollaro USA, quindi il suo valore fluttua poco o niente.
      È stato creato per mantenere un rapporto di valore 1:1 con l’USD, in modo che il suo prezzo sarà sempre molto vicino a 1,00 USD,
      rendendolo attraente per i commercianti che cercano di investire in attività attraverso un token e non la valuta fiat.
      Questa è una delle principali differenze tra una stablecoin e il resto delle criptovalute il cui prezzo è variabile e si basa su domanda e offerta.
      </p>
    </div>
    <div class="col-md-5 order-md-1">
      <img class="featurette-image img-fluid mx-auto" src="Im/TetherPredictions.jpg" alt="Generic placeholder image">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="col-lg-4 col-md-6">
    <h1 id="grid-title">Pericolo Latente</h1>
    <P id="grid-info">
    Tether è la terza criptovaluta più grande del pianeta, dietro solo a ethereum e bitcoin per capitalizzazione di mercato ed è,
    ad oggi, la valuta ponte per eccellenza. L'USDT copia il dollaro, in eterna parità, quindi tutto ciò che avete in tether non perderà
    valore rispetto alla moneta FIAT. Ma ci sono più di alcuni che pensano che questa teoria si sta gradualmente sgretolando e, poiché il suo peso è così
    importante nel mercato, molti analisti stanno già avvertendo il rischio di un crollo generale se il progetto cade.
    </P>
  </div>
  <div class="col-lg-4 col-md-6">
    <h1 id="grid-title">Valuta non Anonima</h1>
    <P id="grid-info">
    Non è una moneta anonima. Il fatto di dover fare un deposito bancario per creare i token elimina la privacy e mette i tuoi dati nelle mani di un’azienda.
    </P>
  </div>
  <div class="col-lg-4 col-md-12">
  <a href="https://coinmarketcap.com/it/currencies/tether/" target="blank">
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


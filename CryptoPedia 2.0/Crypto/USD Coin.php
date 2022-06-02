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
        <h2 id="info-title" class="featurette-heading">Cos'è?</h2>
          <p id="info" class="lead">
          USD Coin è uno stable coin, ovvero una criptovaluta che ha lo stesso valore di una valuta classica, in questo caso il Dollaro USA.
          Ad oggi è inoltre lo stable coin gestito direttamente dall’exchange Coinbase e Coinbase PRO, uno dei più importanti exchange al mondo.
          </p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-fluid mx-auto" src="Im/USDC.jpg" alt="Generic placeholder image">
      </div>
  </div>
    
    
  <hr class="featurette-divider">
    
    
  <div class="row featurette">
    <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset" style="bottom: 40px;">
      <h2 id="info-title">A Cosa Serve?</h2>
      <p id="info" class="lead">
      Pertanto il suo primo uso è quello di fare da controparte nelle negoziazioni che avvengono all’interno dei principali exchange.
      Tuttavia i progetti, soprattutto di Coinbase sono molto più ampi. Punta ad utilizzarla come mezzo di pagamento, offrendo wallet gratuiti e soprattutto la possibilità
      a tutti di scambiarsi una cripto dal valore stabile espresso in dollari senza le lungaggini e i costi che sono invece collegati al banking classico.
      </p>
    </div>
    <div class="col-md-5 order-md-1">
      <img class="featurette-image img-fluid mx-auto" src="Im/USDCPredictions.png" alt="Generic placeholder image">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="col-lg-4 col-md-6">
    <h1 id="grid-title">Dollaro Programmabile</h1>
    <P id="grid-info">
    L'essere programmabile apre un nuovo mondo di applicazioni e attività: gli sviluppatori possono creare conti
    per custodire denaro con una sola riga di codice, i prestiti sono più veloci, economici e chiari, i pagamenti (inclusi gli stipendi)
    sono più rapidi e convenienti e inoltre consente il crowdfunding globale e donazioni in beneficenza trasparenti e stabili. 
    </P>
  </div>
  <div class="col-lg-4 col-md-6">
    <h1 id="grid-title">Rischi?</h1>
    <P id="grid-info">
    Il rischio è che quanto affermato da Coinbase sia falso. Ma obiettivamente,
    tenendo conto dell’ottima reputazione di cui gode questa società, la cosa sembrerebbe essere piuttosto remota.
    Inoltre i beni che sono immobilizzati a garanzia del valore di USDC sono verificati periodicamente da società terze, che ne confermano la consistenza.
    Siamo pertanto davanti a qualcosa di estremamente solido, almeno per il momento.
    </P>
  </div>
  <div class="col-lg-4 col-md-12">
  <a href="https://coinmarketcap.com/it/currencies/usd-coin/" target="blank">
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


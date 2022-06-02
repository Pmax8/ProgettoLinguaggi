<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="author" content="Matteo Gargaro and Massimiliano Picone">
  <meta charset='utf-8'>
  <title>Binance Coin</title>
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
              <li><a class="dropdown-item" href="#">Binance Coin</a></li>
              <li><a class="dropdown-item" href="Bitcoin.php">Bitcoin</a></li>
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

<div class="container">
  <img src="Im/BinanceLogo.png" id="cryptoLogo">
</div>
<div class="container-md" id="main-div">

  <!--GRID-->
  <div class="row">
    <div class="col-md-12" align="center">
      <h1 id="cryptotitle">Binance Coin</h1>
    </div>
    
    
    <hr class="featurette-divider">
    
    
    <div class="row featurette">
      <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset">
        <h2 id="info-title" class="featurette-heading">Che Cos'è?</h2>
          <p id="info" class="lead">Binance Coin è la criptovaluta ufficiale dell’omonimo exchange cinese,
             è nata nel 2017 con lo scopo di accedere a tutti i servizi di Binance ad un prezzo ridotto.
              In particolare, comprando i token si aveva la possibilità di ridurre drasticamente le commissioni
               da riconoscere all’exchange quando si scambiano criptovalute e denaro reale. </p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-fluid mx-auto" src="Im/Bnb.jpg" alt="Generic placeholder image">
      </div>
  </div>
    
    
  <hr class="featurette-divider">
    
    
  <div class="row featurette">
    <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset" style="bottom: 40px;">
      <h2 id="info-title">Il Successo Di Binance Coin</h2>
      <p id="info" class="lead">Le ragioni del successo vanno individuate nel fatto che Binance Coin permette di investire in una
         criptovaluta alternativa, con un mercato indipendente e delle caratteristiche uniche. Altro aspetto che rende Binance
         Coin molto appetibile è la piattaforma che l’ha lanciata e dalla quale prende il nome, ossia Binance che è uno dei principali exchange al mondo."</p>
    </div>
    <div class="col-md-5 order-md-1">
      <img class="featurette-image img-fluid mx-auto" src="Im/BnbPredictions.jpg" alt="Generic placeholder image">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="col-lg-4 col-md-6">
    <h1 id="grid-title">Andamento Economico</h1>
    <P id="grid-info">
    Nata a Luglio 2017, nel giro di pochi mesi la sua valutazione è passata da qualche centesimo di dollaro a 2 dollari,
    registrando una crescita superiore al 2000%. Tale crescita è proseguita anche in seguito: nel giro di un paio di anni
    ha infatti superato il valore di 25 dollari per token. Dopo un momento di stasi a causa del Covid-19, la crescita è ripresa ulteriormente, al punto da sfondare i
    670 dollari a inizio maggio 2021; nelle settimane successive ha finito per dimezzare il proprio valore, tornando poi di nuovo in rialzo alla fine del mese.
    </P>
  </div>
  <div class="col-lg-4 col-md-6">
    <h1 id="grid-title">Binance Coin come investimento</h1>
    <P id="grid-info">
    Quando si tratta di investimenti, Binance Coin è leggermente diverso rispetto ad altre criptovalute.
    Poiché è una valuta nativa di uno scambio popolare, ha il sostegno e le risorse per mantenere il prezzo relativamente stabile
    ed è per questo che non è così volatile come alcune delle altre criptovalute, le quali spesso rispondono rapidamente ai fattori di mercato.
    BNB è stato relativamente stabile, soprattutto a breve termine. Ciò significa che potrebbe non essere il miglior motore di investimento a breve termine,
    ma per il lungo termine promette sicuramente di più. 
    </P>
  </div>
  <div class="col-lg-4 col-md-12">
  <a href="https://coinmarketcap.com/it/currencies/bnb/" target="blank">
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


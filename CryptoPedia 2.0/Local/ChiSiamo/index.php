<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="author" content="Matteo Gargaro and Massimiliano Picone">
  <meta charset='utf-8'>
  <title>Cryptopedia - Chi Siamo</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" href="../../style.css">
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
                <a class="nav-link active" aria-current="page" href="../../index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Chi Siamo</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Cryptovalute
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="../../Crypto/Binance Coin.php">Binance Coin</a></li>
                  <li><a class="dropdown-item" href="../../Crypto/Bitcoin.php">Bitcoin</a></li>
                  <li><a class="dropdown-item" href="../../Crypto/Cardano.php">Cardano</a></li>
                  <li><a class="dropdown-item" href="../../Crypto/Ethereum.php">Ethereum</a></li>
                  <li><a class="dropdown-item" href="../../Crypto/Ripple.php">Ripple</a></li>
                  <li><a class="dropdown-item" href="../../Crypto/Tether.php">Tether</a></li>
                  <li><a class="dropdown-item" href="../../Crypto/USD Coin.php">USD Coin</a></li>
                </ul>
              </li>
			</ul>
			<ul class="navbar-nav justify-content-end">
				<li class="nav-item">
			  		<?php
			  		session_start();
			  		if(!isset($_SESSION['name'])){
			   			echo "<li class='account'><a  class='nav-link' href='../../User/SignUp/index.php'> Sign Up </a></li>
						<li></li>
						<li class='account'><a class='nav-link' href='../../User/Login/index.php'> Log In </a></li>";
			  			}
			  		else {
					 	echo "<li><a id='giudizio' class='nav-link' href='../../Local/Feedback/index.php'>Give your feedback!</a></li>";
						echo "<li class='account'><a class='nav-link' href='../../User/Logout/index.php'>Log out</a></li>";
			 		}
			  		?>
				</li>
		    </ul>
          </div>
        </div>
      </nav>
  <!--NAVBAR-END-->

<div class="container-md" id="main-div" style="background-color:rgb(22, 22, 22); padding-top: 30px;">

	<!-- HEADER -->
	<section id="header">
		<div class="container ">
			<div class="row">

				<div class="col-xs-12 mb-4 heading-title text-center">
					<h1 id="grid-title" style="font-size:120px;">OUR TEAM</h1>
					<h5 id="grid-info">Sito creato per il progetto di Linguaggi e Tecnologie per il Web<br></h5>
				</div>

				<hr style="color:white; size:4px;">

				<div class="row col-xs-12" style="padding-top:20%">
					<div class="col-lg-6 mb-4">
						<div class="row">
							<div class="col-md-12 text-center" > <!--style="left: 350px"-->
							  <img id="teamim" src="images/Matt.JPG" alt="wrapkit" class="img-fluid rounded-circle"/> <!-- foto da cambiare-->
							</div>
							<div class="col-md-12 text-center">
							  <div class="pt-2">
								<h2 id="grid-info" class="mt-4 font-weight-medium mb-0">Matteo Gargaro</h2>
								<h3 id="grid-info" style="font-size:15px; padding-top:2%;"> Studente Ingegneria Informatica e Automatica</h3>
 								<p></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 mb-4" style="padding-bottom: 20%;">
						<div class="row">
							<div class="col-md-12 text-center"><!--style="left: 500px;"-->
							  <img id="teamim" src="images/Max.JPG" alt="wrapkit" class="img-fluid rounded-circle" />
							</div>
							<div class="col-md-12 text-center">
							  <div class="pt-2">
								<h2 id="grid-info" class="mt-4 font-weight-medium mb-0">Massimiliano Picone</h2>
								<h3 id="grid-info" style="font-size:15px; padding-top:2%;"> Studente Ingegneria Informatica e Automatica</h3>
							</div>
						</div>
					</div> 
				</div>

			</div>
		</div>
	</section>
	<!-- HEADER ENDS -->

</div>

	  <!--FOOTER-->
	  <footer class="footer">
		<div class="container">
		  <p class="float-left" style="color: white;">&copy; 2022 CryptoPedia | Web Languages and Technologies' project, by M. Gargaro and M. Picone</p>
		</div>
	</footer>
	<!--FOOTER-ENDS-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</div>
</body>
</html>
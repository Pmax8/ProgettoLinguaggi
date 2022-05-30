<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="author" content="Matteo Gargaro and Massimiliano Picone">
  <meta charset='utf-8'>
  <title>Cryptopedia</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" href="../../style.css">
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
                  <li><a class="dropdown-item" href="Crypto/Binance Coin.html">Binance Coin</a></li>
                  <li><a class="dropdown-item" href="Crypto/Bitcoin.html">Bitcoin</a></li>
                  <li><a class="dropdown-item" href="Crypto/Cardano.html">Cardano</a></li>
                  <li><a class="dropdown-item" href="Crypto/Ethereum.html">Ethereum</a></li>
                  <li><a class="dropdown-item" href="Crypto/Ripple.html">Ripple</a></li>
                  <li><a class="dropdown-item" href="Crypto/Tether.html">Tether</a></li>
                  <li><a class="dropdown-item" href="Crypto/USD Coin.html">USD Coin</a></li>
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
  
			  		<?php
			  		if(isset($_SESSION['name'])){
						$name=$_SESSION['name'];
						echo "WELCOME $name";
			  		}
			  		?>
				</li>
		    </ul>
          </div>
        </div>
      </nav>
  <!--NAVBAR-END-->

	<!-- HEADER -->
	<section id="header">
		<div class="container ">
			<div class="row">

				<div class="col-xs-12 mb-4 heading-title text-center">
					<h1>OUR TEAM</h1>
					<h5>Sito creato per il progetto di Linguaggi e Tecnologie per il Web<br></h5>
				</div>

				<div class="row col-xs-12">
					<div class="col-lg-6 mb-4">
						<div class="row">
							<div class="col-md-12 text-center" > <!--style="left: 350px"-->
							  <img src="images/Matt.JPG" alt="wrapkit" class="img-fluid rounded-circle"/> <!-- foto da cambiare-->
							</div>
							<div class="col-md-12 text-center">
							  <div class="pt-2">
								<h2 class="mt-4 font-weight-medium mb-0">Matteo Gargaro</h2>
								<p></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 mb-4">
						<div class="row">
							<div class="col-md-12 text-center"><!--style="left: 500px;"-->
							  <img src="images/Max.JPG" alt="wrapkit" class="img-fluid rounded-circle" />
							</div>
							<div class="col-md-12 text-center">
							  <div class="pt-2">
								<h2 class="mt-4 font-weight-medium mb-0">Massimiliano Picone</h2>
							</div>
						</div>
					</div> 
				</div>

			</div>
		</div>
	</section>
	<!-- HEADER ENDS -->

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
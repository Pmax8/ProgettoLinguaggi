<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="author" content="Matteo Gargaro and Massimiliano Picone">
  <meta charset='utf-8'>
  <title>Sign Up
  </title>
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
                <a class="nav-link" href="../../Local/ChiSiamo/index.php">Chi Siamo</a>
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
                   echo "<li class='account'><a  class='nav-link' href='#'> Sign Up </a></li>
                         <li></li>
                         <li class='account'><a class='nav-link' href='../Login/index.php'> Log In </a></li>";
                  }
                  else {
                    echo "<li><a id='giudizio' class='nav-link' href='../../Local/Feedback/index.php'>Give your feedback!</a></li>";
                    echo "<li class='account'><a class='nav-link' href='../Logout/index.php'>Log out</a></li>";
                    }
                ?>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  <!--NAVBAR-END-->

  <div class="container-fluid">
    <h1 id="HomeTitle" style="text-align: center;">CryptoPedia</h1>
    <h2 style="text-align: center;">Know Your Crypto's</h2>
  </div>
  <div class="container-md" id="main-div" style="background-colour:black; padding-top:3%;">
<!-- FORM -->
<div class="login-dark">
        <form action="registration.php" method="POST" name="signup" onSubmit="return validaForm();">
            <h6>Sign up to stay updated!</h6><br>
			<div class="form-group">
				<input class="col" type="text" name="name" maxlength="20" placeholder="First Name *" autofocus onChange="return controllaNome();">
				<input class="col" type="text" name="surname" maxlength="20" placeholder="Last Name *" onChange="return controllaCognome();">
				<input class="form-control" type="email" name="email" placeholder="Email *">
				<input class="form-control" type="email" name="email_confirm" placeholder="Confirm Email *">
				<input class="col" type="password" name="password" minlength="5" maxlength="10"  placeholder="Password *" >
				<input class="col" type="password" name="password_confirm" minlength="5" maxlength="10" placeholder="Confirm Password *" >
				<button class="btn-primary" name="registrationButton" type="submit"><h6>Register</h6></button>
				<button class="btn-primary" type="reset"><h6>Reset</h6></button>
				<br><br>
				<h6>Do you already have an account? <a href="../login/index.php">Log in</a></h6>
			</div>
		</form>
    </div>
	<!-- FORM ENDS -->
<div class="container-md" id="main-div" style="background-color:black">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</div>
</div>
</body>
</html>
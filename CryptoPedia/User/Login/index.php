<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="author" content="Matteo Gargaro and Massimiliano Picone">
  <meta charset='utf-8'>
  <title>Cryptopedia</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css"">
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
                <a class="nav-link" href="#">Sign up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  <!--NAVBAR-END-->

	<!-- FORM -->
	<div class="login-dark">
        <form action="login.php" method="POST" name="login" onSubmit="return validaForm();">
            <div class="illustration"><span class="icon ion-ios-locked-outline"></span></div>
            <div class="form-group">
				<input class="form-control" type="email" id="email" name="email" placeholder="Email" autofocus>
            	<input class="form-control" type="password" id="pass" name="password" maxlength="10" placeholder="Password">
				<label class="cont">
					<input type="checkbox" onclick="passVisibility()">Show password
					<span class="checkmark"></span>
				</label>
				<br>
				<button class="btn-primary" type="submit" id="loginButton" name="loginButton"><h6>Log In</h6></button>
				<button class="btn-primary" type="reset"><h6>Reset</h6></button><br><br>
				<h6>Don’t have an account? <a href="../signup/index.php">Register</a></h6>
			</div>
		</form>
    </div>
	<!-- FORM ENDS -->

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
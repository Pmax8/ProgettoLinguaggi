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
    <span id="top"></span>
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
                <a class="nav-link" href="../ChiSiamo/index.php">Chi Siamo</a>
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

	<!-- FORM -->
	<div class="login-dark">
        <span>
            <div class="illustration"><div class="icon ion-ios-paperplane-outline"></div></div>
            <div class="form-group">
				Please give a feedback to us if you feel satisfied about our web site!
				<br><br>
					
				<select class="form-control" name="rate" id="rate">
					<option value="1">⭐️</option>
					<option value="2">⭐️⭐️</option>
					<option value="3">⭐️⭐️⭐️</option>
					<option value="4">⭐️⭐️⭐️⭐️</option>
					<option value="5">⭐️⭐️⭐️⭐️⭐️</option>
				</select>
				
				<button class="btn-primary" name="fbButton" id="fbButton" type="submit"><h6>Send</h6></button>
			</div>
			<br>
		</span>
		<div id="zona_feed" style="position:fixed; top:50%; left:44%;"></div>

		<div class="alt" name="userRating">
			<button class="btn-primary" name="avg" class="din"><h6>Users Rating</h6></button><br><br>
			<div class="row featurette">
				<div id="zona_din"></div>
			</div>
		</div>

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

	<!-- AJAX -->
	<script>
	$(document).ready(function() {
    	$('#fbButton').click(function() {
    		var rate = $("#rate").val();
    
    		$.ajax({
    			type: "POST",
            	url: "feedback.php",
            	data: {"rate": rate},
            	timeout: 3000,
            	success: function(risultato){
            		$("#zona_feed").html(risultato);
            	},
            	error: function(){
            		var msg = "Error";
					$("#zona_feed").html('<h3 style="color: red">'+msg+'</h3>');
            	}
    		});

        });
    });
	</script>
	
	<script>
		var documenti = document.getElementsByName("avg");
    	for (var i = 0; i < documenti.length; i++) {
        	documenti[i].onclick = caricaDocumento;
      	}
      	function caricaDocumento(e) {
       	 	var httpRequest = new XMLHttpRequest();
        	httpRequest.onreadystatechange = gestisciResponse;
        	httpRequest.open("GET", e.target.innerHTML + ".php", true);
        	httpRequest.send();
      	}
      	function gestisciResponse(e) {
        	if (e.target.readyState == XMLHttpRequest.DONE && e.target.status == 200) {
          		document.getElementById("zona_din").innerHTML = e.target.responseText;
        	}
      	}
	</script> 

	<script src="js/my_script.js" type="text/javascript"></script>

</body>
</html>
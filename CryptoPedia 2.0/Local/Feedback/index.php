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
	<!-- NAVBAR -->
	<nav class="navbar">
		<a class="logo" href="../index.php"><img src="../images/rocket.png" alt="logo"></a>
        <ul class="menu">
            <li><a href="../index.php">Home</a></li>
            <li><a href="javascript:redirection('pianeti')">Crypto</a></li> <!-- ../index.html#pianeti non funziona in Safari-->
            <li><a id="chiSiamo" href="../chisiamo/index.php">About us</a></li>
			<li><a href="../infopianeti/index.php">Info Crypto</a></li>
			<li><a id="giudizio" class="current" href="#">Give your feedback!</a></li>
			<li class='account'><a  href='../logout/index.php'>Log out</a></li>
		</ul>
		<?php
			session_start();
			if(isset($_SESSION['name'])){
				$name=$_SESSION['name'];
				echo "WELCOME $name";
			}
			?>
    </nav>
	<!-- NAVBAR ENDS -->

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
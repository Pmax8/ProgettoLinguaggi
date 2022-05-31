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
  <div class="container" id="sec-div">
    <?php
     session_start();
     session_destroy();
     echo "<h1 style='text-align:center;'> You're logged out! </h1> 
     <a href=../../index.php> HOME </a>";
    ?>
  </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</body>
</html>
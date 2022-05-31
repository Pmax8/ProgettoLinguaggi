<html> 
    <head>
        <meta name="author" content="Matteo Gargaro and Massimiliano Picone">
        <meta charset='utf-8'>
        <title>Feedback CryptoPedia</title>
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" href="../../style.css">
    </head>
    <body> 
        <?php
            $dbconn=pg_connect("host=localhost port=5432 dbname=feedback user=postgres password=biar")
                        or die("Could not connect: " . pg_last_error()); 
            if (!empty($_POST["fbButton"])){
               header("Location: ../../index.php"); 
            }
            else {
                $vote = $_POST["rate"];
                $q1 = "insert into feedback values ($1)";
                $data=pg_query_params($dbconn, $q1, array($vote));
            }
        ?>

        <div class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><div aria-hidden="true">&times;</div></button>
            <?php 
                echo "<h1 style="text-align:center;"><strong> Feedback sent! </strong></h1>"; 
            ?>
        </div>

    </body>
</html>
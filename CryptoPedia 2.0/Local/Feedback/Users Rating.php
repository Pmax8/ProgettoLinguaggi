<html> 
    <head>
        <meta name="author" content="Matteo Gargaro and Massimiliano Picone">
        <meta charset='utf-8'>
        <title>Cryptopedia</title>
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" href="../../style.css">
    </head>
    <body> 
        <?php
            $dbconn=pg_connect("host=localhost port=5432 dbname=ratings user=postgres password=biar")
                        or die("Could not connect: " . pg_last_error()); 
            if (!empty($_POST["loginButton"])){
                echo "error";
            }
            else {
                $result = pg_query("select round(avg(fb), 2) as avg from ratings");
                $row = pg_fetch_assoc($result);
                $average = $row['avg'];
                echo $average . " / 5";
                $su100 = $average*100/5;
                $count = pg_query("select count(fb) as cnt from ratings");
                $row2 = pg_fetch_assoc($count);
                $n = $row2['cnt'];
            }
        ?>

        <div class="row">
            <div class="side">
                <div>Average:</div>
            </div>
            <div class="middle">
                <div class="progress">
                    <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $su100; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $su100; ?>%">
                    </div>
                </div>
            </div>   
            <div class="side right">
                <div> <?php echo $n; ?> votes</div>
            </div>
        </div>

    </body>
</html>
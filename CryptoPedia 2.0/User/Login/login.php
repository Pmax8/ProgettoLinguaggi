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
        <?php
            $dbconn=pg_connect("host=localhost port=5432 dbname=login user=postgres password=biar")
                        or die("Could not connect: " . pg_last_error()); 
               
                $email = $_POST["email"];
                $q1="select * from login where email= $1";
                $result=pg_query_params($dbconn, $q1, array($email));
                if (!($line=pg_fetch_array($result, null, PGSQL_ASSOC))){
                    echo "<h1>Sorry, you are not a registered user</h1> 
                            <a href=../signup/index.php>
                            Click here to register </a>";
                } 
                else {
                    $password = md5($_POST["password"]);
                    $q2="select * from login where email=$1 and password=$2"; 
                    $result=pg_query_params($dbconn, $q2, array($email, $password)); 
                    if (!($line=pg_fetch_array($result, null, PGSQL_ASSOC))){
                        echo "<h1> The password is wrong </h1> 
                                <a href=index.php> Click here to retry login </a>" ;
                    } 
                    else {
                        $q3="select name from login where email=$1 and password=$2";
                        $res=pg_query_params($dbconn, $q3, array($email,$password));
                        if (!$res) {
                            echo "An error occurred.\n";
                            exit;
                        }
                        else {
				          echo "<h1> Welcome back, You're logged in! </h1>
                                    <a href=../../index.php> Click here</a> 
                                    to go to Home!"; 
                        
                        $row = pg_fetch_row($res);

                        session_start();
                        $_SESSION['name']=$row[0];
                        }

                    }
                }
        ?> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</body>
</html>
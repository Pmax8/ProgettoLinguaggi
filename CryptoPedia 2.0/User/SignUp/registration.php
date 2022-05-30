<html> 
    <head></head>
    <body> 
        <?php
            $dbconn=pg_connect("host=localhost port=5432 dbname=login user=postgres password=biar") or 
                        die("Could not connect: " . pg_last_error()); 
            if (!(isset($_POST["registrationButton"]))) {
                header("Location: ../../index.php"); 
            }
            else {
                $email = $_POST["email"];
                $q1="select * from login where email=$1";
                $result=pg_query_params($dbconn, $q1, array($email));
                if ($line=pg_fetch_array($result, null, PGSQL_ASSOC)) {
                    echo "<h1> Sorry, you are already a registered user</h1> 
                            Click <a href=../login/index.php>here</a> to login";
                } 
                else {
                    $name=$_POST["name"];
                    $surname = $_POST["surname"];
                    $password = md5($_POST["password"]);  
                    $q2="insert into login values ($1, $2, $3, $4)";
                    $data=pg_query_params($dbconn, $q2, array($email, $password, $name, $surname));
                    if ($data) {
                        echo "<h1> Registration is completed. Start using the website <br/></h1>"; 
                        session_start();
                    }
                }
            }
        ?>
    </body>
</html>
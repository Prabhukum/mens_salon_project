<?php
	session_name('saloon');
	session_start();
    ini_set("display_errors","0");

    $mode = "production";
    global $pdo;
    global $dbcon;
    if ($mode == "local") {
        // Host Name
        $dbhost = '54.254.31.129:3306';

        // Database Name
        $dbname = 'saloon';

        // Database Username
        $dbuser = 'admin';

        // Database Password
        $dbpass = 'Ajith@123$';

        // Defining base url
        define("BASE_URL", "");

        // Getting Admin url
        define("ADMIN_URL", BASE_URL . "admin" . "/");

        $dbcon = mysqli_connect($dbhost, $dbuser, $dbpass , $dbname) or die("Could not connect to Database");

        try {
            $pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch( PDOException $exception ) {
            echo "Connection error :" . $exception->getMessage();
        }
    }
    if ($mode == "production") {
        // Host Name
        $dbhost = '0.0.0.0:3306';

        // Database Name
        $dbname = 'saloon';

        // Database Username
        $dbuser = 'admin';

        // Database Password
        $dbpass = 'Ajith@123$';

        // Defining base url
        define("BASE_URL", "");

        // Getting Admin url
        define("ADMIN_URL", BASE_URL . "admin" . "/");

        $dbcon = mysqli_connect($dbhost, $dbuser, $dbpass , $dbname) or die("Could not connect to Database");
   
        try {
            $pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch( PDOException $exception ) {
            echo "Connection error :" . $exception->getMessage();
        }
    }
?>

<?php





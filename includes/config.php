<?php
	session_name('saloon');
	session_start();
    ini_set("display_errors","0");

    $mode = "local";
    global $pdo;
    if ($mode == "local") {
        // Host Name
        $dbhost = 'localhost';

        // Database Name
        $dbname = 'saloon';

        // Database Username
        $dbuser = 'root';

        // Database Password
        $dbpass = 'mysql';

        // Defining base url
        define("BASE_URL", "");

        // Getting Admin url
        define("ADMIN_URL", BASE_URL . "admin" . "/");

        $dbcon = mysqli_connect("localhost", "root", "mysql", "saloon") or die("Could not connect to Database");

        try {
            $pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch( PDOException $exception ) {
            echo "Connection error :" . $exception->getMessage();
        }
    }
    if ($mode == "production") {

        $dbhost = 'sql304.epizy.com';

        // Database Name
        $dbname = 'epiz_32968153';

        // Database Username
        $dbuser = 'root';

        // Database Password
        $dbpass = '9cLcFv93ECj8qM';

        // Defining base url
        define("BASE_URL", "");

        // Getting Admin url
        define("ADMIN_URL", BASE_URL . "admin" . "/");

        $dbcon = mysqli_connect("sql304.epizy.com", "epiz_32968153", "9cLcFv93ECj8qM", "epiz_32968153_saloon") or die("Could not connect to Database");
   
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





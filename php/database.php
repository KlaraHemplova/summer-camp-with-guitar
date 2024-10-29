<?php 

include_once "configuration.php";

$connection = mysqli_connect($DB_host, $DB_username, $DB_password, $DB_name);

if(mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
}

echo "Úspěšné přihlášení do databáze."

?>
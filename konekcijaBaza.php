<?php
$dbname = "bookstore";
$servername = "localhost";
$username = "root";
$dbpassword = "";

$konekcija = new mysqli($servername, $username,$dbpassword, $dbname);

if($konekcija->connect_errno){
    printf("Neuspesna konekcija. Nastala je greska: %s\n", $mysqli->connect_error."Kod greske:".$konekcija->connect_errno);
    exit();
}
?>






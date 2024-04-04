<?php 

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "gpf";
$port = 3306;

try {
  $conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);
}
catch (Exception $ex) {
 die("Erro: Por favor tente novamente. Caso o problema persista, entre em contato com o administrador. <br>");
}
?>

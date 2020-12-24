<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tcc";

//$db = new mysqli($servername, $username, $password, $dbname);


$db = new PDO('mysql:host=localhost;dbname=tcc', $username, $password);

try {
    $db = new PDO('mysql:host=localhost;dbname=tcc', $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
  }
  


?>
<?php

   /**
   * 
   * Test  Teeratus_R 2026-
   */
  
// Remote MySQL connection details
$servername = "localhost";
$username = "teeratus";
$password = "unstoppable";
$db_name = "gcsbkkon_online_18";



  try {
    $conn = new PDO("mysql:host=$servername;dbname=$db_name;charset=utf8mb4", $username, $password);
    $conn->exec("set names utf8mb4");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

?>
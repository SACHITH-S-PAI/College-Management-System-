<?php
  define("DB_SERVER", "127.0.0.1:3307");
  define("DB_USERNAME", "root");
  define("DB_PASSWORD", "123");
  define("DB_DATABASE", "admin");

  $db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
  // you could test connection eventually using a if and else conditional statement, 
  // feel free to take out the code below once you see Connected!
  if ($db) {
    echo "Connected!";
  } else {
    echo "Connection Failed";
  }
?>

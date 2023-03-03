<?php
session_start();

if (!isset($_SESSION['user_id'])) {
  echo "inscris-toi";
  //header('Location: test1_inscription.html');
  exit();
}  else {
    echo "Bonjour : <br>" . $_SESSION['user_id']; 
}
?>
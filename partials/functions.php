<?php
// FUNZIONI

//Recupero la variabile dal form
$pswLength = $_GET['psw-length'] ?? 0;

//Creo una funzione per generare una password casuale
function generateRandomPassword($length){
  // Dichiaro un array con i caratteri da utilizzare
  $characters = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz!#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
  // uso la funzione str_shuffle per generare la psw con le lettere casualmente nella mia stringa e prendo solo la lunghezza che mi serve
  return substr(str_shuffle($characters), 0, $length);
}

if(!empty($_GET['psw-length'])){
  // Faccio il redirect alla pagine di login con la password
  header('Location: ./login.php');
}
<?php 
/* 
X Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php

X Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale

x Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
*/

// Faccio partire la sessione
session_start();

// Importo il file functions.php
require_once __DIR__ . '/partials/functions.php';

$_SESSION['password'] = generateRandomPassword($pswLength);

?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Password Generator</title>
</head>
<body>
  <h1>Generatore di password casuali</h1>
  <!-- Form -->
  <form action="index.php" method="GET">
    <label for="psw-length">Indica la lunghezza della password</label>
    <input type="number" min="8" steps="1" name="psw-length" id="psw-length" required>

    <button type="sumbit">Genenra</button>
  </form>
</body>
</html>
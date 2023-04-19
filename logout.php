<?php 
// Pulisco la sessione prima di tornare alla pagina di login

// apro la sessione
session_start();
// cancello le variabili
session_unset();
// chiudo la sessione
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Logout Password Generator</title>
</head>
<body>
  <pre>Logout effettuato</pre>
  <a href="index.php">Genera una nuova password</a>
</body>
</html>
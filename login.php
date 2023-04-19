<?php 
// Faccio partire la sessione
session_start();

?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Login Password Generator</title>
</head>
<body>
    <!-- Restituisco la psw -->
    <h3>Password:</h3>
    <pre><?php echo $_SESSION['password']; ?></pre>

    <a href="logout.php">Effettua il logout</a>
</body>
</html>
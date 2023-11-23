<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Strong Password Generator</title>
</head>

<body>

  <h3>Generatore di Password quasi affidabile</h3>
  <p>Inserisci il numero di caratteri che comporranno la password e clicca sul pulstante genera</p>
  <?php
    require_once("functions.php");
?>
  <form action="index.php" method="get">
    <input type="number" name="lunghezza" placeholder="Lunghezza password">
    <input type="submit" value="Genera">
  </form>
  <?php

    if ($_GET["lunghezza"]) {
        $lunghezza = $_GET["lunghezza"];
        $password = genera_password($lunghezza);
    }
?>
  <h2>La password generata e': <?php echo $password ?></h2>
</body>

</html>
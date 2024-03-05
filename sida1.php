<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sida 1</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<h1 id="rubrik">Välkommen till Sida 1</h1>
    <p>Här är några paragrafer som beskriver sidans innehåll. Jag vet inte riktigt vad sidan handlar om.</p>
    <?php echo "Denna text är genererad med utskriftskommandot i PHP"; ?>



<div class="container">
  <form method="post">
    <label for="nameInput">Skriv ditt namn:</label><br>
    <input type="text" id="nameInput" name="name"><br>
    <button type="submit">Skicka</button>
  </form>


<?php
// Om formuläret skickats
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Hämta namnet från formuläret
  $name = $_POST["name"];
  
  // Om inget namn anges används ditt namn
  $strName = !empty($name) ? $name : "ditt namn här";
  
  // Skriv ut olika variationer av namnet
  echo "Hej " . $strName . "<br>";
  echo "Baklänges: " . strrev($strName) . "<br>";
  echo "Gemener: " . strtolower($strName) . "<br>";
  echo "Versaler: " . strtoupper($strName) . "<br>";
  echo "Antal tecken: " . strlen($strName) . "<br>";
}
?>
</div>
       <?php include './php/sida2.php'; ?>
    <?php include './php/footer.php'; ?> <!-- Länka footern -->
   


</body>
</html>
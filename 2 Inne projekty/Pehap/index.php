<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bobruskrokpapepel</title>
</head>
<body>
    

<?php
$conn = new mysqli("localhost","root","","dzieci");

$sql = "SELECT * FROM `uczniowie`;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
      echo '<div style="border: 5px dotted #ccc; padding: 10px; margin: 10px;">';
      echo "<h1>" . $row["ID"]. "</h1>";
      echo "<h3>Imie: " . $row["Imie"]. "</h3>";
      echo "<p>Nazwisko: " . $row["Nazwisko"]. "</p>";
      echo "<p>Wiek: " . $row["Wiek"]. "</p>";
      echo "<p>Klasa: " . $row["Klasa"]. "</p>";
      echo "<p>Ocena: " . $row["Ocena"]. "</p>";
      echo '</div>';
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<form action="/index.php">

<a href="dodaj.php">Dodaj Ucznia</a>

</form>

</body>
</html>
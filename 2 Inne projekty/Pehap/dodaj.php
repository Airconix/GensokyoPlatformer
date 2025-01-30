<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bobruskrokpapepel</title>
</head>
<body>
<?php

function insert() {
 $conn = new mysqli("localhost","root","","dzieci");
 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $age = $_POST['age'];
 $grade = $_POST['grade'];
 $score = $_POST['score'];
 $sql = "INSERT INTO `uczniowie`(`Imie`, `Nazwisko`, `Wiek`, `Klasa`, `Ocena`) VALUES ('$fname','$lname','$age','$grade','$score');";
 $result = $conn->query($sql);
 $conn->close();
 }
 if(isset($_POST['submit'])) {
   insert();
 }
?>
<form method="POST" action="">
  <label for="fname">Imie:</label>
  <input type="text" id="fname" name="fname" value="Imie"><br><br>
  <label for="lname">Nazwisko:</label>
  <input type="text" id="lname" name="lname" value="Nazwisko"><br><br>
  <label for="age">Wiek:</label>
  <input type="text" id="age" name="age" value="0"><br><br>
  <label for="grade">Klasa:</label>
  <input type="text" id="grade" name="grade" value="Klasa"><br><br>
  <label for="score">Ocena:</label>
  <input type="text" id="score" name="score" value="0"><br><br>
  <input type="submit" name="submit" value="submit">
</form>

</body>
</html>
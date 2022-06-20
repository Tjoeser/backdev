<!DOCTYPE HTML>
<html>
<head>
 <link rel="stylesheet" href="media/styles001.css">
<body>

<?php
$bestandsnaam = $foutmelding = $inhoud = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["bestandsnaam"])) {
    
  } else {
    $bestandsnaam = test_input($_POST["bestandsnaam"]);
  }
}
  if (empty($_POST["foutmelding:"])) {
  } else {
    $foutmelding = test_input($_POST["foutmelding:"]);
  }
  if (empty($_POST["inhoud"])) {
  } else {
    $inhoud = test_input($_POST["inhoud"]);
  }
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>

<form action="functions.php" method="post">
  <label for="bestandsnaam">bestandsnaam:</label><br>
  <input type="text" id="bestandsnaam" name="bestandsnaam"><br>
  <label for="foutmelding">foutmelding:</label><br>
  <input type="text" id="foutmelding" name="foutmelding" ><br>
  <label for="inhoud">inhoud:</label><br>
  <textarea name="inhoud" placeholder="Vul hier de gegevens in..." rows="5" cols="40"></textarea><br>
  <input type="submit" name="submit" value="Create">
  <input type="submit" name="submit" value="Delete">
  <input type="submit" name="submit" value="Read">
  <input type="submit" name="submit" value="Update">
</form>

</body>
</head>
</html>



<!DOCTYPE HTML>  
<html>
<head>
  <link rel="stylesheet" href=".\media\stylesform.css">
</head>
<body>  

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<h2>PHP Form Validation Example</h2>

<p1>* required field</p1>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name"><p>*</p>
  <br><br>
  E-mail: <input type="text" name="email"><p>*</p>
  <br><br>
  Phone number: <input type="text" name="website">
  <br><br>
  Why do you want to work here?: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  How many years of experience have you had?: <br>
  <input type="radio" name="gender" value="1 year">1 year
  <input type="radio" name="gender" value="2 years">2 years
  <input type="radio" name="gender" value="3 years">3 years
  <input type="radio" name="gender" value="4 years">4 years
  <input type="radio" name="gender" value="5+ years">5+ years
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";                                                        
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>
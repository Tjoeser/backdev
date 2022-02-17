<html>
<body>

<form method="GET" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  Name: <input type="text" name="lastname">
  Name: <input type="text" name="age">
  Name: <input type="text" name="gender">
  <input type="submit">
</form>

<?php
echo "<pre>";
var_dump($_REQUEST);
echo "</pre>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = htmlspecialchars($_REQUEST['fname']);
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
  $name = $_REQUEST['lastname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}

echo $_REQUEST['fname']


?>

</body>
</html>
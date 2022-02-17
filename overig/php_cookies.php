<html>
<body>
<?php

$cookie_name = "Cname";
$cookie_value = "Cval";
$expiration = time() + (86400 * 30);
$path ="/";

//start function
function createCookie($cookie_name, $cookie_value, $expiration, $path){
  setcookie($cookie_name, $cookie_value, $expiration, $path); // 86400 = 1 day
}

function readCookie($cookie_name){
  if(!isset($_COOKIE[$cookie_name])) {
    return false;
  } else {
    return true;
  }
}

function updateCookie(){
  //to do
}

function deleteCookie(){
  // to do
}

function checkCookie(){
  if(count($_COOKIE) > 0) {
    return true;
  } else {
    return false;
  }
}

$dexp = time() - 3600;
createCookie($cookie_name, $cookie_value, $expiration, $path);
readCookie($cookie_name);
deleteCookie($cookie_name, "",$dexp,"");
echo readCookie($cookie_name);
echo checkCookie();

?>

</body>
</html>
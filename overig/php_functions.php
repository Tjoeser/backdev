<?php
function writeMsg() {
  echo "<blockqoute>Do not go gentle into that good night; Old age should burn and rave at close of day. 
Rage, rage against the dying of the light.<blockqoute> by professor Brand, Interstellar 2014";
}

writeMsg(); // call the function
?>
<br>
<br>
<?php
function firstName($fname, $year, $month) 
{
  echo "$fname Refsnes. Born in $year. Born in $month.<br>";

switch ($month) {
  case "10":
    echo "Oktober!<br>";
    break;
  case "4":
    echo "April!<br>";
    break;
  case "6":
    echo "Juni!<br>";
    break;
  case "2":
    echo "February!<br>";
    break;
  case "5":
    echo "May!<br>";
    break;
  default:
    echo "You have to fill in a month!";
}
}

firstName("Jani","1976","10");
firstName("Hege","1977","4");
firstName("Stale","1978","6");
firstName("Kai Jim","1979","2");
firstName("Borge","1980","5");
firstname("Willem","1981","13");
?>
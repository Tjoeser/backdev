<?php
require 'header.php';
?>

<h1>Become a new member</h1>

<form action="index.php?op=create" method="post">
    <label for="fname">Name:</label><br>
    <input type="text" id="fname" name="fname" value="" ><br><br>
    <label for="phone">Phone:</label><br>
    <input type="text" id="phone" name="phone" value=""><br><br>
    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email" value="" ><br><br>
    <label for="location">Address:</label><br>
    <input type="text" id="location" name="location" value=""><br><br>
    <input type="submit" style="cursor:pointer" class="pagebutton" name="submit" value="Submit">
</form>

<a href='index.php' class="pagebutton"> Home</a>

<?php
require 'footer.php';
?>
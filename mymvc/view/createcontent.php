<?php
require 'header.php';
?>

<h1>Make new content</h1>

<form action="index.php?controller=content&op=createcontents" method="post">
    <label for="auteur">Auteur:</label><br>
    <input type="text" id="auteur" name="auteur" value="" ><br><br>
    <label for="titel">Titel:</label><br>
    <input type="text" id="titel" name="titel" value=""><br><br>
    <label for="images">Images:</label><br>
    <input type="file" id="images" name="images" value="" ><br><br>
    <label for="content">Content:</label><br>
    <textarea type="text" id="content" name="content" value="" cols="2" rows="3" ></textarea><br><br>
    <label for="social">Social:</label><br>
    <input type="text" id="social" name="social" value=""><br><br>
    <label for="datum">Datum:</label><br>
    <input type="datetime-local" id="datum" name="datum" value=""><br><br>
    <input type="submit" style="cursor:pointer" class="pagebutton" name="submit" value="Submit">
</form>

<a href='index.php?controller=content' class="pagebutton"> Home</a>

<?php
require 'footer.php';
?>
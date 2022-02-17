<?php
include_once 'functions.php';
include 'header.php';
// include 'adminsidebar.php';
?>


<article>
    <form method="post" action="adminhome.php">
        <label for="username"><b>Username:</b></label>
        <input type="text" placeholder="Enter Username" name="username"><br><br>
        <label for="wachtwoord"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password"><br><br>
        <button type="submit" name="submit"value="Login">Login</button>
        <label><input type="checkbox" unchecked="checked" name="remember"> Remember me</label>
        <input type="hidden" name="hiddenbestandsnaam" value="alleopdrachten.php">
        <input type="hidden" name="bestandsnaam" value="alleopdrachten.php">
    </form>
</article>
<?php include 'footer.php';
// checkLogin()
?>

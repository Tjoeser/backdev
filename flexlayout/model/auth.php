<?php
//authentication system

function createCookie($name, $val, $expiration, $path){
    setcookie($name, $val, $expiration, $path); // 86400 = 1 day
} 

function readCookie($cookie_name){
    if(!isset($_COOKIE[$cookie_name])) {
        return false;
    } else {
        return true;
    }
}

function updateCookie(){
    // to do
}

function deleteCookie(){
    // to do
}

function checkLogin(){
    // formuliervelden binnenhalen
    $username = $_SESSION["Login"] = "user";
    $password = $_SESSION["Password"] = "admin";
    // controleeer of velden er goed zijn
        if(isset($username) && isset($password)){
            // controleer of overeenkomt met bekende gebruikersnaam
            // controleer of overeenkomt met bekende Password
                // if($username && $password == True){
                    // als geen overeenkomst foutmelding
                    // als overeenkomt cookie aanmaken
                    createCookie("Login", $username, time() + (86400 * 30), "");
                    $msg = "U bent ingeloged als $username";
                } else {
                    // als overeenkomt doorgaan naar admin/volgende pagina
                    $msg = "Inloggevens kloppen niet.";
                }
                return $msg;
}

function checkAuth() {
    if (isset($_SESSION["Login"]) && $_SESSION["Password"] == true) {
        echo ("ok");
    } else {
        echo ("nok");
        header("location: /backdev/flexlayout/auth.php");
    }
}


?>
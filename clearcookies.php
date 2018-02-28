<?php
if (isset($_SERVER['HTTP_COOKIE'])) {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);//hämta alla cookies 
    foreach($cookies as $cookie) {//loopa
        $parts = explode('=', $cookie);
        $name = trim($parts[0]); // hämta namn på cookien
        setcookie($name, '', time()-1000);// döda den
        setcookie($name, '', time()-1000, '/');// döda den med lol
    }
}
header("Location:index.php");
?>

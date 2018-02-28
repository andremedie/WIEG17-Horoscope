<?php

if(isset($_COOKIE['horoscope'])){	// Våra horoskop-cookies finns
	// identifiera dessa värden
	$namn = $_COOKIE['horoscope']['namn'];
	$efternamn = $_COOKIE['horoscope']['efternamn'];
	$personnummer = $_COOKIE['horoscope']['personnummer'];
}
else{ // Annars skickas tillbaka till index	
	header('Location: index.php');
}
class Person{

    function __construct($cookie_name, $cookie_value, $cookie_number) {
    $this->cookie_name = $cookie_name;
    $this->cookie_value = $cookie_value;
    $this->cookie_number = $cookie_number;

    }
}
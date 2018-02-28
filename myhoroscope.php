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
	
	public $namn; 
    public $efternamn; 
    public $personnummer;
	public $horoskop;

    function __construct($namn, $efternamn, $personnummer) {
		$this->namn = $namn;
		$this->efternamn = $efternamn;
		$this->personnummer = $personnummer;
	
		// kod för att identifiera vilket horoskop

    }
}
?>

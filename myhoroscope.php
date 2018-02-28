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

include('Person.php');

$person = new Person($namn ,$efternamn ,$personnummer );

echo "Hej " . $person->namn . " " . $person->efternamn . "!<br>";
echo "Ditt stjärntecken är: " . $person->horoskop . ".";

?>

<br><br><br><a href="clearcookies.php"> RENSA ALLA COOKIES </a>

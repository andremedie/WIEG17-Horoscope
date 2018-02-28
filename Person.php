<?php
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
		$this->horoskop = "Oxe";

    }
	
}
?>
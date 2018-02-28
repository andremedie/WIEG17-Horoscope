<?php

// olika typer av möjliga inskrivna personnummer
$pnr1 = "199504259999"; 	// len 12 start 4 siffran
$pnr2 = "9504259999"; 		// len 10 start 2 siffran
$pnr3 = "19950425"; 		// len 8  start 4 siffran
$pnr4 = "950425"; 			// len 6  start 2 siffran

$pnr = "19950425";

if(strlen($pnr)%4 == 0){
	$start = 4;
}
else{
	$start = 2;
}

$month = substr($pnr , $start , 2);
$day = substr($pnr , $start+2 , 2);

echo "DAY:" . $day . "<br>";
echo "MONTH:" . $month . "<br>";
echo "<br><br><br>Du är: ";

if( 	 ($month == 3 && 21 <= $day ) || ( $month == 4 && 19 >= $day ) ){
		echo "Väduren";
}
else if( ($month == 4 && 20 <= $day ) || ( $month == 5 && 21 >= $day ) ){
		echo "Oxen";
}
else if( ($month == 5 && 22 <= $day ) || ( $month == 6 && 21 >= $day ) ){
		echo "Tvillingarna";
}
else if( ($month == 6 && 22 <= $day ) || ( $month == 7 && 22 >= $day ) ){
		echo "Kräftan";
}
else if( ($month == 7 && 23 <= $day ) || ( $month == 8 && 22 >= $day ) ){
		echo "Lejonet";
}
else if( ($month == 8 && 23 <= $day ) || ( $month == 9 && 22 >= $day ) ){
		echo "Jungfrun";
}
else if( ($month == 9 && 23 <= $day ) || ( $month == 10 && 22 >= $day ) ){
		echo "Vågen";
}
else if( ($month == 10 && 23 <= $day ) || ( $month == 11 && 22 >= $day ) ){
		echo "Skorpionen";
}
else if( ($month == 11 && 23 <= $day ) || ( $month == 12 && 21 >= $day ) ){
		echo "Skytten";
}
else if( ($month == 12 && 22 <= $day ) || ( $month == 1 && 19 >= $day ) ){
		echo "Stenbocken";
}
else if( ($month == 1 && 20 <= $day ) || ( $month == 2 && 18 >= $day ) ){
		echo "Vattumannen";
}
else if( ($month == 2 && 19 <= $day ) || ( $month == 3 && 20 >= $day ) ){
		echo "Fiskarna";
}


?>

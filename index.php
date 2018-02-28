<?php

// 86400 = 1 day


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //print_r($_POST);
    
    if( $_POST['namn'] && $_POST['efternamn'] && $_POST['personnummer'])
    {
        $cookie_name = $_POST['namn'];
        $cookie_value = $_POST['efternamn'];
        $cookie_number = $_POST['personnummer'];
        setcookie('horoscope[namn]', $cookie_name, time() + (86400 * 7), "/");
        setcookie('horoscope[efternamn]', $cookie_value, time() + (86400 * 7), "/");
        setcookie('horoscope[personnummer]',$cookie_number, time() + (86400 * 7), "/");
   }
   //print_r($_COOKIE);
       
        

}


if(isset($_COOKIE['horoscope'])){	
	header('Location: myhoroscope.php');
}
?>


<html lang="en">
<body>
    <form method="POST">
        Förnamn:<input type="text" name="namn"></input><br/>
        Efternamn:<input type="text" name="efternamn"></input><br/>
        Personnummer:<input type="text" name="personnummer"></input><br/>
        <input type="submit" value="Skicka iväg"></input>
</form>
</body>
</html>

<?php

?>
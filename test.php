<?php

$teststring = "911123";

$year = $teststring[0] . $teststring[1];
$month = $teststring[2] . $teststring[3];
$day = substr($teststring, 4, 2);


echo $day;

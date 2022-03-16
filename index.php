<?php

//echo "Test text, test test test ...";
$firstName = "Emilio";
$lastName = "Flores";
$semesterCredits = 11;
$randomNum = 55.638;

echo "<h1>ASSIGNMENT #1 - Try PHP </h1>";

echo "Hello, my name is " . $firstName . " " . $lastName;
echo "<br>";
echo "I'm currently enrolled for " . $semesterCredits . " credits. ";
echo "<br>";

if ($semesterCredits >= 12){
    echo " FULL TIME STUDENT ";
    echo "<br>";
}
else {
    echo " PART TIME STUDENT ";
    echo "<br>";
}

echo "Variables used: ";
echo "<br>";
echo var_dump ($firstName, $lastName, $semesterCredits, $randomNum);

echo "<h2>Below is the configuration of the machine you are viewing this on</h2>";

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>
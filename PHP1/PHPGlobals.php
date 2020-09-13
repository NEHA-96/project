<?php
/* Super Global Variables */
/*
$GLOBALS
$_SERVER
$_REQUEST
$_COOKIE
$_POST
$_GET
$_FILES
$_ENV
$_SESSION
*/
/*$num1 = 100;
$num2 = 200;

function divisibleby100(){
    $GLOBALS['result'] = $GLOBALS['num2']/$GLOBALS['num1'];
    
}

divisibleby100();
echo $result;
*/

echo $_SERVER['PHP_SELF'] . "<Br/>";
echo $_SERVER['SERVER_NAME'] . "<Br/>";
echo $_SERVER['HTTP_REFERER'] . "<Br/>";
echo $_SERVER['HTTP_HOST'] . "<Br/>";
echo $_SERVER['HTTP_USER_AGENT'] . "<Br/>";
echo $_SERVER['SCRIPT_NAME'] . "<Br/>";
echo $_SERVER['SERVER_SOFTWARE'] . "<Br/>";
echo $_SERVER['REQUEST_METHOD'] . "<Br/>";
?>
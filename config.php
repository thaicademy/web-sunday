<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'lptrade_somkiat');    //root
define('DB_PASSWORD', 'somkiat1234');        //dindang1
define('DB_NAME', 'lptrade_somkiat');        //sunday
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
mysqli_set_charset($link,"utf8"); 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}else{
// echo "เชื่อมต่อฐานข้อมูลได้";
}

?>
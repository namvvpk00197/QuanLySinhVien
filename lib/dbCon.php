<?php

//mysql_connect("localhost", "root", "");
//mysql_select_db("khoaphamtrainings");
//mysql_query("SET NAMES 'utf8'");
 

//$servername = "localhost";
//$database = "khoaphamtraining";
//$username = "root";
//$password = "";

$host = "localhost";
$user = "root";
$password = "";
$conn = mysqli_connect('localhost', 'root','');
//mysqli_select_db($conn,"khoaphamtraining");
mysqli_set_charset($conn, 'UTF8');



//mysqli_query($conn, "SET NAMES 'utf8'");
//mysqli_query($conn, "SET CHARACTER SET utf8");
//mysqli_query($conn, "SET COLLATION_CONNECTION = 'utf8_unicode_ci'");


//Creadte Connection
//$conn = mysqli_connect($servername, $username, $password);

?>
<?php
/* $conn = mysqli_init();
mysqli_ssl_set($conn, NULL, NULL, "/home/site/wwwroot/cert/certificate.pem", NULL, NULL);
mysqli_real_connect($conn,"genextekdb.mysql.database.azure.com","genextek@genextekdb","rishi@1629","ministerdb", 3306);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
} */

$conn = mysqli_connect('localhost', 'root', '', 'party');
global $conn;
?>
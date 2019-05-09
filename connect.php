<?php
$connect = mysqli_connect("localhost", "root", "", "life");

//check connection
if (!$connect) {die("Nem sikerült kapcsolódni az adatbazishoz! " . mysql_error());}
?>
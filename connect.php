<?php
$connect = mysqli_connect("localhost", "root", "", "life");

//check connection
if (!$connect) {die("Nem siker�lt kapcsol�dni az adatbazishoz! " . mysql_error());}
?>
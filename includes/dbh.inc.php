<?php
$servername="localhost";
$dBUsername="root";
$dBPassword="";
$dBName="resume";

$coon =mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failled:".mysqli_connect_error());
}
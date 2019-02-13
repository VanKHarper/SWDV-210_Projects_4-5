<?php

// Login info for phpMyadmin
$connect=mysqli_connect("localhost","root","Pa55w0rd","contact_form");

// Checks connection
if(!$connect)
{
die("Connection failed: " . mysqli_connect_error());
}

?>
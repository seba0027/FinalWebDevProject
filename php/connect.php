<?php

/* Host name of the MySQL server */
$serverName = 'localhost';

/* MySQL account username */
$userName = 'appuser';

/* MySQL account password */
$password = 'password';

/* Name of the Database */
$database = 'project';

/* Connection with MySQLi, procedural-style */
$mysqli = mysqli_connect($serverName, $userName, $password, $database);

/* Check if the connection succeeded */
if (!$mysqli)
{
   echo 'Connection failed<br>';
   echo 'Error number: ' . mysqli_connect_errno() . '<br>';
   echo 'Error message: ' . mysqli_connect_error() . '<br>';
   die();
}

//echo 'Successfully connected!<br>';

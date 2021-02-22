<?php
session_start();
include 'db.php';

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'streaming';

$db = new db($dbhost, $dbuser, $dbpass, $dbname);

?> 


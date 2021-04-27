<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "dancedb";


if(!$auth = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname))

{
        die("Failed to connect!");
}

?>
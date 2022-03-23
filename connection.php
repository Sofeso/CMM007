<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "cmm007";


 mysqli_connect("$dbhost","$dbuser","$dbpassword","$dbname");
 if (mysqli_connect_error())
 {
     echo "connection error";
 }
else {
    echo "connected";
}


?>
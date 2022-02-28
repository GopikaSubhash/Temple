<?php

    $host="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="soltox";
     
     $conn = mysqli_connect($host,$dbuser,$dbpass,$dbname);
     if(!$conn){
        echo "connection failed";

     }
?>
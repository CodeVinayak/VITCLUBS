<?php
    $host="localhost";
    $user="root";
    $password="";
    $dbname="vclub";

    $conn=mysqli_connect($host,$user,$password,$dbname);
    if(!$conn){
        echo "Connection Failed ";
    }
    
?>
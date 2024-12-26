<?php 
$database="user_maanagement";
$hostName="localhost";
$password="";
$user="root";

$connexion= mysqli_connect($hostName,$user,$password,$database);


if(!$connexion){

    echo"connexion not connected";
}else{
    // echo"succ";
}









?>
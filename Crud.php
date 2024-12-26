<?php 
include("./Connexion.php");

$firstName="Amir";
$lastName=" Elamiri";

$Email="aamir@gmail.com";

$Password="jhsdbqh";




function DisplayUsers($connexion){

    $query="select *from users";
    $resultat= mysqli_query($connexion,$query);

    
    while ($row= mysqli_fetch_assoc($resultat)) {

print_r($row);
      
    } 
}
$id=4;

function RemoveUsers($id,$connexion) {

    
    $query="DELETE from users where id=$id";
    $resultat= mysqli_query($connexion,$query);
   
    return $resultat;
}

RemoveUsers($id,$connexion);

$Value="JHEY";
$Column="PasswordUser";

function UpdateUsers($id,$connexion,$Value,$Column) {

    
    $query="UPDATE users SET $Column='$Value' where id=$id";
    $resultat= mysqli_query($connexion,$query);
    
    return $resultat;
}

UpdateUsers($id,$connexion,$Value,$Column);

function insertValues($firstName,$lastName,$Email,$Password,$connexion) {

    
    $query="INSERT into users VALUES(NULL,'$firstName','$lastName','$Email','$Password')";
    $resultat= mysqli_query($connexion,$query);
    
    return $resultat;
}

insertValues($firstName,$lastName,$Email,$Password,$connexion);
















?>
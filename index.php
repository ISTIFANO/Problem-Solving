<?php 
include("./Crud.php");
include("./Connexion.php");
$Value="JHEY";
$Column="PasswordUser";
$id=15;// insertValues($firstName,$lastName,$Email,$Password,$connexion);
UpdateUsers($id,$connexion,$Value,$Column);

// RemoveUsers($id,$connexion);

?>
<?php
include "../core/clientC.php";

$id=$_POST["id"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$age=$_POST["age"];
$login=$_POST["login"];
$mdp=$_POST["mdp"];
$email=$_POST["email"];
$num=$_POST["num"];
$adresse=$_POST["adresse"];

$cliC=new clientC();
echo "Cbonnnnn";
$cliC->modifierClient($id, $nom, $prenom, $age, $login, $mdp, $email, $num, $adresse);

header("location:lesComptes.php");
?>
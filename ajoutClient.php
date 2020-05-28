<?php

include "../entities/client.php";
include "../core/clientC.php";

if(isset($_POST["id"]) and isset($_POST["nom"]) and isset($_POST["prenom"]) and isset($_POST["age"]) and isset($_POST["login"]) 
	and isset($_POST["mdp"]) and isset($_POST["email"]) and isset($_POST["num"]) and isset($_POST["adresse"]))
{
    $cli=new client($_POST["id"],$_POST["nom"],$_POST["prenom"],$_POST["age"],$_POST["login"],$_POST["mdp"],$_POST["email"],$_POST["num"],
    	$_POST["adresse"]);
    $cliC=new clientC();
    $cliC->ajouterClient($cli);
    header("location:shop.php");
    

}
else
{
    echo "CIN Déja Utilisé";
}
?>
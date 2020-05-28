<?php
include "../core/carteC.php";
$carteC=new CarteC();
if (isset($_POST["idf"])){
	$carteC->supprimerCarte($_POST["idf"]);
	echo'Cbonnnnnn';
	header('Location:lesCartes.php');

	}
else
{
	echo "Leeee";
}

?>
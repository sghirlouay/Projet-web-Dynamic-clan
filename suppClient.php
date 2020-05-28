<?php
include "../core/clientC.php";
$clientC=new ClientC();
if (isset($_POST["id"])){
	$clientC->supprimerClient($_POST["id"]);
	echo'Cbonnnnnn';
	header('Location:lesComptes.php');

	}
else
{
	echo "Leeee";
}

?>

<?php
include "../entities/carte.php";
include "../core/carteC.php";

if(isset($_POST["idf"]) and isset($_POST["totalpoints"]) and isset($_POST["idc"]))
{
    $cart=new carte($_POST["idf"],$_POST["totalpoints"],$_POST["idc"]);
    $cartC=new carteC();
    $cartC->ajouterCarte($cart);
    header("location:shop.html");
    

}
else
{
    echo "IdCarte Déja Utilisé";
}
?>
<?php

include "../config.php";
class carteC
{
    function ajouterCarte($carte)
    {
        $sql= "insert into patisserie.fidelite(idfid,totalpoints, idclient) values (:idf,:totalpoints,:idc)";
        $db = config::getConnexion();
        try
        {
            $req=$db->prepare($sql);
            $idf=$carte->getIdf();
            $totalpoints=$carte->getTotalpoints();
            $idc=$carte->getIdc();
            

            $req->bindValue(':idf',$idf);
            $req->bindValue(':totalpoints',$totalpoints);
            $req->bindValue(':idc',$idc);
          

            $req->execute();

        }
        catch (Exception $e)
        {
            die('Erreur: Une carte avec ce id existe deja');

        }

    }

     function supprimerCarte($id){
        $sql="DELETE FROM fidelite where idfid=:id";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

     function afficherCarte()
    {

        $sql="select * from patisserie.fidelite  ";

        $db = config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }



}
?>    
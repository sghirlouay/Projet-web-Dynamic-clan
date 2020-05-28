<?php
include "../config.php";
$db = config::getConnexion();
if (isset($_GET['search'])&&!empty($_GET['search'])) {
    $search=htmlspecialchars($_GET['search']);
    $result=$db->query('select * from clients WHERE idclient LIKE "%'.$search.'%"');
   
}
?>
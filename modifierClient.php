<?php

    $id=$_GET["id"];
    $nom=$_GET["nom"];
    $prenom=$_GET["prenom"];
    $age=$_GET["age"];
    $login=$_GET["login"];
    $mdp=$_GET["mdp"];
    $email=$_GET["email"];
    $num=$_GET["num"];
    $adresse=$_GET["adresse"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>modifier Compte Client</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #dfe6e9">
<center><h1>MODIFIER </h1></center>
<form  method="post" action="modClient.php"  onsubmit="return verif()" style="background-color: #b2bec3">
    <table>
        <tr>
            <td><label for="id">ID</label></td>
            <td><input type="text"  value="<?php echo $id ?>" disabled></td>
            <td><input type="hidden" id="id" name="id" value="<?php echo $id ?>"></td>
        </tr>
        <tr>
            <td><label for="nom">nom</label></td>
            <td><input type="text" id="nom" name="nom" value="<?php echo $nom ?>"></td>
        </tr>
        <tr>
            <td><label for="prenom">prenom</label></td>
            <td><input type="text" id="prenom" name="prenom" value="<?php echo $prenom ?>"></td>
        </tr>
        <tr>
            <td><label for="age">age</label></td>
            <td><input type="text" id="age" name="age" value="<?php echo $age ?>"></td>
        </tr>

         <tr>
            <td><label for="login">login</label></td>
            <td><input type="text" id="login" name="login" value="<?php echo $login ?>"></td>
        </tr>
         <tr>
            <td><label for="mdp">mdp</label></td>
            <td><input type="text" id="mdp" name="mdp" value="<?php echo $mdp ?>"></td>
        </tr>
         <tr>
            <td><label for="email">email</label></td>
            <td><input type="text" id="email" name="email" value="<?php echo $email ?>"></td>
        </tr>
         <tr>
            <td><label for="num">num</label></td>
            <td><input type="text" id="num" name="num" value="<?php echo $num ?>"></td>
        </tr>
         <tr>
            <td><label for="adresse">adresse</label></td>
            <td><input type="text" id="adresse" name="adresse" value="<?php echo $adresse ?>"></td>
        </tr>
        



        <tr>
            <td><input type="submit" value="Modifier"></td>
        </tr>
    </table>
</form>
<!--<script src="script.js"></script>-->
</body>
</html>
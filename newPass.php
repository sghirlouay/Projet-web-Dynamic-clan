<?php
include '../core/clientC.php';

if(isset($_POST["email"]))
{
	
	

   $email=$_POST['email'];
    $cli = new clientC();



$listcli = $cli->forgotPass($email);
foreach($listcli as $row)
{
	echo "this is your new password :   ";
   echo $row['mdp'];
}

}

										?>


<!DOCTYPE html>
<html>
<head>
	<title>Your new password</title>
</head>
<body>
 <div>
 	 <form  method="GET" action="connexion.html">
       </br>
       
    <center>  
</br>
   <button type="submit" style="background-color: #808e9b ; height: 70px ; width: 300px;">try to connect with your new password</button>
    </center>
 </form>
 </div>
</body>
</html>
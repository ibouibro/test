<?php
SESSION_START();
$val=null;
include("../../modele/factureDb.php");
$id=$_POST['idF'];
$reg=$_POST['reg'];
if($reg=="vrai")
{
    $val=1;
}else{
    $val=0;
}
UpdateFacture($val,$id);

$_SESSION['mes']="enregisré";
    header("location:http://localhost/ExamenPhp/#/modifierF");
   
    
    


?>
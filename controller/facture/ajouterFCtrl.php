<?php
SESSION_START();
$val=null;
if( $_POST['consommation']=="" )
{
    $_SESSION['mes']="tous les champs doivent être renseignés";
    header("location:http://localhost/ExamenPhp/#/ajouterF");
   
}


$id=$_POST['idA'];
$reg=$_POST['reg'];
$prix=$_POST['consommation']*5;
$cons=$_POST['consommation'];
$mois=$_POST['mois'];

require_once "../../modele/factureDb.php";


if($reg=="vrai")
{
    $val=1;
}else{
    $val=0;
}
AddFacture($mois,$cons,$prix,$val,$id);
UpdateAbonnement($cons);
$_SESSION['mes']="enregisré";
    header("location:http://localhost/ExamenPhp/#/ajouterF");
   
    
    


?>
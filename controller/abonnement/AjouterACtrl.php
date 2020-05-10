<?php
SESSION_START();
    if($_POST['contrat']=="")
    {
        $_SESSION['mes']="veullez remplir ce champ";
        header("location:http://localhost/ExamenPhp/#/ajouter");
    }
    else{
    $contrat=$_POST['contrat'];

    include("../../modele/AbonnementDb.php");
    date_default_timezone_set('Europe/London');
$date = date('Y-m-d');
    AddAbonnement($contrat,$date);
    $_SESSION['mes']="enregistré avec succès";
    header("location:http://localhost/ExamenPhp/#/ajouter");
   
    }
    


?>
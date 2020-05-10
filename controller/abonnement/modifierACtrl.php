<?php
SESSION_START();
    if($_POST['contrat']=="")
    {
        $_SESSION['mes']="veuillez renseigner le champs svp";
        header("location:http://localhost/ExamenPhp/#/modifier");
    }
    else{
    $id=$_POST['idA'];
    $c=$_POST['contrat'];
    include("../../modele/AbonnementDb.php");
    
    $_SESSION['mes']="modification réussi";
       

    header("location:http://localhost/ExamenPhp/#/modifier");
   
    }
    


?>
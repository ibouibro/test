<?php
SESSION_START();
    
    try{
    $id=$_POST['idA'];
    
    include("../../modele/AbonnementDb.php");
    
    supprimerAbonnement($id);

    $_SESSION['mes']="suppression réussie";
       

    header("location:http://localhost/ExamenPhp/#/supprimer");
   
    }
    catch(Exception $ex)
    {
        $_SESSION['mes']="il y a eu une erreur reesayez plutartd !";
       

        header("location:http://localhost/ExamenPhp/#/supprimer");
    }


?>
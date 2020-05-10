<?php
SESSION_START();
    
    try{
    $id=$_POST['idF'];
    
    include("../../modele/factureDb.php");
    
    supprimerFacture($id);

    $_SESSION['mes']="suppression réussie";
       

    header("location:http://localhost/ExamenPhp/#/supprimerF");
   
    }
    catch(Exception $ex)
    {
        $_SESSION['mes']="il y a eu une erreur reesayez plutartd !";
       

        header("location:http://localhost/ExamenPhp/#/supprimerF");
    }


?>
<?php
  include('../../modele/db.php');
function ListerAbonnement()
{
    $sql= "select * from abonnement";

    $connexion=getConnection();

    return $connexion->query($sql);
}

function supprimerAbonnement($id)
{
    $sql= "delete from abonnement where id =".$id;

    $connexion=getConnection();

    return $connexion->query($sql);
}

function AddAbonnement($contrat,$date)
{
    try{
    $con=getConnection();
    $sql= "insert into compteur VALUES(NULL,null,null)";
    $con->exec($sql);
    $sql= "select * from compteur";
    $res=getConnection()->query($sql);
    $idC=null;
    foreach($res as $val)
    {
        $idC=$val['numero'];
    }
    $sq= "insert into abonnement VALUES(NULL,'".$contrat."','".$date."',0,0,".$idC.")";
    return getConnection()->exec($sq);
}catch(Exception $ex)
{
    die('erreur '.$ex.getMessage());
}
}





function getContrat($id)
{
    $sql="select contrat from abonnement where id =".$id;
    $val=getConnection()->query($sql);
    foreach($val as $x)
    {
        return $x['contrat'];
    }
}



?>
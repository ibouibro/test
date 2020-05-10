<?php
include("../../modele/db.php");


function UpdateAbonnement($cumulN)
{
    $sql= "select * from facture";
    $res=getConnection()->query($sql);
    $idA=null;
    foreach($res as $val)
    {
        $idA=$val['idA'];
    }
    $sql= "update abonnement set cumulA=cumulA + cumulN, cumulN=".$cumulN." where id=".$idA;
    return getConnection()->exec($sql);
}


function supprimerFacture($id)
{
    $sql= "delete from facture where id =".$id;

    $connexion=getConnection();

    return $connexion->query($sql);
}


function ListerFacture()
{
    $sql= "select * from facture";

    $connexion=getConnection();

    return $connexion->query($sql);
}

function AddFacture($mois,$consommation,$prix,$reglement,$idA)
{
    $sql= "insert into facture VALUES(NULL,'".$mois."',".$consommation.",".$prix.",".$reglement.",".$idA.")";
    return getConnection()->exec($sql);
}

function UpdateFacture($reglement,$id)
{
    $sql= "update facture set reglement=".$reglement." where id=".$id;
    return getConnection()->exec($sql);
}

?>

<?php

require_once "../../modele/factureDb.php";
$liste=ListeFacture();
    var_dump($lieux);

    $_liste_lieu_json=array();
    foreach($lieux as $value)
    {
        $liste_lieu_json['consommation']=utf8_encode($value['consommation']);
        $liste_lieu_json['id']=utf8_encode($value['id']);
        $val="réglé";
        if($value['reglement']==0)
        {
            $val=" non réglé";
        }
        $liste_lieu_json['reglement']=utf8_encode($val);
        
    }

    echo json_encode($liste_lieu_json);

    ?>
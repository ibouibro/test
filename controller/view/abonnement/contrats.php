<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top" style="margin-top:80px;background:rgba(1,12,3,2);">
      <div class="container">
      <a class="navbar-brand" style="color:white;">Abonnements</a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#/ajouter"  >Ajouter</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="#/lister" >lister</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#/supprimer" >supprimer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#/contrats">voir contrats</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

               
               
              
<div class="container" style="width:600px;margin-top:180px;margin-left:25px;">

<?php

require_once "../../modele/AbonnementDb.php";
$tab=ListerAbonnement();
foreach($tab as $val)
{
  echo"<div style=\"margin-top:25px;\" class=\"container\"><h5>".$val['id']."</h5></div>";
  echo"<div class=\"container\" >".$val['contrat']."</div><hr>";

}

?>

</div>
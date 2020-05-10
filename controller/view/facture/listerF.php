
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top" style="margin-top:80px;background:rgba(.2,122,3,2);">
      <div class="container">
      <a class="navbar-brand" style="color:white;">Factures</a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#/ajouterF">Ajouter</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#/modifierF">modifier</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#/listerF">lister</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#/supprimerF">supprimer</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<div class="container" style="width:800px; margin-left:56px;margin-top:180px;">
  <h2>liste Factures</h2>
          
  <table class="table table-condensed">
    <thead>
      <tr>
      <th>Id</th>
        <th>mois</th>
        <th>prix</th>
        <th>consommation</th>
        <th>Abonnement</th>
      </tr>
    </thead>
    <tbody>
     <?php
     
     require_once "../../modele/factureDb.php";
     $tab=ListerFacture();
     foreach($tab as $val)
     {
         echo"<tr><td>".$val['id']."</td><td>".$val['mois']."</td><td>".$val['prix']."</td><td>".$val['consommation']."</td><td>".$val['idA']."</td></tr>";
     }
     
     ?>
    </tbody>
  </table>
</div>



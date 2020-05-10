<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top" style="margin-top:80px;background:rgba(.2,12,3,2);">
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
              <a class="nav-link" href="#/supprimer">supprimer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#/contrats">voir contrats</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<div class="container" style="width:800px; margin-left:56px;margin-top:180px;">
  <h2>liste Abonnements</h2>
          
  <table class="table table-condensed">
    <thead>
      <tr>
      <th>Id</th>
        <th>date</th>
        <th>cumul Nouveau</th>
        <th>cumul Ancien</th>
        <th>compteur</th>
      </tr>
    </thead>
    <tbody>
     <?php
     
     require_once "../../modele/AbonnementDb.php";
     $tab=ListerAbonnement();
     foreach($tab as $val)
     {
         echo"<tr><td>".$val['id']."</td><td>".$val['date']."</td><td>".$val['cumulN']."</td><td>".$val['cumulA']."</td><td>".$val['idC']."</td></tr>";
     }
     
     ?>
    </tbody>
  </table>
</div>



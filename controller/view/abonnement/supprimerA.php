<?php
          
       sesson_start();
?>

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
<form action="supprimerACtrl" style="margin-top:180px;width:500px;margin-left:31px;padding:15px;border:0.5px solid grey;" method="post">
                 <h4 style="color:green;">Suppression d'Abonnement</h4>
                 <div class="form-group">
             
             Abonnement : 
                 <select class="form-control" name="idA">
                         <?php
                         require_once "../../modele/AbonnementDb.php";
                         $tab=ListerAbonnement();

                         foreach($tab as $val)
                         {
                           echo "<option>".$val['id']."</option>";
                         }

                         ?>

                         </select>
                 </div>
                 <button type="submit" class="btn btn-default">Supprimer</button>
              
                 <?php
          
          if(true)
{
echo $_SESSION['mes'];
$_SESSION['mes']="";
}
?>          

               </form>
               
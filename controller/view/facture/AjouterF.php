<?php
          
session_start();
?>


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

<form action="ajouterFCtrl" style="margin-top:180px;width:500px;margin-left:31px;padding:15px;border:0.5px solid grey;" method="post">
                 <h4 style="color:green;">Enregistrement facture</h4>
                 <div class="form-group">
             mois :
                   <select  class="form-control" name="mois"><option>Janvier</option>
                   <option>Février</option>
                   <option>Mars</option>
                   <option>Avril</option>
                   <option>Mai</option>
                   <option>Juin</option>
                   <option>Juillet</option>
                   <option>Août</option>
                   <option>Septembre</option>
                   <option>Octobre</option>
                   <option>Novembre</option>
                   <option>Décembre</option></select>
                 </div>
               
                 <div class="form-group">
                 
                    
                     
                         <input type="text" class="form-control" placeholder="consommation"  name="consommation">
                       </div>

                     
                   <div class="form-group">
                   réglement :
                   <select  class="form-control" name="reg">
                   <option>vrai</option>
                   <option>faux</option></select>
                 </div>
                 id Abonnement :
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
<?php
          
          if(true)
{
echo $_SESSION['mes'];
$_SESSION['mes']="";
}
?>
<button type="submit" class="btn btn-default">Submit</button>
 

               
              
          

               </form>
               
             
           
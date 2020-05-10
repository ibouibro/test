
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

<form action="modifierFCtrl" style="margin-top:180px;width:500px;margin-left:31px;padding:15px;border:0.5px solid grey;" method="post">
                 <h4 style="color:green;">Update Facture</h4>

                 <div class="form-group purple-border">
                     
                         <select class="form-control" name="idF">
                         <?php
                         require_once "../../modele/factureDb.php";
                         $tab=ListerFacture();

                         foreach($tab as $val)
                         {
                           echo "<option>".$val['id']."</option>";
                         }

                         ?>

                         </select>
                         réglement :
                   <select  class="form-control" name="reg">
                   <option>vrai</option>
                   <option>faux</option></select>
            
                       </div>
                
               
                
                 <button type="submit" class="btn btn-default">Submit</button>
              
           <?php
          
                 if(true)
{
  echo $_SESSION['mes'];
  $_SESSION['mes']="";
}
?>

               </form>
               
<?php
SESSION_START();

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>One Page Wonder - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    
    <!-- Custom styles for this template -->
    <link href="public/css/one-page-wonder.min.css" rel="stylesheet">

  </head>

  <body ng-app="myApp">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
      <div class="container">
        <a class="navbar-brand" style="color:white;">Factures-Abonnements</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#/abonnement">Abonnements</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#/facture" >Factures</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

   

   
        <section ng-view >
        </section>
        <div style="margin-left:80px;">
        <?php

?>
</div>
    <!-- Footer -->
    <div class="py-5 bg-black" style="margin-top:600px;">
      <div class="container">
        <p class="m-0 text-center text-white small">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </div>

    <!-- Bootstrap core JavaScript -->
  
  </body>
  <script src="public/vendor/jquery/jquery.min.js"></script>
    <script src="public/angular.min.js"></script>
    <script src="public/angular-route.js"></script>
    <script src="public/angular.js"></script>
  
  
  
    <script src="myAngular.js"></script>
    <script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>

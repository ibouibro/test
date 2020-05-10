var routeApp = angular.module("myApp", ["ngRoute"]
      );
      
      /**
       * Configuration du module principal : routeApp
       */
      routeApp.config(['$routeProvider',
          function($routeProvider) { 
              
              // Système de routage
              $routeProvider
              .when('/facture', {
                  templateUrl: '../ExamenPhp/view/facture/factureView.php',
                  controller: 'factureCtrl'
              })
              .when('/abonnement', {
                  templateUrl: '../ExamenPhp/view/abonnement/abonnementView.php',
                  controller: 'abonnementCtrl'
              })
              .when('/ajouter', {
                templateUrl: '../ExamenPhp/view/abonnement/ajouterA.php',
                controller: 'factureCtr'
            })
            
            .when('/modifier', {
                templateUrl: '../ExamenPhp/view/abonnement/modifierA.php',
                controller: 'factureCt'
            })

            .when('/lister', {
                templateUrl: '../ExamenPhp/view/abonnement/listerA.php',
                controller: 'factureCt'
            }) 

            .when('/facture', {
                templateUrl: '../ExamenPhp/view/facture/factureView.php',
                controller: 'factureCt'
            }) 

            .when('/ajouterF', {
                templateUrl: '../ExamenPhp/view/facture/AjouterF.php',
                controller: 'factureCt'
            }) 

            .when('/modifierF', {
                templateUrl: '../ExamenPhp/view/facture/modifierF.php',
                controller: 'factureCt'
            })
            
            .when('/listerF', {
                templateUrl: '../ExamenPhp/view/facture/listerF.php',
                controller: 'factureCt'
            }) 

            .when('/supprimerF', {
                templateUrl: '../ExamenPhp/view/facture/supprimerF.php',
                controller: 'factureCt'
            }) 
            .when('/supprimer', {
                templateUrl: '../ExamenPhp/view/abonnement/supprimerA.php',
                controller: 'factureCt'
            }) 
            .when('/contrats', {
                templateUrl: '../ExamenPhp/view/abonnement/contrats.php',
                controller: 'factureCt'
            }) 
            
        }
      ]);
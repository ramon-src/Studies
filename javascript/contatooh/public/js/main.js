angular.module('contatooh', ['ngRoute', 'ngResource', 'ngMaterial', 'ngAnimate', 'ngAria']).config(function($routeProvider) {

    /*
    Passa os parâmetros para a controller Client side
    */
    $routeProvider.otherwise({
        redirectTo: '/contatos'

    }).when('/contatos', {
        templateUrl: 'partials/contatos.html',
        controller: 'ContatosController'

    }).when('/contato/:contatoId', {
        templateUrl: 'partials/contato.html',
        controller: 'ContatoController'
    }).when('/contato', {
        templateUrl: 'partials/contato.html',
        controller: 'ContatoController'
    });
});

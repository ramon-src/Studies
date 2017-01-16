/*
  ANGULAR JS - CLIENT SIDE

  Estamos injetando o ngRoute na main para termos acesso à objetos
  como o routeParams e routeProvider
*/
angular.module('contatooh').controller('ContatoController',

    function($scope, $routeParams, Contato) {
        if ($routeParams.contatoId) {
            Contato.get({
                    id: $routeParams.contatoId
                },
                function(contato) {
                    $scope.contato = contato;
                },
                function(error) {
                    $scope.mensagem = {
                        texto: 'Nao foi possível obter o contato'
                    };
                    console.log(error);
                }
            );
        } else {
            $scope.contato = {};
        }

        $scope.salva = function() {
            Contato.save($scope.contato);
        };
    });

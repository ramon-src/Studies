angular.module('contatooh').controller('ContatosController', function($scope, Contato) {
    $scope.total = 0;
    $scope.contatos = [];
    $scope.filtro = '';
    $scope.mensagem = {
        texto: ''
    };

    $scope.incrementa = function() {
        $scope.total++;
    };

    function buscaContatos() {
        Contato.query(
            function(contatos) {
                $scope.contatos = contatos;
            },
            function(error) {
                $scope.mensagem = {
                    texto: "Não"
                };
                console.log("Não foi possível obter a lista de contatos");
                console.log(error);
            }
        )
    }

    /*
    Sempre que o filtro for modificado a controller será carregada
    Logo buscaContatos é acionada
    */
    buscaContatos();

    $scope.remove = function(contato) {
        //Sobreescreve o http do request delete
        Contato.delete({
                //Passa a variável id para a URL  e executa a URL na route/contato.js
                id: contato._id
            },
            buscaContatos,
            function(error) {
                $scope.mensagem = {
                    texto: "Não"
                };
                console.log("Não foi possível remover o contato");
                console.log(error);
            });
    };

});

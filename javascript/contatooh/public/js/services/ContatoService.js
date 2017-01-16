/*
Serviços no Angular são apenas instanciados quando injetados na aplicação
e usam o padrão Singleton ou seja todo componente que depende do serviço
faz referência a uma única instância, gerada pelo Service factory
*/
angular.module('contatooh').factory('Contato', function($resource) {
    /*
    Recebe os parâmetros da parametrização de rotas no main.js
    e logo podemos fazer com que o REST (server-side) trabalhe.
    Recebemos o resource que queremos trabalhar de algum arquivo da pasta
    routes e utilizamos das rotas para trabalhar com a controller server-side

    Ou seja, traduzimos a URL do AngularJS para uma operação do lado do
    servidor a partir de $resource

    https://docs.angularjs.org/api/ngResource/service/$resource
    */
    return $resource('/contatos/:id');
});

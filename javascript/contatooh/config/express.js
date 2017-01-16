var express = require('express');
/*
  Autoload para express serve para reduzir o númeero de chamadas require nos
  controllers, models e routes
*/
var load = require('express-load');

var bodyParser = require('body-parser');
/*
  Trazendo o módulo das rotas home
 */
//var home = require('../app/routes/home');
/*
Tudo que for passado dentro do module exports
será visível fora de module
*/
module.exports = function() {
    var app = express();
    app.set('port', 3000); // variável de ambiente

    //Middlewares
    /*
    Aplicando o middleware express.static na pasta public
    para liberar acesso para todos os usuários, através do
    navegador
    */
    app.use(express.static('./public'));

    /*
    bodyParser realiza o parse de json e requisiçõe com o corpo
    x-ww-form-urlencoded. Permitindo acessar dados da requisição
    através de req.body
    */
    app.use(bodyParser.urlencoded({
        extended: true
    }));
    app.use(bodyParser.json());
    app.use(require('method-override')());

    /*
    A função load carregará todos os crips dentro das pastas
    e no final a função into adiciona dinamicamente na instancia
    do express propriedades que apontam para esses módulos

    É necessário carregar as pastas na ordem
    */
    load('models', {
            cwd: 'app'
        })
        .then('controllers')
        .then('routes')
        .into(app);
    /*
    Diz para a variável de ambiente que a nossa view engine é o ejs
    */
    app.set('view engine', 'ejs');
    /*
    Configura o caminho da variável de ambiente views
    */
    app.set('views', './app/views');

    return app;
};

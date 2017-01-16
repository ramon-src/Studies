var http = require('http'); //Responsável por subir o servidor

/*
Chamamos o módulo do express, criado na pasta config e executamos a função
que ele retorna utilizando os parênteses no final do require
*/
var app = require('./config/express')();

/*
A função createServer recebe como parâmetro um request listener que
no caso será a instancia do express vindo da função à cima e será aplicada ao
evento request disparado em cada requisição no servidor
*/
http.createServer(app).listen(app.get('port'), function(){
  console.log('Express Server escutando na porta ' + app.get('port'));
});
// Para cancelar o servidor use o comando ctrl + c no terminal

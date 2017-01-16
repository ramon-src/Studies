module.exports = function(app) {
    var contato = app.controllers.contato;
    // Client side routes
    app.route('/contatos')
        .get(contato.listaContatos)
        .post(contato.salvaContato);

    app.route('/contatos/:id')
        .get(contato.obtemContato)
        .delete(contato.removeContato);
};

// Classe Carro
function Carro(cor, velocMaxima) {
    // Atributos da classe
    this.cor = cor
    this.velocMaxima = velocMaxima
    this.velocAtual = 0
}

Carro.prototype = {

    // Atributo da classe que recebe uma função anônima Logo ele se torna uma função
    acelerar: function() {
        this.velocAtual += 10;
    },
    frear: function() {
        this.velocAtual -= 10;
    }

}

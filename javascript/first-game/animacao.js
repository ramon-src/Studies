// animacao.js

function Animacao() {
    novoSprite: function(sprite) {

    },
    ligar: function() {

    }
}

function Animacao() {
    this.sprite = [];
}

Animacao.prototype = {
    novoSprite: function(sprite) {
        this.sprites.push(sprite);
    },
    ligar: function() {
        this.ligado = true;
        this.proximoFrame():
    },
    desligar: function() {
        this.ligado = false;
    }
}

proximoFrame: function() {
    if (!this.ligado) return;
    this.limparTela();
    for (var ir in this.sprites)
        this.sprites[i].desenhar();

    var animacao = this;
    requestAnimationFrame(function() {
        animacao.proximoFrame();
    })
}

limparTela: function() {
    var ctx = this.context;
    ctx.clearRect(0, 0, ctx.canvas.width, ctx.canvas.height);
}

function Animacao(context) {
  this.context = context;
  this,sprites = [];
  this.ligado = false;
}

var animacao = new Animacao(context);

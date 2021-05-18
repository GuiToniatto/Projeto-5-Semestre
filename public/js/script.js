/*---------hamburguer---------*/
document.querySelector(".hamburguer").addEventListener("click", () =>
    document.querySelector(".container").classList.toggle("show-menu")
);

let pedido = [];

let produtosLoja = [{
    "id" : 1,
    "nome": "AWP RedLine FT",
    "preco": "R$ 140,00",
    "img": "./img/produtos/RedLineFT.png",
    "maisVend": true
},
{
    "id" : 2,
    "nome": "AK47 RedLine MW",
    "preco": "R$ 89,00",
    "img": "./img/produtos/RedLineMW.png",
    "maisVend": true
},
{
    "id" : 3,
    "nome": "M4A4 Cyber Security FT",
    "preco": "R$ 64,00",
    "img": "./img/produtos/CyberSecurity.png",
    "maisVend": true
},
{
    "id" : 4,
    "nome": "AWP Worm God FT",
    "preco": "R$ 10,00",
    "img": "./img/produtos/WormGod.png",
    "maisVend": true
},
{
    "id" : 5,
    "nome": "M4A4 Neo Noir BS",
    "preco": "R$ 70,00",
    "img": "./img/produtos/Neo-Noir.png",
    "maisVend": true
},
{
    "id" : 6,
    "nome": "AK47 Phantom Disruptor MW",
    "preco": "R$ 40,00",
    "img": "./img/produtos/PhantomDisruptor.png",
    "maisVend": true
},
{
    "id" : 7,
    "nome": "AWP Mortis FT",
    "preco": "R$ 20,00",
    "img": "./img/produtos/Mortis.png",
    "maisVend": true
},
{
    "id" : 8,
    "nome": "M4A4 The Emperor FT",
    "preco": "R$ 100,00",
    "img": "./img/produtos/TheEmperor.png",
    "maisVend": true
},
{
    "id" : 9,
    "nome": "AK47 Neon Rider FT",
    "preco": "R$ 180,00",
    "img": "./img/produtos/NeonRider.png",
    "maisVend": true
}
];

/*---------Carrossel---------*/

var counter = 1;
setInterval(function () {
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if (counter > 4) {
        counter = 1;
    }
}, 5000);


$(document).ready(function() {
    mostraProdutos();
})


function mostraProdutos() {
    let rowList = document.getElementById('produtos-list');
    let rbody = "";
    for(let i = 0; i < produtosLoja.length; i++){
        if(produtosLoja[i].maisVend === true){
            rbody += `
            <div class="col-3" id = "card-prod-${i}">
                <img src=${produtosLoja[i].img}>
                <h4 id = "nome-prod-${i}">${produtosLoja[i].nome}</h4>
                <p id = "preco-prod-${i}">${produtosLoja[i].preco}</p>
                <button onclick="adicionaCarrinho(${produtosLoja[i].id});" class="cart" href="carrinho.html">Adicionar ao Carrinho</button>
            </div>
            `
        }
    }

    rowList.innerHTML = rbody;
}

function adicionaCarrinho(idProduto) {
    for(let i = 0; i < produtosLoja.length; i++){
        if(produtosLoja[i].id === idProduto){
            pedido.push(produtosLoja[i]);
        }
    }

    console.log(pedido);
    console.log(produtosLoja);

    localStorage.setItem('pedido', JSON.stringify(pedido));
}


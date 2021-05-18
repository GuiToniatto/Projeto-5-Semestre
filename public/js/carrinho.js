let pedido = localStorage.getItem('pedido');

$(document).ready(function() {
    mostrarCarrinho();
    calcularValorTotal()
})

function mostrarCarrinho(){
    let carrinhoCont = document.getElementById('carrinho');
    let carrinhoBody = "";

    pedido = JSON.parse(pedido);

    for(let i = 0; i < pedido.length; i++){
        carrinhoBody += `
            <div class="rowContainerCart" id = "row-${pedido[i].id}">
                <div class = "cardCart">
                    <img alt = "prod" class = "img-style-cart" src = ${pedido[i].img} />
                </div>
                <div class = "columnCart">
                    <h3>${pedido[i].nome}</h3>
                    <span>${pedido[i].preco}</span>
                </div>
                <button onclick = "removerProduto(${pedido[i].id})">Remover produto</button>
            </div>
        `
    }

    carrinhoCont.innerHTML = carrinhoBody;
}

function removerProduto(posicaoItem){

    for(let i = 0; i < pedido.length; i++){
        if(pedido[i].id === posicaoItem){
            pedido.splice(i , 1);
        }
    }

    console.log(pedido);
    localStorage.setItem('pedido', JSON.stringify(pedido));
    $('#row-'+posicaoItem).remove();

    calcularValorTotal();
}

function calcularValorTotal(){
    let valorTotal = document.getElementById('valorTotal');
    let vlTot = 0;
    let preco = 0;

    for(let i = 0; i < pedido.length; i++){
        preco = parseFloat(pedido[i].preco.substr(3).replace(',' , '.'));

        vlTot = vlTot + preco;
    }

    valorTotal.innerHTML = `R$ ${vlTot}`  
}
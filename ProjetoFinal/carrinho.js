let carrinhoItens = [];

function adicionarItem(nome, preco, imagem) {
    const item = {
        nome: nome,
        preco: preco,
        imagem: imagem
    };

    carrinhoItens.push(item);
    exibirCarrinho();
}

function exibirCarrinho() {
    const listaCarrinho = document.getElementById('carrinho-lista');
    const totalCarrinho = document.getElementById('total-carrinho');

    listaCarrinho.innerHTML = '';

    let total = 0;

    carrinhoItens.forEach(item => {
        const listItem = document.createElement('li');
        const img = document.createElement('img');
        img.src = item.imagem;
        img.alt = item.nome;
        img.width = 50; // Ajuste o tamanho conforme necessário
        listItem.appendChild(img);

        const infoDiv = document.createElement('div');
        infoDiv.textContent = `${item.nome} - R$${item.preco.toFixed(2)}`;
        listItem.appendChild(infoDiv);

        listaCarrinho.appendChild(listItem);

        total += item.preco;
    });

    totalCarrinho.textContent = total.toFixed(2);
}

function finalizarCompra() {
    alert('Compra finalizada! Total: R$' + carrinhoItens.reduce((total, item) => total + item.preco, 0).toFixed(2));
    carrinhoItens = [];
    exibirCarrinho();
}
function exibirCarrinho() {
    const listaCarrinho = document.getElementById('carrinho-lista');
    const totalCarrinho = document.getElementById('total-carrinho');

    listaCarrinho.innerHTML = '';

    let total = 0;

    carrinhoItens.forEach((item, index) => {
        const listItem = document.createElement('li');
        const img = document.createElement('img');
        img.src = item.imagem;
        img.alt = item.nome;
        img.width = 50; // Ajuste o tamanho conforme necessário
        listItem.appendChild(img);

        const infoDiv = document.createElement('div');
        infoDiv.textContent = `${item.nome} - R$${item.preco.toFixed(2)}`;
        listItem.appendChild(infoDiv);

        const btnExcluir = document.createElement('button');
        btnExcluir.textContent = 'Excluir';
        btnExcluir.onclick = () => excluirItem(index);
        listItem.appendChild(btnExcluir);

        listaCarrinho.appendChild(listItem);

        total += item.preco;
    });

    totalCarrinho.textContent = total.toFixed(2);
}

function excluirItem(index) {
    carrinhoItens.splice(index, 1);
    exibirCarrinho();
}
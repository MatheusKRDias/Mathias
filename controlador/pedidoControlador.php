<?php

require "modelo/pedidoModelo.php";

/** anon */
function index() {
    $dados["pedidos"] = pegarTodosProdutos();
    exibir("pedido/listar", $dados);
}
/** anon */
function adicionar() {
    if (ehPost()) {
        extract($_POST);
        alert(adicionarPedido($nome, $descricao, $preco));
        redirecionar("pedido/index");
    } else {
        exibir("pedido/formulario");
    }
}

/** anon */
function deletar($id) {
    alert(deletarProduto($id));
    redirecionar("produto/index");
}

/** anon */
function editar($id) {
    if (ehPost()) {
        $NomeProd = $_POST["nome"];
        $Descricao = $_POST["descricao"];
        $Preco = $_POST["preco"];
        alert(editarProduto($id, $NomeProd, $Descricao, $Preco));
        redirecionar("Produto/index");
    } else {
        $dados['produto'] = pegarProdutoPorId($id);
        $dados['acao'] = "./produto/editar/$id";
        exibir("produto/formulario", $dados);
    }
}
/**admin*/

function visualizar($id) {
    $dados['produto'] = pegarProdutoPorId($id);
    exibir("produto/visualizar", $dados);
}
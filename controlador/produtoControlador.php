<?php

require "modelo/produtoModelo.php";
/** anon */
function index() {
    $dados["produtos"] = pegarTodosProdutos();
    exibir("produto/listar", $dados);
}
/** admin */
function adicionar() {
    if (ehPost()) {
        extract($_POST);
        alert(adicionarProduto($nome, $descricao, $preco));
        redirecionar("produto/index");
    } else {
        exibir("produto/formulario");
    }
}
/** admin */
function deletar($id) {
    alert(deletarProduto($id));
    redirecionar("produto/index");
}
/** admin */
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
/** anon */
function visualizar($id) {
    $dados['produto'] = pegarProdutoPorId($id);
    exibir("produto/visualizar", $dados);
}
<?php

require "modelo/pedidoModelo.php";

function index() {
    $dados["produtos"] = pegarTodosProdutos();
    exibir("produto/listar", $dados);
}

function adicionar() {
    if (ehPost()) {
        extract($_POST);
        alert(adicionarProduto($nome, $descricao, $preco));
        redirecionar("produto/index");
    } else {
        exibir("produto/formulario");
    }
}

function deletar($id) {
    alert(deletarProduto($id));
    redirecionar("produto/index");
}

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

function visualizar($id) {
    $dados['produto'] = pegarProdutoPorId($id);
    exibir("produto/visualizar", $dados);
}
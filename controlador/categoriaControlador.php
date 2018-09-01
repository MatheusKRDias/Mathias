<?php

require "modelo/categoriaModelo.php";

function index() {
    $dados["categorias"] = pegarTodasCategorias();
    exibir("categoria/listar", $dados);
}

function adicionar() {
    if (ehPost()) {
        extract($_POST);
        alert(adicionarCategoria($nome));
        redirecionar("categoria/index");
    } else {
        exibir("categoria/formulario");
    }
}

function deletar($id) {
    alert(deletarCategoria($id));
    redirecionar("categoria/index");
}

function editar($id) {
    if (ehPost()) {
        extract($_POST);
        alert(editarCategoria($nome, $id));
        redirecionar("categoria/index");
    } else {
        $dados['categoria'] = pegarCategoriaPorId($id);
        $dados['acao'] = "./categoria/editar/$id";
        exibir("categoria/formulario", $dados);
    }
}

function visualizar($id) {
    $dados['categoria'] = pegarCategoriaPorId($id);
    exibir("categoria/visualizar", $dados);
}
<?php

require "modelo/categoriaModelo.php";
/** anon */
function index() {
    $dados["categorias"] = pegarTodasCategorias();
    exibir("categoria/listar", $dados);
}
/** admin */
function adicionar() {
    if (ehPost()) {
        extract($_POST);
        alert(adicionarCategoria($nome));
        redirecionar("categoria/index");
    } else {
        exibir("categoria/formulario");
    }
}
/** admin */
function deletar($id) {
    alert(deletarCategoria($id));
    redirecionar("categoria/index");
}
/** admin */
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
/** anon */
function visualizar($id) {
    $dados['categoria'] = pegarCategoriaPorId($id);
    exibir("categoria/visualizar", $dados);
}
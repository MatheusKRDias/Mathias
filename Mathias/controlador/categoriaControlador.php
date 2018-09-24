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
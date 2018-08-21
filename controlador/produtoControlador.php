<?php

require "modelo/produtoModelo.php";

function index() {
    $dados["produto"] = ListarProduto();
    exibir("produto/listar", $dados);
}

function AdcProdinho() {
    if (ehPost()) {
        extract($_POST);
        alert(AdicionarProd($NomeProd, $Preco, $Descri));
        redirecionar("produto/index");
    } else {
        exibir("produto/formulario");
    }
}

function DelProd($id) {
    DeletarProduto($CodProduto);
    redirecionar("produto/index");
}

function EditProd($id) {
    if (ehPost()) {
        $NomeProd = $_POST["nome"];
        $Preco = $_POST["preco"];
        alert(AtualizarProduto($CodProduto, $NomeProd, $Preco, $Descri));
        redirecionar("produto/index");
    } else {
        $dados['produto'] = CatchProdForId($CodProduto);
        $dados['acao'] = "./produto/editar/$CodProduto";
        exibir("produto/formulario", $dados);
    }
}

function DetProd($id) {
        alert(EditarProduto(*));
        redirecionar("produto/index")
   }



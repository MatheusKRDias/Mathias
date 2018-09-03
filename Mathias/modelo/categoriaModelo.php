<?php

function pegarTodasCategorias() {
    $sql = "SELECT * FROM categoria";
    $resultado = mysqli_query(conn(), $sql);
    $categorias = array();
    while ($linha = mysqli_fetch_array($resultado)) {
        $categorias[] = $linha;
    }
    return $categorias;
}

function pegarCategoriaPorId($CodCategoria) {
    $sql = "SELECT * FROM categoria WHERE CodCategoria= $CodCategoria";
    $resultado = mysqli_query(conn(), $sql);
    $categoria = mysqli_fetch_array($resultado);
    return $categoria;
}

function adicionarCategoria($NomeCategoria) {
    $sql = "INSERT INTO categoria (NomeCategoria) 
            VALUES ('$NomeCategoria')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar categoria' . mysqli_error($cnx)); }
    return 'Categoria cadastrado com sucesso!';
}

function editarCategoria($NomeCategoria, $CodCategoria) {
    $sql = "UPDATE categoria SET NomeCategoria = '$NomeCategoria' WHERE CodCategoria = $CodCategoria";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar Categoria' . mysqli_error($cnx)); }
    return 'Categoria alterado com sucesso!';
}

function deletarCategoria($CodCategoria) {
    $sql = "DELETE FROM categoria WHERE CodCategoria = $CodCategoria";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar Categoria' . mysqli_error($cnx)); }
    return 'Categoria deletado com sucesso!';
            
}

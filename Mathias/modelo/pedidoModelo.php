<?php

function pegarTodosPedidos() {
    $sql = "SELECT * FROM pedido";
    $resultado = mysqli_query(conn(), $sql);
    $pedidos = array();
    while ($linha = mysqli_fetch_array($resultado)) {
        $pedidos[] = $linha;
    }
    return $produtos;
}

function pegarPedidoPorId($CodProduto) {
    $sql = "SELECT * FROM pedido WHERE CodPedido= $CodPedido";
    $resultado = mysqli_query(conn(), $sql);
    $pedido = mysqli_fetch_array($resultado);
    return $produto;
}

function adicionarPedido($NomeProd, $Descricao, $Preco) {
    $sql = "INSERT INTO pedido (Preco, NomeProd, Quantpedido) 
            VALUES ('$Preco', '$NomeProd', '$Descricao');";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar pedido' . mysqli_error($cnx)); }
    return 'Pedido cadastrado com sucesso!';
}

function editarPedido($CodProduto, $NomeProd, $Descricao, $Preco) {
    $sql = "UPDATE pedido SET NomeProd = '$NomeProd', Descricao = '$Descricao', Preco = '$Preco' WHERE CodPedido = $CodPedido";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar usuário' . mysqli_error($cnx)); }
    return 'Pedido alterado com sucesso!';
}

function deletarPedido($CodProduto) {
    $sql = "DELETE FROM pedido WHERE CodPedido = $CodPedido";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar Pedido' . mysqli_error($cnx)); }
    return 'Pedido deletado com sucesso!';
            
}

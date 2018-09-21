
<?php

function pegarTodosProdutos() {
    $sql = "SELECT * FROM produto";
    $resultado = mysqli_query(conn(), $sql);
    $produtos = array();
    while ($linha = mysqli_fetch_array($resultado)) {
        $produtos[] = $linha;
    }
    return $produtos;
}

function pegarProdutoPorId($CodProduto) {
    $sql = "SELECT * FROM produto WHERE CodProduto= $CodProduto";
    $resultado = mysqli_query(conn(), $sql);
    $produto = mysqli_fetch_array($resultado);
    return $produto;
}

function adicionarProduto($NomeProd, $Descricao, $Preco) {
    $sql = "INSERT INTO produto (Preco, NomeProd, Descricao) 
            VALUES ('$Preco', '$NomeProd', '$Descricao');";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar produto' . mysqli_error($cnx)); }
    return 'Produto cadastrado com sucesso!';
}

function editarProduto($CodProduto, $NomeProd, $Descricao, $Preco) {
    $sql = "UPDATE produto SET NomeProd = '$NomeProd', Descricao = '$Descricao', Preco = '$Preco' WHERE CodProduto = $CodProduto";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar usuário' . mysqli_error($cnx)); }
    return 'Produto alterado com sucesso!';
}

function deletarProduto($CodProduto) {
    $sql = "DELETE FROM produto WHERE CodProduto = $CodProduto";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar Produto' . mysqli_error($cnx)); }
    return 'Produto deletado com sucesso!';
            
}

function pegarVariosProdutosPorId($carrinho){


    

    foreach($_SESSION['carrinho'] as $idt){

         $id = $idt["indice"];

          $comando    = "SELECT * FROM produto WHERE CodProduto = '$id'";
                $query  = mysqli_query($cnx = conn(),$comando); 
              
                if(!$query) {
                    die(mysqli_error($cnx));
                }

                $produtos[] = mysqli_fetch_assoc($query); 
            }

            if(!empty($produtos)){
                return $produtos;
            }
        }
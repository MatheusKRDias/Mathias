<h2>Listar Produtos Carrinho</h2>

<table class="table">
    <thead>
        <tr>
            <TH>IDPRODUTO</TH>
            <th>NOME</th> 
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <?php foreach ($carrinho as $produto): ?>
    <tr>
        <td><?=$produto['CodProduto']?></td>        
        <td><?=$produto['NomeProd']?></td>
        <td><a href="./produto/editar/<?=$produto['CodProduto']?>" class="btn btn-info">edit</a></td>
        <td><a href="./carrinho/deletar/<?=$produto['CodProduto']?>" class="btn btn-danger">del</a></td>
    </tr>
    <?php endforeach; ?>
</table>




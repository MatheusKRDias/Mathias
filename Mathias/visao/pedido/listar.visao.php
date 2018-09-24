    <meta charset="utf-8">
<h2>Listar Produtos</h2>

<table class="table">
    <thead>
        <tr>
            <TH>CODPRODUTO</TH>
            <th>NOME</th> 
            <th>DESCRICAO</th>
            <th>PRECO</th>
            <th>VIEW</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <?php foreach ($produtos as $produto): ?>
    <tr>
        <td><?=$produto['CodProduto']?></td>        
        <td><?=$produto['NomeProd']?></td>
        <td><?=$produto['Descricao']?></td>
        <td><?=$produto['Preco']?></td>
        <td><a href="./produto/visualizar/<?=$produto['CodProduto']?>" class="btn btn-secondary">view</a></td>
        <td><a href="./produto/editar/<?=$produto['CodProduto']?>" class="btn btn-info">edit</a></td>
        <td><a href="./produto/deletar/<?=$produto['CodProduto']?>" class="btn btn-danger">del</a></td>
    </tr>
    <?php endforeach; ?>
</table>


<a href="./produto/adicionar" class="btn btn-primary">Adicionar novo produto</a>


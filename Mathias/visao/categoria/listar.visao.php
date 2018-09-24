    <meta charset="utf-8">
<h2>Listar Categorias</h2>

<table class="table">
    <thead>
        <tr>
            <th>CODCATEGORIA</th>
            <th>CATEGORIA</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <?php foreach ($categorias as $categoria): ?>
    <tr>
        <td><?=$categoria['CodCategoria']?></td>
        <td><?=$categoria['NomeCategoria']?></td>
        
        <td><a href="./categoria/deletar/<?=$categoria['CodCategoria']?>" class="btn btn-danger">del</a></td>
    </tr>
    <?php endforeach; ?>
</table>


<a href="./categoria/adicionar" class="btn btn-primary">Adicionar nova categoria</a>


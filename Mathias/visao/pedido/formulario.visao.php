    <meta charset="utf-8">
<form action="<?=@$acao?>" method="POST">
    Nome: <input type="text" name="nome" value="<?=@$produto['NomeProd']?>">
    Descrição: <input type="text" name="descricao" value="<?=@$produto['Descricao']?>">
    Preço: <input type="text" name="preco" value="<?=@$produto['Preco']?>">
    <button type="submit">Enviar</button>
</form>
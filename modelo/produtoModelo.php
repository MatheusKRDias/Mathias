<?php 

function AdicionarProd($NP, $P, $Desc){

	$comando = "INSERT INTO Produto (NomeProd, Preco, Descricao)
	VALUES ('$NomeProduto', '$Preco', '$Descri')";

	$retorno = mysqli_query(conexao(), $comando);

	if($retorno) {
		header("refresh:2; url=ProductList.php");
		echo "Foi inserido com sucesso!";
	} else {
		echo "Algo de errado não está certo!";
	}
}

function AtualizarProduto($PRDC, $DSC, $IDen){
	$comando = "UPDATE Produto
	SET Descricao = $descricao, Preco = $preco
	WHERE CodProd =$id";

	$retorno = mysqli_query(conexao(), $comando);

	if($retorno) {
		header("refresh:2; url=ProductList.php");
		echo "Atualizado com sucesso!";
	} else {
		echo "Deu algum probleminha!";
	}
}

function CatchProdForId($idd){

	$id = $_POST["CodProduto"];
	$comando = "SELECT * FROM Produto WHERE CodProduto = $id";
	$retorno = mysqli_query(conexao(), $comando);

	$registro = mysqli_fetch_assoc($retorno);
}

function DeletarProduto($IDEN){
	$id = $_POST["CodProduto"];

	$comando = "DELETE FROM Produto WHERE CodProduto = $id";

	$retorno = mysqli_query(conexao(), $comando); 

	if($retorno) {
		header("refresh:1; url=ProductList.php");
		echo "Foi excluido com sucesso!";
	} else {
		echo "Deu algum probleminha!";
	}
}

function DetalharProduto($Idin){

	$id = $_POST["CodProduto"];

	$comando = "SELECT * FROM Produto WHERE CodProduto = $id";
	$retorno = mysqli_query(conexao(), $comando);

	$registro = mysqli_fetch_assoc($retorno);

	echo "Id: " . $registro["CodProd"];
	echo " Description: " . $registro["Descricao"];
	echo " Preco: " . $registro["Preco"];
	echo "<br>";
}

function ListarProduto(){

	$comando = "SELECT * FROM Produto";
	$retorno = mysqli_query(conexao(), $comando);
	$produtos = array();
	while($registro = mysqli_fetch_assoc($retorno)) {
		$produtos[] = $registro;
	}
}



<?php 
	require "./servicos/carrinhoServico.php";
	require "./modelo/produtoModelo.php";

	/** anon */
	function index(){
		$carrinho = $_SESSION["carrinho"];
		$dados["carrinho"] = pegarVariosProdutosPorId($carrinho);

		exibir("produto/carrinho",$dados);
	}

	/** anon */
	function adicionar($id){
		addCarrinho($id);
		exibir("produto/index");
	}

	/** anon */
	function deletar($id){
		unset($_SESSION["carrinho"][$id]);
		$_SESSION["carrinho"] = array_values($_SESSION["carrinho"]);
		redirecionar("carrinho/index");
	}

?>
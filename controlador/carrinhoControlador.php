<?php 
	require "./servicos/carrinhoServico.php";
	require "./modelo/produtoModelo.php";

	/** anon */
	function index(){
		if (!empty($_SESSION["carrinho"])) {
		$carrinho = $_SESSION["carrinho"];
		$dados["carrinho"] = pegarVariosProdutosPorId($carrinho);

		exibir("produto/carrinho",$dados);
		}else{
			exibir("produto/carrinho");
		}
	}

	/** anon */
	function adicionar($id){
	addCarrinho($id);
		exibir("produto/index");
	}	

	/** anon */
	function deletar($id){
		unset($_SESSION["carrinho"][$id]);
		redirecionar("carrinho/index");
	}

?>



<?php

# Base de dados
include 'conexao.php';

# Cabeçalho
include 'header.php';

# Conteúdo da página
if (isset($_GET['pagina'])) {
	$pagina = $_GET['pagina'];
} else {
	$pagina = 'despesas';
}

switch ($pagina) {
	case 'despesas':
		include 'views/despesas.php';
		break;
	case 'categorias':
		include 'views/cadastrar_categorias.php';
		break;
		case 'grafico':
			include 'views/grafico.php';
			break;
	default:
		include 'views/despesas.php';
		break;
}

# Rodapé
include 'footer.php';

<?php 

require_once("config.php");

	//Carrega um usuario 
//$root = new Usuario();
//$root->loadbyId(4);
//echo $root;

	//Carrega uma lista de usuario
//$lista = Usuario::getList();

//echo json_encode($lista);

/*
foreach ($lista as $key => $value) {
	echo "<br/>".$value["idusuario"];
	echo "  |  ".$value["deslogin"];
	echo "  |  ".$value["dessenha"];
	echo "  |  ".$value["dtcadastro"];
	echo "  |  ".$value["pimeiro_cadastro"];
}
	*/
	//carrega uma lista de usuarios buscando pelo login  usando SuaPagina.php?p=Sua Pesquisa
/*
@$p = $_GET["p"];
$search = Usuario::search("$p");

echo json_encode($search);
*/
	//carregando um usuario usando um login e a senha
//$usuario = new Usuario();
//$usuario->login("root", "!@%#$&");

//echo $usuario;


	//Inserir novo Cadastro usando DAO

	/*
$aluno = new Usuario("NHT","N%H&T*");

$aluno->insert();

echo $aluno;
	*/

	// update de um usuario 
//$usuario = new Usuario();

//$usuario->loadbyId(3);

//$usuario->update("NHT", "N%H&T") or ("erro ao atualizar");

//echo $usuario;

	/**/
	// Deletar um usuario
$usuario = new Usuario();

$usuario->loadbyId(4);

$usuario->delete();

echo $usuario;
	?>
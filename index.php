<?php 

require_once("config.php");

//Carrega um usuário 
//$root = new Usuario();
//$root->loadbyId(2);
//echo $root;

//Carrega uma lista de usuario
//$lista = Usuario::getList();

//echo json_encode($lista);

//carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("ro");

//echo json_encode($search);

//carregando um usuário usando um login e a senha
$usuario = new Usuario();
$usuario->login("root", "!@%#$&");

echo $usuario;
?>
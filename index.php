<?php 

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ");

//echo json_encode($usuarios);
$contar = count($usuarios);
$contar--;
foreach ($usuarios as $key => $value) {
	echo "id: ".$value["idusuario"]."<br/>";
	echo "login: ".$value["deslogin"]."<br/>";
	echo "senha: ".$value["dessenha"]."<br/>";
	echo "data de cadastro: ".$value["dtcadastro"]."<br/>";
	echo "Ultima atualização: ".$value["pimeiro_cadastro"];
	if($key<$contar){
		echo "<br/><br/>Outro:<br/><br/>";
	}
	
}

?>
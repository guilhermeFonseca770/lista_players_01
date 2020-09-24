<?php

require("conexao.php");
require("../model/usuariosModel.class.php");

class usuarioDAL{

	public function Incluir($user){
		try{
			$cx = new Conexao();
			$conn = $cx->getConn();
			$u = $user->getNome();
			$sql = "INSERT INTO usuarios (nome, email, senha, sexo) VALUES ('$usu', '$sen')";
		    $conn->exec($sql);
		    echo "Novo registro criado com sucesso!";
		}
	    catch(PDOException $e){
	    	echo $sql . "<br>" . $e->getMessage();
		}
		$conn = null;
	}

}

$u = new Usuarios();
$u->setNome("Fulano");
$ud = new usuariosDAL();
$ud->Incluir($u);



 ?>
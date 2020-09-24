<?php
class Conexao{

  private $_servidor;
  private $_usuario;
  private $_senha;
  private $_base;
  private $_conn;

  public function setServidor($_s){
    $this->_servidor = $_s;
  }
  public function setUsuario($_u){
    $this->_usuario = $_u;
  }
  public function setSenha($_p){
    $this->_senha = $_p;
  }
  public function setBase($_b){
    $this->_base = $_b;
  }
  public function getServidor(){
    return $this->_servidor;
  }
  public function getUsuario(){
    return $this->_usuario;
  }
  public function getSenha(){
    return $this->_senha;
  }
  public function getBase(){
    return $this->_base;
  }
  public function getConn(){
    return $this->_conn;
  }

public function Conectar(){
  try {
    $this->_conn = new PDO("mysql:host=$this->_servidor;dbname=$this->_base", $this->_usuario, $this->_senha);
    $this->_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão Realizada com Sucesso";
  }
  catch(PDOException $e){
    echo "Falha na Conexão: " . $e->getMessage();
  }
}

function __construct($servidor="localhost", $usuario="root", $senha="", $base="mydb"){
    $this->setServidor($servidor);
    $this->setUsuario($usuario);
    $this->setSenha($senha);
    $this->setBase($base);
    $this->Conectar();
  }

}

$cx = new Conexao();
?>

<?php

// Incluo a classe do Crud
require_once 'Crud.class.php';

/**
* Classe abastrata que faz o gerenciamento dos usuários
* @author Marcel Sartori - contato@mslwebstudio.com.br
*/

class Usuarios extends Crud{
	
	protected $table = 'usuarios';
	private $nome;
	private $email;
	
	/** 
	* Método setNome (grava o nome do usuário na variável $nome)
	* @param $nome = varchar (Nome do usuário a ser gravado)
	*/
	public function setNome($nome){
		$this->nome = $nome;
	}
	
	/** 
	* Método getNome (Retorna o nome do usuário gravado na variável $nome)
	*/
	public function getNome(){
		return $this->nome;
	}
	
	/** 
	* Método setEmail (grava o email do usuário na variável $email)
	* @param $email = varchar (Email do usuário a ser gravado)
	*/
	public function setEmail($email){
		$this->email = $email;
	}
	
	/** 
	* Método getEmail (Retorna o email do usuário gravado na variável $email)
	*/
	public function getEmail(){
		return $this->email;
	}

	/** 
	* Método cretae (Insere o usuário no banco de dados)
	*/
	public function create(){
		$sql  = "INSERT INTO $this->table (nome, email) VALUES (:nome, :email)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		return $stmt->execute(); 
	}
	
	/** 
	* Método update (Atualiza os dados do usuário no banco de dados)
	* @param $id = integer (Código do usuário que será atualizado)
	*/
	public function update($id){
		$sql  = "UPDATE $this->table SET nome = :nome, email = :email WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();
	}
}

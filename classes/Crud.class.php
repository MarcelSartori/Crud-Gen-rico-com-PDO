<?php
// Incluo a classe de conexão ao db
require_once('DB.class.php');

/**
* Classe abastrata que possui a organização do CRUD
* @author Marcel Sartori - contato@mslwebstudio.com.br
*/

abstract class Crud extends DB {

	protected $table;

	/** 
	* Método Create (Insere um registro no banco)
	* Método abstrato que deve ser declarado na classe final
	*/
	abstract public function create();

	/** 
	* Método Read (Lista um determinado registro do banco)
	* @param $id = integer (Código do registro a ser listado)
	*/
	public function read($id){
		$sql = "SELECT * FROM $this->table WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
	}

	/** 
	* Método readAll (Lista todos os registros de uma determinada tabela)
	*/
	public function readAll(){
		$sql  = "SELECT * FROM $this->table";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	/** 
	* Método Update (Atualiza um registro no banco)
	* Método abstrato que deve ser declarado na classe final
	*/
	abstract public function update($id);

	/** 
	* Método Delete (Remove um registro do banco)
	* @param $id = integer (Código do registro a ser excluído)
	*/
	public function delete($id){
		$sql  = "DELETE FROM $this->table WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		return $stmt->execute(); 
	}
}

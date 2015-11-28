<?php

/**
* Classe abastrata que possui a organização do CRUD
* @author Marcel Sartori - contato@mslwebstudio.com.br
*/

class DB{

	// instancia atual
	private static $instance;

	/** 
	* Método getInstace (Verifica se existe uma instancia do banco)
	* Caso não exista uma instância válida, uma nova instância com a conexão é realizada
	*/
	public static function getInstance(){

		if (!isset (self::$instance)){

			try{
				self::$instance = new PDO('mysql:host=localhost; dbname=crud_poo', 'root', '');
				// Setamos o atributo responsável pelos erros
				self::$instance->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				// Setamos o atributo responsável pelos retornos padrões (retorna como objetos)
				self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
			}

			catch (PDOException $erro){
				echo $erro->getMessage();
			}

		}

		return self::$instance;

	}

	/** 
	* Método prepare (Método do PDO para preparar uma query)
	* @param $sql = varchar (Código em SQL da query a ser executada no banco de dados)
	*/
	public static function prepare($sql){
		return self::getInstance()->prepare($sql);
	}
	
}

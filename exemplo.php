<?php
// Carrego as classes
function __autoload($classe){
	require_once 'classes/'.$classe.'.class.php'; 
}

// Instancio a classe
$usuario = new Usuarios();

### LEITURA DOS DADOS DE TODOS OS USUÁRIOS
foreach($usuario->readAll() as $key => $user):

	echo $user->id.'</br>';
	echo $user->nome.'</br>';
	echo $user->email.'</br><hr>';

endforeach;
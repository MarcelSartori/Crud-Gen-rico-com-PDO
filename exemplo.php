<?php
// Carrego as classes
function __autoload($classe){
	require_once 'classes/'.$classe.'.class.php'; 
}

// Instancio a classe
$usuario = new Usuarios();


### CRIAÇÃO DE USUÁRIO
// Defino as variáveis
$nome = "Meu nome";
$email = "contato@comtoso.com";

// Gravo na minha classe
$usuario->setNome($nome);
$usuario->setEmail($email);

// Crio o usuário
if ($usuario->create()) {
	echo "Usuário criado com sucesso!";
}


### UPDATE DE USUÁRIO
// Defino as variáveis
$nome = "Meu nome";
$email = "contato@comtoso.com";

// Gravo na minha classe
$usuario->setNome($nome);
$usuario->setEmail($email);

// Crio o usuário
if ($usuario->update(1)) {
	echo "Usuário atualizado com sucesso!";
}


### lEITURA DOS DADOS DO USUÁRIO
$id = (int)1;

$user = $usuario->read($id);

echo $user->id.'</br>';
echo $user->nome.'</br>';
echo $user->email.'</br><hr>';


### LEITURA DOS DADOS DE TODOS OS USUÁRIOS
foreach($usuario->readAll() as $key => $user):

	echo $user->id.'</br>';
	echo $user->nome.'</br>';
	echo $user->email.'</br><hr>';

endforeach;



### DELETO O USUÁRIO
if ($usuario->delete(1)) {
	echo "Usuário removido com sucesso!";
}

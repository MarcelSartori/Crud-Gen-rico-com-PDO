# CRUD genérico utilizando PDO e OOP
Este é um pequeno exemplo de Crud genérico utilizando PDO e PHP Orientado a objetos.

Fique a vontade para contribuir com este projeto! =)
Dê um Fork no projeto e colabore.


# Exemplo de Utilização

Para utilizar o CRUD genérico, basta criar sua classe declarando os métodos delete e read como métodos abstratos.

CRIAÇÃO DE USUÁRIO
// Defino as variáveis
$nome = "Meu nome";
$email = "contato@comtoso.com";

// Gravo na minha classe
$usuario->setNome($nome);
$usuario->setEmail($email);

// Crio o usuário
$usuario->create();


UPDATE DE USUÁRIO
// Defino as variáveis
$nome = "Meu nome";
$email = "contato@comtoso.com";

// Gravo na minha classe
$usuario->setNome($nome);
$usuario->setEmail($email);

// Crio o usuário
$usuario->update(1);


LEITURA DOS DADOS DO USUÁRIO
$id = 1;

$user = $usuario->read($id);

echo $user->id.'</br>';
echo $user->nome.'</br>';
echo $user->email.'</br><hr>';


DELETANDO USUÁRIOS
$usuario->delete(1);
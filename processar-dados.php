<?php

// pegando os dados que esnatao vindo do formulario
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$data = $_POST['data-nascimento'];
$endereco = $_POST['endereco'];
$complemento = $_POST['complemento'];
$cep = $_POST['cep'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$data_atual = date('Y-m-d H:i:s');

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'clientes';


$conn = new mysqli('$server', '$username', '$password', '$clientes');

// Verifica se a conexão foi bem-sucedida


if ($conn->connect_error) {
    die("Falha ao se comunicar com o banco de dados: " . $conn->connect_error);
}

$smtp = $conn->prepare("INSERT INTO clientes (nome, email, telefone, data, endereco, complemento, cep, bairro, cidade, estado) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$smtp->bind_param("ssssssssss", $nome, $email, $telefone, $data, $endereco, $complemento, $cep, $bairro, $cidade, $estado, $data_atual);
if ($smtp->execute()) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . $smtp->error;
}

$smtp->close();
$conn->close();
?>


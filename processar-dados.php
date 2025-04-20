<?php

// pegando os dados que esnatao vindo do formulario
$nome = $_POST['nome-completo'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$data = $_POST['data-nascimento'];
$endereco = $_POST['endereco'];
$complemento = $_POST['complemento'];
$cep = $_POST['cep'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

$conn = new mysqli(localhost)
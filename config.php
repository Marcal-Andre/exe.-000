<?php

     $dbHost = 'localhost';
     $dbUsername = 'root';
     $dbPassword = '';
     $dbName = 'usuarios';

        // Cria a conexão
        $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

        // Verifica se a conexão foi bem-sucedida
        if ($conn->connect_error) {
            
            die("Falha ao se comunicar com o banco de dados: " . $conn->connect_error);
        }

        else {
            echo "Conexão bem-sucedida ao banco de dados.";
        }

?>
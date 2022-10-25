<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulário';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    $sql = $connection->query("Select * From tb_trabalhador and tb_detalhe_trabalhador");
    if($sql){ 
    while($exibe = $sql->fetch_assoc()){
        foreach($exibe as $key => $value){
            echo "<br />" . $value;
        }

    }
}

    if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else
    {
        echo "Conexão feita com sucesso";
    }
?>
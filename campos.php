<?php

    if(isset($_Post['submit']))
    {

    include_once('config.php');

    $nome = $_POST ['nome'];
    if ($nome == "") {
    }


    $senha = $_POST ['senha'];
    if ($senha == "") {
    }

    $email = $_POST ['email'];
    if ($email == "") {
    }

    $cpf = $_POST ['cpf'];
    if ($cpf == "") {
    }

    $rg= $_POST ['RG'];
    if ($rg == "") {
    }

    $telefone = $_POST ['telefone'];
    if ($telefone == "") {
    }

    $sexo = $_POST ['sexo'];
    if ($sexo == "") {
    }

    $data_nasc = $_POST ['data_nasc'];
    if ($data_nasc == "") {
    }

    $cidade = $_POST ['cidade'];
    if ($cidade== "") {
    }

    $estado = $_POST ['estado'];
    if ($estado == "") {
    }

    $endereço = $_POST ['endereço'];
    if ($endereço== "") {
    }

    $cep = $_POST ['CEP'];
    if ($cep== "") {
    }

    $telefone = $_POST ['telefone'];
    if ($telefone == "") {
    }

    $nomePai= $_POST ['nome do Pai'];
    if ($tnomePai == "") {
    }

    $nomeMãe= $_POST ['Nome da Mãe'];
    if ($nomeMãe == "") {
    }

    $result = mysqli_query($conexao, "INSTER INTO usuarios(nome,email,telefone,sexo,data_nasc,cidade,estado,endereço) 
    VALUES ('$nome', '$senha','$cpf','$rg','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$cep','$endereço' '$nomePai', '$nomeMãe')");
    }

?>

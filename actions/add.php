<?php
    include "../conexao.php";

    $nome = $_POST['campoNome'];
    $email = $_POST['campoEmail'];
    $cpf = $_POST['campoCpf'];
    $data = $_POST['campoData'];
    $sexo = $_POST['campoSexo'];
    $obs = $_POST['campoObs'];

    $sql = "insert into clientes (nome, email, cpf, data, sexo, obs)
        values ('$nome', '$email', '$cpf', '$data', '$sexo', '$obs')";

    
    $conexao->query($sql);

    header("location: ../");

?>


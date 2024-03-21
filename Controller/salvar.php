<?php
    include_once "conexao.php";

    $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $empresa = filter_input(INPUT_GET, "empresa", FILTER_SANITIZE_SPECIAL_CHARS);
    $cnpj = filter_input(INPUT_GET, "cnpj", FILTER_SANITIZE_SPECIAL_CHARS);

    $sql = "INSERT INTO clientes (nome, email, empresa, cnpj) VALUES ('$nome', '$email', '$empresa', '$cnpj')";
    echo $sql;

    $inserir = mysqli_query($link, $sql);
    if($inserir) {
        echo "Cadastrado com Sucesso";
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($link);
    }

    mysqli_close($link);
?>



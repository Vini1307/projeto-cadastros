<?php
    include_once "conexao.php";

    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_SPECIAL_CHARS);
    $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $empresa = filter_input(INPUT_GET, "empresa", FILTER_SANITIZE_SPECIAL_CHARS);
    $cnpj = filter_input(INPUT_GET, "cnpj", FILTER_SANITIZE_SPECIAL_CHARS);
    $senha = filter_input(INPUT_GET, "senha", FILTER_SANITIZE_SPECIAL_CHARS);

        if ($nome > 0) {
            $sql = "UPDATE clientes SET nome = '$nome', email = '$email', empresa = '$empresa', cnpj = '$cnpj' WHERE nome = '$nome';";
        } else {
            $sql = "INSERT INTO clientes (nome, email, empresa, cnpj) VALUES ('$nome', '$email', '$empresa', '$cnpj')";
        }
    

    $inserir = mysqli_query($link, $sql);
    if($inserir) {
        echo "
            <script>
                alert('Salvo com sucesso');
                Window.location.href='../index.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('Erro ao Salvar');
            Window.location.href='../index.php';
        </script>
        ";
    }

    mysqli_close($link);
?>



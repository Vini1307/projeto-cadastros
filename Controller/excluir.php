<?php
    include_once "conexao.php";

    $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $sql = "DELETE FROM clientes WHERE nome = '$nome'";

    $inserir = mysqli_query($link, $sql);
    if($inserir) {
        echo "
            <script>
                alert('Cadastro excluido');
                Window.location.href='../index.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('Erro ao Excluir');
            Window.location.href='../index.php';
        </script>
        ";
    }

    mysqli_close($link);

?>



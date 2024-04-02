<?php
    include_once "conexao.php";

    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_SPECIAL_CHARS);
    $sql = "DELETE FROM clientes WHERE id = '$id';";

    $inserir = mysqli_query($link, $sql);
    if($inserir) {
        echo "
            <script>
                alert('Cadastro excluido');
                window.location.href='../index.php'; // 'W' minúsculo corrigido para 'w'
            </script>
        ";
    } else {
        echo "
        <script>
            alert('Erro ao Excluir');
            window.location.href='../index.php'; // 'W' minúsculo corrigido para 'w'
        </script>
        ";
    }

    mysqli_close($link);
?>

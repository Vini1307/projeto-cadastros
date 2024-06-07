<?php
    include_once "conexao.php";
    
    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_SPECIAL_CHARS);
    $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $empresa = filter_input(INPUT_GET, "empresa", FILTER_SANITIZE_SPECIAL_CHARS);
    $cnpj = filter_input(INPUT_GET, "cnpj", FILTER_SANITIZE_SPECIAL_CHARS);
    $senha = filter_input(INPUT_GET, "senha", FILTER_SANITIZE_SPECIAL_CHARS);

    $check_user = "SELECT id FROM clientes WHERE email = '$email' AND senha = '$senha'";
    $result_user = mysqli_query($link, $check_user);
    
    if ($result_user && mysqli_num_rows($result_user) > 0) {
        echo "
            <script>
                window.location.href = '../produtos.php';
            </script>
        ";
        die();
    } else {
        echo "
            <script>
                alert('Usuario não encontrado!');
                window.location.href = '../login.php';
            </script>
        ";
        die();
    }


    if ($nome != '' && $email != '' && $empresa != '' && $cnpj != '' && $senha != '') {
        
        $check_sql = "SELECT id FROM clientes WHERE cnpj = '$cnpj'";
        $result = mysqli_query($link, $check_sql);

        if ($result && mysqli_num_rows($result) > 0) {
            
            $row = mysqli_fetch_assoc($result);
            $id = $row['id'];
            $sql = "UPDATE clientes SET nome = '$nome', email = '$email', empresa = '$empresa', senha = '$senha' WHERE id = $id";
        } else {
            
            $sql = "INSERT INTO clientes (nome, email, empresa, cnpj, senha) VALUES ('$nome', '$email', '$empresa', '$cnpj', '$senha')";
        }

        $query = mysqli_query($link, $sql);

        if ($query) {
            echo "
                <script>
                    alert('Atualizacao bem sucedida');
                    window.location.href = '../index.php';
                </script>
            ";
            die();
        } else {
            $error = mysqli_error($link);
            echo "
                <script>
                    alert('Erro ao salvar: " . addslashes($error) . "');
                    window.location.href = '../index.php';
                </script>
            ";
            die();
        }
    } else {
        echo "
            <script>
                alert('Preencha todos os campos');
                window.location.href = '../login.php';
            </script>
        ";
        return false;
    }

    mysqli_close($link);
?>



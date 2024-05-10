<?php
    include_once "conexao.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (!empty($_POST['email']) && !empty($_POST['senha'])) {
            
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            
            $query = "SELECT * FROM clientes WHERE email = '$email' AND senha = '$senha'";
            $result = mysqli_query($link, $query);

            
            if (mysqli_num_rows($result) == 1) {
                
                header("Location: ../empresas_cadastradas.php");
                exit();
            } else {
                echo "<script>alert('Usuário ou senha inválidos.'); window.location.href = '../login.php';</script>";
            }
            
        } else {
            
            echo "Por favor, preencha todos os campos.";
        }
    }
?>

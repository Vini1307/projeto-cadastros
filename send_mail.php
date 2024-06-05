<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta e sanitiza os dados do formulário
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST['message']);

    // Define o endereço de email para onde a mensagem será enviada
    $to = "seuemail@exemplo.com"; // Substitua por seu endereço de email
    $subject = "Nova mensagem de contato de $name";

    // Cria o corpo do email
    $body = "Nome: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Mensagem:\n$message\n";

    // Define os cabeçalhos do email
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Tenta enviar o email
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem.";
    }
} else {
    echo "Método de solicitação inválido.";
}
?>

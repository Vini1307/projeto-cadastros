<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pega os dados do formulário
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Configurações do e-mail
    $to = "vinicius.garcia@aluno.faculdadeimpacta.com.br";
    $subject = "Mensagem de Contato de $name";
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Content-Type: text/html; charset=UTF-8";

    // Corpo do e-mail
    $email_content = "<h2>Mensagem de Contato</h2>";
    $email_content .= "<p><strong>Nome:</strong> $name</p>";
    $email_content .= "<p><strong>Email:</strong> $email</p>";
    $email_content .= "<p><strong>Mensagem:</strong><br>$message</p>";

    // Envia o e-mail
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Falha ao enviar a mensagem.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>

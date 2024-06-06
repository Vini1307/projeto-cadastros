<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <style>
        /* Seu estilo CSS */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
        }

        header {
            background-color: #6A1B9A;
            color: #fff;
            padding: 20px 0;
        }

        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header h1 {
            margin: 0;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        main .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
        }

        .contact-form {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 10px;
            flex: 1 0 100%;
            text-align: center;
        }

        .contact-form input,
        .contact-form textarea {
            width: calc(100% - 40px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
        }

        .contact-form button {
            background-color: #6A1B9A;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
        }

        .contact-form button:hover {
            background-color: #4A148C;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        footer .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
    </style>
    <script>
        function sendMessage(event) {
            event.preventDefault();

            const name = document.querySelector('input[name="name"]').value;
            const email = document.querySelector('input[name="email"]').value;
            const message = document.querySelector('textarea[name="message"]').value;

            const whatsappNumber = '5511982573342'; // Substitua pelo número de telefone desejado com código do país
            const whatsappMessage = `Nome: ${name}%0AEmail: ${email}%0AMensagem: ${message}`;

            const whatsappURL = `https://wa.me/${whatsappNumber}?text=${whatsappMessage}`;

            window.open(whatsappURL, '_blank');
        }
    </script>
</head>
<body>
    <header>
        <div class="container">
            <h1>Eskistore</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="contato.php">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <section class="contact-form">
                <h2>Contato</h2>
                <form id="contactForm" onsubmit="sendMessage(event)">
                    <input type="text" name="name" placeholder="Seu Nome" required>
                    <input type="email" name="email" placeholder="Seu Email" required>
                    <textarea name="message" placeholder="Sua Mensagem" required></textarea>
                    <button type="submit">Enviar Mensagem</button>
                </form>
            </section>
        </div>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2024 Eskistore. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>

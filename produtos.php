<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos Variados</title>
    <style>
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

        .products {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .product {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 10px;
            flex: 1 0 30%;
            text-align: center;
        }

        .product img {
            max-width: 100%;
            border-radius: 5px;
        }

        .product h2 {
            color: #6A1B9A;
            font-size: 1.5em;
        }

        .product p {
            color: #666;
        }

        .product .quantity {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 10px 0;
        }

        .product .quantity input {
            width: 40px;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 0 10px;
        }

        .product .quantity button {
            background-color: #6A1B9A;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
        }

        .product .quantity button:hover {
            background-color: #4A148C;
        }

        .product button {
            background-color: #6A1B9A;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
        }

        .product button:hover {
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

        .cart-popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .cart-popup-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            width: 80%;
            max-width: 500px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .cart-popup .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 1.5em;
            cursor: pointer;
        }

        .cart-popup h2 {
            color: #6A1B9A;
        }

        .checkout-button {
            background-color: #6A1B9A;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
        }

        .checkout-button:hover {
            background-color: #4A148C;
        }

        .imagensprodutos{
            width: 1080px; /* Largura Full HD */
            height: 350px; /* Altura Full HD */
            object-fit: cover; /* Cobre toda a área da imagem */
            border-radius: 10px; /* Opcional: Adicione um canto arredondado */
        }

        .imagensprodutos2{
            width: 350px; /* Largura Full HD */
            height: 350px; /* Altura Full HD */
            object-fit: cover; /* Cobre toda a área da imagem */
            border-radius: 10px; /* Opcional: Adicione um canto arredondado */
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Eskistore</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="contato.php">Contato</a></li>
                    <li><a href="#" id="cart-button">Carrinho</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <section class="products">
                <article class="product" data-id="1" data-name="Produto 1" data-price="R$10.00">
                    <img class="imagensprodutos" src="imagens/produto1.jpg" alt="Produto 1">
                    <h2>Pão de forma</h2>
                    <p>Pão de forma macio</p>
                    <div class="quantity">
                        <button class="quantity-decrease">-</button>
                        <input type="number" value="1" min="1">
                        <button class="quantity-increase">+</button>
                    </div>
                    <button class="add-to-cart">Comprar</button>
                </article>
                <article class="product" data-id="2" data-name="Produto 2" data-price="R$15.00">
                    <img class="imagensprodutos" src="imagens/produto2.jpg" alt="Produto 2">
                    <h2>Queijo Prato</h2>
                    <p>Queijo prato 500g</p>
                    <div class="quantity">
                        <button class="quantity-decrease">-</button>
                        <input type="number" value="1" min="1">
                        <button class="quantity-increase">+</button>
                    </div>
                    <button class="add-to-cart">Comprar</button>
                </article>
                <article class="product" data-id="3" data-name="Produto 3" data-price="R$5.67">
                    <img class="imagensprodutos2" src="imagens/produto3.jpg" alt="Produto 3">
                    <h2>Farinha de Trigo</h2>
                    <p>Farinha de trigo 30g</p>
                    <div class="quantity">
                        <button class="quantity-decrease">-</button>
                        <input type="number" value="1" min="1">
                        <button class="quantity-increase">+</button>
                    </div>
                    <button class="add-to-cart">Comprar</button>
                </article>
                <article class="product" data-id="1" data-name="Produto 1" data-price="R$5.99">
                    <img class="imagensprodutos" src="imagens/detergente.jpg" alt="Produto 1">
                    <h2>Detergente</h2>
                    <p>detergente minuano 200g</p>
                    <div class="quantity">
                        <button class="quantity-decrease">-</button>
                        <input type="number" value="1" min="1">
                        <button class="quantity-increase">+</button>
                    </div>
                    <button class="add-to-cart">Comprar</button>
                </article>
            </section>
        </div>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2024 Eskistore. Todos os direitos reservados.</p>
        </div>
    </footer>
    <div id="cart-popup" class="cart-popup">
        <div class="cart-popup-content">
            <span class="close-button">&times;</span>
            <h2>Carrinho de Compras</h2>
            <div id="cart-items">
                <!-- Os itens do carrinho serão adicionados aqui -->
            </div>
            <button class="checkout-button">Finalizar Compra</button>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var cartButton = document.getElementById('cart-button');
            var cartPopup = document.getElementById('cart-popup');
            var closeButton = document.querySelector('.close-button');
            var cartItemsContainer = document.getElementById('cart-items');
            var checkoutButton = document.querySelector('.checkout-button');
            var products = document.querySelectorAll('.product');

            var cart = [];

            cartButton.addEventListener('click', function () {
                cartPopup.style.display = 'flex';
                renderCartItems();
            });

            closeButton.addEventListener('click', function () {
                cartPopup.style.display = 'none';
            });

            window.addEventListener('click', function (event) {
                if (event.target === cartPopup) {
                    cartPopup.style.display = 'none';
                }
            });

            products.forEach(function (product) {
                var addButton = product.querySelector('.add-to-cart');
                var quantityInput = product.querySelector('input[type="number"]');
                var decreaseButton = product.querySelector('.quantity-decrease');
                var increaseButton = product.querySelector('.quantity-increase');

                addButton.addEventListener('click', function () {
                    var productId = product.getAttribute('data-id');
                    var productName = product.getAttribute('data-name');
                    var productPrice = product.getAttribute('data-price');
                    var quantity = parseInt(quantityInput.value);

                    var cartItem = cart.find(item => item.id === productId);

                    if (cartItem) {
                        cartItem.quantity += quantity;
                    } else {
                        cart.push({
                            id: productId,
                            name: productName,
                            price: productPrice,
                            quantity: quantity
                        });
                    }

                    alert(productName + ' adicionado ao carrinho!');
                });

                decreaseButton.addEventListener('click', function () {
                    var currentQuantity = parseInt(quantityInput.value);
                    if (currentQuantity > 1) {
                        quantityInput.value = currentQuantity - 1;
                    }
                });

                increaseButton.addEventListener('click', function () {
                    var currentQuantity = parseInt(quantityInput.value);
                    quantityInput.value = currentQuantity + 1;
                });
            });

            checkoutButton.addEventListener('click', function () {
                alert('Compra finalizada! Nota fiscal sera encaminhada ao email cadastrado.');
                cart = [];
                cartPopup.style.display = 'none';
                renderCartItems();
            });

            function renderCartItems() {
                cartItemsContainer.innerHTML = '';

                cart.forEach(function (item) {
                    var cartItemElement = document.createElement('div');
                    cartItemElement.classList.add('cart-item');
                    cartItemElement.innerHTML = `
                        <p>${item.name} - R$${item.price} x ${item.quantity}</p>
                    `;
                    cartItemsContainer.appendChild(cartItemElement);
                });
            }
        });
    </script>
</body>
</html>

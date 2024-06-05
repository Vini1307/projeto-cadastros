document.addEventListener('DOMContentLoaded', function () {
    var cartButton = document.getElementById('cart-button');
    var cartPopup = document.getElementById('cart-popup');
    var closeButton = document.querySelector('.close-button');

    cartButton.addEventListener('click', function () {
        cartPopup.style.display = 'flex';
    });

    closeButton.addEventListener('click', function () {
        cartPopup.style.display = 'none';
    });

    window.addEventListener('click', function (event) {
        if (event.target === cartPopup) {
            cartPopup.style.display = 'none';
        }
    });
});

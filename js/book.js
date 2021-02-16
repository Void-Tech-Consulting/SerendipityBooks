window.addEventListener('DOMContentLoaded', (event) => {
    document.getElementById("plus").addEventListener("click", incrementQuantity);
    document.getElementById("minus").addEventListener("click", decrementQuantity);

    function incrementQuantity() {
        var quantity = document.getElementById('book-quantity');
        var number = quantity.innerHTML;
        number++;
        quantity.innerHTML = number;
    }
    function decrementQuantity() {
        var quantity = document.getElementById('book-quantity');
        var number = quantity.innerHTML;
        number--;
        if (number >= 0) {
            quantity.innerHTML = number;
        }
    }
});


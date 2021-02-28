window.addEventListener('DOMContentLoaded', (event) => {
    document.getElementById("plus").addEventListener("click", incrementQuantity);
    document.getElementById("minus").addEventListener("click", decrementQuantity);

    function incrementQuantity() {
        var max = parseInt(document.getElementById('book-quantity').max);
        console.log(document.getElementById('book-quantity').value < max);
        if (document.getElementById('book-quantity').value < max) {
            document.getElementById('book-quantity').value++;
        }
    }
    function decrementQuantity() {
        if (document.getElementById('book-quantity').value > 1) {
            document.getElementById('book-quantity').value--;
        }
    }
});


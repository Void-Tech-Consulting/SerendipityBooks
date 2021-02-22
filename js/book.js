window.addEventListener('DOMContentLoaded', (event) => {
    document.getElementById("plus").addEventListener("click", incrementQuantity);
    document.getElementById("minus").addEventListener("click", decrementQuantity);

    function incrementQuantity() {
        document.getElementById('book-quantity').value++;
        
    }
    function decrementQuantity() {
        document.getElementById('book-quantity').value++;
    }
});

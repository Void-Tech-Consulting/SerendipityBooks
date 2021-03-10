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

var isbn = $('#bookcover').data('isbn');

$.ajax({
  dataType: 'json',
  url: 'https://www.googleapis.com/books/v1/volumes?q=isbn:' + isbn,
  success: handleResponse
});

function handleResponse( response ) {
  $.each( response.items, function( i, item ) {
    
    var title    = item.volumeInfo.title,
        author   = item.volumeInfo.authors[0],        
        thumb    = item.volumeInfo.imageLinks.thumbnail;
    
    $('#booktitle').text( title );
    $('#bookauthor').text( author );
    $('#thumbnail').attr('src', thumb);
  });
}
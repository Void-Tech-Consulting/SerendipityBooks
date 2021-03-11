window.addEventListener('DOMContentLoaded', (event) => {
    document.getElementById("plus").addEventListener("click", incrementQuantity);
    document.getElementById("minus").addEventListener("click", decrementQuantity);

    function incrementQuantity() {
        var max = parseInt(document.getElementById('book-quantity').max);
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


(function($) {
  $(document).ready(function(){
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
            descrip  = item.volumeInfo.description;  
            thumb    = item.volumeInfo.imageLinks.thumbnail;
            
        var alen = author.length, name;
        for (var i = alen - 1; i > 0; i--) {
          console.log(author[i]);
          if (author[i] == ' ') {
            name = i;
            break;
          }
        }
        $('#booktitle').text( title );
        $('#bookauthorlast').text( author.substring(name, alen) + ', ');
        $('#bookauthorfirst').text( author.substring(0, name) + ' - ');
        $('#descrip').text(descrip);
        $('#thumbnail').attr('src', thumb);
      });
    }
  })
}(jQuery));
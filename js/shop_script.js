(function($) {
    $(document).ready(function(){

        posts_per_page = 30;
        cat_name = '0';
        condition = '0';
        order_by = '0';
        page = '1';
        update_shop();

        function update_shop() {
            $.ajax({
                type : "post",
                dataType : "html",
                url : myAjax.ajaxurl,
                data : {action: "shop_by_category", cat_name : cat_name, posts_per_page: posts_per_page},
                success: function(response) {
                  $('body').find('#display-bookstore').html(response.substring(1));
                }
             });
        }

       $('#test-change-categories').on('change', function() {
           console.log(cat_name);
           cat_name = $('#test-change-categories').val();
           update_shop();
       });

       $('#change-post-num').on('change', function() {
            posts_per_page = $('#change-post-num').val();
            update_shop();
        });

        $('#change-condition').on('change', function() {
            condition = $('#change-condition').val();
            update_shop();
        });

        $('#change-order').on('change', function() {
            order_by = $('#change-order').val();
            update_shop();
        });

        $('#page-bar-nums').on('change', function() {
            page = $('#page-bar-nums').val();
            update_shop();
        });

       
   });
  }(jQuery));

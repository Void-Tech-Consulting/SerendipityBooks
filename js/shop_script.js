(function($) {
    $(document).ready(function(){

        posts_per_page = 30;
        cat_name = '0';
        condition = '0';
        order_by = '0';
        page = '1';
        total_pages = 0;
        update_shop();

        function update_shop() {
            $.ajax({
                type : "post",
                dataType : "json",
                url : myAjax.ajaxurl,
                data : {action: "shop_by_category", cat_name : cat_name, posts_per_page: posts_per_page, paged: page},
                success: function(response) {
                  $('body').find('#display-bookstore').html(response.html.substring(1));
                  total_pages = response.pages;
                  update_pages()
                }
             });
        }

        function update_pages() {
            var page_bar = '';
            for (let i = 1; i < total_pages + 1; ++i) {
                page_bar += "<div>" + i + "</div>";
            }
            $('body').find('#page_bar_holder').html(page_bar);
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
            console.log(order_by);
            update_shop();
        });

        $('#page-bar-nums').on('change', function() {
            page = $('#page-bar-nums').val();
            console.log(page);
            update_shop();
        });


         /* Change active category on click */
         var categories = document.getElementById("select-categories").children;
         for (let i = 0; i < categories.length; ++i) {
             console.log(categories[i]);
             categories[i].addEventListener("click", function() {
             change_category(categories[i].innerHTML);
             });
         }

         function change_category(category) {
             switch(category) {
                 case "All":
                     cat_name = '0';
                     break;
                case "Nonfiction":
                    cat_name = 'mystery';
                    break;
                case "Fiction":
                    cat_name = '0';
                    break;
                case "Childrens":
                    cat_name = 'kids';
                    break;
                case "Young Adult":
                    cat_name = '0';
                    break;
                case "Gifts":
                    cat_name = '0';
                    break;  
             }
             update_shop();
         }

         /* Change active num posts on click */
         var num_posts = document.getElementById("change-post-num").children;
         for (let i = 0; i < num_posts.length; ++i) {
             console.log(num_posts[i]);
             num_posts[i].addEventListener("click", function() {
            change_num_posts(30);
             });
         }

         function change_num_posts(value) {
             console.log(value)
            posts_per_page = value;
            update_shop();
         }
       
   });
  }(jQuery));

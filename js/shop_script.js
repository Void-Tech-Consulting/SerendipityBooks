(function($) {
    $(document).ready(function(){

        posts_per_page = 30;
        cat_name = '0';
        condition = Array('new', 'used');
        order_by = 'meta_value_num';
        page = 1;
        total_pages = 0;
        update_shop();

        function update_shop() {
            $.ajax({
                type : "post",
                dataType : "json",
                url : myAjax.ajaxurl,
                data : {action: "shop_by_category", cat_name : cat_name, posts_per_page: posts_per_page, paged: page, condition: condition, order_by: order_by},
                success: function(response) {
                  $('body').find('#display-bookstore').html(response.html.substring(1));
                  total_pages = response.pages;
                  update_pages(page);
                }
             });
        }

        function update_pages(page_clicked) {
            var page_bar = '';
            let i = 1;
            let overload = 0;
            page_bar += "<div class='selection-active' style='cursor: pointer'>" + Number(page_clicked) + "</div>";
            for (; i <  5; ++i) {
                if ((Number(page_clicked) + i) <= total_pages) {
                    page_bar += "<div style='cursor: pointer'>" + (Number(page_clicked) + i) + "</div>";
                } else if ((Number(page_clicked) - overload) > 1){
                    overload++;
                    page_bar = "<div style='cursor: pointer'>" + (Number(page_clicked) - overload) + "</div>" + page_bar;
                }
            }
            if ((Number(page_clicked) + i) < Number(total_pages)) {
                page_bar += "<div style='cursor: pointer'>...</div>";
                page_bar += "<div style='cursor: pointer'>" + total_pages + "</div>";
            }
            
            $('body').find('#page_bar_holder').html(page_bar);
            var pages = document.getElementById("page_bar_holder").children;
            for (let i = 0; i < pages.length; ++i) {
                if (i == 5) {
                    pages[i].addEventListener("click", function() {
                        change_page(Number(page_clicked) + 5);
                    })
                } else {
                    pages[i].addEventListener("click", function() {
                        change_page(pages[i].innerHTML);
                       });
                }
            }
        }

        function change_page(paged) {
            page = Number(paged);
            update_shop();
        }

        document.getElementById("page-bar-left-arrow").addEventListener("click", function() {
            if (page > 1) {
                page -= 1;
            }
            update_shop();
        });

        document.getElementById("page-bar-right-arrow").addEventListener("click", function() {
            if (page < Number(total_pages)) {
                page += 1;
            }
            update_shop();
        });

         /* Change active category on click */
         var categories = document.getElementById("select-categories").children;
         for (let i = 0; i < categories.length; ++i) {
             categories[i].addEventListener("click", function() {
             change_category(categories[i].innerHTML);
             });
         }

         function change_category(category) {
                page = 1;
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

           /* Change active condition on click */
           var conditions = document.getElementById("select-conditions").children;
           for (let i = 0; i < conditions .length; ++i) {
               conditions [i].addEventListener("click", function() {
               change_condition(conditions[i].innerHTML);
               });
           }
  
           function change_condition(conditions) {
                page = 1;
               switch(conditions) {
                   case "All":
                    condition = Array('new', 'used');
                       break;
                  case "New":
                    condition = Array('new');
                      break;
                  case "Used":
                    condition = Array('used');
                      break; 
               }
               update_shop();
           }

           window.changeOrderOrAmount = function(e) {
               console.log(e);
               if (e.srcElement.parentElement.parentElement.id  == 'display-by') {
                    change_order_by(e.srcElement.innerHTML);
               } else if (e.srcElement.parentElement.parentElement.id == 'display-num') {
                    change_display_num(e.srcElement.innerHTML);
               } else if (e.srcElement.parentElement.parentElement.id == 'select-categories') {

                change_category(e.srcElement.innerHTML);
                } else if (e.srcElement.parentElement.parentElement.id == 'select-conditions') {
                        change_condition(e.srcElement.innerHTML);
                }
            }


           function change_order_by(innerHTML) {
            page = 1;
            switch(innerHTML) {
                case "Popularity":
                    order_by = 'meta_value_num';
                    break;
               case "Newest Arrivals":
                 order_by = 'date';
                   break;
               case "Featured":
                 order_by = 'meta_value_num';
                   break; 
            }
            update_shop();
           }

           function change_display_num(innerHTML) {
            page = 1;
            posts_per_page = Number(innerHTML.replace( /^\D+/g, ''));
            update_shop();
           }
       
   });
  }(jQuery));

  

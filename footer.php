<!-- If you have html on the footer of each page put it here -->
<?php 
    wp_enqueue_style('footer');
    wp_footer(); 
    require get_template_directory() . '/inc/section_vars.php';
?>

</body>
    <div class="top-footer">

        <div class="information">
            <div class="info">
                <?php if (get_theme_mod($footer_hours)) { 
                    echo get_theme_mod($footer_hours);
                    } else {?>
                    Tues – Sat: 11 – 5 Sunday: 12 – 4
                <?php }?>
            </div>
            <div class="divider link"></div>
            <div class="info">
                <?php if (get_theme_mod($footer_address)) { 
                    echo get_theme_mod($footer_address);
                    } else {?>
                    113 W Middle St Chelsea, MI 48118
                <?php }?>
            </div>
            <div class="divider link"></div>
            <div class="info">
                <?php if (get_theme_mod($footer_phone_number)) { 
                    echo get_theme_mod($footer_phone_number);
                    } else {?>
                    734-475-7148
                <?php }?>
            </div>
            <div class="divider link hidden-mobile"></div>
        </div>
        <span id="footer-info-select"></span>

        
        <div class="socials">
        <span id="footer-social-select"></span>
            <div>
            <!-- Facebook link -->
                <a class="social-link" href="
                    <?php if (get_theme_mod($footer_facebook_link)) { 
                        echo get_theme_mod($footer_facebook_link);
                        } else {?>
                        https://www.facebook.com
                    <?php }?>">
                    <svg width="25" height="25" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M31.5 16C31.5 7.4375 24.5625 0.5 16 0.5C7.4375 0.5 0.5 7.4375 0.5 16C0.5 23.75 6.125 30.1875 13.5625 31.3125V20.5H9.625V16H13.5625V12.625C13.5625 8.75 15.875 6.5625 19.375 6.5625C21.125 6.5625 22.875 6.875 22.875 6.875V10.6875H20.9375C19 10.6875 18.375 11.875 18.375 13.125V16H22.6875L22 20.5H18.375V31.3125C25.8125 30.1875 31.5 23.75 31.5 16Z" fill="#748F67"/>
                    </svg>
                </a>
            </div>
            <div>
            <!-- Twitter link -->
                <a class="social-link" href="
                    <?php if (get_theme_mod($footer_twitter_link)) { 
                        echo get_theme_mod($footer_twitter_link);
                        } else {?>
                        https://twitter.com
                    <?php }?>">
                    <svg  width="25" height="25" viewBox="0 0 32 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M28.6875 6.5C29.9375 5.5625 31.0625 4.4375 31.9375 3.125C30.8125 3.625 29.5 4 28.1875 4.125C29.5625 3.3125 30.5625 2.0625 31.0625 0.5C29.8125 1.25 28.375 1.8125 26.9375 2.125C25.6875 0.8125 24 0.0625 22.125 0.0625C18.5 0.0625 15.5625 3 15.5625 6.625C15.5625 7.125 15.625 7.625 15.75 8.125C10.3125 7.8125 5.4375 5.1875 2.1875 1.25C1.625 2.1875 1.3125 3.3125 1.3125 4.5625C1.3125 6.8125 2.4375 8.8125 4.25 10C3.1875 9.9375 2.125 9.6875 1.25 9.1875V9.25C1.25 12.4375 3.5 15.0625 6.5 15.6875C6 15.8125 5.375 15.9375 4.8125 15.9375C4.375 15.9375 4 15.875 3.5625 15.8125C4.375 18.4375 6.8125 20.3125 9.6875 20.375C7.4375 22.125 4.625 23.1875 1.5625 23.1875C1 23.1875 0.5 23.125 0 23.0625C2.875 24.9375 6.3125 26 10.0625 26C22.125 26 28.6875 16.0625 28.6875 7.375C28.6875 7.0625 28.6875 6.8125 28.6875 6.5Z" fill="#748F67"/>
                    </svg>
                </a>
            </div>
            <div>
            <!-- Instagram link -->
                <a class="social-link" href="
                    <?php if (get_theme_mod($footer_instagram_link)) { 
                        echo get_theme_mod($footer_instagram_link);
                        } else {?>
                        https://www.instagram.com
                    <?php }?>">
                    <svg width="25" height="25" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14 10.6875C12.125 10.6875 10.625 12.1875 10.625 14C10.625 15.875 12.125 17.375 14 17.375C15.8125 17.375 17.3125 15.875 17.3125 14C17.3125 12.1875 15.8125 10.6875 14 10.6875ZM21.75 8.125C21.4375 7.25 20.75 6.5625 19.875 6.25C18.5625 5.6875 15.4375 5.8125 14 5.8125C12.5 5.8125 9.375 5.6875 8.0625 6.25C7.1875 6.5625 6.5 7.25 6.1875 8.125C5.6875 9.4375 5.75 12.5625 5.75 14C5.75 15.5 5.6875 18.625 6.1875 19.9375C6.5 20.8125 7.1875 21.5 8.0625 21.8125C9.375 22.375 12.5 22.25 14 22.25C15.4375 22.25 18.5625 22.375 19.875 21.8125C20.75 21.5 21.4375 20.8125 21.75 19.9375C22.3125 18.625 22.1875 15.5 22.1875 14C22.1875 12.5625 22.3125 9.4375 21.75 8.125ZM14 19.125C11.125 19.125 8.875 16.875 8.875 14C8.875 11.1875 11.125 8.875 14 8.875C16.8125 8.875 19.125 11.1875 19.125 14V14.0625C19.125 16.875 16.8125 19.1875 14 19.1875V19.125ZM19.3125 9.875C18.625 9.875 18.125 9.375 18.125 8.6875C18.125 8 18.625 7.5 19.3125 7.5C19.9375 7.5 20.5 8 20.5 8.6875C20.5 9.375 19.9375 9.875 19.3125 9.875ZM25 0H3C1.3125 0 0 1.375 0 3V25C0 26.6875 1.3125 28 3 28H25C26.625 28 28 26.6875 28 25V3C28 1.375 26.625 0 25 0ZM23.875 18.125C23.8125 19.75 23.4375 21.1875 22.3125 22.3125C21.125 23.5 19.6875 23.875 18.125 23.9375C16.4375 24.0625 11.5 24.0625 9.875 23.9375C8.25 23.875 6.8125 23.5 5.6875 22.3125C4.5 21.1875 4.125 19.75 4.0625 18.125C3.9375 16.5 3.9375 11.5625 4.0625 9.875C4.125 8.3125 4.5 6.875 5.6875 5.6875C6.8125 4.5625 8.25 4.1875 9.875 4.125C11.5 4 16.4375 4 18.125 4.125C19.6875 4.1875 21.125 4.5625 22.3125 5.75C23.4375 6.875 23.8125 8.3125 23.875 9.9375C24 11.5625 24 16.5 23.875 18.125Z" fill="#748F67"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</html>

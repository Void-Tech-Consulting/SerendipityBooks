<?php 
function import_products() {
    $ftp_server = 'ftp.addicosolutions.com';
    $ftp_user_name = 'serendipity';
    $ftp_user_pass = '$3r3nd1p1ty509';

    // set up basic ssl connection
    $conn_id = ftp_ssl_connect($ftp_server);

    // login with username and password
    $login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

    if (!$login_result) {
        // PHP will already have raised an E_WARNING level message in this case
        die("can't login");
    }

    echo ftp_pwd($conn_id); // /

    // close the ssl connection
    ftp_close($conn_id);
}

add_action('wp_enqueue_scripts', 'import_products');

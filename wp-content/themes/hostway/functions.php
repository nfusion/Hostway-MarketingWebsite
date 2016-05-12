<?php

include 'inc/init.php';

//show_admin_bar(false);

function ic_register_sizes() {

}

add_action( 'after_setup_theme', 'ic_register_sizes' );
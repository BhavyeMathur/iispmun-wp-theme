<?php

function register_menus() {
    register_nav_menus(
        array(
            "header" => ( "Header Menu" ),
            "footer" => ( "Footer Menu" )
        )
    );
}

add_action( "init", "register_menus");

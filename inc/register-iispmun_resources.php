<?php

function register_iispmun_resources()
{
    register_post_type( "iispmun_resources", array(
            "labels" => array(
                "name" => "Resources",
                "singular_name" => "Resource"
            ),

            "description" => "All the resources for IISP MUN",
            "menu_icon" => "dashicons-media-document",

            "supports" => array( "custom-fields", "title", ),
            "rewrite" => array( "slug" => "resource" ),

            "public" => true,
            "has_archive" => false,
            "show_in_rest" => false,
        )
    );
}

add_action( "init", "register_iispmun_resources");

<?php

function register_iispmun_committees()
{
    register_post_type("iispmun_committees", array(
            "labels" => array(
                "name" => "Committees",
                "singular_name" => "Committee"
            ),

            "description" => "All the committees at IISP MUN",
            "menu_icon" => "dashicons-admin-site",

            "supports" => array("custom-fields", "title", "thumbnail", "editor"),
            "rewrite" => array("slug" => "committees"),

            "public" => true,
            "has_archive" => true,
            "show_in_rest" => true
        )
    );
}

add_action("init", "register_iispmun_committees");

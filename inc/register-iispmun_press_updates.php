<?php

function register_iispmun_press_update()
{
    register_post_type("iispmun_press_update", array(
            "label" => "Press Updates",
            "labels" => array(
                "name" => "Press Updates",
                "singular_name" => "Press Update",
                "add_new_item" => "Add New Update",
                "edit_item" => "Edit Press Update",
                "new_item" => "New Press Update",
                "view_item" => "View Press Update",
                "view_items" => "View Press Updates",
                "search_items" => "Search Press Updates",
                "not_found" => "No press updates found",
                "not_found_in_trash" => "No press updates found in Trash",
                "parent_item_colon" => "Parent Press Update",
                "all_items" => "All Press Updates",
                "archives" => "Press Updates Archive",
                "attributes" => "Press Update Attributes",
                "insert_into_item" => "\Insert into Press Update",
                "uploaded_to_this_item" => "Uploaded to this Press Update",
                "filter_items_list" => "Filter Press Updates",
                "items_list_navigation" => "Press Updates navigation",
                "items_list" => "Press Updates",
                "item_published" => "Update published",
                "item_published_privately" => "Update published privately",
                "item_reverted_to_draft" => "Update reverted to draft",
                "item_scheduled" => "Update scheduled",
                "item_link" => "Press Update Link",
                "item_link_description" => "A link to an update"
            ),

            "description" => "Updates from reporters & press at IISP MUN",
            "menu_icon" => "dashicons-video-alt",

            "supports" => array("custom-fields", "title", "thumbnail", "editor", "author"),
            "taxonomies" => array("category"),
            "rewrite" => array("slug" => "press"),

            "public" => true,
            "hierarchical" => false,
            "exclude_from_search" => true,
            "has_archive" => true,
            "delete_with_user" => false,

            "show_ui" => true,
            "show_in_menu" => true,
            "show_in_rest" => true,
            "show_in_nav_menus" => false,
        )
    );
}

add_action("init", "register_iispmun_press_update");

function iispmun_press_updates_allowed_block_types( $allowed_blocks, $editor_context ) {
    if( $editor_context->post->post_type === "iispmun_press_update") {
        return array(
            "core/paragraph",
            "core/heading",
            "core/quote",
            "core/list",
            "genesis-custom-blocks/iispmun-live-quote"
        );
    }
}

add_filter( "allowed_block_types_all", "iispmun_press_updates_allowed_block_types", 25, 2 );

<?php

add_filter(
    "excerpt_length",
    function ( $length ) {
        return 70;
    },
    500
);

<?php

function main($page)
{
    $data = [];
    switch ($page) {
        case 'index':
            render($page);
            break;


        case 'posts':
            $posts = getAllPosts();

            render($page, [
                'posts' => $posts
            ]);
            break;
    }

}
<?php

function main($page, $id)
{

    switch ($page) {
        case 'index':
            render($page);
            break;

        case 'post':
            $post = getPost($id);

            render('posts/show', [
                'post' => $post
            ]);
            break;

        case 'posts':
            $posts = getAllPosts();

            render('posts/index', [
                'posts' => $posts
            ]);
            break;
    }

}
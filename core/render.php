<?php

//render('posts');
function render($page, $data = [])
{
    extract($data);

    $fileName = __DIR__ . '/../views/' . $page . '.php';

    if (file_exists($fileName)) {
        include $fileName;
    } else {
        include __DIR__ . '/../views/404.html';
    }


}
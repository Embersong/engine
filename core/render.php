<?php

//render('posts');
function render($page)
{
    $fileName = __DIR__ . '/../views/' . $page . '.php';

    include $fileName;
}
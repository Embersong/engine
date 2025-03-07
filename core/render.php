<?php


function render($page, $data = [])
{
    echo renderTemplate('layouts/index', [
        'content' => renderTemplate($page, $data)
    ]);
}

function renderTemplate($page, $data = [])
{
    ob_start();

    extract($data);

    $fileName = __DIR__ . '/../views/' . $page . '.php';

    if (file_exists($fileName)) {
        include $fileName;
    } else {
        include __DIR__ . '/../views/404.html';
    }

    return ob_get_clean();

}
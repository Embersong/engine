<?php
//include __DIR__ . '/core/functions.php';
include __DIR__ . '/../vendor/autoload.php';


$url_array = explode('/', $_SERVER['REQUEST_URI']);

$page = $url_array[1] ?: 'index';

render($page);
<?php

function getAllPosts()
{
    $statement = $db->query('SELECT * from posts ORDER BY id DESC');
    $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $posts;

}
<?php

function getAllPosts()
{
    $statement = getDb()->query('SELECT * from posts ORDER BY id DESC');
    $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $posts;

}